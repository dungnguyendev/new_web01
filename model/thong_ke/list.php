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
    <?php

    require_once "./thong-ke.php";
    $list = bieu_do();

    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['brand_name', 'number_cate'],
                <?php
                foreach ($list as $row) {
                    echo "['" . $row['brand_name'] . "', " . $row['number_cate'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Biểu đồ thống kê số lượng sản phẩm',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
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

        tr td,
        tr th {
            text-align: center;
            border: 1px solid rgb(202, 197, 197);
            padding-top: 8px;
            padding-bottom: 8px;
            font-size: 16px;
        }

        .title_sp {
            text-align: right;
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
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
</body>

</html>