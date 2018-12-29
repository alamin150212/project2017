<?php

spl_autoload_register(function ($class){
    include_once "template/libs/".$class.".php";
});

include "app/config/config.php";

$main = new Main();
