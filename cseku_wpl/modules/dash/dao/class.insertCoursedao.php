<?php
// write dao object for each class
include_once '/../common/class.common.php';
// include_once './common/class.common.routine.php';
include_once '/../util/class.util.php';

Class InsertCourseDAO{

	private $_DB;
	private $_Cat;

	function InsertCourseDAO(){

		$this->_DB = DBUtil::getInstance();
		$this->_Cat = new InsertCourse();

	}

	public function InsertCourse($InsertCourse){

		$ID           = $InsertCourse->getID();
		$CourseNo     = $InsertCourse->getCourseNo();
		$Title        = $InsertCourse->getTitle();
		$Credit       = $InsertCourse->getCredit();
		$CourseTypeID = $InsertCourse->getCourseTypeID();
		$DisciplineID = $InsertCourse->getDisciplineID();

		$SQL = "INSERT INTO tbl_course(ID,CourseNo,Title,Credit,CourseTypeID,DisciplineID) 
							VALUES('$ID','$CourseNo','$Title','$Credit','$CourseTypeID','$DisciplineID')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
		
	}

	public function InsertTeacher($Teacher){
		$ID            = $Teacher->getID();
		$Name          = $Teacher->getName();
		$Email         = $Teacher->getEmail();
		$DiscplineName = $Teacher->getDiscplineName();

		$SQL = "INSERT INTO tbl_teacher(ID,Name,Email,DiscplineName) 
							VALUES('$ID','$Name','$Email','$DiscplineName')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

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

	public function getAllCourses(){

		$CourseList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_course");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Course = new InsertCourse();

		    $this->_Course->setID ( $row['ID']);
		    $this->_Course->setCourseNo( $row['CourseNo'] );
		    $this->_Course->setTitle( $row['Title'] );
		    $this->_Course->setCredit( $row['Credit'] );
		    $this->_Course->setCourseTypeID( $row['CourseTypeID'] );
		    $this->_Course->setDisciplineID( $row['DisciplineID'] );
		  
		    $CourseList[]=$this->_Course;
   
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($CourseList);

		return $Result;
	}

	public function getNameCourseTypeID($CourseTypeID){

		$SQL = "SELECT * FROM tbl_course_type WHERE ID='".$CourseTypeID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_CourseType = new CourseType();

		$this->_CourseType->setID ( $row['ID']);
		$this->_CourseType->setName( $row['Name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_CourseType);

		return $Result;
	}

	public function getNameDisciplineID($DisciplineID){

		$SQL = "SELECT * FROM tbl_discipline WHERE ID='".$DisciplineID."'";

		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Discipline = new Discipline();

		$this->_Discipline->setID ( $row['ID']);
		$this->_Discipline->setName( $row['Name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Discipline);

		return $Result;
	}



}

//echo '<br> log:: exit the class.discussiondao.php';

?>