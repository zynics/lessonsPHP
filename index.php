<html><header></header><body>
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input name="num2" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php
$l=$_POST["num"];
$l2=$_POST["num2"];
$array = array();
echo "<table border='1'><tr>";
for($i=0; $i<$l; $i++){
    echo"<tr>";
          for($i2=0; $i2<$l2; $i++){
              echo"<td>";
              $array[$i][$i2]=rand(1,9999);
              echo"$array[$i][$i2]";
              echo"</td>";
          }
    echo"</tr>";
}
echo"</tr></table>";
?>
</body></html>