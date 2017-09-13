<html><header></header><body>
<form name="countArray" action="" method="post">
    <input name="num" type="number" >
    <input type="submit" name="run" value="sub">
</form>
<?php
$l=$_POST["num"];
$array = array();
print "<table border='1'><tr>";
for($i=0; $i<$l; $i++){print"<td>";$array[$i]=rand(1,9999);print"$array[$i]";print"</td>";}
print"</tr></table>";
?>
</body></html>