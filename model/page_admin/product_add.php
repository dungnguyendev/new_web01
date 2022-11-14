<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require_once '../connect.php';
    $sql_brand = "SELECT * FROM brands";
    $query_brand = $conn->query($sql_brand);

    if (isset($_POST['sbm'])) {
        $prd_name = $_POST['product_name'];

        $image = $_FILES['image']['name'];
        $target_dir = "../../img/";
        $target_file = $target_dir . basename($image);

        $price = $_POST['price'];
        $quantily = $_POST['quantily'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

        $sql = "INSERT INTO products (product_name , image , price , quantily , description , brand_id , created_time ) VALUES ('$prd_name' , '$target_file' , $price , $quantily , '$description' , $brand_id , Now())";
        $kq = $conn->query($sql);
        move_uploaded_file($image, $target_file);
        header('location: ./producList.php');
    }
    ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: linear-gradient(#CC99CC , #CC9999 );
            font-family: Arial, Helvetica, Verdana, sans-serif;
            height: 765px;
        }

        .box_add { 
            margin-top: 200px;
            font-size: 20px;
        }
        .box-2-add{
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }
        .container-fluid h2{
            color:#669999;
            margin-top: 0px;
        }
        form{
            display: flex;
            flex-direction: column;
            
        }
        .form-group{
            width: 100%;
            margin-bottom: 14px;
            display: flex;
        }
        label{
            font-size: 17px;
            width: 40%;
        }
        input,select{
            border: none;
            background-color: #DDDDDD;
            border-radius: 5px;
            padding: 5px;
            outline: none;
            width: 50%;
        }
        button{
            border: none;
            outline: none;
            padding: 10px;
            border-radius:8px ;
            transition: 0.5s ;
        }
        button:hover{
            background-color: #DDDDDD;
            color: #333333;
        }
    </style>
    <div class="card-upon">

    </div>
    <div class="box_add">
        <div class="box-2-add">
            <div class="container-fluid">
                <h2>Thêm sản phẩm</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng sản phẩm</label>
                        <input type="text" name="quantily" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả sản phẩm</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <select name="brand_id">
                            <?php
                            foreach ($query_brand as $row_brand) { ?>
                                <option value="<?= $row_brand['brand_id']; ?>"><?= $row_brand['brand_name']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>