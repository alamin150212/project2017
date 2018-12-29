<?php
//include_once 'header.php';
include_once 'blade/view.insertCourse.blade.php';
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

							<td><label class="control-label col-sm-4" for="courseTitle">Course Title : </label></td>
							
							<div class="col-sm-6">
								<td><input type="text" class="form-control"  name="courseTitle" placeholder="Course Title" value="<?php 
								if(isset($_GET['edit'])) echo $getROW->getTitle();  ?>" /></td>
							
							</div>
						</div>
					</tr>
					<tr>
					    <div class="form-group">
					      <td><label class="control-label col-sm-2" for="courseNo">Course No :</label></td>
					      <div class="col-sm-10">
					        <td><input type="text" class="form-control" name="courseNo" id="courseNo" placeholder="Enter Course No" value="<?php 
								if(isset($_GET['edit'])) echo $getROW->getCourseNo();  ?>" /></td>
					      </div>
					    </div>
					</tr>
					<tr>
					    <div class="form-group">
					      <td><label class="control-label col-sm-2" for="CourseCredit">Credit:</label></td>
					      <td><div class="col-sm-10">          
					        <input type="text" class="form-control" name = "CourseCredit" id="CourseCredit" placeholder="Enter Credit" value="<?php 
								if(isset($_GET['edit'])) echo $getROW->getCredit();  ?>" /></td>
					      </div>
					    </div>
					</tr>
					<tr>
					    <div>
							<td><label>Course Type: </label></td><br>
								    
								<td>
								    <?php
								    // this block of code prints the list box of roles with current assigned  roles

								    $var = '<select name="txtCourceType" id="select-from-cat">';
									$Result = $_InsertCourseBAO->getAllCourseType();
										//if DAO access is successful to load all the Roles then show them one by one
									if($Result->getIsSuccess()){

										$CourseType = $Result->getResultObject();
									
								       for ($i=0; $i < sizeof($CourseType); $i++) { 
								       		
								       		$CourseTypes = $CourseType[$i];
								    
								    		$var = $var. '<option value="'.$CourseTypes->getID().'"';   			

								          	$var = $var.'>'.$CourseTypes->getName().'</option>';
							
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
						<td><label>Discipline: </label></td><br>
							    <td>
								    <?php
								    // this block of code prints the list box of roles with current assigned  roles

								    $var = '<select name="txtDis" id="select-from-cat">';
									$Result = $_InsertCourseBAO->getAllDiscipline();
										//if DAO access is successful to load all the Roles then show them one by one
									if($Result->getIsSuccess()){

										$Discipline = $Result->getResultObject();
									
								       for ($i=0; $i < sizeof($Discipline); $i++) { 
								       		
								       		$Disciplines = $Discipline[$i];
								    
								    		$var = $var. '<option value="'.$Disciplines->getID().'"';   			

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
	<?php
	
	
	$Result = $_InsertCourseBAO->getAllCourses();

	//if DAO access is successful to load all the Terms then show them one by one
	if($Result->getIsSuccess()){

		$CourseList = $Result->getResultObject();
	?> 
		<tr>
			<th>Course No</th>
			<th>Course Title</th>
			<th>Credit</th>
			<th>Course Type</th>
			<th>Discipline</th>
		</tr>
		<?php
		for($i = 0; $i < sizeof($CourseList); $i++) {
			$Course = $CourseList[$i];
			?>
		    <tr>
		    	<td><?php echo $Course->getCourseNo(); ?></td>
		    	<td><?php echo $Course->getTitle(); ?></td>
		    	<td><?php echo $Course->getCredit(); ?></td>

		    	<td>
		    		<?php $id = $Course->getCourseTypeID();
			    	$Result2 = $_InsertCourseBAO->getNameCourseTypeID($id);
			    	if ($Result2->getIsSuccess()) {
			    		$CourseType = $Result2->getResultObject();

			    		echo $CourseType->getName();
			    	}
			    	?>
			    </td>
			    <td>
		    		<?php $id = $Course->getDisciplineID();
			    	$Result2 = $_InsertCourseBAO->getNameDisciplineID($id);
			    	if ($Result2->getIsSuccess()) {
			    		$Discipline = $Result2->getResultObject();

			    		echo $Discipline->getName();
			    	}
			    	?>
			    </td>

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
