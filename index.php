<?php require_once "header.php"; ?>
<?php require_once "function.php"; ?>
<?php require_once "result.php"; ?>

    <form name="countArray" action="" method="post">
        <label>Высота массива</label><br/>
        <input name="height" type="number" value="<?= $_POST["height"]; ?>"><br/>
        <label>Ширина массива</label><br/>
        <input name="width" type="number" value="<?= $_POST["width"]; ?>"><br/>
        <label>Слево на право</label>
        <!--   <input name="derectline" type="radio" value="0" <? /* $_POST["derectline"] == 0 ? echo "checked"; */ ?> ><br/>-->
        <input name="derectline" type="radio" value="0" checked><br/>
        <label>Право на лево</label>
        <input name="derectline" type="radio" value="1"><br/>
        <input type="submit" name="run" value="sub">
    </form>
<?php
$height = $_POST["height"];
$width = $_POST["width"];
$derectline = $_POST["derectline"];

$array = $derectline == 0 ? LeftToRight($height, $width) : RightToLeft($height, $width);
?>
<?php require_once "footer.php"; ?>