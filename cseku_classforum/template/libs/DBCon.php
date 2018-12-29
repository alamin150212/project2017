<?php

class DBCon{
    protected $db = array();
    public function __construct(){
        $dsn = 'mysql:dbname=classforum; host=localhost';
        $user = 'root';
        $pass = '';
        $this->db = new Database($dsn,$user,$pass);
    }

}