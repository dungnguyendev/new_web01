<?php 
$host = "localhost"; // địa chỉ mysql server sẽ kết nối đến
$dbname = "all_the_product"; //tên database sẽ kết nối đến
$username = "all_the_product"; // username đê rkết nối đến database
$password = "123"; // mát khẩu để kết nối đến database
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
$listSP = $conn->query($sql);


function quan_ly_don_hang(){
    global $conn;
    $sql = "SELECT * FROM bill_user ";
    $kq = $conn->query($sql);
    return $kq;
}
function showDonHang(){
    global $conm;
    $sql = "SELECT bill_user.*, COUNT(cart_user.id_bill) AS tong_san_pham, COUNT(cart_user.soluong) AS tong_so_luong_sp_bill FROM cart_user INNER JOIN bill_user ON cart_user.id_bill = bill_user.id GROUP BY cart_user.id_bill";
}

if (!empty($_SESSION['current_user'])) {
    $currentUser = $_SESSION['current_user'];
}
function phanTrangBill($search, $item_per_page, $current_page){
    try {

        global $conn;
        $offset = ($current_page - 1) * $item_per_page; // số sản phẩm bắt đầu lấy
        if ($search) {
            $sql = "SELECT * FROM bill_user WHERE name_bill LIKE '%" . $search . "%' ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
        } else {
            $sql = "SELECT * FROM bill_user WHERE id ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
        }
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm: " . __FUNCTION__ . "." . $e->getMessage());
    }
}
function tongSoHang_bill(){
    global $conn;
    $sql = "SELECT * FROM bill_user WHERE id";
    $kq = $conn->query($sql);
    if (!empty($kq)) {
        $count = $kq->rowCount();
        return $count;
    }
    return 0;
}