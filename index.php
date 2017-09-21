<?= include_once "header.php";?>
    <form name="countArray" action="" method="post" >
    <input name="num" type="number" value="<?= $_POST["num"];?>" >
    <input name="num2" type="number" value="<?= $_POST["num2"];?>"  >
    <input name="line" type="radio" value="0" checked>
    <input name="line" type="radio" value="1">
    <input type="submit" name="run" value="sub"><td>
</form>

<?= include_once "function.php";?>

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
<?= include_once "foother.php";?>