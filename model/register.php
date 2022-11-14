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
        .container {
            height: 800px;
        }
        .form-dky{

            padding-top: 200px;
        }
        #form_sua {
            border: 10px solid black;
            border-radius: 8px;
            overflow: hidden;
        }

        .bg-secondary {
            background-color: pink;
        }

        .border-secondary {
            border: none;
        }

        .border {
            border: none;
        }

        .dau {
            height: 30px;
        }

        .form-group {
            padding: 0px 10px;
        }

        #form_sua {
            margin-top: 100px;
            margin-bottom: 100px;
        }
    </style>
    <?php require_once("../view/menu.php") ?>
    <div class="container">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="form-dky">
            <div id="form_sua" class="col-6 m-auto border border-secondary">
                <form action="../model/checkRegister.php" method="post">
                    <h4 class="bg-secondary text-white p-2 my-0 mx-n3" style="text-align:center;">ĐĂNG KÝ THÀNH VIÊN</h4>
                    <div class="form-group">
                        <label for="username">Tên truy cập</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="repass">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="repass" name="repass">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary py-2 px-5" value="Đăng ký" name="sight-submit">
                        <input type="reset" class="btn btn-danger py-2 px-5" value="Làm lại">
                    </div>
                    
                  
                </form>
            </div>
        </div>
    </div>
    <?php require_once("../view/footer.php") ?>
</body>

</html>