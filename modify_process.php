<?php
    rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
    file_put_contents('data/'.$_POST['title'], $_POST['Description']);
    header('Location: /study/home.php?id='.$_POST['title']);
?>