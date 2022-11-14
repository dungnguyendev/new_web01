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
    require_once ('../model/connect.php');
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $returnPass = $_POST['passmoi'];
    $returnPass1 = $_POST['returnpassmoi'];
    if ($username == "" || $password == "" || $returnPass == "" || $returnPass1 == "") {
        echo "<h1>ERROR</h1>";
        echo "<p>Bạn chưa nhập đầy đủ thông tin</p>";
    } else {
        if ($returnPass !=  $returnPass1) {
            echo "<h1>ERROR</h1>";
            echo "<p>Xác nhận mật khẩu không chích xác</p>";
        } else {
            $sql = " UPDATE users SET password = $returnPass WHERE userName = '$username'";
            $return = $conn->query($sql);
            echo "<p>Đổi pass thành công</p>";
        }
    }
    ?>
    <div class="return">
        <p><button><a href="login.php">TRỞ VỀ ĐĂNG NHẬP</a></button></p>
    </div>
</body>

</html>