<?php

include_once '/../util/class.util.php';
include_once '/../dao/class.generateroutinedao.php';


/*
	Discipline Business Object 
*/
Class GenerateRoutineBAO{

	private $_DB;
	private $_GenerateRoutineDAO;

	function GenerateRoutineBAO(){

		$this->_GenerateRoutineDAO = new GenerateRoutineDAO();

	}

	public function getNameDayID($DayID){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getNameDayID($DayID);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getNameDayID()");		

		return $Result;

	
	}
	public function getAllCourseType(){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllCourseType();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllCourseType()");		

		return $Result;

	
	}
	public function getNameTimeID($TimeID){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getNameTimeID($TimeID);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getNameTimeID()");		

		return $Result;

	
	}

	public function getNameCourseID($CourseID){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getNameCourseID($CourseID);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getNameCourseID()");		

		return $Result;

	
	}

	public function getNameTermID(){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getNameTermID();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getNameTermID()");		

		return $Result;

	
	}

	public function getAllTerms(){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllTerms();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllTerms()");		

		return $Result;

	
	}
	
	public function getAllCourseNos(){
		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllCourseNos();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllCourseNos()");		

		return $Result;
	}

	public function getAllRoutine(){
		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllRoutine();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllRoutine()");		

		return $Result;
	}

	public function getAllRoutineTime(){
		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllRoutineTime();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllRoutineTime()");
		return $Result;
	}

	public function createGenerateRoutine($GenerateRoutine){
		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->createGenerateRoutine($GenerateRoutine);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.createGenerateRoutine()");		
		return $Result;
	}

	public function teacherCheck($GenerateRoutine){
		return $this->_GenerateRoutineDAO->teacherCheck($GenerateRoutine);
	}

	public function termCheck($GenerateRoutine){
		return $this->_GenerateRoutineDAO->termCheck($GenerateRoutine);
	}

	public function getAllDay(){
		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllDay();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllDay()");
		return $Result;
	 }

	 public function getAllTeacher(){
	 	$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllTeacher();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getAllTeacher()");
		return $Result;
	 }

	 public function getRoutineTime(){
	 	$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getRoutineTime();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getRoutineTime()");
		return $Result;
	 }

	public function getNameTeacherID($TeacherID){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getNameTeacherID($TeacherID);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in GenerateRoutineDAO.getNameTeacherID()");		

		return $Result;

	
	}
	public function getAllDiscipline(){

		$Result = new Result();	
		$Result = $this->_GenerateRoutineDAO->getAllDiscipline();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in InsertCourseDAO.getAllDiscipline()");		

		return $Result;
	}
	

}

?>