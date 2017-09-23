<!--<form name="countArray" action="" method="post">-->
<!--    <input name="num" type="number" value="--><?//= $_POST["num"]; ?><!--">-->
<!--    <input name="num2" type="number" value="--><?//= $_POST["num2"]; ?><!--">-->
<!--    <input name="line" type="radio" value="0" checked>-->
<!--    <input name="line" type="radio" value="1">-->
<!--    <input type="submit" name="run" value="sub">-->
<!--</form>-->

<?php
$height = 3;
$width = 3;


    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($i == $j)
                $array[$i][$j] = 1;
            else
                $array[$i][$j] = 0;
        }
    }


?>


func
<table border='1'>
    <?php foreach ($array as $key => $row): ?>
        <tr>
            <?php foreach ($row as $item): ?>
                <td>
                    <?= $item; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
