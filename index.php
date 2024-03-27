<?php
session_start();
include_once "./Model/DBConfig.php";
include_once "./Model/product.php";
include_once "./Model/lienhe.php";
include_once "./Model/Login.php";
// include_once "./Model/class.phpmailer.php";

include_once "./Model/giohang.php";
include_once "./Model/page.php";
include_once "./Model/PHPMailer.php";


// tự động load lên hướng đối tượng class
// set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
// spl_autoload_extensions('.php');
// spl_autoload_register();
// include_once "./Model/class.smtp.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>lighten</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="./Content/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="./Content/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="./Content/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="./Content/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="./Content/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="./Content/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="./Content/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- icon bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <style>
      .bt1 {
         border: none;
         outline: none;
         background-color: greenyellow;
         padding: 10px 20px;
         font-size: 12px;
         font-weight: 700;
         color: #fff;
         border-radius: 5px;
         transition: all ease 0.1s;
         box-shadow: 0px 5px 0px 0px #a29bfe;
      }

      .bt1:active {
         transform: translateY(5px);
         box-shadow: 0px 0px 0px 0px #a29bfe;
      }
   </style>
</head>
<!-- body -->

<body class="main-layout product_page">

   <?php
   include_once "./View/header.php";
   ?>

   <!-- Phần body -->
   <?php
   $ctrl = "index";
   if (isset($_GET['action'])) {
      $ctrl = $_GET['action'];
   }
   include_once "Controller/$ctrl.php";
   ?>

   <?php
      if(isset($_GET['action']) && $_GET['action'] != 'product') {
         include_once "./View/footer.php";
      }else  
   ?>

   <!-- Javascript files-->
   <script src="./Content/js/jquery.min.js"></script>
   <script src="./Content/js/popper.min.js"></script>
   <script src="./Content/js/bootstrap.bundle.min.js"></script>
   <script src="./Content/js/jquery-3.0.0.min.js"></script>
   <script src="./Content/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="./Content/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="./Content/js/custom.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });
   </script>
</body>

</html>