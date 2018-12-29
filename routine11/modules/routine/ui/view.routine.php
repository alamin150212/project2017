    <?php
include_once 'blade/view.routine.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.routine.php';

?>
<div class="col-md-12">
    <div class="panel panel-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Day</th>
                <th>Year</th>
                <th>Term</th>
                <th>8:00-8:50</th>
                <th>8:50-9:40</th>
                <th>9:40-10:30</th>
                <th>10:50-11:40</th>
                <th>11:40-12:30</th>
                <th>12:30-1:20</th>
                <th>&nbsp;</th>
                <th>2:30-3:20</th>
                <th>3:20-4:10</th>
                <th>4:10-5:00</th>
            </tr>

            <?php
            $RoutineCourse=array();
            $RoutineUser=array();
            
            $RoutineList=$_RoutineBAO->getAllRoutine()->getResultObject();
            //var_dump($RoutineList);
            $sunFlag=1;
            $monFlag=1;
            $tueFlag=1;
            $wedFlag=1;
            $thrFlag=1;

            foreach ($RoutineList as $routine) {
                    if($routine->getRoutineDayId()==1){
                        if ($routine->getRoutineYearId()==1) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,1,1)->getResultObject();
                                ?>
                                <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                            $RoutineAnotherUserId[$i]="";
                                            $ConflictStatusAnother[$i]=0;

                                        }

                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }

                                                $_RoutineBAO->getCountAnotherUser(1,1,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['1']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineAnotherUserId['1']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();

                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }

                                                $_RoutineBAO->getCountAnotherUser(1,2,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['2']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineAnotherUserId['2']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $_RoutineBAO->getCountAnotherUser(1,3,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['3']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineAnotherUserId['3']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();
                                                
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $_RoutineBAO->getCountAnotherUser(1,4,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['4']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineAnotherUserId['4']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();
                                                
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1 || $ConflictStatusAnother[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <br>
                                                <?php echo $RoutineAnotherUserId[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1 || $ConflictStatusAnother[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,1,2)->getResultObject();
                            
                                    ?>
                                 <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                            $RoutineAnotherUserId[$i]="";
                                            $ConflictStatusAnother[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }

                                                $_RoutineBAO->getCountAnotherUser(1,1,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['1']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();

                                                $RoutineAnotherUserId['1']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }

                                                $_RoutineBAO->getCountAnotherUser(1,2,$rtn->getRoutineAnotherUserId());
                                                if(isset($_SESSION['countAnotherUsers'])){
                                                    $ConflictStatusAnother['2']=$_SESSION['countAnotherUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineAnotherUserId['2']=$_RoutineBAO->getUserName($rtn->getRoutineAnotherUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            $RoutineId['3']=$rtn->getRoutineId();    
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1 || $ConflictStatusAnother[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <br>
                                                <?php echo $RoutineAnotherUserId[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1 || $ConflictStatusAnother[$i]>1) {
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }else
                        if ($routine->getRoutineYearId()==2) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,2,1)->getResultObject();

                                    ?>
                                 <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                            $RoutineAnotherUserId[$i]="";
                                            $ConflictStatusAnother[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();

                                        
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['4']=$rtn->getRoutineId();
                                                
                                                

                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                 $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo  $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php
                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,2,2)->getResultObject();

                                ?>
                                 <tr>
                                 <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==3) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,3,1)->getResultObject();

                                ?>
                               <tr>
                                 <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,3,2)->getResultObject();

                                ?>
                                <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                        
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();$RoutineId['9']=$rtn->getRoutineId();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==4) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,4,1)->getResultObject();

                                ?>
                                <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(1,4,2)->getResultObject();

                                ?>
                                <tr>
                                <td><?php if ($sunFlag) {
                                    echo "Sunday";
                                    $sunFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(1,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(1,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(1,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(1,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(1,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(1,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(1,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(1,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(1,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }
                    }elseif ($routine->getRoutineDayId()==2) {
                        if ($routine->getRoutineYearId()==1) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,1,1)->getResultObject();

                                ?>
                               <tr>
                                 <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['1']=$rtn->getRoutineId();

                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,1,2)->getResultObject();

                                ?>
                               <tr>
                                 <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                            $RoutineId[$i]="";
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());//conflict
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['2']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['3']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();

                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['4']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['5']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['6']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['7']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['8']=$rtn->getRoutineId();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                                $RoutineId['9']=$rtn->getRoutineId();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $RoutineId[$i]; ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==2) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,2,1)->getResultObject();

                                ?>
                              <tr>
                                 <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,2,2)->getResultObject();

                                ?>
                                <tr>
                                 <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==3) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,3,1)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,3,2)->getResultObject();

                                ?>
                               <tr>
                                 <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==4) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,4,1)->getResultObject();


                                ?>
                              <tr>
                                <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(2,4,2)->getResultObject();


                                ?>
                             <tr>
                                <td><?php if ($monFlag) {
                                    echo "Monday";
                                    $monFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(2,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(2,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(2,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(2,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(2,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(2,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(2,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(2,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(2,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }
                    }elseif ($routine->getRoutineDayId()==3) {
                        if ($routine->getRoutineYearId()==1) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,1,1)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,1,2)->getResultObject();

                                ?>
                                <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==2) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,2,1)->getResultObject();

                                ?>
                              <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,2,2)->getResultObject();

                                ?>
                                <tr>
                               <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==3) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,3,1)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,3,2)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==4) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,4,1)->getResultObject();

                                ?>
                             <tr>
                                <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(3,4,2)->getResultObject();

                                ?>
                               <tr>
                               <td><?php if ($tueFlag) {
                                    echo "Tuesday";
                                    $tueFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(3,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(3,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(3,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(3,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(3,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(3,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(3,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(3,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(3,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }
                    }elseif ($routine->getRoutineDayId()==4) {
                        if ($routine->getRoutineYearId()==1) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,1,1)->getResultObject();

                                ?>
                              <tr>
                                <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,1,2)->getResultObject();

                                ?>
                              <tr>
                                  <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==2) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,2,1)->getResultObject();

                                ?>
                              <tr>
                                   <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,2,2)->getResultObject();

                                ?>
                              <tr>
                                  <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==3) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,3,1)->getResultObject();

                                ?>
                               <tr>
                                  <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,3,2)->getResultObject();

                                ?>
                             <tr>
                                  <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==4) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,4,1)->getResultObject();

                                ?>
                              <tr>
                                  <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(4,4,2)->getResultObject();

                                ?>
                               <tr>
                                   <td><?php if ($wedFlag) {
                                    echo "Wednesday";
                                    $wedFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(4,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(4,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(4,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(4,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(4,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(4,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(4,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(4,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(4,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }
                    }elseif ($routine->getRoutineDayId()==5) {
                        if ($routine->getRoutineYearId()==1) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,1,1)->getResultObject();

                                ?>
                               <tr>
                                  <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,1,2)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>1st</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==2) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,2,1)->getResultObject();

                                ?>
                                <tr>
                                 <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,2,2)->getResultObject();

                                ?>
                               <tr>
                               <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>2nd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==3) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,3,1)->getResultObject();

                                ?>
                             <tr>
                               <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,3,2)->getResultObject();

                                ?>
                                <tr>
                                <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>3rd</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }elseif ($routine->getRoutineYearId()==4) {
                            if($routine->getRoutineTermId()==1){
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,4,1)->getResultObject();

                                ?>
                                <tr>
                               <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>1st</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }elseif ($routine->getRoutineTermId()==2) {
                                $RoutineDetail=$_RoutineBAO->getAllRoutineByDayYearTerm(5,4,2)->getResultObject();

                                ?>
                               <tr>
                                <td><?php if ($thrFlag) {
                                    echo "Thursday";
                                    $thrFlag=0;
                                } ?></td>
                                <td>4th</td>
                                <td>2nd</td>
                                    
                                        <?php
                                        for($i=1;$i<=9;$i++){
                                            $RoutineCourse[$i]="";
                                            $RoutineUser[$i]="";
                                            $ConflictStatus[$i]=0;
                                        }
                                        
                                        foreach ($RoutineDetail as $rtn) {
                                            
                                            if($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==1){
                                                $_RoutineBAO->getCountUser(5,1,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['1']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['1']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['1']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==2){
                                                $_RoutineBAO->getCountUser(5,2,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['2']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['2']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['2']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==3){
                                                $_RoutineBAO->getCountUser(5,3,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['3']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['3']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['3']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==4){
                                                $_RoutineBAO->getCountUser(5,4,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['4']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['4']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['4']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==5){
                                                $_RoutineBAO->getCountUser(5,5,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['5']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['5']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['5']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==6){
                                                $_RoutineBAO->getCountUser(5,6,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['6']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['6']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['6']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==7){
                                                $_RoutineBAO->getCountUser(5,7,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['7']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['7']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['7']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==8){
                                                $_RoutineBAO->getCountUser(5,8,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['8']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['8']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['8']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }elseif($_RoutineBAO->getTimeSlot($rtn->getRoutineTime())->getResultObject()->getRoutineTimeId()==9){
                                                $_RoutineBAO->getCountUser(5,9,$rtn->getRoutineUserId());
                                                if(isset($_SESSION['countUsers'])){
                                                    $ConflictStatus['9']=$_SESSION['countUsers'];
                                                }
                                                $RoutineCourse['9']=$_RoutineBAO->getCourseNo($rtn->getRoutineCourseId())->getResultObject()->getCourseNo();
                                                $RoutineUser['9']=$_RoutineBAO->getUserName($rtn->getRoutineUserId())->getResultObject()->getFullName();
                                            
                                            }

                                        }
                                        
                                        for($i=1;$i<=9;$i++){
                                            if ($i==7){
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                            ?>
                                            <td <?php if ($ConflictStatus[$i]>1) {
                                                echo 'class="text-danger"';
                                            } ?>>
                                                <?php echo $RoutineCourse[$i]; ?>
                                                <br>
                                                <?php echo $RoutineUser[$i]; ?>
                                                <?php 
                                                if ($ConflictStatus[$i]>1){
                                                    ?>
                                                    <a href="routine_manage.php?edit=<?php echo $rtn->getRoutineId(); ?>" class="btn btn-danger">Change</a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                </tr>
                                <?php

                            }
                        }
                    }
            }
            ?>
        </table>
    </div>
</div>