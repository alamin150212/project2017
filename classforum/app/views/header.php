<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="<?php echo CSS_DIR ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- Latest compiled and minified CSS -->
        <link href="<?php echo CSS_DIR ?>/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

        <!--Customs css goes here-->
        <link href="<?php echo CSS_DIR ?>/main.css" rel="stylesheet" type="text/css" />

        <!--Tab icon for the website-->
        <link rel="icon" href="">
        
        <!--Here goes the title of the website-->
        <TITLE><?php echo "$pageName"?></TITLE>

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo IMG_DIR ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo IMG_DIR ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMG_DIR ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMG_DIR ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMG_DIR ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo IMG_DIR ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo IMG_DIR ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo IMG_DIR ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo IMG_DIR ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo IMG_DIR ?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo IMG_DIR ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMG_DIR ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo IMG_DIR ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo IMG_DIR ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo IMG_DIR ?>/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body class="box-pattern">
    <!--your HTML design goes here-->
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light" ;">
            <!-- <a class="navbar-brand" href="#" ></a> -->
            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    Session::init();
                }
                if(Session::get("login") == true) {
                    if(Session::get("user_role")== "Teacher"){
                ?>
                        <!--Navbar for Teacher-->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>"><b>Home</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/SyllabusPublic"><b>Syllabus</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/Index/accountmanage"><b>Acccount</b></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/Login/logOut"><b>Log out</b></a>
                            </li>
                        </ul>
                <?php

                    } elseif(Session::get("user_role")=="Student"){
                ?>
                        <!--Navbar for Student-->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>"><b>Home</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/SyllabusPublic"><b>Syllabus</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/Index/result"><b>My Result</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/CourseRegistration"><b>Course Registration</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/AccountManage"><b>Acccount</b></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_DIR ?>/Login/logOut"><b>Log out</b></a>
                            </li>
                        </ul>
                <?php

                    }
                } else{
                ?>
                    <!--Navbar for Public-->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_DIR ?>"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_DIR ?>/SyllabusPublic"><b>Syllabus</b></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_DIR ?>/Register/Index"><b>Register</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_DIR ?>/Login/index"><b>Log in</b></a>
                        </li>
                    </ul>
                <?php
                }
                ?>
<!--                <ul class="navbar-nav mr-auto">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--"><b>Home</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/syllabus"><b>Syllabus</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/result"><b>My Result</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/courseRegistration"><b>Course Registration</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/newsyllabus"><b>add syllabus</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/accountmanage"><b>Acccount</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item dropdown">-->
<!--                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                      <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                        <a class="dropdown-item" href="#">Action</a>-->
<!--                        <a class="dropdown-item" href="#">Another action</a>-->
<!--                        <a class="dropdown-item" href="#">Something else here</a>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <ul class="navbar-nav">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Index/registration"><b>Registration</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Login/index"><b>Log in</b></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo BASE_DIR ?><!--/Login/logOut"><b>Log out</b></a>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            </nav>
        </div>
        
        <div class="container">

