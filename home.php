<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sumin Study Webpage</title>
</head>
<body>
    <h1><a href="/study/home.php">Web Content</a></h1>
    <ol>
        <?php
        $list = scandir('./data');
        $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"./home.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i += 1;
        }
        ?>
    </ol>

    <div>*Function Menu*</div>
    <a href="create.php">Create</a>
    <?php if (isset($_GET['id'])) { ?>
        <a href="modify.php?id=<?= $_GET['id']?>">Modify</a>
        <form action="delate_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="Delate">
        </form>
    <?php } ?>

    <h2><?php 
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Please choce list";
        }
    
    ?></h2>
    <p><?php
        if (isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        }
    ?></p>
</body>
</html>