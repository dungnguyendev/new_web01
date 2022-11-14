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
        body {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, Verdana, sans-serif;
        }

        #intro-owl {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 115px;
           
        }   

        #intro-owl a img {
            width: 100%;
            height: 474px;
        }

        .owl-dots {
            display: none !important;
        }
    </style>
    <div id="intro-owl">
        <div class="owl-carousel owl-theme">
            <a href="#"><img src="../image-mua-he/30315467-hello-summer-banner.png.rendition.1960.1960.webp" alt="" class="imamge-mua-he"></a>
            <a href="#"><img src="../image-mua-he/banner-quang-cao-sale.jpg" alt="" class="imamge-mua-he"></a>
        </div>
    </div>
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