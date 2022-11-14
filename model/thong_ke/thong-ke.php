<?php

$host = "localhost"; // địa chỉ mysql server sẽ kết nối đến
$dbname = "all_the_product"; //tên database sẽ kết nối đến
$username = "all_the_product"; // username đê rkết nối đến database
$password = "123"; // mát khẩu để kết nối đến database
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
$listSP = $conn->query($sql);


function thong_ke_hang_hoa()
{
    global $conn;
    $sql = "SELECT brands.*, COUNT(products.brand_id) AS number_cate, MIN(products.price) AS gia_min, MAX(products.price) AS gia_cao_nhat, AVG(products.price) AS gia_trung_binh FROM products INNER JOIN brands ON products.brand_id = brands.brand_id GROUP BY products.brand_id";
    $kq = $conn->query($sql);
    return $kq;
}
function bieu_do(){
    global $conn;
    $sql = "SELECT brands.*, COUNT(products.brand_id) AS number_cate FROM products INNER JOIN brands ON products.brand_id = brands.brand_id GROUP BY products.brand_id";
    $kq = $conn->query($sql);
    return $kq;
}
if (!empty($_SESSION['current_user'])) {
    $currentUser = $_SESSION['current_user'];
}