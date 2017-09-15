
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input name="num2" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php

//$l = $_POST["num"];
//$l2 = $_POST["num2"];
$l = 3;
$l2 = 5;

$array = [];
echo ">";
for($i = 0; $i<$l; $i++){

        for($i2 = 0; $i2 < $l2; $i2++) {
            //if ($i == $i2)
            //    $array[$i][$i2] = 1;
            //else
            //   $array[$i][$i2] = 0;

            if ($i2== $l2)
                $array[$i][$i2] = 1;
            else
                $array[$i][$i2] = 0;

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