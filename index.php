<html>
<header></header>
<body>

<?php
$l=4;
$arraynum =0;
$array = array(433,5465,43534,3424,465,4645,2342)
echo "<table>";
echo "<tr>";
while($i <=$l){
    echo"<td>"
    echo "$array{$arraynum}";
    $arraynum=$arraynum+1;
    $i=$i+1;
    echo</td>
}
echo "</tr>";
echo "</table>";

</body>
</html>