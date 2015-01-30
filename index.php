<?php include('script/class.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <?php head($header_items); ?>
</head>

<body>
<div class="container-fluid">
    <div id="intro" class="row">
        <div class="nav">
            <?php nav($nav_items); ?>
        </div>

        <div id="title">
            <?php showTitle($title, xs) ?>
            <div class="row col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 hidden-xs visible-sm visible-md visible-lg">
                <div class="row">
                    <?php showTitle($title) ?>
                    <?php service($services); ?>
                </div>
                <div class="row">
                    <?php social($social_items); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="service" class="row visible-sm-* hidden-sm hidden-md hidden-lg">
        <div class="content">
            <h2>my services:</h2>
            <?php service($services, xs); ?>
        </div>
    </div>

    <div id="skill" class="row hidden-xs">
        <div class="content">
            <h2>My skills:</h2>
            <?php showSkill($skill_items); ?>
        </div>
    </div>

    <div id="info" class="row visible-sm-* hidden-sm hidden-md hidden-lg">
        <div class="content">
            <h2>Social Information:</h2>
            <?php social($social_items, xs); ?>
        </div>
    </div>

    <div id="footer">
        &copy; 2013 - <?=date('Y')?>
    </div>

</div>

</body>
</html>