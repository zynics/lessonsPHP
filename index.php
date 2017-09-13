<html><header></header><body>
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php
$l=$_POST["num"];
$array = array();
echo "<table border='1'><tr>";
for($i=0; $i<$l; $i++){echo"<td>";$array[$i]=rand(1,9999);echo"$array[$i]";echo"</td>";}
echo"</tr></table>";
?>
</body></html>