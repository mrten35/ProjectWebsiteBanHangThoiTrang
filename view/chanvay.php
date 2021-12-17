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
    <?php
      include 'layout/banner.php';
    ?>
    <!--================End Home Banner Area =================-->
    <div class="row justify-content-center" id="home_sp">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span id="thơitrangnam">Chân vây</span></h2>
          </div>
        </div>
      </div>
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap" style="margin-top:-100px">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
        
            <div class="latest_product_inner" style="margin-top:-30px">
              <div class="row">
                <?php
                  $arrAnh=array("img/image/chanvay/1.jpg","img/image/chanvay/2.jpg","img/image/chanvay/3.jpg","img/image/chanvay/4.jpg",
                        "img/image/chanvay/5.jpg","img/image/chanvay/6.jpg","img/image/chanvay/7.jpg");
                  $arrTensp=array("CHÂN VÁY A XÒE ","CHÂN VÁY BÚT CHÌ 1 NÚT","CHÂN VẤY 3 TẦNG","CHÂN VẤY RÚT DÂY","CHÂN VẤY HOA",
                              "CHÂN VẤY PHỐI NÚT","CHÂN VẤY XÒE ĐAN DÂY");
                  $arrGia=array("240.000₫","320.000₫","170.000₫","460.000₫","275.000₫","345.000₫","270.000₫");
                  $arrDel=array("260.000₫","","","","300.000₫","","");
                  for($i=0;$i<count($arrTensp);$i++){
                    echo'<div class="col-lg-4 col-md-6">';
                    echo'<div class="single-product">';
                    echo'<div class="product-img">';
                    echo'<img class="card-img" src="'.$arrAnh[$i].'" alt="" />';
                      echo' <div class="p_icon">';
                      echo' <a href="ChiTiet-SP.php">';
                      echo'   <i class="ti-eye"></i>';
                      echo' </a>';
                      echo'<a href="#">';
                      echo'<i class="ti-heart"></i>';
                      echo'</a>';
                      echo'<a href="giohang.php">';
                      echo'<i class="ti-shopping-cart"></i>';
                      echo'</a>';
                      echo'</div>';
                      echo'</div>';
                      echo'<div class="product-btm">';
                      echo'<a href="ChiTiet-SP.php" class="d-block">';
                      echo'<h4>'.$arrTensp[$i].'</h4>';
                      echo'</a>';
                      echo'<div class="mt-3">';
                      echo'<span class="mr-4">'.$arrGia[$i].'</span>';
                      echo'<del>'.$arrDel[$i].'</del>';
                      echo'</div>';
                      echo'</div>';
                      echo'</div>';
                      echo'</div>';
                  }
                ?>
  
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Danh mục sản phẩm</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="sanpham.php">Đầm nữ</a>
                    </li>
                    <li>
                      <a href="chanvay.php">Chân vấy</a>
                    </li>
                    <li>
                      <a href="#">Áo thun nữ</a>
                    </li>
                    <li>
                    <a href="#">Áo Khoát</a>
                    </li>
                  </ul>
                </div>
              </aside>

              

              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
  </body>
</html>
