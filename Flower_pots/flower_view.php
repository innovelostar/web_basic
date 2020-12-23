<?php
function flower_state() {
    return file_get_contents('data/'.$_GET['id']);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>flower_pots_view</title>
</head>
<body>
    <h1><?= $_GET['id']?></h1>
    <form action="delete.php" method="post">
    <input type="hidden" name="title" value="<?=$_GET['id']?>">
    <input type="submit" value="삭제">
    </form>
    <?php
        if (flower_state() == "1") {
            echo "<img src=\"1.png\" width=\"300\" height=\"500\"><br>";
        } elseif (flower_state() == "2") {
            echo "<img src=\"2.png\" width=\"300\" height=\"500\"><br>";
        } elseif (flower_state() == "3") {
            echo "<img src=\"3.png\" width=\"300\" height=\"500\"><br>";
        } elseif (flower_state() == "4") {
            echo "<img src=\"4.png\" width=\"300\" height=\"500\"><br>";
        } elseif (flower_state() == "5") {
            echo "<img src=\"5.png\" width=\"300\" height=\"500\"><br>";
        } else {
            header("Location: ./home.php");
        }
    ?>
    <form action="grow.php" method="post">
        <input type="hidden" name="title" value="<?=$_GET['id']?>">
        <?php
        if (flower_state() != '5') {
            echo "<input type=\"submit\" value=\"물 주기\">";
        } else {
            echo "더 이상 꽃을 성장시킬 수 없습니다.";
        }
        ?>
    </form> <br>

    <a href="home.php">처음으로</a>
</body>
</html>