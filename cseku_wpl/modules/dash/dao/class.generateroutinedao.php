<?php
// write dao object for each class
include_once '/../common/class.common.php';
// include_once './common/class.common.routine.php';
include_once '/../util/class.util.php';

Class GenerateRoutineDAO{

	private $_DB;
	private $_Cat;

	function GenerateRoutineDAO(){

		$this->_DB = DBUtil::getInstance();
		$this->_Cat = new GenerateRoutine();

	}

	public function createGenerateRoutine($GenerateRoutine){

			$ID          = $GenerateRoutine->getID();
			$TermName    = $GenerateRoutine->getTermName();
			$DayName     = $GenerateRoutine->getDayName();
			$TeacherName = $GenerateRoutine->getTeacherName();
			$SlotNo      = $GenerateRoutine->getSlotNo();
			$CourseName  = $GenerateRoutine->getCourseName();	
			$Discipline  = $GenerateRoutine->getDiscipline();

			$SQL = "INSERT INTO tbl_routine(ID,TermName,DayName,TeacherName,SlotNo,CourseName,Discipline) 
				VALUES('$ID','$TermName','$DayName','$TeacherName','$SlotNo','$CourseName','$Discipline')";

			$SQL = $this->_DB->doQuery($SQL);		
			
		 	$Result = new Result();
			$Result->setIsSuccess(1);
			$Result->setResultObject($SQL);

			return $Result;
		
	}

	public function teacherCheck($GenerateRoutine){
		$SQL = "SELECT TeacherName,SlotNo FROM tbl_routine WHERE TeacherName = '".$GenerateRoutine->getTeacherName()."' AND  SlotNo = '".$GenerateRoutine->getSlotNo()."' LIMIT 1 ";

		$SQL = $this->_DB->doQuery($SQL);
		$rows = $this->_DB->getAllRows();

		if (sizeof($rows) > 0 ) {
			return true;
		}else{
			return false;
		}
	}

	public function termCheck($GenerateRoutine){
		$SQL = "SELECT TermName,SlotNo FROM tbl_routine WHERE TermName = '".$GenerateRoutine->getTermName()."' AND  SlotNo = '".$GenerateRoutine->getSlotNo()."' LIMIT 1 ";

		$SQL = $this->_DB->doQuery($SQL);
		$rows = $this->_DB->getAllRows();

		if (sizeof($rows) > 0 ) {
			return true;
		}else{
			return false;
		}
	}

	public function getAllRoutine(){
		
		$RoutineList = array();
		$this->_DB->doQuery("SELECT * FROM tbl_routine");
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_GenerateRoutine = new GenerateRoutine();

		    $this->_GenerateRoutine->setID ($row['ID']);
		    $this->_GenerateRoutine->setTermName($row['TermName'] );
		    $this->_GenerateRoutine->setDayName($row['DayName'] );
		    $this->_GenerateRoutine->setTeacherName ($row['TeacherName']);
		    $this->_GenerateRoutine->setSlotNo($row['SlotNo'] );
		    $this->_GenerateRoutine->setCourseName($row['CourseName'] );
		    $this->_GenerateRoutine->setDiscipline($row['Discipline'] );

		    $RoutineList[]=$this->_GenerateRoutine;   
		}

		//todo: LOG util with level of log
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($RoutineList);

		return $Result;
	}

	
	public function getAllCourseNos(){

		$CourseNoList = array();
		$this->_DB->doQuery("SELECT * FROM tbl_course");

		$rows = $this->_DB->getAllRows();
		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_CourseNo = new InsertCourse();

		    $this->_CourseNo->setID ( $row['ID']);
		    $this->_CourseNo->setCourseNo( $row['CourseNo'] );
		    $this->_CourseNo->setTitle( $row['Title'] );

		    $CourseNoList[]=$this->_CourseNo;
   
		}
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($CourseNoList);

		return $Result;
	}

	public function getAllCourseType(){

		$CourseTypeList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_course_type");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_CourseType = new CourseType();

		    $this->_CourseType->setID ( $row['ID']);
		    $this->_CourseType->setName( $row['Name'] );


		    $CourseTypeList[]=$this->_CourseType;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($CourseTypeList);

		return $Result;
	}

	

	public function getNameDayID($DayID){

		$SQL = "SELECT * FROM tbl_routine_day WHERE ID='".$DayID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Day = new RoutineDay();

		$this->_Day->setID ( $row['ID']);
		$this->_Day->setName( $row['Name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Day);

		return $Result;
	}

	public function getNameTimeID($TimeID){

		$SQL = "SELECT * FROM tbl_routine_time WHERE ID='".$TimeID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Time = new RoutineTime();

		$this->_Time->setID ( $row['ID']);
		$this->_Time->setName( $row['Name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Time);

		return $Result;
	}

	public function getNameCourseID($CourseID){

		$SQL = "SELECT * FROM tbl_course WHERE ID='".$CourseID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Course = new InsertCourse();

		$this->_Course->setID ( $row['ID']);
		$this->_Course->setCourseNo( $row['CourseNo'] );
		$this->_Course->setTitle( $row['Title'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Course);

		return $Result;
	}

	

	public function getNameTermID(){

		$SQL = "SELECT * FROM tbl_term ";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Term = new RoutineTerm();

		$this->_Term->setID ( $row['ID']);
		$this->_Term->setName( $row['Name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Term);

		return $Result;
	}
	public function getAllTerms(){

		$TermList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_term");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Terms = new RoutineTerm();

		    $this->_Terms->setID ( $row['ID']);
		    $this->_Terms->setName( $row['Name'] );


		    $TermList[]=$this->_Terms;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($TermList);

		return $Result;
	}

	public function getAllDay(){
		$RoutineDayList = array();
		$this->_DB->doQuery("SELECT * FROM tbl_routine_day");
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_RoutineDay = new RoutineDay();

		    $this->_RoutineDay->setID ( $row['ID']);
		    $this->_RoutineDay->setName( $row['Name'] );

		    $RoutineDayList[] = $this->_RoutineDay;   
		}

		//todo: LOG util with level of log
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($RoutineDayList);

		return $Result;
	}

	public function getAllTeacher(){
		$TeacherList = array();
		$this->_DB->doQuery("SELECT * FROM tbl_teacher");
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Teacher = new Teacher();

		    $this->_Teacher->setID ( $row['ID']);
		    $this->_Teacher->setName( $row['Name'] );
		    $this->_Teacher->setEmail( $row['Email'] );
		    $this->_Teacher->setDiscplineName( $row['DiscplineName'] );

		    $TeacherList[] = $this->_Teacher;   
		}
		//todo: LOG util with level of log
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($TeacherList);

		return $Result;
	}

	public function getRoutineTime(){
		$RoutineTime = array();

		$this->_DB->doQuery("SELECT * FROM tbl_routine_time");
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_RoutineTime = new RoutineTime();

		    $this->_RoutineTime->setID ( $row['ID']);
		    $this->_RoutineTime->setTimeSlot( $row['TimeSlot'] );

		    $RoutineTimeList[] = $this->_RoutineTime;   
		}
		//todo: LOG util with level of log
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($RoutineTimeList);

		return $Result;
	}

	public function getNameTeacherID($TeacherID){

		$SQL = "SELECT * FROM tbl_user WHERE ID='".$TeacherID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Teacher = new User();

		$this->_Teacher->setID ( $row['ID']);
		$this->_Teacher->setFirstName( $row['FirstName'] );
		$this->_Teacher->setLastName( $row['LastName'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Teacher);

		return $Result;
	}
	

	
public function getAllDiscipline(){

		$DisciplineList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_discipline");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Discipline = new Discipline();

		    $this->_Discipline->setID ( $row['ID']);
		    $this->_Discipline->setName( $row['Name'] );


		    $DisciplineList[]=$this->_Discipline;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($DisciplineList);

		return $Result;
	}




}

//echo '<br> log:: exit the class.discussiondao.php';

?>