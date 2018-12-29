<?php
//include_once 'header.php';
include_once 'blade/view.generateRoutine.blade.php';
include_once '/../../common/class.common.php';
// include_once '../../../common/class.common.routine.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>USER CRUD Operations</title>
    
<style>
#middle{
  width:300px;
  height: 400px
  background-color: red; 
  float:left;
}
#side{
  width: 100px;
  height: 200px
  background-color: blue;
  float:right;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
aside{
  float:right;
}

h1{
  text-align:center;
  background-color : Blue;
  padding:20px 16px;
}
h4{
    list-style-type: none;
    margin: 0;
    padding: 1;
    width: 200px;
    background-color: #f1f1f1;
}
li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
</head>
<body>
<h1>Routine Maker</h1>
<ul>
  <li><a href="view.addDiscpline.php">Insert Discpline</a></li>
  <li><a href="view.insertCourse.php">Insert Course</a></li>
  <li><a href="view.insertTeacher.php">Insert Teacher</a></li>
  <li><a href="view.generateRoutine.php">Generate Routine</a></li>
  <li><a href="view.newroutine.php">View Routine</a></li>
  
</ul><br/>
<?php
//Sunday 
 $S_1st_T1 = null;
 $S_1st_T2 = null;
 $S_1st_T3 = null;
 $S_1st_T4 = null;
 $S_1st_T5 = null;
 $S_1st_T6 = null;
 $S_1st_T7 = null;

 $S_2nd_T1 = null;
 $S_2nd_T2 = null;
 $S_2nd_T3 = null;
 $S_2nd_T4 = null;
 $S_2nd_T5 = null;
 $S_2nd_T6 = null;
 $S_2nd_T7 = null;

 $S_3rd_T1 = null;
 $S_3rd_T2 = null;
 $S_3rd_T3 = null;
 $S_3rd_T4 = null;
 $S_3rd_T5 = null;
 $S_3rd_T6 = null;
 $S_3rd_T7 = null;

 $S_4th_T1 = null;
 $S_4th_T2 = null;
 $S_4th_T3 = null;
 $S_4th_T4 = null;
 $S_4th_T5 = null;
 $S_4th_T6 = null;
 $S_4th_T7 = null;

 $S_5th_T1 = null;
 $S_5th_T2 = null;
 $S_5th_T3 = null;
 $S_5th_T4 = null;
 $S_5th_T5 = null;
 $S_5th_T6 = null;
 $S_5th_T7 = null;

 $S_6th_T1 = null;
 $S_6th_T2 = null;
 $S_6th_T3 = null;
 $S_6th_T4 = null;
 $S_6th_T5 = null;
 $S_6th_T6 = null;
 $S_6th_T7 = null;

 $S_7th_T1 = null;
 $S_7th_T2 = null;
 $S_7th_T3 = null;
 $S_7th_T4 = null;
 $S_7th_T5 = null;
 $S_7th_T6 = null;
 $S_7th_T7 = null;

 $S_8th_T1 = null;
 $S_8th_T2 = null;
 $S_8th_T3 = null;
 $S_8th_T4 = null;
 $S_8th_T5 = null;
 $S_8th_T6 = null;
 $S_8th_T7 = null;
 //Monday
 $M_1st_T1 = null;
 $M_1st_T2 = null;
 $M_1st_T3 = null;
 $M_1st_T4 = null;
 $M_1st_T5 = null;
 $M_1st_T6 = null;
 $M_1st_T7 = null;

 $M_2nd_T1 = null;
 $M_2nd_T2 = null;
 $M_2nd_T3 = null;
 $M_2nd_T4 = null;
 $M_2nd_T5 = null;
 $M_2nd_T6 = null;
 $M_2nd_T7 = null;

 $M_3rd_T1 = null;
 $M_3rd_T2 = null;
 $M_3rd_T3 = null;
 $M_3rd_T4 = null;
 $M_3rd_T5 = null;
 $M_3rd_T6 = null;
 $M_3rd_T7 = null;

 $M_4th_T1 = null;
 $M_4th_T2 = null;
 $M_4th_T3 = null;
 $M_4th_T4 = null;
 $M_4th_T5 = null;
 $M_4th_T6 = null;
 $M_4th_T7 = null;

 $M_5th_T1 = null;
 $M_5th_T2 = null;
 $M_5th_T3 = null;
 $M_5th_T4 = null;
 $M_5th_T5 = null;
 $M_5th_T6 = null;
 $M_5th_T7 = null;

 $M_6th_T1 = null;
 $M_6th_T2 = null;
 $M_6th_T3 = null;
 $M_6th_T4 = null;
 $M_6th_T5 = null;
 $M_6th_T6 = null;
 $M_6th_T7 = null;

 $M_7th_T1 = null;
 $M_7th_T2 = null;
 $M_7th_T3 = null;
 $M_7th_T4 = null;
 $M_7th_T5 = null;
 $M_7th_T6 = null;
 $M_7th_T7 = null;

 $M_8th_T1 = null;
 $M_8th_T2 = null;
 $M_8th_T3 = null;
 $M_8th_T4 = null;
 $M_8th_T5 = null;
 $M_8th_T6 = null;
 $M_8th_T7 = null;
 //Tuseday
 $T_1st_T1 = null;
 $T_1st_T2 = null;
 $T_1st_T3 = null;
 $T_1st_T4 = null;
 $T_1st_T5 = null;
 $T_1st_T6 = null;
 $T_1st_T7 = null;

 $T_2nd_T1 = null;
 $T_2nd_T2 = null;
 $T_2nd_T3 = null;
 $T_2nd_T4 = null;
 $T_2nd_T5 = null;
 $T_2nd_T6 = null;
 $T_2nd_T7 = null;

 $T_3rd_T1 = null;
 $T_3rd_T2 = null;
 $T_3rd_T3 = null;
 $T_3rd_T4 = null;
 $T_3rd_T5 = null;
 $T_3rd_T6 = null;
 $T_3rd_T7 = null;

 $T_4th_T1 = null;
 $T_4th_T2 = null;
 $T_4th_T3 = null;
 $T_4th_T4 = null;
 $T_4th_T5 = null;
 $T_4th_T6 = null;
 $T_4th_T7 = null;

 $T_5th_T1 = null;
 $T_5th_T2 = null;
 $T_5th_T3 = null;
 $T_5th_T4 = null;
 $T_5th_T5 = null;
 $T_5th_T6 = null;
 $T_5th_T7 = null;

 $T_6th_T1 = null;
 $T_6th_T2 = null;
 $T_6th_T3 = null;
 $T_6th_T4 = null;
 $T_6th_T5 = null;
 $T_6th_T6 = null;
 $T_6th_T7 = null;

 $T_7th_T1 = null;
 $T_7th_T2 = null;
 $T_7th_T3 = null;
 $T_7th_T4 = null;
 $T_7th_T5 = null;
 $T_7th_T6 = null;
 $T_7th_T7 = null;

 $T_8th_T1 = null;
 $T_8th_T2 = null;
 $T_8th_T3 = null;
 $T_8th_T4 = null;
 $T_8th_T5 = null;
 $T_8th_T6 = null;
 $T_8th_T7 = null;
 //Wednesday
 $W_1st_T1 = null;
 $W_1st_T2 = null;
 $W_1st_T3 = null;
 $W_1st_T4 = null;
 $W_1st_T5 = null;
 $W_1st_T6 = null;
 $W_1st_T7 = null;

 $W_2nd_T1 = null;
 $W_2nd_T2 = null;
 $W_2nd_T3 = null;
 $W_2nd_T4 = null;
 $W_2nd_T5 = null;
 $W_2nd_T6 = null;
 $W_2nd_T7 = null;

 $W_3rd_T1 = null;
 $W_3rd_T2 = null;
 $W_3rd_T3 = null;
 $W_3rd_T4 = null;
 $W_3rd_T5 = null;
 $W_3rd_T6 = null;
 $W_3rd_T7 = null;

 $W_4th_T1 = null;
 $W_4th_T2 = null;
 $W_4th_T3 = null;
 $W_4th_T4 = null;
 $W_4th_T5 = null;
 $W_4th_T6 = null;
 $W_4th_T7 = null;

 $W_5th_T1 = null;
 $W_5th_T2 = null;
 $W_5th_T3 = null;
 $W_5th_T4 = null;
 $W_5th_T5 = null;
 $W_5th_T6 = null;
 $W_5th_T7 = null;

 $W_6th_T1 = null;
 $W_6th_T2 = null;
 $W_6th_T3 = null;
 $W_6th_T4 = null;
 $W_6th_T5 = null;
 $W_6th_T6 = null;
 $W_6th_T7 = null;

 $W_7th_T1 = null;
 $W_7th_T2 = null;
 $W_7th_T3 = null;
 $W_7th_T4 = null;
 $W_7th_T5 = null;
 $W_7th_T6 = null;
 $W_7th_T7 = null;

 $W_8th_T1 = null;
 $W_8th_T2 = null;
 $W_8th_T3 = null;
 $W_8th_T4 = null;
 $W_8th_T5 = null;
 $W_8th_T6 = null;
 $W_8th_T7 = null;
 //Thursday
 $Th_1st_T1 = null;
 $Th_1st_T2 = null;
 $Th_1st_T3 = null;
 $Th_1st_T4 = null;
 $Th_1st_T5 = null;
 $Th_1st_T6 = null;
 $Th_1st_T7 = null;

 $Th_2nd_T1 = null;
 $Th_2nd_T2 = null;
 $Th_2nd_T3 = null;
 $Th_2nd_T4 = null;
 $Th_2nd_T5 = null;
 $Th_2nd_T6 = null;
 $Th_2nd_T7 = null;

 $Th_3rd_T1 = null;
 $Th_3rd_T2 = null;
 $Th_3rd_T3 = null;
 $Th_3rd_T4 = null;
 $Th_3rd_T5 = null;
 $Th_3rd_T6 = null;
 $Th_3rd_T7 = null;

 $Th_4th_T1 = null;
 $Th_4th_T2 = null;
 $Th_4th_T3 = null;
 $Th_4th_T4 = null;
 $Th_4th_T5 = null;
 $Th_4th_T6 = null;
 $Th_4th_T7 = null;

 $Th_5th_T1 = null;
 $Th_5th_T2 = null;
 $Th_5th_T3 = null;
 $Th_5th_T4 = null;
 $Th_5th_T5 = null;
 $Th_5th_T6 = null;
 $Th_5th_T7 = null;

 $Th_6th_T1 = null;
 $Th_6th_T2 = null;
 $Th_6th_T3 = null;
 $Th_6th_T4 = null;
 $Th_6th_T5 = null;
 $Th_6th_T6 = null;
 $Th_6th_T7 = null;

 $Th_7th_T1 = null;
 $Th_7th_T2 = null;
 $Th_7th_T3 = null;
 $Th_7th_T4 = null;
 $Th_7th_T5 = null;
 $Th_7th_T6 = null;
 $Th_7th_T7 = null;

 $Th_8th_T1 = null;
 $Th_8th_T2 = null;
 $Th_8th_T3 = null;
 $Th_8th_T4 = null;
 $Th_8th_T5 = null;
 $Th_8th_T6 = null;
 $Th_8th_T7 = null;
 ?>

