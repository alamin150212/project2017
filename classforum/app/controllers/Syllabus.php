<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/21/2017
 * Time: 9:15 AM
 */
class Syllabus extends MainController{
    public function __construct(){
        parent::__construct();
        Session::checkSession();
    }

    public function Index(){
        self::syllabus();
    }

    public function syllabus(){

        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');

        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();
        $tableData = $syllabusModel->getSubjectByTermName(1 , 1);

        array_push($data, $term);
        array_push($data, $syllabusName);
        array_push($data, $tableData);

        $this->load->view("syllabus/syllabus_current", $data);
        $this->load->view("footer");

    }

    public function syllabusUpdate(){

        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');
        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();
        array_push($data, $term);
        array_push($data, $syllabusName);
        $this->load->view("syllabus/syllabus_update", $data);
        $this->load->view("footer");
    }

    public function search(){
        $yearTerm = $_POST['ddlYearTerm'];
        $syllabus = $_POST['ddlSyllabusName'];

        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');

        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();
        $tableData = $syllabusModel->getSubjectByTermName($yearTerm, $syllabus);

        array_push($data, $term);
        array_push($data, $syllabusName);
        array_push($data, $tableData);

        $this->load->view("syllabus/syllabus_current", $data);
        $this->load->view("footer");

    }


}