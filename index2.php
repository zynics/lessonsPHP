
<form name="countArray" action="" method="post" >
    <input name="num" type="number" value="<?= $_POST["num"];?>" >
    <input name="num2" type="number" value="<?= $_POST["num2"];?>"  >
    <input name="line" type="radio" value="0" checked>
    <input name="line" type="radio" value="1">
    <input type="submit" name="run" value="sub"><td>
</form>
<?php

$l = $_POST["num"];
$l2 = $_POST["num2"];
$line = $_POST["line"];
//$l = 3;
//$l2 = 5;
$c = $l2-1;
$array = [];


for($i = 0; $i < $l; $i++){

        for($i2 = 0; $i2 < $l2; $i2++) {
            if ($line == 0) {
                if ($i == $i2)
                    $array[$i][$i2] = 1;
                else
                    $array[$i][$i2] = 0;
            }
            else {
                if ($i2 == $c) {
                    $array[$i][$i2] = 1;
                    $c--;
                } else {
                    $array[$i][$i2] = 0;
                }
            }
        }
}
echo "</table>";
var_dump($array);

?>
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
