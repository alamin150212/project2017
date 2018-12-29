<?php

include_once UTILITY.'class.util.php';
include_once MODULES_ROUTINE.'bao/class.routineManageBAO.php';
include_once COMMON.'class.common.routine.php';

$_RoutineManageBAO = new RoutineManageBAO();
$_DB = DBUtil::getInstance();
$Routine=new Routine();

if(isset($_POST['assign']) && isset($_POST['anotherUserDDL'])){
    $Routine=new Routine();
    $Routine->setRoutineId(Util::getGUID());
    $Routine->setRoutineYearId($_DB->secureInput($_POST['yearDDL']));
    $Routine->setRoutineTermId($_DB->secureInput($_POST['termDDL']));
    $Routine->setRoutineCourseId($_DB->secureInput($_POST['courseDDL']));
    $Routine->setRoutineUserId($_DB->secureInput($_POST['userDDL']));

    $Routine->setRoutineAnotherUserId($_DB->secureInput($_POST['anotherUserDDL']));

    $Routine->setRoutineDayId($_DB->secureInput($_POST['dayDDL']));
    $Routine->setRoutineTime($_DB->secureInput($_POST['timeDDL']));

    $_RoutineManageBAO->createRoutineAnotherUser($Routine);
}

else if(isset($_POST['assign'])){
    $Routine=new Routine();
    $Routine->setRoutineId(Util::getGUID());
    $Routine->setRoutineYearId($_DB->secureInput($_POST['yearDDL']));
    $Routine->setRoutineTermId($_DB->secureInput($_POST['termDDL']));
    $Routine->setRoutineCourseId($_DB->secureInput($_POST['courseDDL']));
    $Routine->setRoutineUserId($_DB->secureInput($_POST['userDDL']));
    $Routine->setRoutineDayId($_DB->secureInput($_POST['dayDDL']));
    $Routine->setRoutineTime($_DB->secureInput($_POST['timeDDL']));

    $_RoutineManageBAO->createRoutine($Routine);
}

if (isset($_GET['edit'])){
    $getRow=$_RoutineManageBAO->getRoutineById($_GET['edit'])->getResultObject();
}


if(isset($_POST['update']))
{
    $Routine = new $Routine();

    $Routine->setRoutineId($_GET['edit']);
    $Routine->setRoutineYearId($_POST['yearDDL']);
    $Routine->setRoutineTermId($_POST['termDDL']);
    $Routine->setRoutineCourseId($_POST['courseDDL']);
    $Routine->setRoutineUserId($_POST['userDDL']);
    $Routine->setRoutineDayId($_POST['dayDDL']);
    $Routine->setRoutineTime($_POST['timeDDL']);
    $_RoutineManageBAO->updateRoutine($Routine);

    header("Location:".PageUtil::$ROUTINE_MANAGE);
}

if (isset($_GET['del'])){
    $Routine=new Routine();
    $Routine->setRoutineId($_GET['del']);

    $_RoutineManageBAO->deleteRoutine($Routine);

    header("Location:".PageUtil::$ROUTINE_MANAGE);
}

?>