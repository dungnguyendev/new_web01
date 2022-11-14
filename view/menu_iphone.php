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
        .title-search {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #search-iphone {
            border: none;
            border-radius: 5px;
            background: #fff;
            outline: none;
            padding: 7px;
            width: 220px;
        }

        #search-submid {
            border: none;
            outline: none;
            background: #fff;
            color: #515154;
            padding: 7px;
            border-radius: 5px;
            transition: .5s ease;
            font-weight: 600;
        }

        #search-submid:hover {
            background: #0066CC;
            color: #fff;
        }
    </style>

    <div class="title-search">
        <ul class="title-search-ul">
            <li class="title-search-li"><a href="#">Tất cả</a></li>
            <li class="title-search-li"><a href="#">iPhone 13</a></li>
            <li class="title-search-li"><a href="#">iPhone 12</a></li>
            <li class="title-search-li"><a href="#">iPhone 11</a></li>
            <li class="title-search-li"><a href="#">iPhone SE</a></li>
        </ul>
        <form action="" method="GET" id="product_search">
            <input type="text" name="name" id="search-iphone" placeholder="Search...">
            <input type="button" value="Tìm kiếm" name="" id="search-submid">
      `  </form>
    </div>
</body>

</html>