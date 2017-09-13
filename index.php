<html>
<header></header>
<body>

<?php
$l=4;
$i=0;
$array = array(433,5465,43534,3424,465,4645,2342);
echo "<table border='1'>";
echo "<tr>";
while($i <=$l){
    echo"<td>";
    echo "$array[$i]";
    echo "</td>";
    $i++;
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>