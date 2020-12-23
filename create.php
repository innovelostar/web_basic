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

    <form action="create_process.php" method="post">
        <p><input type="text" name="title" placeholder="Title"></p>
        <textarea name="Description"placeholder="Description"></textarea>
        <p><input type="submit" value="Wirte"></p>
    </form>
</body>
</html>