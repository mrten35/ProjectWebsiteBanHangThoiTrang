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

  <!-- Start feature Area -->
  
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>NEW ARRIVALS</span></h2>
            
          </div>
        </div>
      </div>

      <div class="row">
      <?php
          $arrAnh=array("img/image/chanvay/3.jpg","img/image/chanvay/4.jpg","img/image/chanvay/5.jpg","img/image/đầm nữ/3.jpg","img/image/đầm nữ/4.jpg",
          "img/image/đầm nữ/5.jpg");
          $arrTensp=array("CHÂN VẤY 3 TẦNG","CHÂN VẤY RÚT DÂY","CHÂN VẤY HOA","ĐẦM REN ÔM VIỀN MÀU","ĐẦM NHUNG CỔ VUÔNG","ĐẦM ÔM TAY HẾN 2 LỚP");
          $arrGia=array("170.000₫","460.000₫","275.000₫","170.000₫","460.000₫","275.000₫");
          $arrGiam=array("","","300.000₫","","","300.000₫");
          for($i=0;$i<count($arrTensp);$i++){
            echo'<div class="col-lg-4 col-md-6">';
            echo'<div class="single-product"> '; 
            echo'<div class="product-img">';
            echo'<img class="img-fluid w-100" src="'.$arrAnh[$i].'" alt="" />';
            echo'<div class="p_icon">';
            echo'<a href="ChiTiet-SP.php">';
            echo'<i class="ti-eye"></i>';
            echo'</a>';
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
            echo'<del>'.$arrGiam[$i].'</del>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
          }
        ?>
      </div>
    </div>
  </section>
  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container" style="margin-top:-150px;">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
          </div>
        </div>
      </div>

      <div class="row"  >
        <div class="col-lg-6" >
          <div class="new_product" style="height:1020px">
            <h5 class="text-uppercase">Bộ sưu tập</h5>
            <h3 class="text-uppercase">Áo thun nữ mùa hè 2021</h3>
            <div class="product-img" >
              <img class="img-fluid" src="img/product/new-product/new-product1.png"  alt="" />
            </div>
            <h4>185.000₫</h4>
            <a href="giohang.php" class="main_btn">Thêm vào giỏ hàng</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row" >
            <?php
              $arrAnh=array("img/image/chanvay/1.jpg","img/image/chanvay/2.jpg","img/image/đầm nữ/1.jpg","img/image/đầm nữ/2.jpg");
              $arrTensp=array("CHÂN VÁY A XÒE ","CHÂN VÁY BÚT CHÌ 1 NÚT","ĐẦM CHỮ A 2 LỚP","TWEED DRESSES");
              $arrGia=array("240.000₫","320.000₫","240.000₫","320.000₫");
              $arrGiam=array("260.000₫","","260.000₫","");
              for($i=0;$i<count($arrTensp);$i++){
                echo'<div class="col-lg-6 col-md-6">';
                echo'<div class="single-product">';
                echo'<div class="product-img">';
                echo'<img class="img-fluid w-100" src="'.$arrAnh[$i].'" alt="" />';
                echo'<div class="p_icon">';
                echo'<a href="ChiTiet-SP.php">';
                echo'<i class="ti-eye"></i>';
                echo'</a>';
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
                echo'<del>'.$arrGiam[$i].'</del>';
                echo'</div>';
                echo'</div>';
                echo'</div>';
                echo'</div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
  
  <!--================ End Inspired Product Area =================-->

  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Tin tức mỗi ngày</span></h2>
           
          </div>
        </div>
      </div>

      <div class="row">
        <?php
          $arrTieude=array("PHỐI ĐỒ CHUẨN PHONG CÁCH SUIT HÀN – Ý THEO PHIM VINCENZO","PHƯƠNG PHÁP LỰA CHỌN QUẦN JEANS CHO NỮ","Cửa hàng phụ kiện thời trang uy tín của Julius");
          $arrNoiDung=array("Hai đất nước Ý và Hàn Quốc luôn được biết đến là những quốc gia có phong cách Vest ấn tượng. Nam giới ở cả hai đất nước đều có xu hướng t...",
                      "Các bạn nữ luôn muốn chọn cho mình sự hoàn hảo nhất đặc biệt là trong việc chọn lựa chọn mình những bộ cánh xinh xắn. Hôm nay chúng ta cùng bàn về câu chuyện chọn quần jeans phù hợp cho các nàng nhé!",
                      "Phụ kiện thời trang đang là từ khóa hot dược đông đảo giới trẻ tìm kiếm. làm thế nào để mua được những phụ kiện thời trang vừa đẹp vừa rẻ mà lại đảm bảo uy tín.");
          $arrLink=array("https://milando.vn/blogs/tin-tuc/phoi-do-chuan-phong-cach-suit-han-y-theo-phim-vincenzo","https://thoitrangngaynay.com/phuong-phap-lua-chon-quan-jeans-cho-nu.html",
                  "https://thejulius.com.vn/blogs/cua-hang-phu-kien-thoi-trang-uy-tin-cua-julius/");
          $arrAnh=array("img/b1.jpg","img/b2.jpg","img/b3.jpg");
          for($i=0;$i<count($arrTieude);$i++){
            echo'<div class="col-lg-4 col-md-6">';
            echo'<div class="single-blog">';
            echo'<div class="thumb">';
            echo'<img class="img-fluid" src="'.$arrAnh[$i].'" alt="">';
            echo'</div>';
            echo'<div class="short_details">';
            echo'<div class="meta-top d-flex">';
            echo' <a href="#">By Admin</a>';
            echo'<a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>';
            echo'</div>';
            echo'<a class="d-block" href="single-blog.html">';
            echo'<h4>'.$arrTieude[$i].'</h4>';
            echo'</a>';
            echo'<div class="text-wrap">';
            echo'<p>'.$arrNoiDung[$i].'';
            echo'</p></div>';
            echo'<a href="'.$arrLink[$i].'" class="blog_btn">Đọc thêm<span class="ml-2 ti-arrow-right"></span></a>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
          }

        ?>
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

  <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
</body>

</html>