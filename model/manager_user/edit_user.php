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
    require_once './thu_vien_user.php';
    $id = $_GET['id'];
    $sql_pd = "SELECT * FROM users WHERE id = $id";
    $kq = $conn->query($sql_pd);
    foreach ($kq as $row_up) {

        if (isset($_POST['sbm'])) {
            $prd_name = $_POST['userName'];

            // if ($_FILES['image']['name'] == '') {
            //     $target_file = $row_up['image'];
            // } else {
            //     $image = $_FILES['image']['name'];
            //     $target_dir = "../../img/";
            //     $target_file = $target_dir . basename($image);
            // }

            $price = $_POST['password'];
            $quantily = $_POST['email'];
            $description = $_POST['create_update'];
            $created_date = $_POST['create_date'];

            $sql = "UPDATE users  SET userName = '$prd_name' , password = '$price' , email = '$quantily' ,created_date = '$created_date' , created_up_date = '$description'  WHERE id = $id";
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
            justify-content: space-between;
        }

        label {
            font-size: 17px;
            width: 40%;
        }

        input {
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
                <h2>Sửa user</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên người dùng</label>
                        <input type="text" name="userName" class="form-control" required value="<?= $row_up['userName']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" required value="<?= $row_up['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" required value="<?= $row_up['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày update</label>
                        <input type="date" name="create_update" class="form-control" required>
                        <input style="display: none;" type="text" name="create_date"  class="form-control" required value="<?= $row_up['created_date']; ?>" >
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>