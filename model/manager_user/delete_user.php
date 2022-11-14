<?php
    require_once './thu_vien_user.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $kq = $conn->query($sql);
    header('Location: ./index.php');
