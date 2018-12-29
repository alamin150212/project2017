<?php

include_once '/../util/class.util.php';
include_once '/../dao/class.insertCoursedao.php';


/*
	Discipline Business Object 
*/
Class InsertCourseBAO{

	private $_DB;
	private $_InsertCourseDAO;

	function InsertCourseBAO(){

		$this->_InsertCourseDAO = new InsertCourseDAO();

	}

	public function InsertCourse($InsertCourse){
		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->InsertCourse($InsertCourse);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.InsertCourse()");
		return $Result;
	}
	public function InsertTeacher($Teacher){
		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->InsertTeacher($Teacher);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.InsertTeacher()");
		return $Result;
	}

	public function getAllCourseType(){
		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->getAllCourseType();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getAllCourseType()");		
		return $Result;
	}

	public function getAllDiscipline(){

		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->getAllDiscipline();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getAllDiscipline()");		

		return $Result;
	}

	public function getAllCourses(){

		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->getAllCourses();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getAllCourses()");		

		return $Result;
	}

	public function getNameCourseTypeID($ctyp){

		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->getNameCourseTypeID($ctyp);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getNameCourseTypeID()");		

		return $Result;
	}

	public function getNameDisciplineID($Discipline){

		$Result = new Result();	
		$Result = $this->_InsertCourseDAO->getNameDisciplineID($Discipline);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getNameDisciplineID()");		

		return $Result;
	}

}

?>