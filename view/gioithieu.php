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
        .container {
            background: #fff;
            height: 1500px;
        }

        .box-title {
            padding-top: 33px;
        }

        .box-title-1 {
            display: flex;
            z-index: -1;
            position: relative;
            background: #4B4B4B;
            height: 200px;
        }

       

        .box-gioithieu {
            max-width: 1200px;
            margin: 0 auto;

        }

        .box-gioithieu1 {
            margin-top: 100px;
            width: 100%;
        }

        .anh {
            margin-bottom: 100px;
            width: 100%;
        }

        img {
            max-width: 300px;
            margin: 0 auto;
            display: flex;
        }
        .noi-dung{
            max-width: 900px;
            margin: 0 auto;
            padding-bottom: 70px;
        }
        .noi-dung p{
            font-size: 17px;
            letter-spacing: 1px;
            
        }
        .img-pr{
            max-width: 1200px;
            height: 500px;
        }
        .chu-thich{
            font-size: 10px;
            text-align: center;
            font-style: italic;
        }
        h3{
            margin-top: 50px;
            text-align: center;
        }
        .gia-tri-4{
            max-width: 100%;
            margin-bottom: 50px;
        }
        
    </style>
    <?php require_once('menu.php') ?>
    <div class="container">
        <div class="box-title">
            <div class="box-title">

                <div class="box-gioithieu">
                    <div class="box-gioithieu1">
                        <div class="anh"><a href="#"> <img src="../../img/7600835218_806b2f4e-f81b-48b3-9af0-e3b2ece8c619.png" alt="">
                            </a></div>
                        <div class="noi-dung">
                            <p>Ucha Group là đơn vị số 1 tạo nên những trải nghiệm tuyệt vời cho quá trình mua sắm sản phẩm công nghệ tại Việt Nam. Chúng tôi là đối tác ủy quyền tin cậy của các hãng công nghệ uy tín hàng đầu trên thế giới như Apple, Samsung trong lĩnh vực thương mại và dịch vụ. Điều tuyệt vời nhất ở HESMAN chính là, khi chúng ta trở thành đồng nghiệp, đối tác hay khách hàng của nhau, chúng ta đã trở thành người một nhà. Ở mỗi điểm chạm, chúng ta luôn kết nối, bàn bạc và trao đổi để cùng thống nhất mục tiêu chung, bởi chúng ta không có khoảng cách.</p>
                        </div>
                        <div class="anh-quang-cao">
                            <img class="img-pr" src="../../img/quangcao/Thi-t-k-c-a-h-ng-i-n-tho-i-S-Store-2-.jpg" alt="">
                            <p class="chu-thich">Hình ảnh một store của ShopUcha</p>
                        </div>
                        <div class="noi-dung">
                            <h3>Giá trị cốt lỗi của người HESMAN</h3>
                            <p>HESMAN Group đã tạo nên một lịch sử mới cho thương hiệu ShopUcha, xóa nhòa đi mọi định kiến và khái niệm về thương hiệu ShopDunk cũ ở những năm 2012-2016. Hiện ShopDunk đang mạnh mẽ dấn thân, trở thành đối tác uy tín của những hãng công nghệ hàng đầu thế giới.</p>
                            <img class="gia-tri-4" src="../../img/quangcao/4-gia-tri-2048x401.webp" alt="">
                        </div>
                    </div>
                    <div class="box-gioithieu1">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('aside.php')?>
    <?php require_once('footer.php') ?>
</body>

</html>