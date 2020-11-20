<?php
require_once 'db.php';
require_once 'spinformation.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brainster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/small.css" rel="stylesheet">
    <link href="css/responsivetable.css" rel="stylesheet">
    <link href="css/responsivedesktop.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid cliped-header">
    <nav class="navbar navbar-bg-sp navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href=""><img src="images/logo.png" alt="logo-picture"></a>
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="images/logo.png">  <span>&times; Затвори</span> </a>
                    <a href="register.php">Регистрирај се</a>
                    <a href="login.php">Најави се</a>
                    <a href="#">За нас</a>
                    <a href="#">Галерија</a>    
                    <a href="#">Контакт</a>
                </div>
                <span class="nav navbar-nav" id="main">
                    <a><button class="openbtn" onclick="openNav()"><b>☰ Мени</b></button></a>
                </span>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.brainster.io/business" class="navbar-btn-one"><b>Обука за компании</b></a></li>
                <li><a href="https://www.brainster.io/business" class="navbar-btn-two"><b>Вработи наши студенти</b></a></li>
            </ul>
    </nav>
</div>

<div class="container information ">

    <div class="row">
        <div class="col-md-12"><h1><b><?= $currentGame[0]['title'] ?></b></h1></div>
        </div>

        <div class="row  grey-row"  >
            <div class="col-md-3"><b><i class="far fa-clock"></i>Time Frame <br> <?= $currentGame[0]['duration'] ?></b></div>
            <div class="col-md-3"><b><i class="fas fa-user-friends"></i>Group Size <br> <?= $currentGame[0]['group_size'] ?></b></div>
            <div class="col-md-3"><b><i class="fas fa-landmark"></i>Facilitation Level <br> <?= $currentGame[0]['flevel'] ?></b></div>
            <div class="col-md-3"><b><i class="fas fa-paint-roller"></i>Materijals <br> <?= $currentGame[0]['materijals'] ?></b></div>
</div>

<div class="col-md-12">

    <p> <?= $currentGame[0]['text'] ?></p>
     <hr>
     <p><?= $currentGame[0]['text2'] ?>
</div>

</div>

<div class="container-fluid footer-sp">


<div class="col-md-12 text-center header-title footer-bg sp-title">
    <b>FUTURE-PROOF YOUR ORGANIZATION</b>
</div>
<div class="col-md-12 text-center">
    Find out how to unlock progress in your business. Understand your current state, identify<br>
    opportunity areas and prepare to take charge of your organization future.
</div>
<div class="col-md-12 text-center">
<a href="https://brainsterquiz.typeform.com/to/kC2I9E"><button class="assessment-btn"><b>Take the assessment</b></button></a>
</div>


<div class="row footer-margin">
    <div class="col-md-4 text-center footer-left-hover">
        <a class="footer-left" href="https://brainster.co/about">About us</a>
        <a class="footer-left" href="https://brainster.co/contact">Contact</a>
        <a class="footer-left" href="https://www.facebook.com/pg/brainster.co/photos/">Gallery</a>
    </div>

    <div class="col-md-4 text-center footer-logo">
        <img src="images/logo.png" alt="logo">
    </div>

    <div class="col-md-4 text-center footer-right-hover">
        <a href="https://www.linkedin.com/school/brainster-co/"><i class="fab fa-linkedin-in footer-right"></i></a>
        <a href="https://twitter.com/BrainsterCo"> <i class="fab fa-twitter footer-right"></i></a>
        <a href="https://www.facebook.com/brainster.co" target="_blank"><i class="fab fa-facebook-f footer-right"></i></a>
    </div>




    </div>
</div>










</body>
<script src="main.js"></script>
</html>