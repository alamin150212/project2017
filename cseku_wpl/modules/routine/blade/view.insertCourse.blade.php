<?php

include_once '/../../../util/class.util.php';
include_once '/../../../bao/class.insertCoursebao.php';

$_InsertCourseBAO = new InsertCourseBAO();
$_DB = DBUtil::getInstance();

/* saving a new InsertCourse account*/
if(isset($_POST['save']))
{
	 $InsertCourse = new InsertCourse();	


	 $InsertCourse->setID(Util::getGUID());
     $InsertCourse->setCourseNo($_DB->secureInput($_POST['courseNo']));
     $InsertCourse->setTitle($_DB->secureInput($_POST['courseTitle']));
     $InsertCourse->setCredit($_DB->secureInput($_POST['CourseCredit']));
     $InsertCourse->setCourseTypeID($_DB->secureInput($_POST['txtCourceType']));
     $InsertCourse->setDisciplineID($_DB->secureInput($_POST['txtDis']));

     if (empty($InsertCourse->getCourseNo()) || empty($InsertCourse->getTitle()) || empty($InsertCourse->getCredit()) || empty($InsertCourse->getCourseTypeID()))
     {
     	$msg = "<div class='alert alert-danger'><strong>Error !</strong>Field must not be empty</div>";
		return $msg;
     }
     else{
     	$_InsertCourseBAO->InsertCourse($InsertCourse);
     	$msg = "<div class='alert alert-success'><strong>Success !!</strong>Insert Course Complete Successfully!!</div>";
	    return $msg;
     }			 
}

if(isset($_POST['submit']))
{
	$Teacher = new Teacher();

	$Teacher->setID(Util::getGUID());
     $Teacher->setName($_DB->secureInput($_POST['name']));  
     $Teacher->setEmail($_DB->secureInput($_POST['teacherEmail']));
     $Teacher->setDiscplineName($_DB->secureInput($_POST['txtDis']));
     
     if (empty($Teacher->getName()) || empty($Teacher->getEmail()) || empty($Teacher->getDiscplineName()))
     {
     	$msg = "<div class='alert alert-danger'><strong>Error !</strong>Field must not be empty</div>";
		return $msg;
     }
     if (strlen($Teacher->getName())  < 4) {
		$msg = "<div class='alert alert-danger'><strong>Error !</strong>User name is too short</div>";
		return $msg;
		}
	if (filter_var($Teacher->getEmail(), FILTER_VALIDATE_EMAIL) === false) {
		$msg = "<div class='alert alert-danger'><strong>Error !!</strong>The email Address is not valid</div>";
		return $msg;
		}

     else
     {
	    $_InsertCourseBAO->InsertTeacher($Teacher);
	    $msg = "<div class='alert alert-success'><strong>Success !!</strong>Insert Teacher Complete Successfully!!</div>";
	    return $msg;
	 }
	 
}

//echo '<br> log:: exit blade.insertCourse.php';

?>