

<?php
$L = 0;
$R = 5;
$UP = 0;
$DW = $R;
$z = 1;
$st=$R+1;
$array=[];


for ($i = 0; $i <=$R; $i++) {
    for ($j = 0; $j <= $R; $j++) {
        $array[$i][$j] = 0;

    }
}
for ($k=0;  $K< $st; $k += 2) {

for ($j = $UP; $j <= $R; $j++) {
    $array[$UP][$j] = $z;
    $z++;
}
$UP++;

for ($i = $UP; $i <= $DW; $i++) {
    $array[$i][$R] = $z;
    $z++;
}
$R--;

for ($j = $R; $j >= $L; $j--) {
    $array[$DW][$j] = $z;
    $z++;
}
$DW--;

for ($i = $DW; $i >= $UP; $i--) {
    $array[$i][$L] = $z;
    $z++;
}
$L++;

var_dump($array);
}
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