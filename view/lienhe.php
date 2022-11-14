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
    <style>
        .container {
            height: 1400px;
        }

        .box-title {
            padding-top: 66px;
        }

        .box-title-1 {
            display: flex;
            z-index: -1;
            position: relative;
            background: #4B4B4B;
            height: 200px;
        }

        h2 {
            width: 100%;
            display: flex;
            align-content: center;
            align-items: center;
            margin: 0;
            justify-content: center;
            text-align: center;
            bottom: 0;
            font-size: 60px;
            color: #D2D2D7;
        }

        .khung-conten {
            margin-top: -37px;
        }

        .box-conten {
            display: flex;
            align-items: center;
            align-content: center;
            box-shadow: 0 0 5px grey;
            border-radius: 10px;
            background: #fff;
            height: 262px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .box-conten-1 {
            margin-right: 15px;
            width: 100%;
        }

        .box-lienhe-us {
            width: 100%;
            display: flex;
            --spacingColumn: 15px;
            --Column: 3;
            /* margin-left: calc(-1 * var(--spacingColumn)); */
            margin-right: calc(-1 * var(--spacingColumn));
        }

        .box-lienhe-us-1 {
            display: flex;
            border-radius: 10px;
            align-items: center;
            align-content: center;
            flex-direction: column;
            margin-bottom: var(--spacingColumn);
            margin-left: var(--spacingColumn);
            border: 1px solid gray;
            width: calc(calc(100% / var(--Column)) - var(--spacingColumn));
        }

        .form {
            color: grey;
        }

        .google-map {
            margin-top: 100px;
            margin-bottom: 50px;
        }

        .title-ifame {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            height: 300px;
        }

        .map-ifame {
            max-width: 1200px;
            margin: 0 auto;
            height: 174px;
        }

        h3 {
            width: 100%;
            display: flex;
            align-content: center;
            align-items: center;
            margin: 0;
            justify-content: center;
            text-align: center;
            bottom: 0;
            font-size: 40px;
            color: #D2D2D7;

        }

        iframe {
            width: 100%;
        }
        .us-1{
            margin-top: 10px;
            color: red;
            font-size: 25px;
        }
    </style>
    <?php require_once("menu.php") ?>
    <div class="container">
        <div class="box-title">
            <div class="box-title-1">
                <h2>Liên hệ</h2>
            </div>
        </div>
        <div class="khung-conten">
            <div class="box-conten">
                <div class="box-conten-1">
                    <div class="box-lienhe-us">
                        <div class="box-lienhe-us-1">
                            <div class="form">
                            <i class="fa-solid fa-phone us-1"></i>
                            </div>
                            <div class="form">
                                <p>+0366764838</p>
                            </div>
                            <div class="form">
                                <p>+1900999999</p>
                            </div>
                        </div>
                        <div class="box-lienhe-us-1">
                            <div class="form">
                                <i class="fa-solid fa-envelope us-1"></i>
                            </div>
                            <div class="form">
                                <p>dungnguyentien277@gmail.com</p>
                            </div>
                            <div class="form">
                                <p>shopUcha@gmail.com</p>
                            </div>
                        </div>
                        <div class="box-lienhe-us-1">
                            <div class="form">
                                <i class="fa-solid fa-location-dot us-1"></i>
                            </div>
                            <div class="form">
                                <p>998/42/9 Quang Trung, Phường 8, Gò Vấp, TP HCM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-ifame">
            <h3>Google Maps</h3>
        </div>
        <div class="map-ifame">
            <div class="box-ifame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6165381347596!2d106.64565451477206!3d10.840629192277985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529313c967aa7%3A0x7b95a6867a3317f4!2zOTk4LzQyLzkgUXVhbmcgVHJ1bmcsIFBoxrDhu51uZyA4LCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1658559414201!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php require_once("footer.php") ?>
</body>

</html>