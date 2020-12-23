<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>flower_pots_create</title>
</head>
<body>
    <h1>화분 생성하는 페이지</h1>
    
    <form action="create_process.php" method="post">
        <p><input type="text" name="title" placeholder="화분 제목"></p>
        <input type="hidden" name="state" value="1">
        <p><input type="submit" value="생성하기"></p>
    </form>

    <a href="home.php">처음으로</a>
</body>
</html>