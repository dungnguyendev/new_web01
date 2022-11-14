<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
</head>

<body>
    <?php session_start() ?>
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

        .box-title-1 {
            display: flex;
            z-index: -1;
            position: relative;
            background: #F5F5F7;
            height: 150px;
        }

        .title-iphone {
            width: 100%;
            display: flex;
            align-content: center;
            align-items: center;
            margin: 0;
            justify-content: center;
            bottom: 0;
            font-size: 40px;
            color: #000;
        }

        #intro-owl {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 !important;
        }

        #intro-owl a img {
            width: 100%;
            height: 375px;
        }

        .owl-dots {
            display: none !important;
        }

        .danhmuc-sanpham {
            display: flex;
            flex-wrap: wrap;
            --columssanpham: 4;
            --spacing: 15px;
            margin-left: calc(-1 * var(--spacing));
        }

        .box-element-sanpham-1 {
            overflow: hidden;
            transition: .3s;
            background: #fff;
            margin-left: var(--spacing);
            margin-bottom: var(--spacing);
            border-radius: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0 0 5px;
            width: calc(calc(100% / var(--columssanpham)) - var(--spacing));
        }

        .pictures img {
            z-index: -1;
            width: 100%;
            height: 283px;
            transition: .5s ease;
        }

        .box-element-sanpham-1:hover {
            box-shadow: rgba(87, 87, 95, 0.2) 0 0 20px;
        }

        .box-element-sanpham-1:hover img {
            transform: scale(1.1);
        }

        del span {
            color: #86868B !important;
        }

        .price-amount,
        ins,
        .price-currency {
            color: #0066CC;
            font-weight: 600;
            text-decoration: none;
        }

        .title-sanpham,
        .price-sanpham {
            z-index: 2;
            padding: 0px 0px 0px 25px;
        }

        .title-sanpham p {
            font-weight: 700;
            font-size: 18px;
            margin-top: 0;
            margin-bottom: 32px;
            word-break: break-all;
            /* Chữ dài quá ta có thể tạo giới hạn cho nó */
            display: -webkit-box;
            /* giới hạn 3 cột */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-word;
        }

        .price-sanpham {
            margin-bottom: 20px;
        }

        .see-all-iphone {
            text-align: center;
        }

        .box-element-sanpham-1 {
            display: flex;
            flex-direction: column;
        }

        .price-sanpham {
            margin-top: auto;
        }

        .see-all-iphone button {
            background: #fff;
            border: 1px solid #0066CC;
            border-radius: 7px;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 25px;
            padding-right: 25px;
        }

        ins {
            margin-left: 7px;
        }

        .see-all-iphone button {
            transition: .5s ease;
        }

        .see-all-iphone button a {
            font-size: 15px;
            text-decoration: none;
            color: #0066CC;
        }

        .see-all-iphone button:hover {
            background: #0066CC;
        }

        .see-all-iphone button:hover a {
            color: #fff;
        }

        .see-all-iphone button a .mui-ten {
            font-weight: 600;
            position: absolute;
            margin-top: 0.7px;
            margin-left: 5px;
        }

        .title-search-ul {
            height: 70px;
            padding: 0;
            list-style: none;
        }

        .title-search-li {
            line-height: 70px;
            display: inline-block;


        }

        .title-search-li a {
            font-size: 14px;
            letter-spacing: 0.5px;
            color: #4b4b4a;
            padding-right: 30px;
            text-decoration: none;

        }

        .about-used-iphone {
            max-width: 1200px;
            margin: 0 auto;
        }

        .search-iphone-appropriate {
            margin-top: 70px;
            display: flex;
            flex-wrap: wrap;
            --spacingColumn: 20px;
            --Column: 2;
            margin-left: calc(-1 * var(--spacingColumn));
        }

        .box-khung-001 {
            border-radius: 20px;
            transition: .7s ease;
            align-items: center;
            align-content: center;
            overflow: hidden;
            display: flex;
            background: #fff;
            margin-bottom: var(--spacingColumn);
            margin-left: var(--spacingColumn);
            width: calc(calc(100% / var(--Column)) - var(--spacingColumn));
        }

        .box-khung-001:hover {

            box-shadow: 0 0 7px grey;
        }

        .img-search-001 {
            width: 300px;
            height: 240px;
        }

        .thong-tin-search {
            display: flex;
            flex-direction: column;
            width: 40%;

        }

        h3 {
            display: flex;
            font-size: 25px;
        }

        .so-sanh {
            display: flex;
            text-decoration: none;
        }

        .so-sanh p {
            color: #0066CC;
        }

        .story-about-iphone {
            background: #fff;
        }

        .box-story {
            padding-top: 40px;
            padding-left: 80px;
            padding-right: 80px;
            padding-bottom: 40px;
        }

        .box-story p {
            font-weight: 400;
            letter-spacing: .5px;
            line-height: 30px;
            color: #515154;
        }

        .box-story ul li {
            font-weight: 400;
            letter-spacing: .5px;
            line-height: 30px;
            color: #515154;
        }

        h4 {
            font-size: 20px;
        }
    </style>

    <?php
    include('../view/menu.php');
    ?>
    <div class="container">
        <div class="box-title">
            <div class="box-title-1">
                <h2 class="title-iphone">iPhone</h2>
            </div>
            <?php require_once("../model/connect.php") ?>
            <?php require_once('../view/header.php') ?>
            <?php require_once('../view/menu_iphone.php') ?>
            <?php
            $search = isset($_GET['name']) ? $_GET['name'] : "";
            $total_row = tongSoHang();
            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
            $listSP = phanTrangIphone($search, $item_per_page, $current_page);
            $total_pages = ceil($total_row / $item_per_page); // toàn bộ trang 

            ?>
            <div class="danhmuc-sanpham">
                <?php foreach ($listSP as $row) { ?>
                    <?php
                    $image = $row['image'];
                    $target_dir = "../img/";
                    $target_file = $target_dir . basename($image);
                    move_uploaded_file($image, $target_file);
                    ?>
                    <div class="box-element-sanpham-1">
                        <div class="pictures">
                            <a href="../view/chitietsanpham.php?id=<?= $row['product_id'] ?>&?product_id=<?= $row['product_id'] ?>"><img class="img" src="<?= $target_file ?>" alt=""></a>
                        </div>
                        <div class="title-sanpham">
                            <p><?= $row['product_name'] ?></a></p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: <?= number_format($row['price'], 0, ",", ".") ?></span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php
            $param = "";
            if ($search) {
                $param = "name=" . $search . "&";
            }
            ?>
            <?php require_once('../view/conten_iphone.php') ?>>
            <?php require_once('../view/aside.php') ?>
            <?php require_once('../view/footer.php') ?>
</body>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: false,
            margin: 1,
            autoplay: NodeFilter,
            autoplayTimeout: 4000,
            autoplayHoverPause: NodeFilter
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
</script>

</html>