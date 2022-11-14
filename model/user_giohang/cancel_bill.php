<?php 
    require "../connect.php";
    $id_user = $_GET['id_user'];
    $sql = "UPDATE bill_user SET status_bill = 'Đã huỷ đơn' WHERE id_user = $id_user";
    $kq = $conn->query($sql);
    header("Location: ./giohang.php");
?>