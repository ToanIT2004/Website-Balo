<?php 
   $act = "thongtindon";
   if(isset($_GET['act'])) {
      $act = $_GET['act'];
   }

   switch($act) {
      case "thongtindon":
         if(isset($_SESSION['makh']) && $_SESSION['makh'] > 0) {
            include_once "./View/thongtindonhang.php";
         }else {
            echo "<script>alert('Bạn cần phải đăng nhập')</script>";
            echo "<meta http-equiv='refresh' content='0; url=./index.php?action=login'";
         }
         break;
   }
?>