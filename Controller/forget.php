<?php 
   $act = "forget";
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case 'forget': 
         include_once "./View/quenmatkhau.php";
         break;
      case 'maxacnhan':
         include_once "./View/Maxacnhan.php";
         break;
      case 'matkhaumoi':
         include_once "./View/Matkhaumoi.php";
         break;
      case 'password_action':
         if(isset($_POST['submit_password'])) {
            if($_POST['password'] != $_POST['confirm_password']) {
               echo "<script>alert('Mật khẩu không khớp')</script>";
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=forget&act=matkhaumoi'";
            }else {
               // Xử lý tại đây
               $login = new Login();
               $login->updatePass($_POST['password'],$_SESSION['email']);
               echo "<script>alert('Thay đổi mật khẩu thành công')</script>";
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=login&act=dangnhap'";
            }
         }
      case 'forget_action': 
         if(isset($_POST['submit_email'])) {
            $email = $_POST['email'];
            $login = new Login();
            $checkEmail = $login->checkEmail($email);
            if($checkEmail) {
               $code = substr(rand(0, 99999),0 ,6);
               $a = new Mailer();
               $title = "Quên mật khẩu";
               $content = 'Mã xác minh của bạn là: <span class="bg-info">'.$code.'</span>';
               $a->sendMail($title, $content, $email);

               $_SESSION['code'] = $code;
               $_SESSION['email'] = $email;

               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=forget&act=maxacnhan'";
            }else {
               if(strlen($email) < 1) {
                  echo "<script>alert('Bạn cần nhập email')</script>";
               }else {
                  echo "<script>alert('Email không tồn tại')</script>";
               }
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=forget'";
            }
         }
      };
