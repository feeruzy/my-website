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
        echo '<div class="item b">';
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
    //this part show in sx and sm screen.
    //for xs screen_size must set to 0
    //for sm screen_size must set to 1
    function social($array, $screen_size) {

        if ($screen_size == 0) {

            echo '<div class="visible-xs hidden-sm hidden-md hidden-lg">';
            foreach ($array as $social){
                echo    '<div class="item">
                         <span class="fa-2x fa-fw">
                         <i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>
                         </span>
                         <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
                         </div>';
            }
            echo '</div>';


        } elseif($screen_size == 1) {
            $count = count($array);
            $low = array_slice($array,0,($count/2));
            $high = array_slice($array,($count/2),$count);

            echo '<div class="row hidden-xs visible-sm hidden-md hidden-lg">';
            echo '<div class="col-sm-6">';
            foreach($low as $social) {
                echo    '<div class="item">
                         <span class="fa-2x fa-fw">
                         <i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>
                         </span>
                         <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
                         </div>';
            }
            echo '</div>';
            echo '<div class="col-sm-6">';
            foreach($high as $social) {
                echo    '<div class="item">
                         <span class="fa-2x fa-fw">
                         <i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>
                         </span>
                         <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
                         </div>';
            }
            echo '</div>';
            echo '</div>';
        }

    }























//
//
//
//                for($i=0; $i<($count/2); $i++){
//
//                    foreach ($array as $social){
//
//                        echo   '<div class="item">
//                                 <span class="fa-2x fa-fw">
//                                 <i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>
//                                 </span>visible
//                                 <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
//                                 </div>';
//                    }
//                }
//            echo '</div>';
//
//            echo '<div class="col-sm-6">';
//
//            for($i=($count/2); $i<$count; $i++){
//
//                foreach ($array as $social){
//
//                    echo   '<div class="item">
//                                 <span class="fa-2x fa-fw">
//                                 <i class="fa fa-'.$social[0].'-square '.$social[1].'"></i>
//                                 </span>
//                                 <p><a href="'.$social[2].'">'. $social[3] .'</a></p>
//                                 </div>';
//                }
//            }
//            echo '</div>';
//            echo '</div>';