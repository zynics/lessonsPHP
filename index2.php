
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input name="num2" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php
echo "123";
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

        <td>


        </td>
    </tr>
</table>
</html>
