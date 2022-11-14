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
            background: grey;
        }

        p {
            color: #fff;
        }

        h1 {
            font-size: 40px;
            text-align: center;
            color: #fff;
            padding-top: 200px;
            padding-bottom: 200px;
        }

        button {
            border-radius: 7px;
            border: none;
            background: #6ca6d6;
            padding: 7px;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }
    </style>

    <?php
    require "../model/connect.php";
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $returnPass = $_POST['repass'];
    $email = $_POST['email'];
    if ($username == "" || $password == "" || $returnPass == "" || $email == "") {
        echo "<h1>ERROR</h1>";
        echo "<p>Bạn chưa nhập đầy đủ thông tin</p>";
    } else {
        if ($password != $returnPass) {
            echo "<h1>ERROR</h1>";
            echo "<p>Xác minh mặt khẩu không đúng</p>";
        } else {

            $sql = "INSERT INTO users (userName, `password` , email, created_date) VALUES ('$username','$password','$email', Now())";
            $kq = $conn->exec($sql);
            if ($kq == 1) {
                echo "Thành công";
                if (time_nanosleep(0, 80)) {
                    header("Location: ../controller/index.php");
                }
                //gửi mail
            } else echo "Cập nhật không thành công";
        }
    }
    //kiểm tra và báo lỗi


    ?>
    <div class="back">
        <button><a href="register.php">Back</a></button>
    </div>
</body>

</html>