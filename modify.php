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
                    echo "<li><a href=\"./home.php?id=\".$list[$i]>$list[$i]</a></li>";
                }
            }
            $i += 1;
        }
        ?>
    </ol>

    <form action="modify_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id']?>">
        <p><input type="text" name="title" value="<?=$_GET['id']; ?>"></p>
        <textarea name="Description"><?=file_get_contents('data/'.$_GET['id']); ?></textarea>
        <p><input type="submit" value="Modify"></p>
    </form>
</body>
</html>