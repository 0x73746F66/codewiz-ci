<?php

class Pure_Form {
    
    private $_action;
    private $_formHTML = "";
    private $_formElements = array();
    private $_formGroups = array();
    private $_formFieldSets = array();

    public function __construct() {
        $this->init();
        return $this;
    }
    
    public function init()
    {
        
    }
    
    public function display( array $attributes , $action = null )
    {
        //var_dump($this);exit;
        if ( is_string( $action ) ) {
            $this->_action = $action;
        } elseif ( is_array( $action ) ) {
            $this->_action = $action['controller'] . "/" . $action['method'];
        }
        is_null( $this->_action ) ?
        $this->_formHTML .= form_open() : $this->_formHTML .= form_open( $this->_action , $attributes ) ;
        
        
        
        if ( count( $this->_formFieldSets ) > 0 ) {
            foreach ( $this->_formFieldSets as $fieldSetName => $fieldSetData ) {
                $this->_formHTML .= form_fieldset($fieldSetData['value']);
                if ( array_key_exists( 'groups' , $fieldSetData ) ) {
                    foreach ( $fieldSetData['groups'] as $groupName ) {
                        $collection1 = $collection2 = array();
                        foreach ( $this->_formGroups[$groupName]['elems'] as $groupElem ) {
                            $collection1[] = $this->_formElements[$groupElem];
                            unset( $this->_formElements[$groupElem] );
                        }
                        if ( count( $collection1 ) > 0 )
                        $this->_formHTML .= $this->pureControlGroup( $collection1 );
                        
                        foreach ( $this->_formGroups[$groupName]['controls'] as $groupControl ) {
                            $collection2[] = $this->_formElements[$groupControl];
                            unset( $this->_formElements[$groupControl] );
                        }
                        if ( count( $collection2 ) > 0 )
                        $this->_formHTML .= $this->pureControls( $collection2 );
                        
                        unset( $this->_formGroups[$groupName] );
                    }
                }
                if ( array_key_exists( 'elems' , $fieldSetData ) ) {
                    foreach ( $fieldSetData['elems'] as $elemName ) {
                        $this->_formElements[$elemName];
                    }
                }
                $this->_formHTML .= form_fieldset_close();
            }
        }
        if ( count( $this->_formGroups ) > 0 ) {
            foreach ( $this->_formGroups as $groupName => $groupData ) {
                $collection1 = $collection2 = array();
                foreach ( $groupData['elems'] as $groupElem ) {
                    $collection1[] = $this->_formElements[$groupElem];
                    unset( $this->_formElements[$groupElem] );
                }
                if ( count( $collection1 ) > 0 )
                $this->_formHTML .= $this->pureControlGroup( $collection1 );

                foreach ( $groupData['controls'] as $groupControl ) {
                    $collection2[] = $this->_formElements[$groupControl];
                    unset( $this->_formElements[$groupControl] );
                }
                if ( count( $collection2 ) > 0 )
                $this->_formHTML .= $this->pureControls( $collection2 );

                unset( $this->_formGroups[$groupName] );
            }
        }
        if ( count( $this->_formElements ) > 0 ) {
            foreach ( $this->_formElements as $elemName => $elemHtml ) {
                $this->_formHTML .= $elemHtml;
                unset( $this->_formElements[$elemName] );
            }
        }
        
//        if ( count( $this->_formGroups ) > 0 ) {
//            $html = '';
//            foreach ( $this->_formGroups as $groupName => $elem ) { //this is broken here
//                $useFieldSet = false;
//                if ( count( $this->_formFieldSets ) > 0 ) {
//                    foreach ( $this->_formFieldSets as $fieldSetName => $fieldSet ) {
//                        if ( array_key_exists( $groupName , $fieldSet['groups'] ) ) {
//                            $useFieldSet = true;
//                            $useFieldSetName = $fieldSetName;
//                        }
//                    }
//                } else {
//                    $html .= $elem;
//                }
//                if ( $useFieldSet === true ) $this->_formHTML .= form_fieldset($useFieldSetName);
//                $this->_formHTML .= $useFieldSet === true ? $this->_formFieldSets[$useFieldSetName]['content'] : $html;
//                if ( $useFieldSet === true ) $this->_formHTML .= form_fieldset_close();
//            }
//        } else {
//            foreach ( $this->_formElements as $elem ) {
//                $this->_formHTML .= $elem;
//            }
//        }
        
        $this->_formHTML .= form_close();
        
        return $this->_formHTML;
    }
    
