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
  <div class="container">
    <form class="form-horizontal teacher_info" method="post">
       <?php 
            if (isset($_POST['submit'])) {
                echo $msg;
              }
            ?>
        <table width="100%" border="1" cellpadding="15" background = "blue" bgcolor=" #64ABD4">
          <tr>
          <div class="form-group">
            <td><label class="control-label col-md-4" for="name">Name :</label></td>
            <div class="col-md-6">
              <td><input type="name" name="name" class="form-control" style="width:50%;"  placeholder="Enter Name..."></td>
            </div>
          </div>
          </tr>

          <tr>
            <div class="form-group">
              <td><label class="control-label col-md-4" for="teacherEmail">Email :</label></td>
              <div class="col-md-6">
                <td><input required type="text" class="form-control" style="width:50%;" name="teacherEmail" id="teacherEmail" placeholder="Enter Email"></td>
              </div>
            </div>
          </tr>

          <tr>
          <div class="form-group">
            <td><label class="control-label col-md-4" for="teacherPass">Discipline :</label></td>
            <div class="col-md-6">
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
                            $var = $var. '<option value="'.$Disciplines->getName().'"';
                                $var = $var.'>'.$Disciplines->getName().'</option>';            
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
            <div class="col-md-offset-4 col-md-8">
              <td><button type="submit" class="btn btn-primary" name="submit">Submit</button></td>
            </div>
          </div>
        </tr>
          </table>
    </form>
  </div>
  </body>
  </html>