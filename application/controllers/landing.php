<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends Codewiz_Controller {

    public function init()
    {
        $this   ->addRemoteCss( "//yui.yahooapis.com/pure/0.2.0/pure-min.css" )
                ->addRemoteCss( "//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" )
                ->addRemoteCss( HOST_URL . 'asset/css/core.css' );
    }
    public function index()
    {
        $data = array();
        if ( ( $this->session->userdata('userName') != "" ) ) {
            $data['auth']= true;
        } else {
            $data['auth'] = false;
            
            $loginForm = new Pure_Form();
            $loginForm->setAction('api/login');
            $loginForm->addElement_Input( 'email' , array(
                        'type'        => 'email',
                        'class'       => 'pure-input-1-3 pure-input-rounded',
                        'label'       => 'Email',
                        'placeholder' => 'Email',
                        'required'    => 'required',
                    ))->addElement_Input( 'password' , array(
                        'type'        => 'password',
                        'class'       => 'pure-input-1-3 pure-input-rounded',
                        'label'       => 'Password',
                        'placeholder' => 'Password',
                        'required'    => 'required',
                    ))->addElement_Input( 'remember' , array(
                        'type'        => 'checkbox',
                        'label'       => 'Remember me',
                        'value'       => true,
                        'checked'     => 'checked',
                    ))->addElement_Button( 'reset' , array(
                        'type'        => 'reset',
                        'class'       => 'pure-button pure-button-secondary',
                        'content'     => '<i class="icon-refresh"></i> Clear',
                    ))->addElement_Button( 'submit' , array(
                        'type'        => 'submit',
                        'class'       => 'pure-button pure-button-primary',
                        'content'     => '<i class="icon-circle-arrow-right"></i> Sign In',
                    ))->addElementsToGroup( 'loginGroup' , array( 
                        "email" , "password" , "remember"
                    ))->addControlsToGroup( 'loginGroup' , array( 
                        "reset" , "submit"
                    ))->addGroupsToFieldset( 'login-form' , 'Please enter email and password to login' , array(
                        "loginGroup"
                    ));
            
            $data['loginForm'] = $loginForm->display(array(
                    'class' => 'pure-form pure-form-aligned', 
                    'id' => 'login-form',
                ));
            
        }
        $this->setDataLayout( array( 'title' => "CI Testing" ) )
            ->setDataView( $data )
            ->dispatch();
    }
}

/* End of file landing.php */
/* Location: ./application/controllers/landing.php */