    public function addElement_Input( $name , array $attribs = array() )
    {
        if ( array_key_exists( 'id' ,$attribs ) ) unset( $attribs['id'] );
        if ( !array_key_exists( 'type' , $attribs ) ) $attribs['type'] = 'text';
        $attribs['id'] = $name;
        $attribs['name'] = $name;
        
        if ( array_key_exists( 'label' , $attribs ) ) {
            $labelDisplay = $attribs['label'];
            unset( $attribs['label'] );
            $this->_formElements[$name] = form_label( $labelDisplay , $name ) . form_input( $attribs );
        } else {
            $this->_formElements[$name] = form_input( $attribs );
        }
        
        return $this;
    }
    
    public function addElement_Button( $name , array $attribs = array() )
    {
        if ( array_key_exists( 'id' ,$attribs ) ) unset( $attribs['id'] );
        if ( !array_key_exists( 'type' , $attribs ) ) $attribs['type'] = 'button';
        $attribs['id'] = $name;
        $attribs['name'] = $name;
        
        $this->_formElements[$name] = form_button( $attribs );
        
        return $this;
    }

    public function addElementsToGroup( $name , array $elems = array() )
    {
//        $collection = array();
//        if ( count( $elems ) > 0 )
//        foreach ( $elems as $elemName ) {
//            if ( array_key_exists( $elemName , $this->_formElements ) )
//            $collection[] = $this->_formElements[$elemName];
//        }
//        
//        $this->_formGroups[$name] = $this->pureControlGroup( $collection );
        if ( count( $elems ) > 0 )
        foreach ( $elems as $elemName ) {
            if ( array_key_exists( $elemName , $this->_formElements ) ) {
                $this->_formGroups[$name]['elems'][] = $elemName;
            }
        }
        
        return $this;
    }

    public function addControlsToGroup( $name , array $elems = array() )
    {
//        $collection = array();
//        if ( count( $elems ) > 0 )
//        foreach ( $elems as $elemName ) {
//            if ( array_key_exists( $elemName , $this->_formElements ) )
//            $collection[] = $this->_formElements[$elemName];
//        }
//        
//        $this->_formGroups[$name] = $this->pureControls( $collection );
        if ( count( $elems ) > 0 )
        foreach ( $elems as $elemName ) {
            if ( array_key_exists( $elemName , $this->_formElements ) ) {
                $this->_formGroups[$name]['controls'][] = $elemName;
            }
        }
        
        return $this;
    }

    public function addGroupsToFieldset( $name , $value , array $groups = array() )
    {
        if ( !array_key_exists( $name , $this->_formFieldSets ) ) {
            $this->_formFieldSets[$name] = array( "value" => $value , "groups" => array() );
        } else {
            $this->_formFieldSets[$name]["value"] = $value;
        }
        if ( count( $groups ) > 0 )
        foreach ( $groups as $groupName ) {
            if ( array_key_exists( $groupName , $this->_formGroups ) ) {
                $this->_formFieldSets[$name]["groups"][] = $groupName;
            }
        }
        
        return $this;
    }

    public function addElemsToFieldset( $name , $value , array $elems = array() )
    {
        if ( !array_key_exists( $name , $this->_formFieldSets ) ) {
            $this->_formFieldSets[$name] = array( "value" => $value , "elems" => array() );
        } else {
            $this->_formFieldSets[$name]["value"] = $value;
        }
        if ( count( $elems ) > 0 )
        foreach ( $elems as $groupName ) {
            if ( array_key_exists( $groupName , $this->_formGroups ) ) {
                $this->_formFieldSets[$name]["elems"][] = $groupName;
            }
        }
        
        return $this;
    }

    public function setAction()
    {
        if ( func_num_args() == 1 ) {
            $uri = func_get_args(1);
            $this->_action = is_string( $uri[0] ) ? $uri[0] : null;
        } elseif ( func_num_args() == 2 ) {
            exit('2');
            list($controller, $method) = func_get_args();
            $this->_action = is_string( $controller ) && is_string( $method ) ?
            $controller . "/" . $method : null;
        }
        
        return $this;
    }
    
    private function pureControlGroup( array $elems , $class = "" )
    {
        $group = "";
        foreach ( $elems as $elem ) {
            $group .= '<div class="pure-control-group '.$class.'">';
            $group .= $elem;
            $group .= '</div>';
        }
        return $group;
    }
    
    private function pureControls( array $elems , $class = "" )
    {
        $group = '<div class="pure-controls '.$class.'">';
        foreach ( $elems as $elem )
        $group .= $elem;
        $group .= '</div>';
        return $group;
    }
}
