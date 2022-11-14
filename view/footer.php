<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <style>
        .box{
            display: flex;
            justify-content: space-between;
        }
        .sang{
            color: #D2D2D7;
        }
    </style>
    <div class="footer">
        <div class="gioi-han-rong-footer">
            <div class="box-container-footer">
                <div class="flex-footer-box">
                    <div class="pr-thuong-hieu-footer">
                        <div class="logo-shopUcha">
                            <img src="../img/7600848499_0f8b365e-ac63-41cb-9653-0e62ef28d5b3.png" alt="">
                        </div>
                        <div class="revews-shopUcha">
                            <p>Năm 2020, ShopUcha trở thành đại lý ủy quyền của Apple. Chúng tôi phát triển chuỗi cửa
                                hàng
                                tiêu chuẩn và Apple Mono Store nhằm mang đến trải nghiệm tốt nhất về sản phẩm và dịch vụ
                                của
                                Apple cho người dùng Việt Nam.</p>
                        </div>
                        <ul class="logo-thongtin-ve-thuongmai">
                            <li><a href="#"><svg width="50" height="50" fill="none">
                                        <circle cx="25" cy="25" r="24" stroke="#515154" stroke-width="2"></circle>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </svg></a></li>
                            <li><a href="#"><svg width="50" height="50" fill="none">
                                        <circle cx="25" cy="25" r="24" stroke="#515154" stroke-width="2"></circle>
                                        <i class="fa-brands fa-youtube"></i>
                                    </svg></a></li>
                            <li><a href="#"><svg width="50" height="50" fill="none">
                                        <circle cx="25" cy="25" r="24" stroke="#515154" stroke-width="2"></circle>
                                        <i class="fa-brands fa-mandalorian"></i>
                                    </svg></a></li>
                        </ul>
                    </div>
                    <div class="box-sanpham-footer">
                        <div class="element-sanpham-footer">
                            <div class="box-san123">
                                <div class="title-sanham-footer">
                                    <h2 class="title-sanpham-footer-1">Sản phẩm</h2>
                                </div>
                                <div class="element-87b620">
                                    <ul>
                                        <li><a href="#">iPhone</a></li>
                                        <li><a href="#">iPad</a></li>
                                        <li><a href="#">Mac</a></li>
                                        <li><a href="#">Apple Watch</a></li>
                                        <li><a href="#">Âm thanh</a></li>
                                        <li><a href="#">Phụ kiện</a></li>
                                        <li><a href="#">Dịch vụ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-thongtin-footer">
                        <div class="element-thongtin-footer">
                            <div class="title-thongtin-footer">
                                <h2 class="title-sanpham-footer-1">Thông tin</h2>
                            </div>
                            <div class="element-87b620">
                                <ul>
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Khuyến mãi</a></li>
                                    <li><a href="#">Bảo hành và sữa chữa</a></li>
                                    <li><a href="#">Tuyển dụng</a></li>
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Check IMEI</a></li>
                                    <li><a href="#">Phương thức thanh toán</a></li>
                                    <li><a href="#">Gủi góp ý, khiếu nại</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-chinhsach-footer">
                        <div class="element-chinhsach-footer">
                            <div class="title-chinhsach-footer">
                                <h2 class="title-sanpham-footer-1">Chính sách</h2>
                            </div>
                            <div class="element-87b620">
                                <ul>
                                    <li><a href="#">Trả góp</a></li>
                                    <li><a href="#">Giao hàng</a></li>
                                    <li><a href="#">Giao hàng (ZaloPay)</a></li>
                                    <li><a href="#">Huỷ giao dịch</a></li>
                                    <li><a href="#">Đổi trả</a></li>
                                    <li><a href="#">Bảo hành</a></li>
                                    <li><a href="#">Giải quyết khiếu nại</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-diachi-footer">
                        <div class="element-diachi-footer">
                            <div class="title-diachi-footer">
                                <h2 class="title-sanpham-footer-1">Địa chỉ</h2>
                            </div>
                            <div class="element-87b620">
                                <ul>
                                    <li><a href="#">Tìm Store trên Google Map</a></li>
                                    <li><a href="#">Hệ thống cửa hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="element-lienhe-footer">
                            <div class="title-lienhe-footer">
                                <h2 class="title-sanpham-footer-1">Liên hệ</h2>
                            </div>
                            <div class="element-87b624">
                                <p>
                                    Mua hàng: <a href="#">0366764838</a>
                                </p>
                                <p>
                                    Khiếu nại: <a href="#">0916409999</a>
                                </p>
                                <p>
                                    Doanh nghiệp & đối tác: <a href="#">0916409999</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thiet-ke">
                <div class="box">
                    <p class="du-an">Performer: Nguyễn Tiến Dũng</p>
                    <div id="chao">
                        <?php
                        $h = gmdate("H")+7;
                        
                        if ($h <= 12) {
                            echo "  <span class='sang'> Bây giờ là $h giờ sáng! Chúc một ngày an lành </span>" ;
                        } else {
                            echo "  <span class='sang'> Bây giờ là $h giờ chiều! Chúc một ngày vui</span>" ;
                                                     
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>