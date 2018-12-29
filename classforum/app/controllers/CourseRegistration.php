<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/27/2017
 * Time: 5:03 PM
 */
class CourseRegistration extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function Index(){
        self::courseRegistration();
    }

    public function courseRegistration($term = 1, $syllName = 1){
        if(isset($_POST['ddlYearTerm']) && isset($_POST['ddlSyllabus'])){
            $term = $_POST['ddlYearTerm'];
            $syllName = $_POST['ddlSyllabus'];
            var_dump($term, $syllName);
        }

        $data = ['pageName' => 'Course Registration'];
        $this->load->view('header', $data);

        $loadDDL = $this->load->model('LoadDropDown');
        array_push($data,$loadDDL->getAllYearTerm());

        $syllabusModel = $this->load->model('SyllabusModel');
        array_push($data, $syllabusModel->ddlSyllabusName());

        $courseList = $syllabusModel->GetCourseByYearTermSyllabusName($term, $syllName);
        array_push($data, $courseList);

        $this->load->view('courseregistration',$data);
        $this->load->view('footer');
    }
}