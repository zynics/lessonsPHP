<?php

$height = $_POST["height"];
$width = $_POST["width"];
$derectline = $_POST["derectline"];

$array = $derectline == 0 ? LeftToRight($height, $width) : RightToLeft($height, $width);

function LeftToRight($height, $width)
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

function RightToLeft($height, $width)
{
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

