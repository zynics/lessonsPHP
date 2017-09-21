<?php
$l = $_POST["num"];
$l2 = $_POST["num2"];
$line = $_POST["line"];
//$l = 3;
//$l2 = 5;
$c = $l2-1;
$array = [];

functi
for($i = 0; $i < $l; $i++){

    for( $i2 = 0; $i2 < $l2; $i2++ ) {
        if ( $line == 0 ) {
            if ( $i == $i2 )
                $array[$i][$i2] = 1;
            else
                $array[$i][$i2] = 0;
        }
        else {
            if ( $i2 == $c)  {
                $array[$i][$i2] = 1;
                $c--;
            } else {
                $array[$i][$i2] = 0;
            }
        }
    }
}
?>