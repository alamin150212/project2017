<?php
// write dao object for each class
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.routine.php';
include_once COMMON.'class.common.user.php';
include_once UTILITY.'class.util.php';


Class RoutineManageDAO{

    private $_DB;
    private $_Year;
    private $_Term;
    private $_Course;
    private $_User;
    private $_Time;
    private $_routine;
    private $_Day;

    public function __construct(){

        $this->_DB = DBUtil::getInstance();
        $this->_Year=new Year();
        $this->_Term=new Term();
        $this->_Course=new Course();
        $this->_User=new User();
        $this->_Time=new RoutineTime();
        $this->_routine=new Routine();
        $this->_Day=new RoutineDay();
    }

    public function getAllYears(){

        $yearsList = array();

        $this->_DB->doQuery("SELECT * FROM tbl_year");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_Year = new Year();

            $this->_Year->setYearId ( $row['ID']);
            $this->_Year->setYearName( $row['Name'] );


            $yearsList[]=$this->_Year;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($yearsList);

        return $Result;
    }

    public function getAllTerms(){

        $termsList = array();

        $this->_DB->doQuery("SELECT * FROM tbl_term");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_Term = new Term();

            $this->_Term->setTermId ( $row['ID']);
            $this->_Term->setTermName( $row['Name'] );


            $termsList[]=$this->_Term;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($termsList);

        return $Result;
    }

    public function getAllDay(){

        $DayList=array();

        $this->_DB->doQuery("SELECT * FROM tbl_routine_day");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];

            $this->_Day=new RoutineDay();
            $this->_Day->setRoutineDayId($row['ID']);
            $this->_Day->setRoutineDay($row['routineDay']);

            $DayList[]=$this->_Day;
        }

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($DayList);

        return $Result;
    }


    public function getAllCourse(){

        $courseList = array();

        $this->_DB->doQuery("SELECT * FROM tbl_course");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_Course = new Course();

            $this->_Course->setCourseId ( $row['ID']);
            $this->_Course->setCourseNo( $row['CourseNo'] );
            $this->_Course->setCourseTitle( $row['Title'] );


            $courseList[]=$this->_Course;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($courseList);

        return $Result;
    }

    public function getAllTeachers(){

        $teacherList = array();

        $this->_DB->doQuery("SELECT tbl_user.* FROM tbl_user,tbl_role,tbl_user_role WHERE tbl_user.ID = tbl_user_role.UserID and tbl_user_role.RoleID = tbl_role.ID and tbl_role.Name = 'Teacher'");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_User = new User();

            $this->_User->setID ( $row['ID']);
            $this->_User->setUniversityID( $row['UniversityID'] );
            $this->_User->setFirstName( $row['FirstName'] );
            $this->_User->setLastName( $row['LastName'] );


            $teacherList[]=$this->_User;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($teacherList);

        return $Result;
    }

    public function getAllTimeSlot(){

        $timeList = array();

        $this->_DB->doQuery("SELECT * FROM tbl_routine_time");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_routineTime = new RoutineTime();

            $this->_routineTime->setRoutineTimeId ( $row['ID']);
            $this->_routineTime->setRoutineTimeTimeSlot( $row['TimeSlot'] );



            $timeList[]=$this->_routineTime;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($timeList);

        return $Result;
    }

    public function getAllRoutine(){

        $routineList = array();

        $this->_DB->doQuery("SELECT * FROM rms_routine");

        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_routine = new Routine();

            $this->_routine->setRoutineId ( $row['id']);
            $this->_routine->setRoutineYearId( $row['year_id'] );
            $this->_routine->setRoutineTermId( $row['term_id'] );
            $this->_routine->setRoutineCourseId( $row['course_id'] );
            $this->_routine->setRoutineUserId( $row['user_id'] );
            $this->_routine->setRoutineDayId( $row['day_id'] );
            $this->_routine->setRoutineTime( $row['time_id'] );

            $routineList[]=$this->_routine;

        }


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($routineList);

        return $Result;
    }


    //create Discussion funtion with the Discussion object
    public function createRoutine($Routine){

        $RoutineId=$Routine->getRoutineId();
        $RoutineYear=$Routine->getRoutineYearId();
        $RoutineTerm=$Routine->getRoutineTermId();
        $RoutineCourse=$Routine->getRoutineCourseId();
        $RoutineUser=$Routine->getRoutineUserId();
        $RoutineDay=$Routine->getRoutineDayId();
        $RoutineTime=$Routine->getRoutineTime();


        $SQL = "INSERT INTO rms_routine(id,year_id,term_id,course_id,user_id,day_id,time_id) 
				VALUES('$RoutineId','$RoutineYear','$RoutineTerm','$RoutineCourse','$RoutineUser','$RoutineDay','$RoutineTime')";

        $SQL = $this->_DB->doQuery($SQL);

        $SQL="INSERT INTO rms_day_year_term_routine VALUES('$RoutineId','$RoutineDay','$RoutineYear','$RoutineTerm','$RoutineId')";

    
        $SQL=$this->_DB->doQuery($SQL);

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }



    public function deleteRoutine($Routine){


        $SQL = "DELETE from rms_routine where rms_routine.id ='".$Routine->getRoutineId()."'";

        $SQL = $this->_DB->doQuery($SQL);

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;

    }

    public function getYearName($Year){
        $SQL="SELECT * FROM tbl_year WHERE tbl_year.ID='$Year'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Year=new Year();
        $this->_Year->setYearId($row['ID']);
        $this->_Year->setYearName($row['Name']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Year);

        return $Result;
    }

    public function getDayName($Day){
        $SQL="SELECT * FROM tbl_routine_day WHERE tbl_routine_day.ID='$Day'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Day=new RoutineDay();
        $this->_Day->setRoutineDayId($row['ID']);
        $this->_Day->setRoutineDay($row['routineDay']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Day);

        return $Result;
    }


    public function getTermName($Term){
        $SQL="SELECT * FROM tbl_term WHERE tbl_term.ID='$Term'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Term=new Term();
        $this->_Term->setTermId($row['ID']);
        $this->_Term->setTermName($row['Name']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Term);

        return $Result;
    }


    public function getCourseNo($Course){
        $SQL="SELECT * FROM tbl_course WHERE tbl_course.ID='$Course'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Course=new Course();
        $this->_Course->setCourseId($row['ID']);
        $this->_Course->setCourseNo($row['CourseNo']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Course);

        return $Result;
    }


    public function getUserName($User){
        $SQL="SELECT * FROM tbl_user WHERE tbl_user.ID='$User'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_User=new User();
        $this->_User->setID($row['ID']);
        $this->_User->setFirstName($row['FirstName']);
        $this->_User->setLastName($row['LastName']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_User);

        return $Result;
    }


    public function getTimeSlot($Time){
        $SQL="SELECT * FROM tbl_routine_time WHERE tbl_routine_time.ID='$Time'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Time=new RoutineTime();
        $this->_Time->setRoutineTimeId($row['ID']);
        $this->_Time->setRoutineTimeTimeSlot($row['TimeSlot']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Time);

        return $Result;
    }

    public function getRoutineById($Routine){
        $SQL="SELECT * FROM rms_routine WHERE rms_routine.id='".$Routine."'";

        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();

        $this->_routine = new Routine();

        $this->_routine->setRoutineId ( $row['id']);
        $this->_routine->setRoutineYearId( $row['year_id'] );
        $this->_routine->setRoutineTermId( $row['term_id'] );
        $this->_routine->setRoutineCourseId( $row['course_id'] );
        $this->_routine->setRoutineUserId( $row['user_id'] );
        $this->_routine->setRoutineDayId( $row['day_id'] );
        $this->_routine->setRoutineTime( $row['time_id'] );

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_routine);

        return $Result;
    }

    public function updateRoutine($Routine){
        $ID=$Routine->getRoutineId();
        $YearID=$Routine->getRoutineYearId();
        $TermID=$Routine->getRoutineTermId();
        $CourseID=$Routine->getRoutineCourseId();
        $UserID=$Routine->getRoutineUserId();
        $DayID=$Routine->getRoutineDayId();
        $TimeID=$Routine->getRoutineTime();

        $SQL="UPDATE rms_routine SET year_id='$YearID',term_id='$TermID',course_id='$CourseID',user_id='$UserID',day_id='$DayID',time_id='$TimeID' WHERE id='$ID'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }
}



?>