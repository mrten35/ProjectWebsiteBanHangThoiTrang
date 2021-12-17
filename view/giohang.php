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
           
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->

    <h1 style="text-align:center; color:red; margin-top: 40px">GIỎ HÀNG</h1>

    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Tổng</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/image/đầm nữ/1.jpg" width="145" height="98" alt=""/>
                      </div>
                      <div class="media-body">
                        <p>ĐẦM CHỮ A 2 LỚP</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>240.000₫</h5>
                  </td>
                  <td>
                    <div class="product_count">
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
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp ; &amp ; sst > 0 ) result.value--;return false;";
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>480.000₫</h5>
                  </td>
                </tr>
                
                
                <tr class="bottom_button">
                  <td>
                    <Button class="btn btn-group-vertical"><a href="sanpham.php">Tiếp tục mua sắm</a></Button>
                  </td>
                  <td></td>
                  <td>
                    <Button class="btn btn-success"><a  href="#" style="color:white">Cập nhật giỏ hàng</a></Button>
                  </td>
                  <td></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
  </body>
</html>
