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

    <!--================Single Product Area =================-->
    <section class="feature_product_area section_gap_bottom_custom">
      <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="main_title">
              <h2><span>CHI TIẾT SẢN PHẨM </span></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="product_image_area" style="margin-top: -150px;">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <?php
                $i=0;
                $arrAnh=array("img/image/đầm nữ/1.jpg");
                  echo'<div class="s_product_img">';             
                  echo'<img class="card-img" src="'.$arrAnh[$i].'" alt="" />';
                  echo'</div>';
            ?>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
            <?php
              $i=0;
              $arrTensp=array("ĐẦM CHỮ A 2 LỚP");
              $arrGia=array("240.000₫");
              $arrSize=array("S,M,L");
              $arrChatlieu=array("Jean");
              $arrDescription=array("Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, 
              lý do bên mình chọn làm loại jean mỏng là vì bên mình đã 
              làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem lại.");
              echo' <h3>'.$arrTensp[$i].'</h3>';
              echo'<h2>'.$arrGia[$i].'</h2>';
              echo'<ul class="list">';
              echo'<li>';
              echo'<a class="active" href="#"><span>Size :</span>'.$arrSize[$i].'</a>';
              echo'</li>';
              echo'<li>';
              echo'<a href="#"> <span>Chất liệu :</span>'.$arrChatlieu[$i].'</a>';
              echo'</li>';
              echo'</ul>';
              echo'<p>'.$arrDescription[$i].'</p>';
            ?>
              <div class="product_count">
                <label for="qty">Quantity:</label>
                <input
                  type="text"
                  name="qty"
                  id="sst"
                  maxlength="12"
                  value="1"
                  title="Quantity:"
                  class="input-text qty"
                />
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                  class="increase items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-up"></i>
                </button>
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                  class="reduced items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
              <div class="card_area">
                <a class="main_btn" href="cart.php"style="background:#007bff;" >Thêm vào giỏ hàng</a>
                <a class="main_btn" href="Thanhtoan.php" style="background:red;">Mua ngay</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
      
    </section>
    <!--================End Product Description Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
  </body>
</html>
