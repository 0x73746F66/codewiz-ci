<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require( APPPATH . 'libraries/REST_Controller.php' );

class Api extends REST_Controller
{
    function user_get()  
    {
        $user = $this->doctrine->em->find( 'Entities\User' , (int)$this->get('id') );
        
        $this->response( var_dump($user) , 200 );
    }
  
    function user_put()  
    {
        if ( !$this->get( 'id' ) === false )
            $user = $this->doctrine->em->find( 'Entities\User' , $this->get('id') );
        else $this->response( array( "error" => "id not defined" ) , 401 );
        if ( !$this->get( 'firstName' ) === false ) $user->setFirstName( $this->get( 'firstName' ) );
        if ( !$this->get( 'lastName' ) === false ) $user->setLastName( $this->get( 'lastName' ) );
        if ( !$this->get( 'password' ) === false ) $user->setPassword( md5(  $this->get( 'password' )  ) );
        if ( !$this->get( 'email' ) === false ) $user->setEmail( $this->get( 'email' ) );
        if ( !$this->get( 'about' ) === false ) $user->setAbout( $this->get( 'about' ) );
        if ( !$this->get( 'active' ) === false ) $user->setActive( $this->get( 'active' ) );
        
        //$user->setModified( new \DateTime() );
        //$user->setModifyUser( $this->doctrine->em->find( 'Entities\User' , 1 ) );
        $this->doctrine->em->persist( $user );
        $this->doctrine->em->flush();
        
        $this->response( array( "updated" => $user->getId() ) , 200 );
    }
  
    function user_post()  
    {
        $user = new Entities\User;
        $user->setFirstName( $this->post( 'firstName' ) );
        $user->setLastName( $this->post( 'lastName' ) );
        $user->setPassword( md5(  $this->post( 'password' )  ) );
        $user->setEmail( $this->post( 'email' ) );
        $user->setAbout( $this->post( 'about' ) );
        $user->setActive( 0 );
        $user->setCreateUser( $this->doctrine->em->find( 'Entities\User' , 1 ) );

        $this->response( $this->post( 'about' ) , 200 );
        
        $this->doctrine->em->persist( $user );
        $this->doctrine->em->flush();
        
        $this->response( array( "inserted" => $user->getId() ) , 200 );
    }
  
    function user_delete()  
    {
        $data = array('returned: '. $this->get('id'));
        $this->response($data);
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */