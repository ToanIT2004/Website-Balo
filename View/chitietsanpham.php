<?php
$sp = new sanpham();
   function updateGioHang($index, $soluong) {
      if($soluong < 0) {
         unset($_SESSION['cart'][$index]);
      }else {
         // update là phép gán
         $_SESSION['cart'][$index]['quatity'] = $soluong;
      }
   }
?>

<style>
   .KhuyenMai {
      width: 100%;
      height: 200px;
      border: 1px dashed #666;
      line-height: 40px;
   }

   .gachduoi {
      border-bottom: 2px solid green;
   }
</style>
<h1 class="text-center">CHI TIẾT SẢN PHẨM</h1>
<div class="container">
   <?php 
      $id = $_GET['id'];
   ?>
   <form action="index.php?action=product&act=chitietsanpham&id=<?php echo $id?>" method="post">
      <div class="row">
         <?php
         $kq = $sp->getProductID($id);
         ?>
         <div class="col-lg-6">
            <img class="w-100" src="./Content/images/<?php echo $kq['img']?>" alt="">
            <input type="hidden" name="img" value="<?php echo $kq['img']?>">
         </div>
         <div class="col-lg-6">
            <h2 class="text-warning">BALO
               <?php echo $kq['name'] ?>
               <input type="hidden" name="name" value="<?php echo $kq['name']?>">
            </h2>
            <h3>Giá: <span class="text-danger">
                  <?php echo number_format($kq['price']) ?>đ
                  <input type="hidden" name="price" value="<?php echo $kq['price']?>">
               </span></h3>
            <div class="KhuyenMai pt-3 px-2 mb-3">
               <ul>
                  <li>Miễn Phí Giao Hàng Toàn Quốc</li>
                  <li>Bảo Hành 12 Tháng</li>
                  <li>Đổi Trong 7 Ngày Nếu Sản Phẩm </li>
                  <li>Hotline: 0703038870</li>
               </ul>
            </div>

            <div class="d-flex mb-3">  
               <input name="quatity" style="width: 100px;padding-left: 40px" type="number" value="1" min=1 />
               <a href="index.php?action=product" type="submit" name="submit" class="btn w-100" style="border: 1px solid green;color:green;margin-left: 10px">QUAY VỀ</a>
            </div>

            <button type="submit" name="submit" class="btn w-100 text-white fw-bolder mb-3" style="background-color: green">THÊM VÀO GIỎ HÀNG</button>
            <p class="text-center">Gọi đặt mua <a class="text-black fw-bold text-decoration-none"
                  href="#">0703038870</a>
               (8:00 - 17:00)</p>
         </div>
      </div>
      <!--  -->
   </form>
   <?php 
      $name = '';
      $price = '';
      $quatity = 0;
      $soluong = 0;
      $flag = false;
      if(isset($_POST['submit'])) {
         echo $img = $_POST['img'];
         echo $name = $_POST['name'];
         $price = $_POST['price'];
         $quatity = $_POST['quatity'];
         echo $_SESSION['cart']['name'];
         if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key=>$value)
            if($value['name'] == $name) {
               $flag = true;
               $_SESSION['cart'][$key]['quatity'] += $_POST['quatity'];
               echo "<meta http-equiv='refresh' content='0; url=./index.php?action=product'>";
            }
         }
         
         if($flag == false) {
            $item = array(
               'id' => $id, 
               'img' => $img,
               'name' => $name,
               'price' => $price, 
               'quatity' => $quatity,
            );
            $_SESSION['cart'][] = $item;
            echo "<meta http-equiv='refresh' content='0; url=./index.php?action=product'>";
         }
         

         // if($flag == false) {
         //    $item = array(
         //       'id' => $id, 
         //       'img' => $img,
         //       'name' => $name,
         //       'price' => $price, 
         //       'quatity' => $quatity,
         //    );
         // }
   
      }
   ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>