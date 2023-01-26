<?php

class oopCrud{
    private $host="localhost";
    private $user="root";
    private $db="cron_php";
    private $pass="";
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
    }

    public function insertData($name,$time){
        $sql = "INSERT INTO emtry SET name=:name,time=:time";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':time'=>$time));
        return true;
    }

}

?>