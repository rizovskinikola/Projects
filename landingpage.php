<?php

require_once 'db.php';
require_once 'fetchcards.php';

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

    <nav class="navbar navbar-bg">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="landingpage2.html"><img src="images/logo.png" alt="logo-picture"></a>
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
     
        </div>
    </nav>

    <div class="container-fluid header-bg">
        <div class="row">
            <div class="col-md-12 text-center brain">
                Изработено од студенти на академијата за програмирање на <span class="brainster">Brainster</span>
            </div>
            <div class="col-md-12 text-center header-title">
                <b>FUTURE-PROOF YOUR ORGANIZATION</b>
            </div>
            <div class="col-md-12 text-center">
                Find out how to unlock progress in your business. Understand your current state, identify<br>
                opportunity areas and prepare to take charge of your organization future.
            </div>
            <div class="col-md-12 text-center separate">
                <a href="https://brainsterquiz.typeform.com/to/kC2I9E"><button class="assessment-btn"><b>Take the assessment</b></button></a>
            </div>


            <div class="col-md-12 text-center header-title footer-bg">
                <b>FUTURE-PROOF YOUR ORGANIZATION</b>
            </div>
            <div class="col-md-12 text-center">
                Find out how to unlock progress in your business. Understand your current state, identify<br>
                opportunity areas and prepare to take charge of your organization future.
            </div>
            <div class="col-md-12 text-center">
                <a href="https://brainsterquiz.typeform.com/to/kC2I9E"><button class="assessment-btn"><b>Take the assessment</b></button></a>
            </div>
        </div>


        <div class="row footer">
            <div class="col-md-4 col-sm-12 col-lg-4 text-center footer-left">
                <a class="footer-left" href="https://brainster.co/about">About us</a>
                <a class="footer-left" href="https://brainster.co/contact">Contact</a>
                <a class="footer-left" href="https://www.facebook.com/pg/brainster.co/photos/">Gallery</a>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 text-center footer-logo">
                <img src="images/logo.png" alt="logo">
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 text-center footer-right-hover">
                <a href="https://www.linkedin.com/school/brainster-co/"><i class="fab fa-linkedin-in footer-right"></i></a>
                <a href="https://twitter.com/BrainsterCo"> <i class="fab fa-twitter footer-right"></i></a>
                <a href="https://www.facebook.com/brainster.co" target="_blank"><i class="fab fa-facebook-f footer-right"></i></a>
            </div>




        </div>
    </div>

  <!-- Cards -->

    <div class="container container-position">
        <div class="row">

        <div class="col-md-12 text-center filters">
                <div class="col-md-4">
                    <div>Browse by category</div>
                    <div class="btn btn-category">Иновација</div>
                    <div class="btn btn-category">Лидерство</div>
                    <div class="btn btn-category">Акција</div>
                    <div class="btn btn-category">Тим</div>
                </div>

                <div class="col-md-4">
                    <div>Time frame(minutes)</div>
                    <div class="btn btn-time" >5-30</div>
                    <div class="btn btn-time">30-60</div>
                    <div class="btn btn-time">60-120</div>
                    <div class="btn btn-time">120-240</div>
                </div>

                <div class="col-md-3">
                    <div>Group size</div>
                    <div class="btn btn-group">2-10</div>
                    <div class="btn btn-group">10-40</div>
                    <div class="btn btn-group">40+</div>
                   
                </div>
                <div class="col-md-1 search">
                    <div class="btn btn-danger" id="search">Search</div>
                </div>
                
            </div>

            <form action="singlepage.php" method="$_GET">
            <?php foreach($games as $row) { ?> 
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4 col-xl-4 cards">
                    <div class="thumbnail">
                    <img src="<?= $row['game_picture'] ?>">
                <div class="caption">
                <h5 class="text-center"><b><?= $row['title'] ?></b></h5>
            <p><b>Категорија:</b><span class="this-category" style="color:deepskyblue;"><?= $row['category'] ?></span><img class="pull-right" src="<?= $row['round_picture']?>"></img></p>
        <h5><b>Времетраење</b></h5>
    <h6 class="this-time"><?= $row['duration'] ?></h6>
    <h5><b>Група:</b> <span class="this-group"><?= $row['group_size'] ?></span></h5>
    <p class="text-center"><button id="myID" name="myID" type="submit" value="<?= $row['id'] ?>">Повеќе</button></p>
</div>
</div>
</div>
            
         <?php } ?>

            </form>

        </div>
    </div>




</body>
<script src="main.js"></script>

</html>
