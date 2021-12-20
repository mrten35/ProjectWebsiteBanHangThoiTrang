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
               $servername = "localhost:4306";
               $username = "root";
               $password = "";
               $dbname="thweb";
               
               try{
                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                   // set the PDO error mode to exception
                   $id=$_GET['id'];
                   $stmt = $conn->prepare("SELECT hinh FROM  sanpham where masp=:masp");
                   $stmt->bindParam(':masp', $id);
                   $stmt->execute();
                   $sanphams = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   if($sanphams){
                    foreach($sanphams as $sanpham){
                      echo'<div class="s_product_img">';             
                      echo'<img class="card-img" src="'.$sanpham['hinh'].'" alt="" />';
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
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
            <?php
               $servername = "localhost:4306";
               $username = "root";
               $password = "";
               $dbname="thweb";
               
               try{
                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                   // set the PDO error mode to exception
                   $id=$_GET['id'];
                   $stmt = $conn->prepare("SELECT tensp, giamoi, mausac, soluong , mota FROM  sanpham where masp=:masp");
                   $stmt->bindParam(':masp', $id);
                   $stmt->execute();
                   $sanphams = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   if($sanphams){
                    foreach($sanphams as $sanpham){
                      echo' <h3>'.$sanpham['tensp'].'</h3>';
                      echo'<h2>'.$sanpham['giamoi'].'</h2>';
                      echo'<div>Màu sắc: '.$sanpham['mausac'].'</div>';
                      echo'<div>Số lượng: '.$sanpham['soluong'].'</div>';
                      echo'<p>'.$sanpham['mota'].'</p>';
                    }
                  }
                } catch(PDOException $e) {
                  echo "thanh cong" . $e->getMessage();
                }finally{
                  $conn = null;
              }
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
                <a class="main_btn" href="../view/giohang.php"style="background:#007bff;" >Thêm vào giỏ hàng</a>
                <a class="main_btn" href="../view/Thanhtoan.php" style="background:red;">Mua ngay</a>
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
