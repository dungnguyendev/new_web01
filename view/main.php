<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .element-container {
            margin-left: 157px;
            margin-right: 157px;
        }

        /* quảng cáo san phẩm */
        .quang-cao-element {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 40px;

        }

        .box-element {
            --spacingQcao: 15px;
            --columnsQuangCao: 3;
            display: flex;
            flex-wrap: wrap;
            margin-left: calc(-1 * var(--spacingQcao));
        }

        .box-element-1 {
            margin-bottom: var(--spacingQcao);
            margin-left: var(--spacingQcao);
            width: calc(calc(100% / var(--columnsQuangCao)) - var(--spacingQcao));
        }

        .box-element-1 a {
            display: inline-block;
        }

        .box-element-1 a img {
            width: 100%;
        }

        /* Sản phẩm */
        .box-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .box-container .title {
            text-align: center;
        }

        .box-container .title h2 {
            margin-top: 59px;
            font-size: 36px;
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

        .see-all-iphone button a {
            text-decoration: none;
            color: #0066CC;
            font-size: 16px;
        }

        .see-all-iphone button:hover {
            background: #0066CC;

        }

        .see-all-iphone button:hover a {
            color: #fff;
        }

        ins {
            margin-left: 7px;
        }
    </style>
    <div class="element-container">
        <div class="quang-cao-element">
            <div class="box-element">
                <div class="box-element-1"><a href="#"><img src="../img/quangcao/Pen.webp" alt=""></a></div>
                <div class="box-element-1"><a href="#"><img src="../img/quangcao/Care.webp" alt=""></a></div>
                <div class="box-element-1"><a href="#"><img src="../img/quangcao/AirPods.webp" alt=""></a></div>
            </div>
        </div>
        <div class="element-sanpham">
            <?php require_once('../model/connect.php') ?>
            <?php
            $item_per_page =  1;
            $current_page =  4;
            $listSP = ShowTieuDe($item_per_page, $current_page);
            ?>
            <div class="box-container">
                <div class="title">
                    <h2>iPhone</h2>
                </div>
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
                                <a href="../view/chitietsanpham.php?id=<?= $row['product_id'] ?>"><img class="img" src="<?= $target_file ?>" alt=""></a>
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
                <div class="see-all-iphone">
                    <button><a href="iphone.php">Xem tất cả iPhone <span class="mui-ten">></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>iPad</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/ipad-air-5.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>iPad Air 5</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 15.290.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/ipad-gen-9.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>iPad gen 9</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 8.590.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/ipad-mini-6.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>iPad mini 6 (2021)</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">13.290.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/ipad-pro-m1-11-768x768-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>iPad Pro 11 inch (M1, 2021)</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 19.690.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả iPad <span class="mui-ten">></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>Mac</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/mac-m2-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>MacBook Pro 13 M2 2022</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 31.990.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/MacBook_Air_M1_Silver-1-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>MacBook Air M2 2022</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ 29.990.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/MacBook-Pro-M1-2020.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>MacBook Pro M1 2020</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 29.590.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/MacBook-Air-M1-2020.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>MacBook Air M1 2020</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">Giá từ: 22.990.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả Mac <span class="mui-ten">></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>AirPods</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/airpods_pro_2021.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>AirPods 2</p>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount">4.390.000</span> <span class="price-currency">₫</span>
                            </del>
                            <ins>
                                <span class="price-amount">2.690.000</span> <span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/AirPods_3rd_Gen_PDP_Image_Position-2__VN-removebg-preview.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>AriPods(gen 3)</p>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount">5.490.000</span> <span class="price-currency">₫</span>
                            </del>
                            <ins>
                                <span class="price-amount">4.450.000</span> <span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/AirPods-Max-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>AirPods Max</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">10.490.000</span> <span class="price-currency">₫</span>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/airpods_pro_2021.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>AirPods Pro (2021)</p>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount">5.790.000</span> <span class="price-currency">₫</span>
                            </del>
                            <ins>
                                <span class="price-amount">4.590.000</span> <span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả iPhone <span class="mui-ten">></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>Watch</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/watch-7-thep-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple Watch Series 7 Thép</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">17.990.000</span> <span class="price-currency">₫</span></p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/watch7.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple Watch Series 7 Nhôm</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">9.590.000</span> <span class="price-currency">₫</span></p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/watch-6-thep-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple Watch Series 6 Thép</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">14.990.000</span> <span class="price-currency">₫</span></p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/watch-6-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple Watch Series 6 Nhôm</p>
                        </div>
                        <div class="price-sanpham">
                            <span class="price-amount">7.490.000</span> <span class="price-currency">₫</span></p>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả Watch<span class="mui-ten"> ></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>Phụ kiện chích hãng</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/MHLQ3-600x600-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Ví da iPhone Leather Wallet with MagSafe</p>
                        </div>
                        <div class="price-sanpham">
                            <del>

                            </del>
                            <ins>
                                <span class="price-amount">1.490.000</span><span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/MHXH3_AV4_GEO_US.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Sạc MagSafe charger</p>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount">1.990.000</span><span class="price-currency">₫</span>
                            </del>
                            <ins>
                                <span class="price-amount">1.290.000</span><span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/củ111.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Sạc 20W USB-C Power Adapter</p>
                        </div>
                        <div class="price-sanpham">
                            <del>
                                <span class="price-amount">690.000</span><span class="price-currency">₫</span>
                            </del>
                            <ins>
                                <span class="price-amount">520.000</span><span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/1-12-e1625197512628.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Ốp lưng iPhone 12|12 Pro Clear Case with MagSafe MHLM3ZA/A</p>
                        </div>
                        <div class="price-sanpham">
                            <del>

                            </del>
                            <ins>
                                <span class="price-amount">1.430.000</span><span class="price-currency">₫</span>
                            </ins>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả Phụ kiện<span class="mui-ten"> ></span></a></button>
                </div>
            </div>
        </div>
        <div class="element-sanpham">
            <div class="box-container">
                <div class="title">
                    <h2>Dịch vụ</h2>
                </div>
                <div class="danhmuc-sanpham">
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/apple-care.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple Care</p>
                        </div>
                        <div class="price-sanpham">
                            <p>Giá từ 690.000₫</p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/BHKC-02-1-1536x1536.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Bảo hành kim cương</p>
                        </div>
                        <div class="price-sanpham">
                            <p>Giá từ 199.000₫</p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../IMG/Microsoft-Office-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Office 365</p>
                        </div>
                        <div class="price-sanpham">
                            <p>Giá từ 990.000₫</p>
                        </div>
                    </div>
                    <div class="box-element-sanpham-1">
                        <div class="pictures"><img src="../img/Apple-school-manager-1.png" alt=""></div>
                        <div class="title-sanpham">
                            <p>Apple School Manager</p>
                        </div>
                        <div class="price-sanpham">
                            <p>Dành cho trường học</p>
                        </div>
                    </div>
                </div>
                <div class="see-all-iphone">
                    <button><a href="#">Xem tất cả Dịch vụ<span class="mui-ten"> ></span></a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>