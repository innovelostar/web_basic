<?php
    unlink('data/'.$_POST['title']);
    header("Location: ./home.php");
?>