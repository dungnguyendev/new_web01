<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
</head>

<body>
    <?php

    require_once("../model/connect.php");
    ?>
    <style>
        body {
            background: #F5F5F7;
            ;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, Verdana, sans-serif;
        }

        .nav {
            width: 100%;
            position: fixed;
            z-index: 200;
            background: #4B4B4B;
        }

        #container {
            position: relative;
        }

        .nav-center {
            max-width: 1200px;
            margin: 0 auto;
        }

        .box-nav {
            flex-wrap: nowrap;
            align-content: center;
            align-items: center;
            display: flex;
            justify-content: space-between;
            display: flex;

        }

        .logo-box-nav {
            display: flex;
            width: 13%;
        }

        .logo-box-nav a img {
            max-width: 100%;
            display: flex;
            bottom: 0;
        }

        .muc-luc-nav {

            display: flex;
        }

        .muc-luc-nav ul,
        .usser {
            position: relative;
            margin: 0;
            list-style: none;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            padding: 0;
        }

        .muc-luc-nav ul li {
            padding: 24px;
            display: flex;
            display: block;
            transition: .3s;
        }

        .muc-luc-nav ul li:hover {
            background: #404041;
            color: #fff;
        }

        .muc-luc-nav ul li:hover a {
            color: #Fff;
        }

        .muc-luc-nav ul li a {
            text-decoration: none;
            color: #D2D2D7;
            font-size: 15px;
        }

        .muc-luc-nav ul ul {
            z-index: 100;
            padding: 0px;
            margin: 17px;
            list-style: none;
            top: 49px;
            left: 682px;
            width: 230px;
            background: #4B4B4B;
            position: absolute;
            display: none;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .muc-luc-nav>ul>li:hover>ul {
            overflow: hidden;
            display: block;
        }

        .muc-luc-nav>ul>ul>li:hover>a {
            color: #fff;
        }


        .search-nav a,
        .gio-hang-nav a {
            color: #D2D2D7;
        }

        .gio-hang {
            position: relative;
        }

        .amount {
            text-align: center;
            height: 12px;
            width: 10px;
            font-size: 12px;
            position: absolute;
            background: #fff;
            border-radius: 10px;
            padding: 3px;
            margin-top: -8px;
            margin-left: -3px;
        }

        .usser li {

            display: flex;
            display: block;
            transition: .3s;
        }

        .usser .user01 {
            padding: 0px;
            margin: 17px;
            list-style: none;
            top: 48px;
            left: 794px;
            width: 230px;
            background: #4B4B4B;
            position: absolute;
            display: none;
        }
    </style>
    <div class="nav">
        <div class="nav-center">
            <div class="box-nav">
                <div class="logo-box-nav">
                    <a href="../controller/index.php"><img src="../img/Mask group (1).png" alt=""></a>
                </div>
                <div class="muc-luc-nav">
                    <ul class="usser">
                        <li><a href="../controller/iphone.php">iPhone</a></li>
                        <li><a href="#">iPad</a></li>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Apple Watch</a></li>
                        <li><a href="#">Âm thanh</a></li>
                        <li><a href="#">Phụ Kiện</a></li>
                        <li><a href="#">Dịch vụ</a></li>
                        <li><a href="#">Thông tin</a>
                            <ul>
                                <li><a href="../view/lienhe.php">Liên hệ</a></li>
                                <li><a href="../view/gioithieu.php">Giới thiệu</a></li>
                            </ul>
                        </li>
                        <li><a href="../model/login.php"><i class="fa-solid fa-user"></i></a>
                            <ul class="user01">
                                <li><a href="#">Xin chào:
                                        <a href="#" style="color: yellow;">
                                            <?php
                                            if (!empty($_SESSION['current_user'])) {
                                                $currentUser = $_SESSION['current_user'];
                                                echo $currentUser['userName'];
                                            } else {
                                                echo "?";
                                            }
                                            ?>
                                        </a>
                                    </a>
                                </li>
                                <li><a href="../model/logout.php" style="margin-right: 4px;">Log out</a><i style="color: #fff;" class="fa-solid fa-right-from-bracket"></i></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="search-nav">
                    <ul class="usser">

                    </ul>
                </div>
                <div class="search-nav">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
                <div class="gio-hang-nav gio-hang">
                    <a href="../model/user_giohang/giohang.php"> <i class="fa-solid fa-cart-shopping"></i></a>
                    <?php

                    echo SumSanPham(); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>