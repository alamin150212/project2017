<?php
include_once 'blade/view.routineManage.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.routine.php';
?>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="text-center">Manage Routine</h3>
        </div>
        <div class="panel-body">
            <br>
            <form method="post" class="form-horizontal">
                <!--YearDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="yearDDL" class="control-label">Year :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="yearDDL" id="yearDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select Year</option>
                            <?php
                            $YearList=$_RoutineManageBAO->getAllYears()->getResultObject();
                            foreach ($YearList as $year){
                                ?>
                                <option value="<?php echo $year->getYearId(); ?>" <?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineYearId()==$year->getYearId()){
                                        echo 'selected="selected"';
                                    }
                                }
                                    ?>><?php echo $year->getYearName(); ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!--TermDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="termDDL" class="control-label">Term :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="termDDL" id="termDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select Term</option>
                            <?php
                            $TermList=$_RoutineManageBAO->getAllTerms()->getResultObject();
                            foreach ($TermList as $term){
                                ?>
                                <option value="<?php echo $term->getTermId(); ?>" <?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineTermId()==$term->getTermId()){
                                        echo 'selected="selected"';
                                    }
                                }
                                ?>><?php echo $term->getTermName(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!--CourseDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="courseDDL" class="control-label">Course :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="courseDDL" id="courseDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select Course</option>
                            <?php
                            $CourseList=$_RoutineManageBAO->getAllCourse()->getResultObject();
                            foreach ($CourseList as $course){
                                ?>
                                <option value="<?php echo $course->getCourseId(); ?>"<?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineCourseId()==$course->getCourseId()){
                                        echo 'selected="selected"';
                                    }
                                } ?>><?php echo $course->getCourseNo(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!--UserDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="userDDL" class="control-label">Teacher :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="userDDL" id="userDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select User</option>
                            <?php
                            $UserList=$_RoutineManageBAO->getAllTeachers()->getResultObject();
                            foreach ($UserList as $user){
                                ?>
                                <option value="<?php echo $user->getID(); ?>" <?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineUserId()==$user->getID()){
                                        echo 'selected="selected"';
                                    }
                                } ?>><?php echo $user->getFirstName().' '.$user->getLastName(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <!-- another UserDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="userDDL" class="control-label">Another Teacher :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="anotherUserDDL" id="userDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select User</option>
                            <?php
                            $UserList=$_RoutineManageBAO->getAllTeachers()->getResultObject();
                            foreach ($UserList as $user){
                                ?>
                                <option value="<?php echo $user->getID(); ?>" <?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineAnotherUserId()==$user->getID()){
                                        echo 'selected="selected"';
                                    }
                                } ?>><?php echo $user->getFirstName().' '.$user->getLastName(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!--Routine Day-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="dayDDL" class="control-label">Day :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="dayDDL" id="dayDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select Day</option>
                            <?php
                            $DayList=$_RoutineManageBAO->getAllDay()->getResultObject();
                            foreach ($DayList as $day){
                                ?>
                                <option value="<?php echo $day->getRoutineDayId(); ?>"<?php
                                if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineDayId()==$day->getRoutineDayId()){
                                        echo 'selected="selected"';
                                    }
                                }
                                ?>><?php echo $day->getRoutineDay(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!--TimeDDL-->
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-1 text-right">
                        <label for="timeDDL" class="control-label">Time :</label>
                    </div>
                    <div class="col-md-4">
                        <select name="timeDDL" id="timeDDL" class="form-control">
                            <option value="" selected="selected" disabled="disabled">Select Time</option>
                            <?php
                            $TimeList=$_RoutineManageBAO->getAllTimeSlot()->getResultObject();
                            foreach ($TimeList as $time){
                                ?>
                                <option value="<?php echo $time->getRoutineTimeId(); ?>" <?php if (isset($_GET['edit'])){
                                    if ($getRow->getRoutineTime()==$time->getRoutineTimeId()){
                                        echo 'selected="selected"';
                                    }
                                } ?>><?php echo $time->getRoutineTimeTimeSlot(); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-5 text-right">
                        <?php
                        if (isset($_GET['edit'])){
                            ?>
                            <input type="submit" name="update" id="update" value="Update" class="btn btn-default">
                        <?php
                        }else{
                            ?>
                            <input type="submit" name="assign" id="assign" value="Assign" class="btn btn-default">
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Year</th>
                <th>Term</th>
                <th>Course</th>
                <th>Teacher</th>
                <th>Day</th>
                <th>Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            $RoutineList=$_RoutineManageBAO->getAllRoutine()->getResultObject();
            foreach ($RoutineList as $routine){
                ?>
                <tr>
                    <td><?php echo $_RoutineManageBAO->getYearName($routine->getRoutineYearId())->getResultObject()->getYearName() ;?></td>
                    <td><?php echo $_RoutineManageBAO->getTermName($routine->getRoutineTermId())->getResultObject()->getTermName();?></td>
                    <td><?php echo $_RoutineManageBAO->getCourseNo($routine->getRoutineCourseId())->getResultObject()->getCourseNo();?></td>
                    <td><?php $UserName=$_RoutineManageBAO->getUserName($routine->getRoutineUserId())->getResultObject();
                    echo $UserName->getFirstName().' '.$UserName->getLastName();
                        ?></td>
                    <td><?php echo $_RoutineManageBAO->getDayName($routine->getRoutineDayId())->getResultObject()->getRoutineDay();?></td>
                    <td><?php echo $_RoutineManageBAO->getTimeSlot($routine->getRoutineTime())->getResultObject()->getRoutineTimeTimeSLot();?></td>
                    <td><a href="?edit=<?php echo $routine->getRoutineID(); ?>" onclick="return confirm('sure to edit!!')">Edit</a></td>
                    <td><a href="?del=<?php echo $routine->getRoutineID(); ?>" onclick="return confirm('sure to delete!!')">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>