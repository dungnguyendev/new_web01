<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();

    require_once('../model/connect.php');
    $detail = chiTienSanPham();
    ?>
    <title>
        <?php foreach ($detail as $row) { ?>
            <?= $row['product_name'] ?>
        <?php } ?> - shopUcha
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
</head>

<body>
    <style>
        .container {
            font-family: Arial, Helvetica, Verdana, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            height: auto;
        }

        .box-title {
            padding-top: 66px;
        }

        .box-review-left,
        .box-review-right {
            width: 50%;
        }

        .img-main {
            width: 100%;
        }

        .nav-slider,
        .nav-slider1 {
            width: 100%;
        }

        .ul-box-nav {

            display: flex;
            list-style: none;
        }

        .ul-box-nav li {
            display: flex;
            margin-right: 20px;

        }

        .ul-box-nav li a {
            color: #86868B;
            align-items: center;
            align-content: center;
            display: flex;
            text-decoration: none;
        }

        .ul-box-nav li a p {
            color: #86868B;
            margin-left: 20px;
            align-items: center;
            align-content: center;
            display: flex;
        }

        .box-review {
            display: flex;
        }

        .box-danh-gia {
            border-bottom: 1px solid #86868B;
            display: flex;
            justify-content: space-between;
        }



        .danh-gia-left {
            display: flex;
        }

        .danh-gia-left ul {

            list-style: none;
            display: flex;
        }

        .danh-gia-left p a {
            margin-left: 10px;
            font-size: 14px;
            text-decoration: none;
            color: #0066CC;
        }

        .danh-gia-right {
            display: flex;
            align-items: center;
        }

        .danh-gia-right a {
            text-decoration: none;
            color: #0066CC;
        }

        .price-sanpham {
            margin-top: 30px;
            border-bottom: 1px solid #e5e5e5;
        }

        del {
            margin-right: 10px;
        }

        ins {
            text-decoration: none;
        }

        del span {

            color: #86868B;
        }

        ins span {

            font-weight: 700;
            font-size: 25px;
        }

        .title-tra-gop {
            color: #86868B;
        }

        .tra-gop {
            color: #86868B;
            margin: 3px;
            padding-left: 7px;
            font-size: 14px;
        }

        .tra-gop span {
            color: #000;
            font-weight: 600;
        }

        .chon-mau-sanpham {
            color: #86868B;
            list-style: none;
            display: flex;
        }

        .chon-dung-luong {
            margin-top: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .xuat-thong-bao-dung-luong {
            color: #86868B;
        }

        .dung-luong {
            display: flex;
            color: #86868B;
        }

        .dung-luong p {
            display: flex;
            align-items: center;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 7px;
            padding: 7px;
            margin-right: 30px;
        }

        .dung-luong p:hover {
            display: flex;
            border: 1px solid #0066CC;
            color: #000;
        }

        .dung-luong p:focus {
            border: 1px solid #0066CC;
            color: #000;
        }

        .chon-mau-sanpham li {
            margin-right: 8px;
        }

        .color1 {
            background-color: #339901;
        }

        .circle {
            background: #339901;
            clip-path: circle(50%);
            height: 34px;
            width: 34px;
        }

        .circle1 {
            background: #0066CC;
            clip-path: circle(50%);
            height: 34px;
            width: 34px;
        }

        .circle2 {
            background: #4B4B4B;
            clip-path: circle(50%);
            height: 34px;
            width: 34px;
        }

        .circle3 {
            background: #a9b8c3;
            clip-path: circle(50%);
            height: 34px;
            width: 34px;
        }

        .circle4 {
            background: #fecda5;
            clip-path: circle(50%);
            height: 34px;
            width: 34px;
        }

        .mua-hang {
            margin-top: 40px;
        }

        .so-luong {
            padding: 10px;
            border-radius: 5px;
            width: 10%;
            border: none;
        }

        .submit {
            width: 30%;
            background: #0066CC;
            border: none;
            border-radius: 5px;
            padding: 10px;
            color: #fff;
            font-weight: 600;
            transition: 0.5s ease;
        }

        .submit:hover {
            color: #fff;
            background: #3d91e4;
        }

        .mua-tra-gop {
            width: 55%;
            padding: 10px;
            border-radius: 5px;
            background: #fff;
            color: #0066CC;
            border: 2px solid #0066CC;
            font-weight: 600;
        }

        .mua-tra-gop:hover {
            color: #3d91e4;
            border: 2px solid #3d91e4;
        }

        .bao-hanh-sp {
            width: 100%;
            margin-top: 30px;
            background: #fff;
            border-radius: 7px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .bao-hanh-sp ul {
            list-style: none;
            font-size: 15px;
        }

        .bao-hanh-sp ul li {
            display: flex;
            margin-left: 20px;
            margin-bottom: 5px;
        }

        .bao-hanh-sp ul li i {
            color: #0066CC;
            margin-right: 6px;
        }

        .bao-hanh-sp ul li a {
            margin-right: 5px;
            margin-left: 5px;
            text-decoration: none;
            color: #0066CC;
        }

        #wapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-tabs {
            margin-top: 30px;
            display: flex;
            list-style: none;

        }

        .nav-tabs-1 {
            color: #86868B;
            font-size: 15px;
            font-weight: 700;
            line-height: 25px;
        }

        ul {
            padding: 0;
        }

        .nav-tabs-li {
            display: block;
            padding-right: 40px;
        }

        .nav-tabs-li a {
            font-size: 20px;
            text-decoration: none;
            position: relative;
        }

        /* định vị backround cho the a */
        .nav-tabs-li a::after {
            content: "";
            position: absolute;
            height: 3px;
            width: 100%;
            bottom: -5px;
            right: 0px;
            transform: scale(0.1);
            transition: .5s;

        }

        /* những tk nào thuôc class active có màu và khi hover hiện màu */
        .nav-tabs-li.active a::after,
        .nav-tabs-li:hover a::after {
            background: orange;

            transform: scale(1.0);
            transition: .5s;
        }

        .tab-content {
            padding: 20px 0px;
        }

        .tab-content-item {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        iframe {
            max-width: 100%;
            height: 600px;
        }
    </style>
    <?php require_once('../view/menu.php') ?>

    <?php
    $detail01 = chiTienSanPham();
    ?>
    <div class="container">
        <div class="box-title">
            <?php foreach ($detail01 as $row) { ?>
                <ul class="ul-box-nav">
                    <li><a href="../index.php">Trang chủ <p>/</p></a></li>
                    <li><a href="../controller/iphone.php">iPhone <p>/</p></a></li>
                    <li><a href="#"><?= $row['product_name'] ?></a></li>
                </ul>
                <div class="box-review">
                    <div class="box-review-left">
                        <div class="product-slider">
                            <div class="img-main">
                                <div class="main">
                                    <div class="slider slider-for">
                                        <?php
                                        $image = $row['image'];
                                        $target_dir = "../img/";
                                        $target_file = $target_dir . basename($image);
                                        move_uploaded_file($image, $target_file);
                                        ?>

                                        <div>
                                            <a href="#"><img class="nav-slider" src="<?= $target_file ?>" alt=""></a>
                                        </div>

                                    </div>
                                    <div class="slider slider-nav">

                                        <!-- <div>
                                            <a href="#"><img class="nav-slider1" src="<?= $target_file ?>" alt=""></a>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                    require "../model/manager_comment/thuvien_comment.php";
                    $id = $_GET['id'];
                    if (!empty($_SESSION['current_user'])) {
                        $cruser = $_SESSION['current_user'];
                        if (isset($_POST['sbm'])) {
                            $ma_kh = $cruser['id'];
                            $bl = $_POST['comment_sp'];
                            $name_bl = $_POST['name_cm_01'];
                            $sql = "INSERT INTO comment (ma_kh, ma_bl, noi_dung,ten_kh, ngay_bl ) VALUES ($ma_kh,$id,'$bl','$name_bl',Now())";
                            $kq = $conn->query($sql);
                            header("");
                        }
                    }

                    ?>
                    <?php
                    $box_bl = binh_luan_select_by_id();
                    $sum_bl = sum_binh_luan_by_id();
                    foreach ($sum_bl as $countbl);
                    ?>
                    <div class="box-review-right">
                        <h2><?= $row['product_name'] ?></h2>
                        <div class="box-danh-gia">
                            <div class="danh-gia-left">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p><a href="#wapper"><?= $countbl['sum_ma_comment']?> đáng giá | 60 hỏi đáp</a></p>
                            </div>
                            <div class="danh-gia-right">
                                <div class="so-sanh-danh-gia">
                                    <a href="#"><i class="fa-solid fa-circle-plus"></i> So sánh</a>
                                </div>
                            </div>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount"></span><span class="price-currency"></span>

                            </del>
                            <ins>
                                <span class="price-amount"><?= number_format($row['price'], 0, ",", ".") ?></span><span class="price-currency">₫</span>
                            </ins>
                            <p class="tra-gop">Trả góp từ: <span>2.449.000</span> đ/tháng</p>
                            <p class="title-tra-gop">Chọn màu Sliver</p>
                            <ul class="chon-mau-sanpham">
                                <li><a href="#">
                                        <div class="circle"></div></svg></circle>
                                    </a></li>
                                <li><a href="#">
                                        <div class="circle1"></div></svg></circle>
                                    </a></li>
                                <li><a href="#">
                                        <div class="circle2"></div></svg></circle>
                                    </a></li>
                                <li><a href="#">
                                        <div class="circle3"></div></svg></circle>
                                    </a></li>
                                <li><a href="#">
                                        <div class="circle4"></div></svg></circle>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="chon-dung-luong">
                            <div class="xuat-thong-bao-dung-luong">
                                Chọn dung lượng 128GB
                            </div>
                            <div class="dung-luong">
                                <p><span>128</span>GB</p>
                                <p><span>256</span>GB</p>
                                <p><span>512</span>GB</p>
                                <p><span>1</span>TB</p>
                            </div>
                        </div>
                        <div class="mua-hang">
                            <form id="add-to-cart-form" action="../model/user_giohang/giohang.php" method="POST">
                                <input class="so-luong" type="number" min="1" max="10" value="1" name="quantily">
                                <input type="hidden" name="tensp" value="<?= $row['product_name'] ?>">
                                <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                <input type="hidden" name="image" value="<?= $row['image'] ?>">
                                <input class="submit" name="addcart" type="submit" value="MUA NGAY">
                                <button class="mua-tra-gop"><i class="fa-regular fa-credit-card"></i> Tính toán trả góp</button>
                            </form>
                        </div>
                        <div class="bao-hanh-sp">
                            <ul>
                                <li><i class="fa-regular fa-circle-check"></i> Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type C</li>
                                <li><i class="fa-regular fa-circle-check"></i> Bảo hành chính hãng 1 năm <a href="#">Xem chi tiết</a></li>
                                <li><i class="fa-regular fa-circle-check"></i> Giao hàng nhanh toàn quốc <a href="#">Xem chi tiết</a></li>
                                <li><i class="fa-regular fa-circle-check"></i> Gọi đặt mua <a href="#">1900.6626</a>(7:30 - 22:00)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="wapper">
                    <div class="tabs">
                        <ul class="nav-tabs">
                            <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_1">Đánh giá(<span><?= $countbl['sum_ma_comment'] ?></span>)</a></li>
                            <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_2">Thảo luận</a></li>
                            <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_3">Mô tả</a></li>
                            <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_4">Thông số kỹ thuật</a></li>
                            <li class="nav-tabs-li"><a class="nav-tabs-1" href="#menu_5">Hỏi đáp</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="menu_1" class="tab-content-item">
                                <div class="bl_menu_2">
                                    <?php if (empty($_SESSION['current_user'])) echo ' <p style="color: red; font-size: 15px;">Bạn cần đăng nhập để bình luận sản phẩm này !!!</p> ';?>
                                    <h3>Comment</h3>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="binh_luan">
                                            <div class="bl">
                                                <textarea name="comment_sp" placeholder="Nhận xét của bạn" ></textarea>
                                            </div>
                                            <div class="name_cm">
                                                <input class="name_cm_01" type="text" name="name_cm_01" placeholder="Tên bạn ?">
                                            </div>
                                            <button name="sbm" class="import_cm">Gửi đi</button>
                                        </div>
                                    </form>
                                    <style>
                                        .binh_luan{
                                            
                                            width: 100%;
                                            display: flex;
                                            justify-content: space-between;
                                            flex-wrap: wrap;
                                        }
                                        .bl{
                                            width: 60%;
                                        }
                                        .bl textarea{
                                            outline: none;
                                            width: 100%;
                                            height: 60px;
                                        }
                                        .name_cm{
                                            width: 30%;
                                        }
                                        .name_cm .name_cm_01{
                                            outline: none;
                                            width: 100%;
                                        }
                                        .import_cm {
                                            border: none;
                                            outline: none;
                                            border-radius: 5px;
                                            width: 5%;
                                            height: 22px;
                                            background-color: #3d91e4;
                                            color: #fff;
                                            transition: .5s ease;
                                        }
                                        .import_cm:hover{
                                            background-color: #69a8e8 ;
                                        }
                                        .box_bl_sp_001{
                                            display: flex;
                                            flex-direction: column;
                                            flex-wrap: wrap;
                                            width: 100%;
                                            height: 70px;
                                        }
                                        .box_bl_sp_01{
                                            display: flex;
                                            height: calc(70px / 2);
                                            align-items: center;
                                            
                                        }
                                        .box_answer_cm{
                                           font-size: 14px;
                                           padding-left: 20px;
                                        }
                                    </style>
                                    <!-- Chạy theo id san phẩm  -->
                                    <div class="box_bl_sp">
                                        <?php foreach ($box_bl as $bl) { ?>
                                            <div class="box_bl_sp_001">
                                                <div class="box_bl_sp_01">
                                                    <a href="#" style="text-decoration: none; color: blue;">
                                                        <?php if ($bl['ten_kh'] == "") { ?>
                                                            Ẩn danh:
                                                        <?php } else { ?>
                                                            <?= $bl['ten_kh'] ?>:
                                                        <?php } ?>
                                                    </a><?= $bl['noi_dung'] ?>
                                                </div>
                                                <div class="box_answer_cm">
                                                    <a href="#" style="text-decoration: none; color:red;">ShopUcha:</a>
                                                    <?php if ($bl['cm_answer'] == "") { ?>
                                                        đang bình luận
                                                    <?php } else { ?>
                                                        <?= $bl['cm_answer'] ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div id="menu_2" class="tab-content-item">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=499327621765895&autoLogAppEvents=1" nonce="2fNQYZcv"></script>
                                <div class="fb-comments" data-href="http://shopucha.store" data-width="1200" data-numposts="100"></div>
                            </div>
                            <div id="menu_3" class="tab-content-item">
                                <p><?= $row['discussion'] ?></p>
                            </div>
                            <div id="menu_4" class="tab-content-item">

                                <p><?= $row['specifications'] ?></p>

                            </div>
                            <div id="menu_5" class="tab-content-item">
                                <h2>Menu 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem, consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem, consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem, consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem, consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem, consectetur eaque saepe debitis magnam et, corrupti eius enim expedita quod qui impedit! Architecto dicta aperiam corporis quos nobis ducimus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php require_once('../view/aside.php') ?>
    <?php require_once('../view/footer.php') ?>
</body>
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        focusOnSelect: true
    });

    $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.slider-nav').slick('slickGoTo', slideno - 1);
    });
    $('.a').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
    });
    $('.autoplay').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function() {
        $('.tab-content-item').hide()
        $('.tab-content-item:first-child').fadeIn()
        $('.nav-tabs li').click(function() {
            // active nab-tab
            $('.nav-tabs li').removeClass('active')
            $(this).addClass('active');

            // show tab-content item
            let id_tab_content = $(this).children('a').attr('href')
            $('.tab-content-item').hide();
            $(id_tab_content).fadeIn();
            return false;
        });
    });
</script>


</html>