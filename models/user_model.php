<?php

class User_Model extends Model {

    public function __construct() {
        parent::__construct();        
    }
    
    public function userList(){
        $sth = $this->db->prepare('SELECT * FROM users');
        $sth->setFetchMode(PDO::FETCH_ASSOC);        
        $sth->execute();
        echo json_encode($sth->fetchAll());
    }
    
    public function userSingleList($id){
        $sth = $this->db->prepare('SELECT id, username, password, role FROM users WHERE id = :id');
        $sth->execute(Array(':id' => $id));
        return $sth->fetch();
    }
    
    public function createUser(){                
        $pass = Hash::create('md5', $_POST['pass'], KEY_PASSWORD);        
        $data = Array(
            'username' => $_POST['user'], 
            'password' => $pass, 
            'role' => $_POST['role']
            );
        $insert = $this->db->insert('users', $data); 
        
        if ($insert){
            return true;            
        }else{
            return false;
        }                
    }
    
    public function editUser($id){
        $password = Hash::create('md5', $_POST['pass'], KEY_PASSWORD);
        $data = Array(
            'username' => $_POST['user'],
            'password' => $password,
            'role' => $_POST['role']            
        );
        
        $where = Array(
            'id' => $id
        );
        
        $this->db->update('users', $data, $where);        
    }
    
    public function deleteUser($id){
        $idData = Array(
            'id' => $id
        );
        $this->db->delete('users', $idData);
        header('location:'.URL.'user');
    }

}
