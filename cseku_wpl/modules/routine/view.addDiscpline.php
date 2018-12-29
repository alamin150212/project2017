<?php
//include_once 'header.php';
include_once 'blade/view.addDiscipline.blade.php';
//include_once '/../../common/class.common.php';
// include_once '../../../common/class.common.routine.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>USER CRUD Operations</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
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




  <div id="header">
    <label style="">Discpline:</label>
  </div>
    <div id="form">
       <form  method="post">
       
          <table border="1" cellpadding="15" background = "blue" bgcolor=" #64ABD4">
              <tr>
                <div class="form-group">
                  <td><label class="control-label col-md-4" for="discplineName">Name :</label></td>
                  <div class="col-md-6">
                    <td><input type="text" name="DiscplineName" placeholder="Enter Discpline Name" value="<?php 
                      if(isset($_GET['edit'])) echo $globalUser->getFirstName();  ?>" /></td>
                  </div>
                </div>
              </tr>
              <tr>
          <td>
            <?php
            if(isset($_GET['edit']))
            {
              ?>
              <button type="submit" name="update">update</button>
              <?php
            }
            else
            {
              ?>
              <button type="submit" name="save">save</button>
              <?php
            }
            ?>
          </td>
        </tr>
            </table>
       </form>
    </div>
  </body>
  </html>
   
