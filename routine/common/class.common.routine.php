<?php
class Year{
    private $_yearId;
    private $_yearName;

    //ID
    public function getYearId(){
        return $this->_yearId;
    }

    public function setYearId($yearId){
        $this->_yearId=$yearId;
    }

    //Name
    public function getYearName(){
        return $this->_yearName;
    }

    public function setYearName($yearName){
        $this->_yearName=$yearName;
    }

}

class Term{
    private $_termId;
    private $_termName;

    //ID
    public function getTermId(){
        return $this->_termId;
    }

    public function setTermId($termId){
        $this->_termId=$termId;
    }

    //Name
    public function getTermName(){
        return $this->_termName;
    }

    public function setTermName($termName){
        $this->_termName=$termName;
    }

}

class Course{
    private $_courseId;
    private $_courseNo;
    private $_courseTitle;
    private $_courseCredit;
    private $_courseTypeId;
    private $_courseDisciplineId;
    private $_courseIsDeleted;

    //ID
    public function getCourseId(){
        return $this->_courseId;
    }

    public function setCourseId($courseId){
        $this->_courseId=$courseId;
    }

    //CourseNo
    public function getCourseNo(){
        return $this->_courseNo;
    }

    public function setCourseNo($courseNo){
        $this->_courseNo=$courseNo;
    }
    
    //CourseTitle
    public function getCourseTitle(){
        return $this->_courseTitle;
    }
    
    public function setCourseTitle($courseTitle){
        $this->_courseTitle=$courseTitle;
    }
    
    //CourseCredit
    public function getCourseCredit(){
        return $this->_courseCredit;
    }
    
    public function setCourseCredit($courseCredit){
        $this->_courseCredit=$courseCredit;
    }
    
    //CourseTypeID
    public function getCourseTypeId(){
        return $this->_courseTypeId;
    }
    
    public function setCourseTypeId($courseTypeId){
        $this->_courseTypeId=$courseTypeId;
    }
    
    //CourseDisciplineId
    public function getCourseDisciplineId(){
        return $this->_courseDisciplineId;
    }
    
    public function setCourseDisciplineId($courseDisciplineId){
        $this->_courseDisciplineId=$courseDisciplineId;
    }

    //CourseIsDeleted
    public function getCourseIsDeleted(){
        return $this->_courseIsDeleted;
    }

    public function setCourseIsDeleted($courseIsDeleted){
        $this->_courseIsDeleted=$courseIsDeleted;
    }

}

class CourseType{
    private $_courseTypeId;
    private $_courseTypeName;
    private $_courseSessionalTypeId;
    
    //ID
    public function getCourseTypeId(){
        return $this->_courseTypeId;
    }
    
    public function setCourseTypeId($courseTypeId){
        $this->_courseTypeId=$courseTypeId;
    }

    //Name
    public function getCourseTypeName(){
        return $this->_courseTypeName;
    }

    public function setCourseTypeName($courseTypeName){
        $this->_courseTypeName=$courseTypeName;
    }

    //SessionalTypeId
    public function getCourseSessionalTypeId(){
        return $this->_courseSessionalTypeId;
    }
    
    public function setCourseSessionalTypeId($courseSessionalTypeId){
        $this->_courseSessionalTypeId=$courseSessionalTypeId;
    }
}

class CourseSessionalType{
    private $_courseSessionalTypeId;
    private $_courseSessionalTypeName;

    //ID
    public function getCourseSessionalTypeId(){
        return $this->_courseSessionalTypeId;
    }

    public function setCourseSessionalTypeIf($courseSessionalTypeId){
        $this->_courseSessionalTypeId=$courseSessionalTypeId;
    }

    //Name
    public function getCourseSessionalTypeName(){
        return $this->_courseSessionalTypeName;
    }

    public function setCourseSessionalTypeName($courseSessionalTypeName){
        $this->_courseSessionalTypeName=$courseSessionalTypeName;
    }
}

class Routine{
    private $_routineId;
    private $_routineYearId;
    private $_routineTermId;
    private $_routineCourseId;
    private $_routineUserId;
    private $_routineDay;
    private $_routineTime;

    //Id
    public function getRoutineId(){
        return $this->_routineId;
    }

    public function setRoutineId($routineId){
        $this->_routineId=$routineId;
    }

    //YearId
    public function getRoutineYearId(){
        return $this->_routineYearId;
    }

    public function setRoutineYearId($routineYearId){
        $this->_routineYearId=$routineYearId;
    }

    //TermId
    public function getRoutineTermId(){
        return $this->_routineTermId;
    }

    public function setRoutineTermId($routineTermId){
        $this->_routineTermId=$routineTermId;
    }

    //CourseId
    public function getRoutineCourseId(){
        return $this->_routineCourseId;
    }

    public function setRoutineCourseId($routineCourseId){
        $this->_routineCourseId=$routineCourseId;
    }

    //UserId
    public function getRoutineUserId(){
        return $this->_routineUserId;
    }

    public function setRoutineUserId($routineUserId){
        $this->_routineUserId=$routineUserId;
    }

    //Day
    public function getRoutineDayId(){
        return $this->_routineDay;
    }

    public function setRoutineDayId($routineDay){
        $this->_routineDay=$routineDay;
    }

    //Time
    public function getRoutineTime(){
        return $this->_routineTime;
    }

    public function setRoutineTime($routineTime){
        $this->_routineTime=$routineTime;
    }

}

class RoutineTime{
    private $_routineTimeId;
    private $_routineTimeTimeSlot;
    
    //ID
    public function getRoutineTimeId(){
        return $this->_routineTimeId;
    }
    
    public function setRoutineTimeId($routineTimeId){
        $this->_routineTimeId=$routineTimeId;
    }
    
    //Time Slot
    public function getRoutineTimeTimeSlot(){
        return $this->_routineTimeTimeSlot;
    }
    
    public function setRoutineTimeTimeSlot($routineTimeTimeSlot){
        $this->_routineTimeTimeSlot=$routineTimeTimeSlot;
    }
    
}

class RoutineDay{
    private $_routineDayId;
    private $_routineDay;
    
    //ID
    public function getRoutineDayId(){
        return $this->_routineDayId;
    }
    
    public function setRoutineDayId($routineDayId){
        $this->_routineDayId=$routineDayId;
    }
    
    //Time Slot
    public function getRoutineDay(){
        return $this->_routineDay;
    }
    
    public function setRoutineDay($routineDay){
        $this->_routineDay=$routineDay;
    }
    
}

class DayYearTermRoutine{
    private $_id;
    private $_routineDayId;
    private $_routineYearId;
    private $_routineTermId;
    private $_routineId;

    //ID
    public function getId(){
        return $this->_id;
    }
    public function setId($id){
        $this->_id=$id;
    }

    //Day
    public function getRoutineDayId(){
        return $this->_routineDayId;
    }
    public function setRoutineDayId($routineDayId){
        $this->_routineDayId=$routineDayId;
    }

    //Year
    public function getRoutineYearId(){
        return $this->_routineYearId;
    }
    public function setRoutineYearId($routineYearId){
        $this->_routineYearId=$routineYearId;
    }

    //Term
    public function getRoutineTermId(){
        return $this->_routineTermId;
    }
    public function setRoutineTermId($routineTermId){
        $this->_routineTermId=$routineTermId;
    }

    //RoutineId
    public function getRoutineId(){
        return $this->_routineId;
    }

    public function setRoutineId($routineId){
        $this->_routineId=$routineId;
    }
}
?>