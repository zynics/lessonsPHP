<?php
//$height = $_POST["num"];
//$width = $_POST["num2"];
$line = $_POST["line"];
$line = 0;
$height = 3;
$width  = 5;
$c = $width -1;
$array = [];

if ($line == 0)
        matrixLeftToRight (3,4);
    else
        matrixRightToLeft ($height, $width);


function matrixLeftToRight($height, $width)
{
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($i == $j)
                $array[$i][$j] = 1;
            else
                $array[$i][$j] = 0;
        }
    }
    return $array;
}

//function matrixRightToLeft () {
//        if ( $width  == $c)  {
//            $array[$i][$width ] = 1;
//            $c--;
//        else
//            $array[$i][$width ] = 0;
//        }
//}
?>