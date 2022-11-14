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
    function binh_luan_select_by_id(){
        global $conn;
        $id = $_GET['id'];
        $sql = "SELECT * FROM comment WHERE ma_bl = $id";
        $kq = $conn->query($sql);
        return $kq;
    }
    function sum_binh_luan_by_id(){
        global $conn;
        $id = $_GET['id'];
        $sql = "SELECT *,COUNT(comment.ma_bl) AS sum_ma_comment FROM comment WHERE ma_bl = $id";
        $kq = $conn->query($sql);
        return $kq;
    }
    function manager_comment(){
        global $conn;
        $sql = "SELECT * FROM comment ";
        $kq = $conn->query($sql);
        return $kq;
    }
    function phanTrangCM($search, $item_per_page, $current_page){
        try {

            global $conn;
            $offset = ($current_page - 1) * $item_per_page; // số sản phẩm bắt đầu lấy
            if ($search) {
                $sql = "SELECT * FROM comment WHERE noi_dung LIKE '%" . $search . "%' ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
            } else {
                $sql = "SELECT * FROM comment WHERE id ORDER BY id ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
            }
            $kq = $conn->query($sql);
            return $kq;
        } catch (Exception $e) {
            die("Lỗi trong hàm: " . __FUNCTION__ . "." . $e->getMessage());
        }
    }
    function tongSoHang_cm(){
        global $conn;
        $sql = "SELECT * FROM comment WHERE id";
        $kq = $conn->query($sql);
        if (!empty($kq)) {
            $count = $kq->rowCount();
            return $count;
        }
        return 0;
    }
?>