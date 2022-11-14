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
// if (!$conn) {
//     echo "Kết nối không thành công";
// } else {
//     echo "Kết nối thành công";
// }
// ghi chu
function phanTrangIphone($search, $item_per_page, $current_page)
{
    try {

        global $conn;
        $offset = ($current_page - 1) * $item_per_page; // số sản phẩm bắt đầu lấy
        if ($search) {
            $sql = "SELECT * FROM products WHERE product_name LIKE '%" . $search . "%' ORDER BY product_id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
        } else {
            $sql = "SELECT * FROM products WHERE product_id ORDER BY product_id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
        }
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm: " . __FUNCTION__ . "." . $e->getMessage());
    }
}
function tongSoHang()
{
    global $conn;
    $sql = "SELECT * FROM products WHERE product_id";
    $kq = $conn->query($sql);
    if (!empty($kq)) {
        $count = $kq->rowCount();
        return $count;
    }
    return 0;
}
function chiTienSanPham()
{
    global $conn;
    $sql = "SELECT * FROM products WHERE product_id = " . $_GET['id'];
    $kq = $conn->query($sql);
    return $kq;
}
function anhSanPham()
{
    global $conn;

    $sql = "SELECT * FROM products WHERE product_id = " . $_GET['id'];
    $kq = $conn->query($sql);
    return $kq;
}
function ShowTieuDe($current_page, $item_per_page)
{
    try {
        global $conn;
        $offset = ($current_page - 1) * $item_per_page; // số sản phẩm bắt đầu lấy
        $sql = "SELECT * FROM products WHERE product_id ORDER BY product_id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $e) {
        die("Lỗi trong hàm: " . __FUNCTION__ . "." . $e->getMessage());
    }
}
function showGioHang()
{
    $ttgh = "";
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $sum = 0;
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2];
                $sum += $tt;
                $ttgh .= '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td><img class="image012" src="' . $_SESSION['giohang'][$i][0] . '" alt=""</td>
                            <td>' . number_format($_SESSION['giohang'][$i][2], 0, ",", ".") . '</td>
                            <td>' . $_SESSION['giohang'][$i][3] . '</td>
                            <td>' . number_format($tt, 0, ",", ".") . '</td>
                            <td><a class="delete_01" href="../user_giohang/giohang.php?delete_sp=' . $i . '">Xoá</td>
                        </tr>';
            }
            $ttgh .= '<tr>
                        <td colspan="5">Tổng tiền</td>
                        <td colspan="2">' . number_format($sum, 0, ",", ".") . '</td>
                    </tr>';
            // } else {
            //     $ttgh.= '<tr>
            //             <td colspan="7">Bạn hay mua sắm đi nào !</td>
            //         </tr>';
        }
    }
    return $ttgh;
}
function show_bill(){
    global $conn;
    $id_user = $_GET['id_user'];
    $sql = "SELECT * FROM bill_user WHERE id_user = $id_user";
    $kq = $conn->query($sql);
    return $kq;
}
function detail_bill(){
    global $conn;
    $id = $_GET['id'];
    $sql = "SELECT * FROM cart_user WHERE id_bill = $id";
    $kq = $conn->query($sql);
    return $kq;
}
function Sum_bill(){
    global $conn;
    $id = $_GET['id'];
    $sql = "SELECT SUM(cart_user.thanhtien) AS thanhtien FROM cart_user WHERE id_bill = $id";
    $tongtien = $conn->query($sql);
    return $tongtien;
}
function showGioHangBill()
{
    $ttghbill = "";
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $sum = 0;
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2];
                $sum += $tt;
                $ttghbill .= '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td><img class="image012" src="' . $_SESSION['giohang'][$i][0] . '" alt=""</td>
                            <td>' . number_format($_SESSION['giohang'][$i][2], 0, ",", ".") . '</td>
                            <td>' . $_SESSION['giohang'][$i][3] . '</td>
                            <td>' . number_format($tt, 0, ",", ".") . '</td>
                        </tr>';
            }
            $ttghbill .= '<tr>
                        <td colspan="5">Tổng tiền</td>
                        <td colspan="2">' . number_format($sum, 0, ",", ".") . '</td>
                    </tr>';
            // } else {
            //     $ttgh.= '<tr>
            //             <td colspan="7">Bạn hay mua sắm đi nào !</td>
            //         </tr>';
        }
    }
    return $ttghbill;
}
function SumDonHang()
{
    $sum = 0;
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2];
                $sum += $tt;
            }
        }
    }
    return $sum;
}
function SumSanPham()
{
    $sumsp = "";
    $sum = 0;
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][3];
                $sum += $tt;
                $sumsp .= '<span class="amount">' . $sum . '</span>';
            }
        }
    }
    return $sumsp;
}
function taodonhang($name_bill, $address, $email, $tel, $total, $pttt,$status_bill,$id_user )
{
    global $conn;
    $sql = "INSERT INTO bill_user (name_bill,address,email,tel,total,pttt,status_bill,id_user) VALUE ('$name_bill','$address','$email',$tel,$total,$pttt,'$status_bill','$id_user') ";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function taogiohang($tensp, $price, $image, $soluong, $thanhtien, $idbill)
{
    global $conn;
    $sql = "INSERT INTO cart_user (tensp,price,image_product,soluong,thanhtien,id_bill) VALUE ('$tensp','$price','$image','$soluong','$thanhtien','$idbill') ";
    $conn->exec($sql);
}
