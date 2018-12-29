<?php

include_once UTILITY.'class.util.php';
include_once MODULES_ROUTINE.'dao/class.routineDAO.php';



Class RoutineBAO{

    private $_RoutineDAO;

    public function __construct(){

        $this->_RoutineDAO = new RoutineDAO();

    }

    public function getCountUser($day,$time,$userId){

        $Result = $this->_RoutineDAO->getCountUser($day,$time,$userId);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineDAO.getCountUser()");

        return $Result;

    }

    public function getCountAnotherUser($day,$time,$userId){

        $Result = $this->_RoutineDAO->getCountAnotherUser($day,$time,$userId);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineDAO.getCountAnotherUser()");

        return $Result;

    }


    

    public function getAllRoutine(){

        $Result = $this->_RoutineDAO->getAllRoutine();

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in RoutineDAO.getAllRoutine()");

        return $Result;

    }

    public function getYearName($Year){
        $Result=$this->_RoutineDAO->getYearName($Year);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getTermName($Term){
        $Result=$this->_RoutineDAO->getTermName($Term);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getCourseNo($Course){
        $Result=$this->_RoutineDAO->getCourseNo($Course);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getUserName($User){
        $Result=$this->_RoutineDAO->getUserName($User);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getRoutinedayName($Routine){
        $Result=$this->_RoutineDAO->getRoutinedayName($Routine);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getTimeSlot($Time){
        $Result=$this->_RoutineDAO->getTimeSlot($Time);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getConflictStatus($Routine){
        $Result=$this->_RoutineDAO->getConflictStatus($Routine);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

    public function getAllRoutineByDayYearTerm($Day,$Year,$Term){
        $Result=$this->_RoutineDAO->getAllRoutineByDayYearTerm($Day,$Year,$Term);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

}


?>