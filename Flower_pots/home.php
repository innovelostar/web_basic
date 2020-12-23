<?php
    function list_print() {
        $list = scandir('data/');
        $i = 1;
        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"./flower_view.php?id=$list[$i]\">".$list[$i]."</a></li>";
                }
            }
            $i += 1;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>flower_pots</title>
</head>
<body>
    <h1>화분 선택하는 페이지</h1>
    <ul>
    
    <?php list_print(); ?>
    
    </ul>
    <a href="create.php">새로운 화분</a>
</body>
</html>