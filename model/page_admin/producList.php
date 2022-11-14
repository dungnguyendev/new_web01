<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/css_admin/css_index.css">
</head>

<body>
    <?php
    session_start();
    require_once '../../model/connect.php';
    $sql = "SELECT * FROM products INNER JOIN brands ON products.brand_id = brands.brand_id";
    $listSP = $conn->query($sql);
    $search = isset($_GET['name']) ? $_GET['name'] : "";
    $total_row = tongSoHang();
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $listSP = phanTrangIphone($search, $item_per_page, $current_page);
    $total_pages = ceil($total_row / $item_per_page); // toàn bộ trang 
    if (!empty($_SESSION['current_user'])) {
        $currentUser = $_SESSION['current_user'];
    ?>
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
                    <h1>Danh sách sản phẩm</h1>
                    <table>
                        <tbody>

                            <tr class="title_sp">
                                <th colspan="10"><a style="padding: 6px; text-decoration: none; background-color: #000; color: rgb(234, 232, 232);" href="./product_add.php">Thêm sản phẩm</a></th>
                            </tr>
                            <tr class="title_sp_1" style=" border: 1px solid rgb(202, 197, 197); color: rgb(234, 232, 232); background-color: rgb(98, 100, 102);">
                                <th>Mã sản phẩm</th>
                                <th>Ảnh</th>
                                <th style="width: 15%;">Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Xoá</th>
                                <th>Sửa</th>
                                <th>Copy</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                            </tr>

                            <?php foreach ($listSP as $row) { ?>
                                <tr>
                                    <td>
                                        <div class="product-prop product-img"><?= $row['product_id'] ?></div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-img"><img class="image012" src="<?= $row['image'] ?>" title="<?= $row['product_name'] ?>" /></div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-name"><?= $row['product_name'] ?></div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-name"><?= number_format($row['price'], 0, ",", ".") ?> đ</div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-name"><?= $row['quantily'] ?></div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-button"><a onclick="return Del('<?= $row['product_name'] ?>')" href="./product_delete.php?id=<?= $row['product_id'] ?>" class="button_delete">Xóa</a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="product-prop product-button">
                                            <a href="./product_edit.php?id=<?= $row['product_id'] ?>" class="button_edit">Sửa</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-button">
                                            <a href="./product_edit.php?id=<?= $row['product_id'] ?>&task=copy" class="button_edit">Copy</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-prop product-time"><?= $row['created_time'] ?></div>
                                    </td>
                                    <td>
                                        <!-- <div class="product-prop product-time"><?= $row['last_update'] ?></div> -->
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <style>
                        .phan-trang-center {
                            display: flex;
                            margin-top: 40px;
                            margin-bottom: 40px;
                        }

                        .can-giua-pt {
                            max-width: 1200px;
                            margin: 0 auto;
                            display: flex;
                        }

                        .phanTrang {
                            display: flex;
                            align-items: center;
                            align-content: center;
                            margin-right: 4px;
                            width: 100%;
                            height: 15px;
                            padding: 5px;
                            text-decoration: none;
                            border: 1px solid #4b4b4a;
                            border-radius: 5px;
                        }

                        strong {
                            margin-right: 4px;
                            display: flex;
                            width: 100%;
                            align-items: center;
                            align-content: center;
                            color: #fff;
                            background: #515154;

                            height: 15px;
                            padding: 5px;
                            text-decoration: none;
                            border: 1px solid #4b4b4a;
                            border-radius: 5px;
                        }
                    </style>
                    <?php
                    $param = "";
                    if ($search) {
                        $param = "name=" . $search . "&";
                    }
                    ?>
                    <div class="phan-trang-center">
                        <div class="can-giua-pt">
                            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                <?php if ($i != $current_page) { ?>
                                    <a class="phanTrang" href="?<?= $param ?>per_page=<?= $item_per_page ?>&page=<?= $i ?>"><?= $i ?></a>
                                <?php } else { ?>
                                    <strong><?= $i ?></strong>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        function Del(name) {
            return confirm("Bạn có chắc chắn muấn xoá sản phẩm: " + name + " ?");
        }
    </script>
</body>

</html>