<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/thongke.css">
</head>

<body>
    <style>
        body {
            background-color: var(--colorBr);
            padding: 0;
            margin: 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        :root {
            --colorBr: #F9F6F4;
            --colorLeft: #CCCCCC;

        }

        .all-control {
            max-width: 1200px;
            margin: 0 auto;
        }

        .all-box-control {
            display: flex;
            padding-top: 70px;
        }

        #login-notify-left {
            width: 25%;
            padding: 12px;
            font-size: 16px;
        }

        #produc-item-right-iphone {
            width: 75%;
            padding-top: 29px;
        }

        .image012 {
            width: 200px;
        }

        tr td {
            width: 136px;
            height: 70px;
        }

        ul {
            padding: 0;
        }

        li {
            border: 1px solid #000;
            list-style-type: none;
            padding: 10px;
        }

        ul li a {

            text-decoration: none;
            color: rgb(74, 75, 76);
            font-size: 18px;
            transition: 0.5s ease;
        }

        ul li a:hover {
            color: rgb(87, 89, 89);
        }

        .header-product {
            position: fixed;
            width: 100%;
            margin: 0 auto;
            background-color: rgb(98, 100, 102);
        }

        .header-01 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .header0 {
            padding: 10px;
            display: flex;
            align-content: center;
            align-items: center;
            font-size: 17px;

        }

        .header1 {
            display: flex;
            align-content: center;
            align-items: center;
            font-size: 17px;
        }

        .admin_menu {
            background-color: rgb(98, 100, 102);
            padding: 15px;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
        }

        h1 {
            font-size: 20px;
            background-color: rgb(98, 100, 102);
            color: rgb(234, 232, 232);
            padding: 15px;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-content: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr {
            border: 1px solid #CCCCCC;
        }

        tr:nth-child(even) {
            background-color: #CCCCCC;
        }

        tr td,
        tr th {
            text-align: center;

            padding-top: 8px;
            padding-bottom: 8px;
            font-size: 16px;
        }

        .title_sp {
            text-align: right;
        }

        .button_delete {
            background-color: red;
            padding: 5px;
            border-radius: 5px;
            color: #F9F6F4;
            text-decoration: none;
            transition: 0.5s ease;
        }

        .button_edit {

            background-color: rgb(10, 174, 225);
            padding: 5px;
            border-radius: 5px;
            color: #F9F6F4;
            transition: 0.5s ease;
            text-decoration: none;
        }

        .button_edit:hover,
        .button_delete:hover {
            opacity: 0.6;

        }
        /* Phân trang Bill */
        .phan-trang-center {
            display: flex;
            margin-top: 40px;
            margin-bottom: 40px;
        }
    
        .can-giua-pt {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
        }
    
        .phanTrang {
            display: flex;
            align-items: center;
            align-content: center;
            margin-right: 4px;
            width: 100%;
            height: 15px;
            padding: 5px;
            text-decoration: none;
            border: 1px solid #4b4b4a;
            border-radius: 5px;
        }
    
        strong {
            margin-right: 4px;
            display: flex;
            width: 100%;
            align-items: center;
            align-content: center;
            color: #fff;
            background: #515154;
    
            height: 15px;
            padding: 5px;
            text-decoration: none;
            border: 1px solid #4b4b4a;
            border-radius: 5px;
        }
    </style>
    <?php

    require_once "./thu_vien.php";
    $listSP = quan_ly_don_hang();

    if (!empty($_SESSION['current_user'])) $currentUser = $_SESSION['current_user'];
    $search = isset($_GET['name']) ? $_GET['name'] : "";
    $total_row = tongSoHang_bill();
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $listSP = phanTrangBill($search, $item_per_page, $current_page);
    $total_pages = ceil($total_row / $item_per_page); // toàn bộ trang 
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
                <p><i style="color: red;" class="fa-solid fa-right-to-bracket"></i> <a style="color: #fff; text-decoration: none;" href="../../model/logout.php">Đăng xuất</a></p>
            </div>
        </div>
    </div>
    <div class="all-control">
        <div class="all-box-control">
            <div id="login-notify-left" class="box-content">
                <div class="conten">
                    <ul>
                        <li class="admin_menu"><a style="color: #fff; font-weight: 600; text-align: center;" href="">Admin menu</a><br /></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/thong_ke/index.php">Thống kê sản phẩm</a><br /></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/thong_ke/list.php">Biểu đồ</a></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/quan_li_hang/manager_bill.php">Quản lý đơn hàng</a></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/manager_user/index.php">Quản lý user</a></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/manager_comment/index.php">Quản lý bình luận</a></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/page_admin/producList.php">Quản lý sản phẩm</a></li>
                        <li style="border-bottom: 1px dashed #000 ;"><a href="../../model/manager_brands/index.php">Quản lý loại hàng</a></li>
                        <li style="border-bottom-left-radius:10px ;
    border-bottom-right-radius:10px ;"><a href="logout.php">Pờ rô pờ lem</a></li>
                    </ul>
                </div>
            </div>
            <div id="produc-item-right-iphone">
                <h1>Quản lý đơn hàng</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Tổng đơn hàng (VNĐ)</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Sửa đơn hàng</th>
                            <th>Xoá</th>
                            <th>Quản lý</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listSP as $row) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name_bill'] ?></td>
                                <td><?= $row['address'] ?></td>
                                <td><?= $row['tel'] ?></td>
                                <td><?= number_format($row['total'], 0, ",", ".") ?></td>
                                <td><?= $row['status_bill'] ?></td>
                                <td><a href="./edit_bill.php?id=<?= $row['id'] ?>" class="button_edit">Sửa</a></td>
                                <td><a href="./delete_bill.php?id=<?= $row['id'] ?>" class="button_delete">Xoá</a></td>
                                <td><a href="./view_bill.php?id=<?= $row['id'] ?>" class="button_edit">View bill </a></td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
                <?php
                $param = "";
                if ($search) {
                    $param = "name=" . $search . "&";
                }
                ?>
                <div class="phan-trang-center">
                    <div class="can-giua-pt">
                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                            <?php if ($i != $current_page) { ?>
                                <a class="phanTrang" href="?<?= $param ?>per_page=<?= $item_per_page ?>&page=<?= $i ?>"><?= $i ?></a>
                            <?php } else { ?>
                                <strong><?= $i ?></strong>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>