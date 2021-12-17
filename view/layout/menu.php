<?php
  session_start();
?>
<header class="header_area">
      <div class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="float-left">
                <p><span class="fa fa-phone"></span> 00-62-658-658</p>
                <p><span class="fa fa-envelope"></span> lengan@gmail.com</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="float-right">
                <ul class="right_side">
                  <li>
                    <a href="giohang.php">
                      Giỏ hàng
                    </a>
                  </li>
                  <li>
                    <a href="Thanhtoan.php">
                      Thanh toán
                    </a>
                  </li>
                  <li>
                    <a href="contact.php">
                      Liên hệ
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light w-100">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php">
              <img src="img/logo.png" alt="" style="margin-top:-5px;" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset w-100"
              id="navbarSupportedContent"
            >
              <div class="row w-100 mr-0">
              <div class="row w-100 mr-0">
                <div class="col-lg-10 pr-0">
                  <ul class="nav navbar-nav center_nav pull-right" style="margin-top:20px;">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a class="nav-link" href="sanpham.php">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Liên hệ</a>
                    </li>
                    <?php
                      
                      if(isset($_SESSION["txt_username"]))
                      {
                        echo '<li class="nav-item"><a class="nav-link" href="#" >Welcome '.$_SESSION["txt_username"].'</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="logoutController.php" class="dropdown-item">Đăng Xuất</a></li>';
                      }
                      else
                      {
                        echo '<li class="nav-item"><a class="nav-link" href="dangnhap.php" >Đăng Nhập</a></li>';
                     
                      }
                    ?>
                  </ul> 
                </div>
              </div>

                
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>