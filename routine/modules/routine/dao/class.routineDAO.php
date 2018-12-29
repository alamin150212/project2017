<?php
// write dao object for each class
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.routine.php';
include_once COMMON.'class.common.user.php';
include_once UTILITY.'class.util.php';


Class RoutineDAO{

    private $_DB;
    

    public function __construct(){

        $this->_DB = DBUtil::getInstance();
        
    }

    

    public function getAllRoutine(){
        
        $routineList = array();

        $this->_DB->doQuery("SELECT DISTINCT(day_id) FROM rms_routine");
        $DayList=$this->_DB->getAllRows();
        
        $this->_DB->doQuery("SELECT DISTINCT(year_id) FROM rms_routine");
        $YearList=$this->_DB->getAllRows();
        
        $this->_DB->doQuery("SELECT DISTINCT(term_id) FROM rms_routine");
        $TermList=$this->_DB->getAllRows();
        
        
        foreach ($DayList as $day) {
            foreach ($YearList as $year) {
                foreach ($TermList as $term) {
                    $D=$day['day_id'];
                    $Y=$year['year_id'];
                    $T=$term['term_id'];
                   
                    $SQL="SELECT * FROM rms_routine WHERE day_id='$D' AND year_id='$Y' AND term_id='$T' LIMIT 1";
                    $this->_DB->doQuery($SQL);

        
                    $rows = $this->_DB->getAllRows();

                    for($i = 0; $i < sizeof($rows); $i++) {
                        $row = $rows[$i];
                        $this->_Routine = new Routine();

                        $this->_Routine->setRoutineId ( $row['id']);
                        $this->_Routine->setRoutineYearId( $row['year_id'] );
                        $this->_Routine->setRoutineTermId( $row['term_id'] );
                        $this->_Routine->setRoutineCourseId( $row['course_id'] );
                        $this->_Routine->setRoutineUserId( $row['user_id'] );
                        $this->_Routine->setRoutineDayId( $row['day_id'] );
                        $this->_Routine->setRoutineTime( $row['time_id'] );


                        $routineList[]=$this->_Routine;

                    }

                
                    $Result = new Result();
                    $Result->setIsSuccess(1);
                    $Result->setResultObject($routineList);

                
                }
            }
        }
        
       // var_dump($Result);
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

    public function getCountUser($day,$time,$userId){
        $SQL="SELECT count(user_id) AS c FROM rms_routine WHERE day_id='$day' and time_id='$time' and user_id='$userId'";
        $this->_DB->doQuery($SQL);
        $row = $this->_DB->getTopRow();

        $_SESSION["countUsers"] = $row['c'];

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);
    
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

    public function getRoutinedayName($RoutineDay){
        $SQL="SELECT * FROM tbl_routine_day WHERE tbl_routine_day.ID='$RoutineDay'";
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

    public function getConflictStatus($Routine){
        $SQL="SELECT COUNT(*) as count FROM rms_routine WHERE user_id='".$Routine->getRoutineUserId()."' AND time_id='".$Routine->getRoutineTime()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $SQL=$this->_DB->getTopRow();
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function getAllRoutineByDayYearTerm($Day,$Year,$Term){
        $SQL="SELECT * FROM rms_routine WHERE rms_routine.id IN (SELECT routine_id FROM rms_day_year_term_routine WHERE day_id='".$Day."' AND year_id='".$Year."' AND term_id='".$Term."' )";
        $this->_DB->doQuery($SQL);
        $rows = $this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_Routine = new Routine();

            $this->_Routine->setRoutineId ( $row['id']);
            $this->_Routine->setRoutineYearId( $row['year_id'] );
            $this->_Routine->setRoutineTermId( $row['term_id'] );
            $this->_Routine->setRoutineCourseId( $row['course_id'] );
            $this->_Routine->setRoutineUserId( $row['user_id'] );
            $this->_Routine->setRoutineDayId( $row['day_id'] );
            $this->_Routine->setRoutineTime( $row['time_id'] );


            $routineList[]=$this->_Routine;

        }

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($routineList);

        return $Result;
    }

    
}



?>