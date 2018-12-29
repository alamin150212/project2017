<?php

include_once UTILITY.'class.util.php';
include_once MODULES_ROUTINE.'dao/class.routineManageDAO.php';



Class RoutineManageBAO{

    private $_RoutineManageDAO;

    public function __construct(){

        $this->_RoutineManageDAO = new RoutineManageDAO();

    }


    public function getAllYears(){

        $Result = $this->_RoutineManageDAO->getAllYears();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllYears()");

        return $Result;
    }

    public function getAllDay(){

        $Result = $this->_RoutineManageDAO->getAllDay();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllDay()");

        return $Result;
    }

    public function getAllTerms(){

        $Result = $this->_RoutineManageDAO->getAllTerms();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllTerms()");

        return $Result;


    }

    public function getAllCourse(){

        $Result = $this->_RoutineManageDAO->getAllCourse();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllCourse()");

        return $Result;


    }

    public function getAllTeachers(){

        $Result = $this->_RoutineManageDAO->getAllTeachers();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllTeachers()");

        return $Result;
    }

    public function getAllTimeSlot(){

        $Result = $this->_RoutineManageDAO->getAllTimeSlot();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllTimeSlot()");

        return $Result;

    }

    public function createRoutine($Routine){

        $Result = $this->_RoutineManageDAO->createRoutine($Routine);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.createRoutine()");

        return $Result;

    }

    public function createRoutineAnotherUser($Routine){

        $Result = $this->_RoutineManageDAO->createRoutineAnotherUser($Routine);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.createRoutineAnotherUser()");

        return $Result;

    }

    public function deleteRoutine($Routine){

        $Result = $this->_RoutineManageDAO->deleteRoutine($Routine);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.deleteRoutine()");

        return $Result;

    }
    public function updateRoutine($Routine){

        $Result = $this->_RoutineManageDAO->updateRoutine($Routine);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.deleteRoutine()");

        return $Result;

    }

    public function getAllRoutine(){

        $Result = $this->_RoutineManageDAO->getAllRoutine();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineManageDAO.getAllRoutine()");

        return $Result;

    }

    public function getYearName($Year){
        $Result=$this->_RoutineManageDAO->getYearName($Year);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getDayName($Day){
        $Result=$this->_RoutineManageDAO->getDayName($Day);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getTermName($Term){
        $Result=$this->_RoutineManageDAO->getTermName($Term);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getCourseNo($Course){
        $Result=$this->_RoutineManageDAO->getCourseNo($Course);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getUserName($User){
        $Result=$this->_RoutineManageDAO->getUserName($User);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getTimeSlot($Time){
        $Result=$this->_RoutineManageDAO->getTimeSlot($Time);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getRoutineById($Routine){
        $Result=$this->_RoutineManageDAO->getRoutineById($Routine);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

}


?>