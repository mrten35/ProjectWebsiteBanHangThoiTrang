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
                <legend><i class="glyphicon glyphicon-globe"></i> Cập nhật mật khẩu!</legend> 
                <form action="../controller/DoiMatKhau.php" method="POST" > 
                        <input class="form-control" name="txt_username" placeholder="Email" type="username">
                        <input class="form-control" name="txt_password" placeholder="Mật khẩu cũ" type="password"> 
                        <input class="form-control" name="txt_newpassword" placeholder="Mật khẩu mới" type="password"> 
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_Capnhat"> Cập nhật</button> 
                </form> 
            </div> 
        </div>
    </div>
</body>
</html>