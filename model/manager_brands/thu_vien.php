<?php 
    try {
        $host = "localhost"; // địa chỉ mysql server sẽ kết nối đến
        $dbname = "all_the_product"; //tên database sẽ kết nối đến
        $username = "all_the_product"; // username đê rkết nối đến database
        $password = "123"; // mát khẩu để kết nối đến database
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) { // bắt lỗi không kết nối được
        die("Lỗi: " . $e->getMessage());
    }
    if (!empty($_SESSION['current_user'])) {
        $currentUser = $_SESSION['current_user'];
    }
    function thong_ke_brands(){
        global $conn;
        $sql = "SELECT * FROM brands";
        $kq = $conn->query($sql);
        return $kq;
    }
?>


