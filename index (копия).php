
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input name="num2" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php

$l=$_POST["num"];
$l2=$_POST["num2"];
$array = [];
for($i = 0; $i < $l; $i++){
           for($j = 0; $j < $l2; $j++){
             $array[$i][$j]=rand(1,9999);
          }
}
?>
<html>
<table border='1'>
    <tr>
        <?php foreach ($array as $str)?>
        <td>
            <?php foreach ($str as $data)?>

        </td>
    </tr>
</table>
</html>
=======

$l = $_POST["num"];
$l2 = $_POST["num2"];
$array = [];
echo ">";
for($i = 0; $i<$l; $i++){

        for($i2 = 0; $i2 < $l2; $i2++){

            $array[$i][$i2] = rand(1,9999);
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

