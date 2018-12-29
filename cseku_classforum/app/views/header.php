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
        
        <meta name="msapplication-TileColor" content="#ffffff">
        
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
                            <a class="nav-link" href="<?php echo BASE_DIR ?>/Search"><b>Search</b></a>
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
            </div>
            </nav>
        </div>
        
        <div class="container">

