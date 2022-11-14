<?php 
    require "./thu_vien.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM bill_user WHERE id = $id";
    $kq = $conn->query($sql);
    header("Location: ./manager_bill.php");
?>