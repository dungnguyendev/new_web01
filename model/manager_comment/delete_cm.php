<?php 
    require "./thuvien_comment.php";
    $id = $_GET['id'];
    $sql = "DELETE  FROM comment WHERE id = $id";
    $kq = $conn->query($sql);
    header("Location: ./index.php")
?> 