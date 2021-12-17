<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "layout/headerLogin.php";
    ?>
</head>
<body style="background-color:aliceblue;">
    <div class="container"> 
        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
                <legend><i class="glyphicon glyphicon-globe"></i> Đăng nhập!</legend> 
                <form action="dangnhapController.php" method="POST" > 
                        <input class="form-control" name="txt_username" placeholder="Tên đăng nhập" type="username">
                        <input class="form-control" name="txt_password" placeholder="Mật khẩu" type="password"> 
                        <div class="form-group"> 
                        <div class="checkbox"> <label for="c1"><input id="c1" name="ck_thongtin" type="checkbox">Nhớ thông tin</label> 
                        </div> 
                        </div> 
                        <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng nhập</button> 
                        <hr> 
                        <p class="text-center">Bạn có tài khoản không? <strong><a href="dangky.php">Đăng ký ngay!</a></strong></p>
                </form> 
            </div> 
        </div>
    </div>
</body>
</html>