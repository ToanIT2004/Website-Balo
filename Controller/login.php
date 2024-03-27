<?php 
   $act = "dangnhap";
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }
   switch($act) {
      case 'dangky': 
         include_once "./View/dangky.php";
         break;
      case 'dangnhap':
         include_once "./View/dangnhap.php";
         break;
      case 'dangxuat': 
         unset($_SESSION['makh']);
         unset($_SESSION['tenkh']);
         unset($_SESSION['cart']);
         echo "<script>alert('Bạn đã đăng xuất thành công')</script>";
         echo "<meta http-equiv='refresh' content='0; url=./index.php'";
         break;
      case 'doimatkhau': 
         include_once "./View/Doimatkhau.php";
         break;
      case 'change_password': 
         if(isset($_POST['change_password'])) {
            $oldpass = $_POST['old_password'];
            $newpass = $_POST['new_password'];
            $confirmpass = $_POST['confirm_password'];

            if($newpass != $confirmpass) {
               echo "<script>alert('Mật khẩu mới không trùng nhau')</script>";
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=login&act=doimatkhau'";
            }else if(strlen($newpass) == 0 && strlen($confirmpass) == 0) {
               echo "<script>alert('Nhập mật khẩu đi bạn ơi !!')</script>";
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=login&act=doimatkhau'";
            }else {
               $login = new Login();
               $kq = $login->changePass($_SESSION['makh'], $oldpass, $newpass);
               if($kq) {
                  echo "<script>alert('Đổi mật khẩu thành công')</script>";
                  echo "<meta http-equiv='refresh' content='0; url=./index.php'";
               }else {
                  echo "<script>alert('Mật khẩu cũ nhập sai!!!')</script>";
                  echo "<meta http-equiv='refresh' content='0; url=./index.php?action=login&act=doimatkhau'";
               }
            }
         }
         break;
   } 
?>
<?php ?>