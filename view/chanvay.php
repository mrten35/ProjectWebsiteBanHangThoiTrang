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
                  $servername = "localhost:4306";
                  $username = "root";
                  $password = "";
                  $dbname="thweb";
                  
                  try {
                      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                      // set the PDO error mode to exception
                      $stmt = $conn->prepare("SELECT masp, tensp, giamoi, giacu, hinh FROM  sanpham where madm='CV'");
                      $stmt->execute();
                      $sanphams = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
                      if($sanphams){
                        foreach($sanphams as $sanpham){
                          echo'<div class="col-lg-4 col-md-6">';
                          echo'<div class="single-product"> '; 
                          echo'<div class="product-img">';
                          echo'<a href="ChiTiet-SP.php?id='.$sanpham['masp'].'">';
                          echo'<img class="img-fluid w-100" src="'.$sanpham['hinh'].'" alt="" />';
                          echo'</a>';
                          echo'<div class="p_icon">';
                          echo'<a href="ChiTiet-SP.php?id='.$sanpham['masp'].'">';
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
                          echo'<a href="ChiTiet-SP.php?id='.$sanpham['masp'].'" class="d-block">';
                          echo'<h4>'.$sanpham['tensp'].'</h4>';
                          echo'</a>';
                          echo'<div class="mt-3">';
                          echo'<span class="mr-4">'.$sanpham['giamoi'].'</span>';
                          echo'<del>'.$sanpham['giacu'].'</del>';
                          echo'</div>';
                          echo'</div>';
                          echo'</div>';
                          echo'</div>';
                        }
                      }
                    } catch(PDOException $e) {
                      echo "thanh cong" . $e->getMessage();
                    }finally{
                      $conn = null;
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
