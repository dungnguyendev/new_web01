<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/giohang.css">
</head>

<body>

    <?php
    session_start();
    require_once '../../model/connect.php';
    $sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
    $listSP = $conn->query($sql);
    if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

    // Xoá hết sản phẩm trong giỏ hàng
    if (isset($_GET['delete_click']) && ($_GET['delete_click'] == 1)) unset($_SESSION['giohang']);

    // Xoá sp trong giỏ hàng
    if (isset($_GET['delete_sp']) && ($_POST['delete_sp'] >= 0)) {
        array_splice($_SESSION['giohang'], $_GET['delete_sp'], 1);
    }

    if (isset($_POST['addcart']) && ($_POST['addcart'])) {
        $hinh = $_POST['image'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['price'];
        $soluong = $_POST['quantily'];


        //Kiểm tra sp có trong giỏ hàng
        $fl = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            if ($_SESSION['giohang'][$i][1] == $tensp) {
                $fl = 1;
                $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3] = $soluongnew;
                break;
            }
        }

        if ($fl == 0) {
            // thêm mới sản phẩm vào giỏ hàng
            $sp = [$hinh, $tensp, $gia, $soluong];
            $_SESSION['giohang'][] = $sp;
        }
    }
    
    if (!empty($_SESSION['current_user'])) {
        $currentUser = $_SESSION['current_user'];
        
    ?>
        <div class="header-product">
            <div class="header-01">
                <div class="header0">
                    <p style="color: #fff; font-weight: 500; margin: 0px; font-size: 17px; padding-right: 6px;">Xin chào:
                    <p style="color: yellow; margin: 0px"><?= $currentUser['userName'] ?><br /></p>
                    </p>
                </div>
                <div class="header1">
                    <p style="margin-right: 17px;"><i style="color: red;" class="fa-solid fa-house"></i> <a style="color: #fff; text-decoration: none;" href="../../controller/index.php">Trang chủ</a></p>
                    <p><i style="color: red;" class="fa-solid fa-right-to-bracket"></i> <a style="color: #fff; text-decoration: none;" href="../logout.php">Đăng xuất</a></p>
                </div>
            </div>
        </div>
        <form action="../user_giohang/bill.php" method="POST">
            <div class="all-control">
                <div class="all-box-control">
                    <div id="login-notify-left" class="box-content">
                        <div class="conten">
                            <ul class="ul_order">
                                <li class="admin_menu" style="color: #fff; font-weight: 600; text-align: center;">Thông tin giao hàng</li>
                                <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Người nhận:</label> <input type="text" name="name" style="border: none; outline: none; border-radius: 5px;  padding: 2px;"></li>
                                <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Điện thoại:</label> <input type="text" name="tel" style="border: none; outline: none; border-radius: 5px; padding: 2px;"></li>
                                <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Địa chỉ:</label> <input type="text" name="address" style="border: none; outline: none; border-radius: 5px; padding: 2px;"></li>
                                <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Email:</label> <input type="email" name="email" style="border: none; outline: none; border-radius: 5px; padding: 2px;"></li>
                                <li class="information_menu" style="border-bottom: 1px dashed #000 ; "><label>Pay:</label>
                                    <select name="brand_id">
                                        <option value="0">Tiền mặt</option>
                                        <option value="1">Chuyển khoản</option>
                                        <option value="2">Visa</option>
                                    </select>
                                </li>
                                 <input style="display: none;" type="text" name="id_user" value="<?= $currentUser['id'] ?>">
                                 <input style="display: none;" type="text" name="status_bill" value="Chờ thanh toán">
                                <li class="information_menu" style="border-bottom-left-radius:10px ;
    border-bottom-right-radius:10px ;"><input class="knot_order" type="submit" name="order_click" id="" value="Đặt hàng"></li>
                            </ul>
                        </div>
                    </div>
                    <div id="produc-item-right-iphone">
                        <h1>Giỏ hàng</h1>
                        <table>

                            <tr>
                                <td class="product_number">STT</td>
                                <td class="product_name">Tên sản phảm</td>
                                <td class="product_anh">Ảnh sản phẩm</td>
                                <td class="product_gia">Đơn giá</td>
                                <td class="product_quantily">Số lượng</td>
                                <td class="product_money">Thành tiền</td>
                                <td class="product_delete">Xoá</td>
                            </tr>
                            <?php echo showGioHang(); ?>
                        </table>
                        <div class="update">
                            <a class="delete_01" href="../user_giohang/giohang.php?delete_click=1">XOÁ GIỎ HÀNG</a>
                            <a class="update_02" href="../../index.php">TIẾP TỤC ĐẶT HÀNG</a>
                            <a class="update_02" href="./view_bill_user.php?id_user=<?= $currentUser['id']?>">View bill</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>