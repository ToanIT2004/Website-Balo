<?php
$login = new Login();
?>
<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <?php
         // $user= "";
         // $pass= "";
         $makh = "";
         $fullname = "";
         $email = "";
         $numberphone = "";
         $username = "";
         $password = "";
         if (isset($_POST['submit'])) {
            // Khai báo mảng để chứa lỗi
            $errors = [];

            // Validate Fullname
            if (empty(trim($_POST['fullname']))) {
               $errors['fullname']['required'] = 'Họ tên không được để trống';
            } else {
               if (strlen(trim($_POST['fullname'])) < 5) {
                  $errors['fullname']['min'] = 'Họ tên phải lớn hơn 5 ký tự';
               }
            }

            // Validate Email
            if (empty(trim($_POST['email']))) {
               $errors['email']['required'] = 'Email không được để trống';
            } else {
               if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                  $errors['email']['email'] = 'Email không phù hợp';
               }
            }

            // Validate số điện thoại
            if (empty(trim($_POST['numberphone']))) {
               $errors['numberphone']['required'] = 'Số điện thoại không được để trống';
            } else {
               // Kiểm tra nếu không phải là số
               if (!ctype_digit($_POST['numberphone'])) {
                  $errors['numberphone']['invalid'] = 'Số điện thoại chỉ được chứa ký tự số';
               } elseif (strlen($_POST['numberphone']) != 10 && strlen($_POST['numberphone']) != 11) {
                  $errors['numberphone']['length'] = 'Số điện thoại phải có 10 hoặc 11 số';
               }
            }

            // Validate username 
            if (empty(trim($_POST['username']))) {
               $errors['username']['required'] = 'Username không được để trống';
            }

            // Validate password 
            if (empty(trim($_POST['password']))) {
               $errors['password']['required'] = 'Password không được để trống';
            }


            if (empty($errors)) {
               $fullname = $_POST['fullname'];
               $email = $_POST['email'];
               $numberphone = $_POST['numberphone'];
               $username = $_POST['username'];
               $password = $_POST['password'];
               $kq = $login->getAccount($username, $password);
               if($kq > 0) {
                  if($username == $_POST['username'] || $password == $_POST['password']) {
                     echo "<script>alert('Bạn không thể đăng ký, tài khoản đã tồn tại')</script>";
                  }
               }else {
                  $kq = $login->regisAccount($makh, $fullname, $username, $password, $email, $numberphone);
                  echo "<script>alert('Bạn đã đăng ký thành công')</script>";
               }
            }

         }
         ?>
         <div style="height: 470px, min-height: 700px" class="shadow mb-5 pt-4">
            <form action="http://localhost:8000/ProjectphP/index.php?action=login&act=dangky" method="POST">
               <h1 class="text-center mb-2">ĐĂNG KÝ TÀI KHOẢN</h1>
               <div class="mb-3">
                  <input type="text" name="fullname" placeholder="Họ và tên" class="dn_input px-3">
                  <?php
                  if (!empty($errors['fullname']['required'])) {
                     echo '<span class="text-danger mx-3">' . $errors['fullname']['required'] . '</span>';
                  } else if (!empty($errors['fullname']['min'])) {
                     echo '<span class="text-danger mx-3">' . $errors['fullname']['min'] . '</span>';
                  }
                  ?>
               </div>
               <div class="mb-4">
                  <input type="text" name="email" placeholder="Email" class="dn_input px-3">
                  <?php
                  if (!empty($errors['email']['required'])) {
                     echo '<span class="text-danger mx-3">' . $errors['email']['required'] . '</span>';
                  } else if (!empty($errors['email']['email'])) {
                     echo '<span class="text-danger mx-3">' . $errors['email']['email'] . '</span>';
                  }
                  ?>
               </div>
               <div class="mb-3">
                  <input type="text" name="numberphone" placeholder="Số điện thoại" class="dn_input px-3">
                  <?php
                  if (!empty($errors['numberphone']['required'])) {
                     echo '<span class="text-danger mx-3">' . $errors['numberphone']['required'] . '</span>';
                  } elseif (!empty($errors['numberphone']['invalid'])) {
                     echo '<span class="text-danger mx-3">' . $errors['numberphone']['invalid'] . '</span>';
                  } elseif (!empty($errors['numberphone']['length'])) {
                     echo '<span class="text-danger mx-3">' . $errors['numberphone']['length'] . '</span>';
                  }
                  ?>
               </div>
               <div class="mb-4">
                  <input type="text" name="username" placeholder="Tài khoản" class="dn_input px-3">
                  <?php
                  if (!empty($errors['username']['required'])) {
                     echo '<span class="text-danger mx-3">' . $errors['username']['required'] . '</span>';
                  }
                  ?>
               </div>
               <div class="mb-4">
                  <input type="password" name="password" placeholder="Mật khẩu" class="dn_input px-3">
                  <?php
                  if (!empty($errors['password']['required'])) {
                     echo '<span class="text-danger mx-3">' . $errors['password']['required'] . '</span>';
                  }
                  ?>
               </div>
               <button name="submit" type="submit" class="btn btn-primary dn_button">ĐĂNG KÝ</button>
               <p class="text-center mt-3">Bạn đã có tài khoản , vui lòng đăng nhập
                  <a href="index.php?action=login&act=dangnhap" class="text-primary">tại đây</a>
               </p>
            </form>
         </div>
      </div>
      <div class="col-lg-6"></div>
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