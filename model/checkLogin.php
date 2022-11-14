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
    require_once 'connect.php';
    $error = false;
    $userName = $_POST['u'];
    $passWord = $_POST['p'];

    if (isset($userName) && !empty($userName) && isset($passWord) && !empty($passWord)) {
        $sql = "SELECT * FROM users WHERE userName = '$userName' AND password = '$passWord'";
        $kq = $conn->query($sql);
        if (!$kq) {
            $error = true;
        } else {
            session_start();
            $user = $kq->fetch();
            $_SESSION['current_user'] = $user;
        }
        if ($error != false) {
            unset($_SESSION['current_user']);
            exit;
        }
    }
    ?>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background-color: grey;
            font-family: Arial, Helvetica, Verdana, sans-serif;
        }

        #login-notify {
            max-width: 400px;
            margin: 0 auto;
        }

        .box-opan {
            text-align: center;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        .box-admin {
            display: flex;
            justify-content: center;

        }

        p {
            font-size: 20px;
            margin: 0px;
        }

        .admin {
            color: #FF6600;
            margin-left: 5px;
        }

        a {
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            transition: 0.5s ease;
            color: #000;
        }

        a:hover {
            color: #996666;
        }
    </style>
    <?php
    if ($userName == 'admin' && $passWord == '345') {
        if (empty($_SESSION['current_user'])) {
            header("Location: ../model/login.php");
        } else {
            $currentUser = $_SESSION['current_user'];
    ?>
            <div id="login-notify" class="box-content">
                <div class="box-opan">
                    <div class="box-admin">
                        <p>Xin chào:
                        <p class="admin"> <?= $currentUser['userName'] ?></p>
                        </p><br />
                    </div>
                    <a href="../model/quenMK.php">Đổi mật khẩu</a>
                    <a href="../model/logout.php">Đăng xuất</a>
                    <a href="../model/page_admin/producList.php">Quản lý sản phẩm</a>
                </div>
            </div>

        <?php } ?>
    <?php } else { ?>
        <!-- Đưa vào tài khoản khách hàng -->
        <?php

        if (empty($_SESSION['current_user'])) {
            header("Location: ../model/login.php");
        } else { 
            header("Location: ../model/user_giohang/giohang.php");  ?>
        <?php } ?>


    <?php } ?>
</body>

</html>