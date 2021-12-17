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
   <form action="dangkyController.php" method="POST" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" name="txt_ho" placeholder="Họ" required="" autofocus="" type="text"> 
     </div> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" name="txt_ten" placeholder="Tên" required="" type="text"> 
     </div> 
    </div> <input class="form-control" name="txt_email" placeholder="Email" type="email"> <input class="form-control" name="txt_password" placeholder="Mật khẩu" type="password"> <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> 
    <label for=""> Giới tính</label> <br>
    <label class="radio-inline"><input name="txt_sex" id="inlineCheckbox1" value="male" type="radio">Nam </label> <label class="radio-inline">          <input name="txt_sex" id="inlineCheckbox2" value="female" type="radio"> Nữ </label> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block" type="submit" >Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>
</body>
</html>