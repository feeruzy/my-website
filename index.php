<?php
include('script/class.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feeruzy's Home page</title>


    <!--<link href="third-party/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!--<link href="third-party/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <script src="third-party/js/jquery.min.js"></script>
    <script src="third-party/js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>

</head>

<body>
<div class="container-fluid">
    <div id="intro" class="row">
        <div class="nav">
            <?php nav($nav_items); ?>
        </div>

        <div id="title">
            <p>Hi, I'm <strong>Feeruzy</strong>, <br> a web developer</p>
        </div>
    </div>

    <div id="service" class="row">
        <div class="content">
            <h2>my services:</h2>
            <?php service($services); ?>
        </div>
    </div>

    <div id="info" class="row">
        <div class="content">
            <h2>Social Information:</h2>
            <?php social($social_items); ?>
        </div>
    </div>

    <div id="footer">
        &copy; 2013 - <?=date('Y')?>
    </div>

</div>



</body>
</html>