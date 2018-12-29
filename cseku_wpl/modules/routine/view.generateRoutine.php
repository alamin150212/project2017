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



<div class="panel panel-default">    
	    <div class="panel-body">
			<form class="form-horizontal" method="post">
		   <?php 
            if (isset($_POST['save'])) {
                echo $msg;
              }
            ?>
            
				<table width="100%" border="1" cellpadding="15" background = "blue" bgcolor=" #64ABD4">
					<tr>
					    <div class="form-group">
							<td><label class="control-label col-sm-4" for="txtterm">Term Name: </label></td>
							<div class="col-sm-6">
							<td>
							    <?php
							    $var = '<select name="txtterm" id="select-from-term">';
								$Result = $_GenerateRoutineBAO->getAllTerms();
								if($Result->getIsSuccess()){
									$Tarm = $Result->getResultObject();		
							       for ($i = 0; $i < sizeof($Tarm); $i++) { 		       		
							       		$Terms = $Tarm[$i];	    
							    		$var = $var. '<option value="'.$Terms->getName().'"';
							          	$var = $var.'>'.$Terms->getName().'</option>';
									}
									$var = $var.'</select>';
								}
								echo $var;
								?>
							</td>					
							</div>
						</div>
					</tr>
					<tr>
					    <div class="form-group">
					      <td><label class="control-label col-sm-4" for="courseNo">Course No :</label></td>
					      <div class="col-sm-10">
					        <td>
						  <?php
						    $var = '<select name="courseNo" id="select-from-cat">';
							$Result = $_GenerateRoutineBAO->getAllCourseNos();
							if($Result->getIsSuccess()){
								$Course = $Result->getResultObject();
						       for ($i=0; $i < sizeof($Course); $i++) {   		
						       		$Courses = $Course[$i];
						    		$var = $var. '<option value="'.$Courses->getCourseNo().'"';   			
						          	$var = $var.'>'.$Courses->getCourseNo().'</option>';
								}
								$var = $var.'</select>';
							}
							echo $var;
							?>
								</td>	
					      </div>
					    </div>
					</tr>

					<tr>
					    <div class="form-group">
					      <td><label class="control-label col-sm-4" for="courseTitle">Day :</label></td>
					      <div class="col-sm-10">
					       <td>
						   <?php
						    $var = '<select name="routineDay" id="select-from-day">';
							$Result = $_GenerateRoutineBAO->getAllDay();
							if($Result->getIsSuccess()){
								$Day = $Result->getResultObject();
						       for ($i=0; $i < sizeof($Day); $i++) {   		
						       		$Days = $Day[$i];
						    		$var = $var. '<option value="'.$Days->getName().'"';   			
						          	$var = $var.'>'.$Days->getName().'</option>';
								}
								$var = $var.'</select>';
							}
							echo $var;
							?>  
							</td>	
					      </div>
					    </div>
					</tr>
					<tr>
					    <div class="form-group">
					      <td><label class="control-label col-sm-2" for="courseTitle">Course Teacher: </label></td>
					      <div class="col-sm-10">
					      <td>
						   <?php
						    $var = '<select name="coursrteacher" id="select-from-teacher">';
							$Result = $_GenerateRoutineBAO->getAllTeacher();
							if($Result->getIsSuccess()){
								$Teacher = $Result->getResultObject();
						       for ($i=0; $i < sizeof($Teacher); $i++) {   		
						       		$Teachers = $Teacher[$i];
						    		$var = $var. '<option value="'.$Teachers->getName().'"';   			
						          	$var = $var.'>'.$Teachers->getName().'</option>';
								}
								$var = $var.'</select>';
							}
							echo $var;
							?>  
						  </td>
					      </div>
					    </div>
					</tr>
					<tr>
					    <div>
							<td><label class="control-label col-sm-4" for="courseTitle">Time Slot: </label></td><br>    
							<td>
						   <?php
						    $var = '<select name="timeslot" id="select-from-time">';
							$Result = $_GenerateRoutineBAO->getRoutineTime();
							if($Result->getIsSuccess()){
								$RoutineTime = $Result->getResultObject();
						       for ($i=0; $i < sizeof($RoutineTime); $i++) {   		
						       		$RoutineTimes = $RoutineTime[$i];
						    		$var = $var. '<option value="'.$RoutineTimes->getID().'"';   			
						          	$var = $var.'>'.$RoutineTimes->getTimeSlot().'</option>';
								}
								$var = $var.'</select>';
							}
							echo $var;
							?>  
						  </td>	
						</div>
					</tr>
				 	<tr>
					<div>
						<td><label class="control-label col-sm-4" for="courseTitle">Discipline: </label></td><br>
						<td>
					    <?php
						    $var = '<select name="txtDis" id="select-from-cat">';
							$Result = $_GenerateRoutineBAO->getAllDiscipline();
							if($Result->getIsSuccess()){
								$Discipline = $Result->getResultObject();	
						       for ($i=0; $i < sizeof($Discipline); $i++) {
						       		$Disciplines = $Discipline[$i];
						    		$var = $var. '<option value="'.$Disciplines->getName().'"';			
						          	$var = $var.'>'.$Disciplines->getName().'</option>';	
								}
								$var = $var.'</select>';
							}
							echo $var;
							?>	
						</td>
					</div>
					</tr> <br>
					<tr>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					      	<td>
								<?php
								if(isset($_GET['edit']))
								{
									?>
									<button type="submit" name="update">Update</button>
									<?php
								}
								else
								{
									?>
									<button type="submit" name="save">Save</button>
									<?php
								}
								?>		
							</td>
						 </div>
					    </div>
					</tr>
			  </table>
			</form>
		</div>

		<table width="100%" border="1" cellpadding="15" bgcolor="#4EAFAF">
			<br>
	<?php	
	$Result = $_GenerateRoutineBAO->getAllRoutine();
	//if DAO access is successful to load all the Terms then show them one by one
	if($Result->getIsSuccess()){
		$RoutineList = $Result->getResultObject();
	?> 
		<tr>
			<th>Term Name</th>
			<th>Course No</th>
			<th>Day</th>
			<th>Course Teacher</th>
			<th>Time Slot</th>
			<th>Discipline</th>
		</tr>
		<?php
		for($i = 0; $i < sizeof($RoutineList); $i++) {
			$GenerateRoutine = $RoutineList[$i];
			?>
		    <tr>
		    	<td><?php echo $GenerateRoutine->getTermName(); ?></td>
		    	<td><?php echo $GenerateRoutine->getCourseName(); ?></td>
		    	<td><?php echo $GenerateRoutine->getDayName(); ?></td>
		    	<td><?php echo $GenerateRoutine->getTeacherName(); ?></td>
		    	<td><?php echo $GenerateRoutine->getSlotNo(); ?></td>  	
		    	<td><?php echo $GenerateRoutine->getDiscipline(); ?></td>

		    </tr>
	    <?php

		}

	}
	else{

		echo $Result->getResultObject(); //giving failure message
	}

	?>
	</table>

</div>
</body>
</html>
