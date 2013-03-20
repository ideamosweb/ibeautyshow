<?php

class Login_Model extends Model{
    
    public function __construct() {
        parent::__construct();       
    }
    
    public function doLogin($user, $password){
        $password = Hash::create('md5', $password, KEY_PASSWORD);
        $sth = $this->db->prepare('SELECT id, role FROM users WHERE username = :username AND password = :password');
        $sth->execute(array(':username' => $user, ':password' => $password));
        
        $data = $sth->fetch();       
        
        $count = $sth->rowCount();
        if($count > 0){
            //login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);            
            return true;
        }else{
            //error            
            return false;
        }
    }
}
