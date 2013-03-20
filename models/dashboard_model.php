<?php

class Dashboard_Model extends Model{
    
    function __construct() {
        parent::__construct();       
    }
    
    function ajaxFunctionInsert(){        
        $text = $_POST['text'];
        $sth = $this->db->prepare("INSERT INTO data (text) VALUES (:text)");
        $sth->execute(Array(":text" => $text));
        $data = Array("text" => $text, "id" => $this->db->lastInsertId());
        echo json_encode($data);
    }
    
    function ajaxFuntionGet(){        
        $sth = $this->db->prepare("SELECT * FROM data");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
    }
    
    function ajaxDelete(){
        $id = $_POST['id'];
        $sth = $this->db->prepare("DELETE FROM data WHERE id = '".$id."'");
        $sth->execute();
        //echo 1;
    }
}
