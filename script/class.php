<?php include('data.php');

    //for HTML Header: ------------------------------------------------------------------------------------------------
    function head($array)
    {
        foreach ($array as $item){
            echo $item;
        }
    }

    //for showing navigation items.------------------------------------------------------------------------------------
    function nav($array)
    {
        echo '<ul>';
        foreach ($array as $name => $link) {
            echo '<li><a href="http://'.$link.'" >'.$name.'</a></li>';
        }
        echo '<li><i class="fa fa-simplybuilt"></i>beta</li>';
        echo '</ul>';
    }


    // title show. ---------------------------------------------------------------------------------------------------
    function showTitle($array, $screen_size = null)
    {

        if(!$screen_size) {
            echo $array['other'];
        } elseif($screen_size == 'xs') {
            echo $array['xs'];
        }
    }



    //for showing service part.----------------------------------------------------------------------------------------
    function service($array, $screen_size = null)
    {
        if(!$screen_size)
        {
            echo '<div class="col-sm-6 col-md-6 col-lg-6">';
            echo '<div class="slides">';

            foreach ($array as $attr)
            {
                echo   '<div class="slide ">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-square fa-stack-2x '.$attr[0].'"></i>
                                <i class="fa fa-'.$attr[1].' fa-stack-1x fa-inverse"></i>
                            </span>
                            <p>'.$attr[2].'</p>
                        </div>';
            }

            echo '</div>';


        } else {
            echo '<div class="item">';
            foreach ($array as $attr)
            {
                echo   '<span class="fa-stack fa-2x">
                        <i class="fa fa-square fa-stack-2x '.$attr[0].'"></i>
                        <i class="fa fa-'.$attr[1].' fa-stack-1x fa-inverse"></i>
                        </span>
                        <p>'.$attr[2].'</p>';
            }
            echo '</div>';
        }
    }


    //for showing social items.----------------------------------------------------------------------------------------
    function social($array, $screen_size = null) {

        if ($screen_size == "xs") {

            echo '<div class="visible-xs">';
            foreach ($array as $social){
                echo    '<div class="item">
                         <span class="fa-stack fa-lg '.$social[1].'">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-'.$social[0].' fa-inverse fa-stack-1x"></i>
                        </span>
                         <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
                         </div>';
            }
            echo '</div>';


        } elseif(!$screen_size)
        {
            echo '<div class="social">';
            foreach ($array as $social)
            {
                echo   '<a href="'.$social[2].'" title="'.$social[3].'"><span class="fa-stack '.$social[1].'">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-'.$social[0].' fa-inverse fa-stack-1x"></i>
                        </span></a>';
            }
            echo '</div>';
        }
    }


    // skills----------------------------------------------------------------------------------------------------------
    function showSkill($array)
    {
        echo '<div class="item">';
        foreach ($array as $item) {
            echo '<p> <h3>'.$item[0].'</h3>: ';
            for ($i=1; $i<count($item); $i++)
            {
                echo $item[$i].',   ';
            }
            echo '</p>';
        }
        echo '</div>';
    }
