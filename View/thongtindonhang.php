<?php 
   $iddh = '';
?>

<style>
   .emptyCart {
      font-size: 50px;
      margin: 0 130px;
      opacity: 0.5;
   }
</style>

<div class="container">
   <?php 
      if(isset($_SESSION['makh'])) {
         $makh = $_SESSION['makh'];
         $cart = new giohang();
         $kq = $cart->infoDH($makh);

         if(isset($kq['id'])) {
            $iddh = $kq['id']; // Nếu sử dụng cho bên khác thì lưu vào session
         }
      }
   ?>
   <?php
      if(isset($kq['id'])) {
   ?>
   <div class="confirmation-container">
      <h1>Xác nhận đơn hàng: </h1>
      <p>Tên khách hàng: <?php if(isset($kq['hoten'])) echo $kq['hoten']?></p>
      <p>Số điện thoại: <?php if(isset($kq['sdt']))  echo $kq['sdt']?></p>
      <p>Địa chỉ: <?php if(isset($kq['diachi'])) echo $kq['diachi']?></p>
      <p>Cảm ơn bạn đã đặt hàng! Dưới đây là thông tin chi tiết về đơn hàng của bạn.</p>
   </div>

   <div class="row">
      <div class="col-lg-12">
         <table class="table table-bordered">
            <thead>
               <tr class="text-center bg-info">
                  <th scope="col" class="text-start">Tên sản phẩm</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Tổng giá</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $tong = 0;
                  $kq = $cart->infoCart($iddh);
                  while($set = $kq->fetch()) {
                     $tong += $set['dongia']*$set['soluong'] 
               ?>
               <tr class="text-center">
                  <td>
                     <?php echo $set['tensp']?>
                  </td>
                  <td>
                     <img style="width: 100px; height: 100px" src="./Content/images/<?php echo $set['img']?>" alt="">
                  </td>
                  <td>
                     <?php echo $set['soluong']?>
                  </td>
                  <td>
                     <?php echo number_format($set['dongia'])?>
                  </td>
                  <td>
                     <?php echo number_format($set['soluong'] * $set['dongia'])?>
                  </td>
               </tr>
               <?php }?>
               <tr>
                  <td colspan="4"><h2 class="mx-1">Tổng tiền:</h2></td>
                  <td class="text-center"><b class="text-danger"><?php echo number_format($tong)?>đ</b></td>
               </tr>
            </tbody>
         </table>
      </div>
      <?php 
      }else {
         echo '<h1 class="emptyCart">Bạn chưa có đơn hàng </h1>';
      }
   ?>

      <div class="text-center mb-3 mx-auto mt-3">
         <button class="btn btn-primary"><a href="index.php?action=product">Tiếp tục mua sắm</a></button>
      </div>
   </div>
</div>
</div>