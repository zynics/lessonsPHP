
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input name="num2" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php
echo "123";
$l=$_POST["num"];
$l2=$_POST["num2"];
$array = array();
echo "<table border='1'>";
for($i=0; $i<$l; $i++){
    echo"<tr>";
          for($i2=0; $i2<$l2; $i2++){
              echo"<td>";
              $array[$i][$i2]=rand(1,9999);
              echo"$array[$i][$i2]";
              echo"</td>";
          }
    echo"</tr>";
}
echo "</table>";
