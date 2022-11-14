<body>
    <style>
        .container {
            height: 800px;
        }

        .form-dky {

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
                <form action="../model/xulydoipass.php" method="post">
                    <h4 class="bg-secondary text-white p-2 my-0 mx-n3" style="text-align:center;">THAY ĐỔI MẬT KHẨU</h4>
                    <div class="form-group">
                        <label for="username">Tên truy cập</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="repass">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="repass" name="passmoi">
                    </div>
                    <div class="form-group">
                        <label for="repass1">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="repass1" name="returnpassmoi">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input name="btn" type="submit" value="Cập nhật" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once("../view/footer.php") ?>
</body>