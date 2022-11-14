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
       
        .container{
            
            height: 800px;
        }
        .box-login{
            padding-top: 240px;
            max-width: 400px;
            margin: 0 auto  ;
            
        }
        form{
            padding: 20px;
            border-radius: 7px;
            background: #1d2b3a;
        }
        .form-group{
            padding-left: 10px;
            color: grey;
            margin-bottom: 10px;
        }
        button{
            padding: 10px;
            background: #4B4B4B;
            border: none;
            color: #fff;
            border-radius: 7px;
        }
        .inputBox {
            position: relative;
            padding: 10px;
            width: 250px;
        }

        .inputBox input {
            width: 317px;
            padding: 10px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 5px;
            background: #1d2b3a;
            outline: none;
            color: #fff;
            font-size: 1em;
            transition: .5s;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            top: 0;
            padding: 12px;
            pointer-events: none;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.25);
            text-transform: uppercase;
            transition: .5s;
        }

        /* fomat cho input dau */
        .inputBox input:valid~span,
        .inputBox input:focus~span {
            color: #fff;
            transform: translateX(30px) translateY(7px);
            font-size: 0.65em;
            padding: 0 10px;
            background: #1d2b3a;
            border-left: 1px solid #4B4B4B;
            border-right: 1px solid #4B4B4B;
            letter-spacing: 0.2em;
        }

        /* fomat cho input 2 */
        .inputBox:nth-child(2) input:valid~span,
        .inputBox:nth-child(2) input:focus~span {
            background:#4B4B4B;
            color: #fff;
            border-radius: 2px;

        }

        .inputBox input:valid,
        .inputBox input:focus {
            border-left: 1px solid #00dfc4;
            border-right: 1px solid #00dfc4;
        }
        .register{
            float: right;
            
        }
        .register a{
            text-decoration: none;
            color: #fff;
            transition: .5s;
            font-size: 13px;
        }
        .qmk a{
            text-decoration: none;
            color: #fff;
            transition: .5s;
            font-size: 13px;
        }
        a:hover{
            color: #00dfc4;
        }
    </style>
    <?php

    
    require_once ("../view/menu.php"); ?>
    <div class="container">
        <div class="box-login">
            <h2>Đăng nhập</h2>
            <form action="checkLogin.php" method="post">
                <div class="inputBox">
                    <input type="text" required="required" name="u">
                    <span>User name</span>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" name="p">
                    <span>Password</span>
                </div>
                <div class="form-group">
                    <p class="qmk"><a href="quenMK.php">Quên mật khẩu ?</a></p>
                </div>
                <div class="form-group">
                    <button type="submit">Đăng nhập</button>
                    <p class="register"><a href="../model/register.php">Đăng ký tài khoản ?</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php require_once "../view/footer.php"; ?>
</body>

</html>