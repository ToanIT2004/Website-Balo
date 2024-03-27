<?php
$login = new Login();
?>
<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <?php
         $user = "";
         $pass = "";
         if (isset($_POST['submit'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $kq = $login->getAccount($user, $pass);

            if ($kq > 0) {
               $_SESSION['makh'] = $kq['makh'];
               $_SESSION['tenkh'] = $kq['tenkh'];

               $tenkh = $kq['tenkh'];
               echo "<script>alert('Xin chào, $tenkh')</script>";
               echo '<meta http-equiv="refresh" content="0; url=./index.php"/>';
            } else {
               echo "<script>alert('Bạn đã đăng nhập không thành công')</script>";
               echo '<meta http-equiv="refresh" content="0; url= ./index.php?action=login&act=dangnhap"/>';
            }
         }

         ?>

         <div style="height: 390px" class="shadow mb-5 pt-3">
            <form action="http://localhost:8000/ProjectphP/index.php?action=login&act=dangnhap" method="POST">
               <h1 class="text-center">ĐĂNG NHẬP TÀI KHOẢN</h1>
               <div class="mb-3">
                  <h3 class="mx-3">USERNAME</h3>
                  <input type="text" name="user" placeholder="Nhập Username" class="dn_input px-3">
               </div>
               <div class="mb-4">
                  <h3 class="mx-3">PASSWORD</h3>
                  <input type="password" name="pass" placeholder="Nhập Password" class="dn_input px-3">
               </div>

               <button name="submit" type="submit" class="btn btn-primary dn_button mb-3">ĐĂNG NHẬP</button>
               <a href="index.php?action=forget" style="margin: 0 160px" class="text-info">Quên mật khẩu</a>
               <p class="text-center mt-2">Bạn chưa có tài khoản , vui lòng đăng ký
                  <a href="index.php?action=login&act=dangky" class="text-primary">tại đây</a>
               </p>
            </form>
         </div>
      </div>
   </div>
</div>

<style>
   .dn_input {
      width: 100%;
      height: 40px;
      border-radius: 30px;
      width: 93%;
      margin: 0 10px;
   }

   .dn_input:focus {
      border: 1.5px solid blue;
   }

   .dn_button {
      width: 93%;
      border-radius: 30px;
      margin: 0 10px;
   }

   .dn_button:hover {
      opacity: 0.7;
   }
</style>