<div class="panel panel-default"> 
        <?php	
			$Result = $_GenerateRoutineBAO->getAllRoutine();
			//if DAO access is successful to load all the Terms then show them one by one
			if($Result->getIsSuccess()){
				$RoutineList = $Result->getResultObject();

		       for($i = 0; $i < sizeof($RoutineList); $i++) {
			   $GenerateRoutine = $RoutineList[$i];
			   // Sunday
			   		if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' && $GenerateRoutine->getSlotNo() == '1') {
						$S_1st_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_1st_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_1st_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_1st_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_1st_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_1st_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_1st_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_2nd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_2nd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_2nd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_2nd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_2nd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_2nd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_2nd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_3rd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_3rd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_3rd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_3rd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_3rd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_3rd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_3rd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_4th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_4th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_4th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_4th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_4th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_4th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_4th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_5th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_5th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_5th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_5th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_5th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_5th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_5th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_6th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_6th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_6th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_6th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_6th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_6th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_6th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_7th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_7th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_7th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_7th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_7th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_7th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_7th_T7 = $GenerateRoutine->getCourseName();			
					}


			       else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_8th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_8th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_8th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_8th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_8th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_8th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Sunday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_8th_T7 = $GenerateRoutine->getCourseName();			
					}
					//Monday
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' && $GenerateRoutine->getSlotNo() == '1') {
						$M_1st_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_1st_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_1st_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_1st_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_1st_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_1st_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_1st_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' && $GenerateRoutine->getSlotNo() == '1') {
						$M_2nd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_2nd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_2nd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_2nd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_2nd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_2nd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_2nd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' && $GenerateRoutine->getSlotNo() == '1') {
						$M_3rd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_3rd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_3rd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_3rd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_3rd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_3rd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_3rd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' && $GenerateRoutine->getSlotNo() == '1') {
						$M_4th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_4th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_4th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_4th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_4th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_4th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_4th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' && $GenerateRoutine->getSlotNo() == '1') {
						$M_5th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_5th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_5th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_5th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_5th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_5th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_5th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' && $GenerateRoutine->getSlotNo() == '1') {
						$M_6th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_6th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_6th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_6th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_6th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_6th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_6th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' && $GenerateRoutine->getSlotNo() == '1') {
						$M_7th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_7th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_7th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_7th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_7th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_7th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_7th_T7 = $GenerateRoutine->getCourseName();			
					}


			       else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' && $GenerateRoutine->getSlotNo() == '1') {
						$M_8th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '2') {
						$M_8th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '3') {
						$M_8th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '4') {
						$M_8th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '5') {
						$M_8th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '6') {
						$M_8th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Monday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '7') {
						$M_8th_T7 = $GenerateRoutine->getCourseName();			
					}
					//Tuesday
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' && $GenerateRoutine->getSlotNo() == '1') {
						$S_1st_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_1st_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_1st_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_1st_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_1st_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_1st_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_1st_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_2nd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_2nd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_2nd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_2nd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_2nd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_2nd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_2nd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_3rd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_3rd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_3rd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_3rd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_3rd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_3rd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_3rd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_4th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_4th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_4th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_4th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_4th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_4th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_4th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_5th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_5th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_5th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_5th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_5th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_5th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_5th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_6th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_6th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_6th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_6th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_6th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_6th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_6th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_7th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_7th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_7th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_7th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_7th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_7th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_7th_T7 = $GenerateRoutine->getCourseName();			
					}


			       else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_8th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_8th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_8th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_8th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_8th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_8th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Tuesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_8th_T7 = $GenerateRoutine->getCourseName();			
					}
					//Wednesday
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' && $GenerateRoutine->getSlotNo() == '1') {
						$S_1st_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_1st_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_1st_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_1st_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_1st_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_1st_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_1st_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_2nd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_2nd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_2nd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_2nd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_2nd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_2nd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_2nd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_3rd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_3rd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_3rd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_3rd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_3rd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_3rd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_3rd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_4th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_4th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_4th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_4th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_4th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_4th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_4th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_5th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_5th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_5th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_5th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_5th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_5th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_5th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_6th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_6th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_6th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_6th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_6th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_6th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_6th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_7th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_7th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_7th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_7th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_7th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_7th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_7th_T7 = $GenerateRoutine->getCourseName();			
					}


			       else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_8th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_8th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_8th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_8th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_8th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_8th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Wednesday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_8th_T7 = $GenerateRoutine->getCourseName();			
					}
					
					//Thursday
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' && $GenerateRoutine->getSlotNo() == '1') {
						$S_1st_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_1st_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_1st_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_1st_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_1st_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_1st_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 1st' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_1st_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_2nd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_2nd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_2nd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_2nd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_2nd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_2nd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 2nd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_2nd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' && $GenerateRoutine->getSlotNo() == '1') {
						$S_3rd_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_3rd_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_3rd_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_3rd_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_3rd_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_3rd_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 3rd' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_3rd_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_4th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_4th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_4th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_4th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_4th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_4th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 4th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_4th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_5th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_5th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_5th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_5th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_5th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_5th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 5th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_5th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_6th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_6th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_6th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_6th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_6th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_6th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 6th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_6th_T7 = $GenerateRoutine->getCourseName();			
					}

					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_7th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_7th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_7th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_7th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_7th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_7th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 7th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_7th_T7 = $GenerateRoutine->getCourseName();			
					}


			       else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' && $GenerateRoutine->getSlotNo() == '1') {
						$S_8th_T1 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '2') {
						$S_8th_T2 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '3') {
						$S_8th_T3 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '4') {
						$S_8th_T4 = $GenerateRoutine->getCourseName();
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '5') {
						$S_8th_T5 = $GenerateRoutine->getCourseName();		
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '6') {
						$S_8th_T6 = $GenerateRoutine->getCourseName();			
					}
					else if ($GenerateRoutine->getDayName() == 'Thursday' && $GenerateRoutine->getTermName() == 'B.Sc 8th' &&$GenerateRoutine->getSlotNo() == '7') {
						$S_8th_T7 = $GenerateRoutine->getCourseName();			
					}
				}
			}
		
			?> 
		<table width="100%" border="2" cellpadding="15" bgcolor="#4EAFAF" cellpadding="6">
		
			<tr bgcolor="gray" align="center">
				<th colspan="3"></th>	
				<th>8:00-8:50</th>
				<th>8:50-9:40</th>
				<th>9:40-10:50</th>
				<th>10:50-11:30</th>
				<th>11:40-12:30</th>
				<th>12:30-1:20</th>
				<th bgcolor="skyblue" rowspan="46">Break 1:30-2:30</th>
				<th>2:30-5:00</th>
			</tr>
		     <tr align="center" bgcolor="silver">
				<td rowspan="9"><b>Sunday</b></td>	
			</tr>
			
			
		    <tr>
		    	<td colspan="2">1st year 1st Term</td>
		    	<td><?php echo $S_1st_T1; ?></td>
				<td><?php echo $S_1st_T2; ?></td>
				<td><?php echo $S_1st_T3; ?></td>
				<td><?php echo $S_1st_T4; ?></td>
				<td><?php echo $S_1st_T5; ?></td>
				<td><?php echo $S_1st_T6; ?></td>
				<td><?php echo $S_1st_T7; ?></td>
		    </tr>
		    
		    <tr>
				<td colspan="2">1st year 2nd Term</td>
				<td><?php echo $S_2nd_T1; ?></td>
				<td><?php echo $S_2nd_T2; ?></td>
				<td><?php echo $S_2nd_T3; ?></td>
				<td><?php echo $S_2nd_T4; ?></td>
				<td><?php echo $S_2nd_T5; ?></td>
				<td><?php echo $S_2nd_T6; ?></td>
				<td><?php echo $S_2nd_T7; ?></td>		
			</tr>

			<tr>
				<td colspan="2">2nd year 1st Term</td>
				<td><?php echo $S_3rd_T1; ?></td>
				<td><?php echo $S_3rd_T2; ?></td>
				<td><?php echo $S_3rd_T3; ?></td>
				<td><?php echo $S_3rd_T4; ?></td>
				<td><?php echo $S_3rd_T5; ?></td>
				<td><?php echo $S_3rd_T6; ?></td>
				<td><?php echo $S_3rd_T7; ?></td>
			</tr>
			
			<tr>
				<td colspan="2">2nd year 2nd Term</td>
				<td><?php echo $S_4th_T1; ?></td>
				<td><?php echo $S_4th_T2; ?></td>
				<td><?php echo $S_4th_T3; ?></td>
				<td><?php echo $S_4th_T4; ?></td>
				<td><?php echo $S_4th_T5; ?></td>
				<td><?php echo $S_4th_T6; ?></td>
				<td><?php echo $S_4th_T7; ?></td>
			</tr>
			
			<tr>
				<td colspan="2">3rd year 1st Term</td>
				<td><?php echo $S_5th_T1; ?></td>
				<td><?php echo $S_5th_T2; ?></td>
				<td><?php echo $S_5th_T3; ?></td>
				<td><?php echo $S_5th_T4; ?></td>
				<td><?php echo $S_5th_T5; ?></td>
				<td><?php echo $S_5th_T6; ?></td>
				<td><?php echo $S_5th_T7; ?></td>
			</tr>

			<tr>
				<td colspan="2">3rd year 2nd Term</td>
				<td><?php echo $S_6th_T1; ?></td>
				<td><?php echo $S_6th_T2; ?></td>
				<td><?php echo $S_6th_T3; ?></td>
				<td><?php echo $S_6th_T4; ?></td>
				<td><?php echo $S_6th_T5; ?></td>
				<td><?php echo $S_6th_T6; ?></td>
				<td><?php echo $S_6th_T7; ?></td>
			</tr>
			
			<tr>
				<td colspan="2">4th year 1st Term</td>
				<td><?php echo $S_7th_T1; ?></td>
				<td><?php echo $S_7th_T2; ?></td>
				<td><?php echo $S_7th_T3; ?></td>
				<td><?php echo $S_7th_T4; ?></td>
				<td><?php echo $S_7th_T5; ?></td>
				<td><?php echo $S_7th_T6; ?></td>
				<td><?php echo $S_7th_T7; ?></td>
			</tr>

			<tr>
				<td colspan="2">4th year 2nd Term</td>
				<td><?php echo $S_8th_T1; ?></td>
				<td><?php echo $S_8th_T2; ?></td>
				<td><?php echo $S_8th_T3; ?></td>
				<td><?php echo $S_8th_T4; ?></td>
				<td><?php echo $S_8th_T5; ?></td>
				<td><?php echo $S_8th_T6; ?></td>
				<td><?php echo $S_8th_T7; ?></td>
			</tr>
			

			<tr align="center" bgcolor="silver">
				<td rowspan="9"><b>Monday</b></td>
			</tr>
			
			<tr align="center" bgcolor="silver">
				<td colspan="2">1st year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr align="center" bgcolor="silver">
				<td colspan="2">1st year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">2nd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">2nd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">3rd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">3rd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">4th year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="silver">
				<td colspan="2">4th year 2nd Term</td>
				<td><?php ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align="center" bgcolor="orange">
				<td rowspan="9"><b>Tuesday<b></td>
				
			</tr>

			<tr>
				<td colspan="2">1st year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr>
				<td colspan="2">1st year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>

			<tr>
				<td colspan="2">2nd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">2nd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">3rd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">3rd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">4th year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">4th year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align="center" bgcolor="khaki">
				<td rowspan="9"><b>Wednesday</b></td>
				
			</tr>

				<tr align="center" bgcolor="khaki">
				<td colspan="2">1st year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr align="center" bgcolor="khaki">
				<td colspan="2">1st year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">2nd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">2nd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">3rd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">3rd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">4th year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="khaki">
				<td colspan="2">4th year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align="center" bgcolor="aqua">
				<td rowspan="9"><b>Thursday</b></td>				
			</tr>
			<tr>
				<td colspan="2">1st year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr>
				<td colspan="2">1st year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>

			<tr>
				<td colspan="2">2nd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">2nd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">3rd year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">3rd year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">4th year 1st Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td colspan="2">4th year 2nd Term</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
	</table>

</div>
</body>
</html>
