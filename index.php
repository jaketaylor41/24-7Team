<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>

        html,
        body {
            height: 100%;
        }

        body{
        }


        .videoContainer{
            padding: 5px;

        }

        .homeVideo{
            width: 1000px;
            margin: 0 auto;
            display: block;
            box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);

        }

        .logo {
            width: 90%;
            padding-top: 6%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .logo:hover{
            opacity: 0.5;
        }

        .vermilion{
            width: 40%;
            transition: .5s ease;
            backface-visibility: hidden;
            float: left;
            margin-left: 30px;
        }

        .vermilion:hover{
            opacity: 0.5;

        }

        .kellerWilliams{
            width: 40%;
            float: right;
            margin: 30px 50px 0 30px;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .kellerWilliams:hover{
            opacity: 0.5;
        }


        /* Create three equal columns that sits next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        a.waves-effect{

            display: inline;
        }



    </style>
</head>
<body>


<!--<div class="row">-->
<!--    <div class="column">-->
<!--        <a class="waves-effect" href="https://vermilionathletics.org/" target="_blank"><img class="vermilion" style="width: 15%" src="video/vermilion.jpg"></a>-->
<!--        <a class="waves-effect" href="https://www.24-7Team.com" target="_blank"><img class="logo" src="video/logo.png"></a>-->
<!--        <a class="waves-effect" href="http://greatercleveland.yourkwoffice.com/" target="_blank"><img class="kellerWilliams" src="video/kellerWilliams.png"></a>-->
<!--    </div>-->
<!---->
<!--</div>-->

<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg">-->
<!--            <a class="waves-effect" href="https://vermilionathletics.org/" target="_blank"><img class="vermilion" style="width: 15%" src="video/vermilion.jpg"></a>-->
<!--        </div>-->
<!--        <div class="col-lg">-->
<!--            <a class="waves-effect" href="https://www.24-7Team.com" target="_blank"><img class="logo" src="video/logo.png"></a>-->
<!--        </div>-->
<!--        <div class="col-lg">-->
<!--            <a class="waves-effect" href="http://greatercleveland.yourkwoffice.com/" target="_blank"><img class="kellerWilliams" src="video/kellerWilliams.png"></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="videoContainer">
<video id="video" class="homeVideo" controls autoplay>
    <source src="video/24-7Team.mp4" type="video/mp4">
</video>
</div>


<div class="row">
    <div class="column">
        <a class="waves-effect" href="https://vermilionathletics.org/" target="_blank"><img class="vermilion" src="video/vermilion.jpg"></a>
    </div>
    <div class="column">
        <a class="waves-effect" href="https://www.24-7Team.com" target="_blank"><img class="logo" src="video/logo.png"></a>
    </div>
    <div class="column">
        <a class="waves-effect" href="http://greatercleveland.yourkwoffice.com/" target="_blank"><img class="kellerWilliams" src="video/kellerWilliams.png"></a>
    </div>
</div>





<!--<!--Mask with wave-->
<!--<div class="view overlay">-->
<!--    <img class="logo" src="video/logo.png">-->
<!--    <a href="https://www.24-7Team.com">-->
<!--        <div class="mask waves-effect waves-light rgba-white-slight"></div>-->
<!--    </a>-->
<!--</div>-->
<!---->
<!--<div class="view overlay">-->
<!--    <img class="vermilion" style="width: 15%" src="video/vermilion.jpg">-->
<!--    <a href="https://vermilionathletics.org/">-->
<!--        <div class="mask waves-effect waves-light rgba-white-slight"></div>-->
<!--    </a>-->
<!--</div>-->
<!---->
<!--<div class="view overlay">-->
<!--    <img class="kellerWilliams" src="video/kellerWilliams.png">-->
<!--    <a href="http://greatercleveland.yourkwoffice.com/">-->
<!--        <div class="mask waves-effect waves-light rgba-white-slight"></div>-->
<!--    </a>-->
<!--</div>-->










<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>


</body>
</html>