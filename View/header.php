<style>
   .header_icon {
      font-size: 25px;
      margin-left: 210px;
      margin-top: 5px;
      position: relative;
   }

   .header_menu {
      width: 100px;
      height: 56px;
      background-color: ghostwhite;
      font-size: 14px;
      font-weight: 500;
      top: 37px;
      left: 190px;
      position: absolute;
      border-radius: 5px;
   }

   .header_login,
   .header_dk {
      width: 100px;
      height: 28px;
      padding-top: 2px;
      padding-left: 10px;
   }

   .header_a:hover {
      color: green;
      cursor: pointer;
   }

   .header_border { 
      border-bottom: 1px solid #999;
   }

   .color {
      color: red;
   }
</style>
<!-- header -->
<header>
   <!-- header inner -->
   <div class="header">
      <div class="head_top bg-success p-2 text-dark ">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-3 col-md-6 col-sm-12">
                  <div class="top-box">
                     <ul class="sociel_link">
                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-2 col-md-6 col-sm-12">
               </div>
               <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12">
                  <?php 
                     if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) {
                        echo "<a style='margin-left: 250px;margin-top: 2px' class='text-white btn btn-info p-2'
                         href=".'index.php?action=login&act=doimatkhau'.">ĐỔI MẬT KHẨU</a>";
                        echo "<a style='margin-left: 50px;margin-top: 2px' class='text-white btn-dark btn p-2'
                         href=".'index.php?action=login&act=dangxuat'.">Đăng xuất</a>";
                         
                     }else {
                  ?>
                     <!-- <a style='margin-left: 1px;margin-top: 2px' class="buy p-2" href="index.php?action=login&act=dangnhap">ĐĂNG NHẬP / ĐĂNG KÝ</a> -->
                     <i style="margin-left: 500px" class="bi bi-person-square header_icon" onmouseover="MenuHien()" onmouseout="MenuAn()"></i>
                     <div style="margin-left: 290px" class="header_menu shadow" onmouseover="MenuHien()" onmouseout="MenuAn()" style="display: none">
                        <div class="header_login">
                           <a href="index.php?action=login&act=dangnhap" class="header_a">Đăng Nhập</a> 
                        </div>
                        <div class="header_border"></div>
                        <div class="header_dk">
                           <a href="index.php?action=login&act=dangky" class="header_a">Đăng Ký</a>
                        </div>
                     </div>
                  <?php 
                     }
                  ?>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo"> <a href="index.html"><img src="./Content/images/logo.jpg" alt="logo" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
               <div class="menu-area">
                  <div class="limit-box">
                     <nav class="main-menu">
                        <ul class="menu-area-main">
                           <li> <a href="index.php">Trang chủ</a> </li>
                           <li> <a href="index.php?action=product">Sản phẩm</a> </li>
                           <li> <a href="index.php?action=contact">Liên hệ</a> </li>
                           <li> <a href="index.php?action=giohang"   >Giỏ hàng</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
            </div>
         </div>
      </div>

      <?php 
         if(isset($_GET['action'])) {
      ?>
      <!-- end loader -->
      <div class="brand_color bg-success mt-3">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <?php
                     if (isset($_GET['action']) && $_GET['action'] == 'about') {
                        ?>
                        <h2>about</h2>
                     <?php } ?>
                     <?php
                     if (isset($_GET['action']) && $_GET['action'] == 'product') {
                        ?>
                        <h2>Sản phẩm của chúng tôi</h2>
                     <?php } ?>
                     <?php
                     if (isset($_GET['action']) && $_GET['action'] == 'blog') {
                        ?>
                        <h2>blog</h2>
                     <?php } ?>
                     <?php
                     if (isset($_GET['action']) && $_GET['action'] == 'contact') {
                        ?>
                        <h2>Liên hệ với chúng tôi</h2>
                     <?php } ?>
                     <?php
                     if (isset($_GET['action']) && $_GET['action'] == 'dangnhap') {
                        ?>
                        <h2>Đăng nhập tài khoản</h2>
                     <?php } ?>
                     <?php
                        if (isset($_GET['action']) && $_GET['action'] == 'giohang') {
                     ?>
                        <h2>Giỏ hàng</h2>
                     <?php } ?>
                     <?php
                        if (isset($_GET['action']) && $_GET['action'] == 'thongtindon') {
                     ?>
                        <h2>Chi tiết đơn hàng của bạn</h2>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php }?>

      <?php
      // && isset($_GET['act']) && $_GET['act']  != 'chitietsanpham'
      if (isset($_GET['action']) && $_GET['action'] == 'product') {
         ?>
         <div class="product">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title d-flex justify-content-around">
                        <?php
                        $sp = new sanpham();
                        $kq1 = $sp->getAllMenu();
                        while ($set = $kq1->fetch()) {
                           ?>
                           <a href="index.php?action=product&act=<?php echo $set['id'] ?>" class="bt1">
                              <?php echo $set['name']; ?>
                           </a>
                           <?php
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php } ?>
</header>

<script>
   function MenuAn() {
      var x = document.querySelector('.header_menu').style.display = 'none';
   }

   function MenuHien() {
      var x = document.querySelector('.header_menu').style.display = 'block';
   }
</script>