<?php include('data.php');

    //for showing navigation items.------------------------------------------------------------------------------------
    function nav($array)
    {
        echo '<ul>';
        foreach ($array as $name => $link) {
            echo '<li><a href="http://'.$link.'" >'.$name.'</a></li>';
        }
        echo '</ul>';
    }


    //for showing service part.----------------------------------------------------------------------------------------
    function service($array)
    {
        echo '<div class="item">';
        foreach ($array as $attr) {
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-circle fa-stack-2x '.$attr[0].'"></i>';
            echo '<i class="fa fa-'.$attr[1].' fa-stack-1x fa-inverse"></i>';
            echo '</span>';
            echo '<p>'.$attr[2].'</p>';
        }
        echo '</div>';
    }


    //for showing social items.----------------------------------------------------------------------------------------
    function social($array)
    {
        foreach ($array as $social)
        {
            echo '<div class="item">';
            echo '<span class="fa-2x fa-fw">';
            echo '<i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>';
            echo '</span>';
            echo '<p><a href="'.$social[2].'">'. $social[3] .'</a></p>';
            echo '</div>';
        }
    }