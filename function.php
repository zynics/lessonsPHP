<?php



function LeftToRight($height, $width)
{
    $array=[];
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

function RightToLeft($height, $width)
{
    $array=[];
    $c = $width - 1;
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($j == $c) {
                $array[$i][$j] = 1;
                $c--;
            } else
                $array[$i][$j] = 0;
        }
    }
    return $array;
}

?>

