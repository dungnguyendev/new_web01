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
    require_once './thu_vien.php';
    $id = $_GET['id'];

    $sql_pd = "SELECT * FROM bill_user WHERE id = $id";
    $kq = $conn->query($sql_pd);
    foreach ($kq as $row_up) {

        if (isset($_POST['sbm'])) {
            $prd_name = $_POST['client_name'];

            $address = $_POST['client-address'];
            $phone = $_POST['client-phone'];
            
            $status_bill = $_POST['status_bill'];
            $sql = "UPDATE bill_user  SET name_bill  = '$prd_name' , address = '$address' , tel = $phone , status_bill = '$status_bill'  WHERE id = $id";
            $kq = $conn->query($sql);
            header('location: ./manager_bill.php');
        }
    }
    ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: linear-gradient(#CC99CC, #CC9999);
            font-family: Arial, Helvetica, Verdana, sans-serif;
            height: 765px;
        }

        .box-edit {
            margin-top: 200px;
            font-size: 20px;
        }

        .box-edit2 {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .container-fluid h2 {
            color: #669999;
            margin-top: 0px;
        }

        form {
            display: flex;
            flex-direction: column;

        }

        .form-group {
            width: 100%;
            margin-bottom: 14px;
            display: flex;
        }

        label {
            font-size: 17px;
            width: 40%;
        }

        input,
        select {
            border: none;
            background-color: #DDDDDD;
            border-radius: 5px;
            padding: 5px;
            outline: none;
            width: 50%;
        }

        button {
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 8px;
            transition: 0.5s;
        }

        button:hover {
            background-color: #DDDDDD;
            color: #333333;
        }
    </style>
    <div class="box-edit">
        <div class="box-edit2">
            <div class="container-fluid">
                <h2>Sửa sản phẩm</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên khách hàng</label>
                        <input type="text" name="client_name"  required value="<?= $row_up['name_bill']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="client-address"  required value="<?= $row_up['address']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="client-phone"  required value="<?= $row_up['tel']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tình trang đơn hàng</label>
                        <select name="status_bill">
                            <option value="Lựa chọn">Lựa chọn</option>
                            <option value="Đang đóng gói">Đang đóng gói</option>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Chờ thanh toán">Chờ thanh toán</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                            <option value="Đã bị huỷ">Đơn đã huỷ</option>
                        </select>
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>