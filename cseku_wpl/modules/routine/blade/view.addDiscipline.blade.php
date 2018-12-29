<?php

include_once '/../../../util/class.util.php';
include_once '/../../../bao/class.disciplinebao.php';

$_DisciplineBAO = new DisciplineBAO();
$_DB = DBUtil::getInstance();

/* saving a new InsertCourse account*/
if(isset($_POST['save']))
{
	 $Discipline = new Discipline();	


	 $Discipline->setID(Util::getGUID());
     $Discipline->setName($_DB->secureInput($_POST['DiscplineName']));

     if (empty($Discipline->getName()))
     {
     	$msg = "<div class='alert alert-danger'><strong>Error !</strong>Field must not be empty</div>";
		return $msg;
     }
     else
     {
	    $_DisciplineBAO->createDiscipline($Discipline);
	    $msg = "<div class='alert alert-success'><strong>Success !!</strong>Registration Complete Successfully!!Please Login</div>";
	    return $msg;
	 }
	 
}

?>