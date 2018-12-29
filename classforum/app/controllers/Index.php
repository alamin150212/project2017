<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
//        Session::checkSession();
    }

    public function Index(){
        $this->home();
    }

    public function home(){
        $data = ['pageName' => 'home'];
        $this->load->view("header", $data);
        $this->load->view("home");
        $this->load->view("footer");
    }



    public function result(){
        $data = ['pageName' => 'Result'];
        $this->load->view("header", $data);
        $this->load->view("result");
        $this->load->view("footer");
    }

}