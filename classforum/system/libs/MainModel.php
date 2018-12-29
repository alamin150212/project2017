<?php

class MainModel{
    protected $db = array();
    public function __construct(){
        $dsn = 'mysql:dbname=test1; host=localhost';
        $user = 'root';
        $pass = '';
        $this->db = new Database($dsn,$user,$pass);
    }

}