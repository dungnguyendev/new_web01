<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bill_user.css">
</head>

<body>
    <?php
    session_start();
    require_once '../connect.php';
    if (isset($_POST['order_click']) && ($_POST['order_click'])) {
        //Lấy thông khách hàng từ form để tạo đơn hàng
        $name_bill = $_POST['name'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pttt = $_POST['brand_id'];
        $total = SumDonHang();
        $id_user = $_POST['id_user'];
        $status_bill = $_POST['status_bill'];
        if ($pttt == 0) {
            $pay = 'Tiền mặt';
        } else if ($pttt == 1) {
            $pay = 'Chuyển khoản';
        } else {
            $pay = 'Visa';
        }
        //insert đơn hàng
        $idbill = taodonhang($name_bill, $address, $email, $tel, $total, $pttt,$status_bill,$id_user );


        //Lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
        //insert vào giỏ hàng
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $image = $_SESSION['giohang'][$i][0];
            $tensp = $_SESSION['giohang'][$i][1];
            $price = $_SESSION['giohang'][$i][2];
            $soluong = $_SESSION['giohang'][$i][3];
            $thanhtien = $price * $soluong;
            taogiohang($tensp, $price, $image, $soluong, $thanhtien, $idbill);
        }

        //unset cái giỏ hàng session
        //show comfirm đơn hàng
        $ttkh = '
        Bạn đã đặt hàng thàng công !!!<br><h1>Mã đơn hàng: ' . $idbill . '</h1>
                <ul>
                    <li class="admin_menu" style="color: #fff; font-weight: 600; text-align: center;">Thông tin khách hàng</li>
                    <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Người nhận:</label> ' . $name_bill . '</li>
                    <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Điện thoại:</label>' . $tel . '</li>
                    <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Địa chỉ:</label> ' . $address . '</li>
                    <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Email:</label> ' . $email . '</li>
                    <li class="information_menu" style="border-bottom: 1px dashed #000 ;"><label>Pay:</label> ' . $pay . '</li>
                </ul>';
        $ttghbill = showGioHangBill();
        //unset giỏ hàng session

        unset($_SESSION['giohang']);
    }
    ?>

    <?php

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
                    <p style="margin-right: 17px;"><i style="color: red;" class="fa-solid fa-house"></i> <a style="color: #fff; text-decoration: none;" href="../../index.php">Trang chủ</a></p>
                    <p><i style="color: red;" class="fa-solid fa-right-to-bracket"></i> <a style="color: #fff; text-decoration: none;" href="../model/logout.php">Đăng xuất</a></p>
                </div>
            </div>
        </div>
        <form action="../model/bill.php" method="POST">
            <div class="all-control">
                <div class="all-box-control">
                    <div id="login-notify-left" class="box-content">
                        <div class="conten">
                            <?php echo $ttkh; ?>
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
                            </tr>
                            <?php echo $ttghbill; ?>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>

</html>
</body>

</html>