<?php

include_once '/../../../util/class.util.php';
include_once '/../../../bao/class.generateRoutinebao.php';

$_GenerateRoutineBAO = new GenerateRoutineBAO();
$_DB = DBUtil::getInstance();

if(isset($_POST['save']))
{
	 $GenerateRoutine = new GenerateRoutine();	

	$GenerateRoutine->setID(Util::getGUID());
     $GenerateRoutine->setTermName($_DB->secureInput($_POST['txtterm']));
     $GenerateRoutine->setDayName($_DB->secureInput($_POST['routineDay']));
     $GenerateRoutine->setTeacherName($_DB->secureInput($_POST['coursrteacher']));
     $GenerateRoutine->setSlotNo($_DB->secureInput($_POST['timeslot']));
     $GenerateRoutine->setCourseName($_DB->secureInput($_POST['courseNo']));   
     $GenerateRoutine->setDiscipline($_DB->secureInput($_POST['txtDis']));

     $teacher_check = $_GenerateRoutineBAO->teacherCheck($GenerateRoutine);
     $term_check = $_GenerateRoutineBAO->termCheck($GenerateRoutine);

     if ($teacher_check == true) {
          $msg = "<div style ='color:red'><strong>Error !!</strong>This Slot is Already taken by this assigned teacher</div>";
          return $msg;
     }
     if ($term_check == true) {
          $msg = "<div class='alert alert-danger'><strong>Error !!</strong>This Slot is filled in this term</div>";
          return $msg;
     }
     else
     {
 	 $_GenerateRoutineBAO->createGenerateRoutine($GenerateRoutine);
 	 $msg = "<div class='alert alert-success'><strong>Success !!</strong>Insert Course Into Routine Successfully!!</div>";
     return $msg;
     }
     		 
}

?>