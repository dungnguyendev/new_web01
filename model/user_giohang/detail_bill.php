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

    $show_bill = detail_bill();
    $tongtien = Sum_bill();
    

    if (!empty($_SESSION['current_user'])) {
        $currentUser = $_SESSION['current_user'];

    ?>
        <style>
            .button_delete {
                background-color: red;
                padding: 5px;
                border-radius: 5px;
                color: #F9F6F4;
                text-decoration: none;
                transition: 0.5s ease;
            }

            .button_edit:hover,
            .button_delete:hover {
                opacity: 0.6;

            }
            tr {
                border: 1px solid #cccc;
            }

            tr:nth-child(even) {
                background-color: #cccc;
            }

            tr td,
            tr th {
                width: 136px;
                height: 70px;
                border: none;
            }
        </style>
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
                                <li class="information_menu" style="border-bottom-left-radius:10px ;
    border-bottom-right-radius:10px ;"><input class="knot_order" type="submit" name="order_click" id="" value="Đặt hàng"></li>
                            </ul>
                        </div>
                    </div>
                    <div id="produc-item-right-iphone">
                        <h1>Chi tiết đơn hàng</h1>
                        <table>

                            <tr>
                                <th>Mã khách hàng</th>
                                <th class="product_name">Tên sản phẩm</th>
                                <th class="product_anh">image</th>
                                <th class="product_gia">Giá tiền</th>
                                <th class="product_quantily">Số lượng</th>
                                
                                <th class="product_money">Thành tiền</th>
                            </tr>
                            <?php foreach ($show_bill as $bill) { ?>
                                <tr>
                                    <td><?= $bill['id_bill'] ?></td>
                                    <td class="product_name"><?= $bill['tensp'] ?></td>
                                    <td class="product_anh"><img class="image012" src="<?= $bill['image_product'] ?>" alt="<?= $bill['tensp'] ?>"></td>
                                    <td class="product_gia"><?= number_format($bill['price'],0,",",".") ?></td>
                                    <td class="product_quantily"><?= $bill['soluong'] ?></td>                           
                                    <td class="product_money"><?= number_format($bill['thanhtien'], 0, ',', '.') ?> đ</td>
                                </tr>
                            <?php } ?>
                            <?php foreach ($tongtien as $sum) {  ?>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Tổng tiền đơn hàng: </td>
                                    <th colspan="1"><?= number_format($sum['thanhtien'], 0, ",", ".") ?> đ</th>
                                </tr>
                            <?php } ?>
                        </table>
                        <div class="update">
                            <a class="update_02" href="./giohang.php">VỀ GIỎ HÀNG</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>