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

    $sql_pd = "SELECT * FROM brands WHERE brand_id = $id";
    $kq = $conn->query($sql_pd);
    foreach ($kq as $row_up) {

        if (isset($_POST['sbm'])) {
            $brand_name = $_POST['brand_name'];
            
            $sql = "UPDATE brands  SET brand_name = '$brand_name'  WHERE brand_id = $id";
            $kq = $conn->query($sql);
            header('location: ./index.php');
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
                <h2>Sửa loại hàng</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Loại hàng</label>
                        <input type="text" name="brand_name"  required value="<?= $row_up['brand_name']; ?>">
                    </div>
                    
                    <button name="sbm" class="btn btn-success" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>