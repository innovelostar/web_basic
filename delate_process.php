<?php
    unlink('data/'.$_POST['id']);
    header('Location: /study/home.php');
?>