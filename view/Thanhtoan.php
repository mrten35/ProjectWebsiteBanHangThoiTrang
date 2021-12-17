<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'layout/header.php';
    ?>
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <?php
      include 'layout/menu.php';
    ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <div  class="d-md-flex justify-content-between align-items-center">
      <img src="img/image/banner/3.jpg" width="100%" height="300"/> 
    </div>
    <!--================End Home Banner Area =================-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
      <div class="container">
        
        
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Đơn hàng</h3>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate" >
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="txt_name" name="txt_name"/>
                  <span class="placeholder" data-placeholder="Họ và tên"></span>
                </div>
                
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="txt_phone" name="txt_phone"/>
                  <span class="placeholder" data-placeholder="Số điện thoại"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input  type="text" class="form-control"  id="txt_email" name="txt_email" />
                  <span  class="placeholder"  data-placeholder="Email " ></span>
                </div>
                
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1"/>
                  <span class="placeholder"  data-placeholder="Địa chỉ" ></span>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="txt_zip" name="txt_zip"  placeholder="Postcode/ZIP" />
                </div>
                <div class="col-md-12 form-group">
                  
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <h3>Chi tiết vận chuyển</h3>
                    <input type="checkbox" id="chk_selector" name="chk_selector" />
                    <label for="f-option3">Gửi đến một địa chỉ khác</label>
                  </div>
                  <textarea class="form-control" name="txt_message" id="txt_message" rows="1"  placeholder="Ghi chú"></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Đơn hàng của bạn</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Sản phẩm
                      <span>Tổng tiền</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >ĐẦM CHỮ A 2 LỚPy
                      <span class="middle">x 02</span>
                      <span class="last">240.000₫</span>
                    </a>
                  </li>
                  
                </ul>
                <ul class="list list_2">
                  
                  <li>
                    <a href="#"
                      >Tiền ship
                      <span>: 20.000₫</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Tổng hóa đơn
                      <span>500.000₫</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Thanh toán khi nhận hàng</label>
                    <div class="check"></div>
                  </div>
                  
                </div>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Chuyển khoản </label>
                    
                    <div class="check"></div>
                  </div>
                 
                </div>
                
                <a class="main_btn" href="#">Proceed to Paypal</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
  </body>
</html>
