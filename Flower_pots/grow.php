<?php
    $data = file_get_contents('data/'.$_POST['title']);
    (string)$new_data = (int)$data + 1;
    file_put_contents('data/'.$_POST['title'], $new_data);
    header("Location: ./flower_view.php?id=".$_POST[title]);
?>