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
   <legend><i class="glyphicon glyphicon-globe"></i> Đăng ký thành viên!
   </legend> 
   <form action="../controller/dangkyController.php" method="POST" class="form" role="form"> 
     <input class="form-control" name="txt_name" placeholder="Họ tên" required="" type="text" required="required"> 
     <input class="form-control" name="txt_email" placeholder="Email" type="email" required="required"> 
     <input class="form-control" name="txt_account" placeholder="Tên đăng nhập" type="text" required="required">
     <input class="form-control" name="txt_password" placeholder="Mật khẩu" type="password" required="required">
     <input class="form-control" name="txt_phone" placeholder="Số điện thoại" type="text" required="required"> 
     <label for=""> Giới tính</label> <br>
     <label class="radio-inline">
     <input name="rdg_sex" id="inlineCheckbox1" checked value="Nam" type="radio">Nam </label> 
     <label class="radio-inline">         
     <input name="rdg_sex" id="inlineCheckbox2" value="Nữ" type="radio"> Nữ </label> 
    <br> 
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_DangKy">Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>
</body>
</html>