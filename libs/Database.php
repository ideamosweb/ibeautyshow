<?php

class Database extends PDO {

    public function __construct($db_type, $db_host, $db_name, $db_user, $db_pass) {        
        parent::__construct($db_type.":host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);
    }
    
    /*insert
     * @param string $table A name of table to insert
     * @param string $data The data to insert on table 
     */
    
    public function insert($table, $data){
        ksort($data);
        $fieldsNames = implode('`, `', array_keys($data));
        $fieldsValues = implode(', :', array_keys($data));
        
        $sth = $this->prepare('INSERT INTO ' . $table . '(`' . $fieldsNames . '`) VALUES (:' . $fieldsValues . ')');
        
        $dataExecute = Array();
        foreach ($data as $key => $value) {
            $dataExecute[':'.$key] = $value;
        }        
        $sth->execute($dataExecute);
        
        $count = $sth->rowCount();
        if ($count > 0){
            return true;            
        }else{
            return false;
        }      
    }
    
    
    /*update
     * @param string $table A name of table to insert
     * @param string $data The data to insert on table 
     * @param string $where The query of WHERE update
     */
    
    public function update($table, $data, $where){
        ksort($data);
        $fieldsNames = array_keys($data);
        $fieldsValues = implode(', :', array_keys($data));
        
        $fieldString = "";
        foreach ($fieldsNames as $key){
            $fieldString .= '`'. $key . '`=:' .$key . ',';
        }
        $fieldString = rtrim($fieldString, ', ');
        
        $whereData = "";
        foreach ($where as $key => $value) {
            $whereData .= '`'. $key . '` = ' .$value;
        }        
        
        $sth = $this->prepare('UPDATE ' . $table . ' SET '. $fieldString .' WHERE '. $whereData) or die(mysql_error());
        
        $dataExecute = Array();
        foreach ($data as $key => $value){
            $dataExecute[':'.$key] = $value;
        }       
        
        $sth->execute($dataExecute);
        
    }
    
    public function delete($table, $id){        
        $whereData = "";
        $dataExecute = Array();
        foreach ($id as $key => $value){
            $whereData = '`' . $key . '` = :' .$key;
            $dataExecute[':'.$key] = $value; 
        }
        
        $sth = $this->prepare('DELETE FROM '. $table . ' WHERE ' . $whereData);
        $sth->execute($dataExecute);
    }

}