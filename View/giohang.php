<?php
$j = 0;
?>

<body class="main-layout  ">
   <div class="untree_co-section before-footer-section mb-5">
      <div class="container">
         <div class="row mb-5">
            <form class="col-md-12" method="post">
               <div class="site-blocks-table">
                  <table class="table">
                     <thead class="bg-info">
                        <tr class="text-center">
                           <!-- <th class="product-thumbnail">ID</th> -->
                           <th class="product-thumbnail">Hình ảnh</th>
                           <th class="product-name">Tên SP</th>
                           <th class="product-price">Giá</th>
                           <th class="product-quantity">Số lượng</th>
                           <th class="product-total">Tổng tiền</th>
                           <th class="product-remove">Xóa sản phẩm</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $id = 0;
                        if (isset($_POST['submit'])) {
                           $id = $_POST['id'];
                           // Session iddh
                        
                           if ($_SESSION['cart'][$id]['quatity'] == 1) {
                              unset($_SESSION['cart'][$id]);
                           } else {
                              $_SESSION['cart'][$id]['quatity']--;
                           }
                           echo '<meta http-equiv="refresh" content="0; url=http://localhost:8000/ProjectphP/index.php?action=giohang">';
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['cart'])) {
                           ?>
                           <?php
                           foreach ($_SESSION['cart'] as $key => $item):
                              ?>
                              <tr class="text-center">
                                 <input type="hidden" value="<?php $j++ ?>">
                                 <td>
                                    <img style="w-100; height: 80px" src="./Content/images/<?php echo $item['img'] ?>" alt="">
                                 </td>
                                 <td>
                                    <?php echo $item['name'] ?>
                                 </td>
                                 <td>
                                    <?php echo number_format($item['price']) ?>
                                 </td>
                                 <td class="text-center">
                                    <?php echo $item['quatity'] ?>
                                 </td>
                                 <td>
                                    <?php echo number_format($item['price'] * $item['quatity']) ?>
                                 </td>
                                 <td>
                                    <form action="http://localhost:8000/ProjectphP/index.php?action=giohang" method="POST">
                                       <input type="hidden" name="id" value="<?php echo $key ?>">
                                       <button name="submit" type="submit" class="btn btn-danger">XÓA</button>
                                    </form>
                                 </td>
                              </tr>
                              <?php
                           endforeach
                           ?>
                           <?php
                        }
                        ?>
                     </tbody>
                  </table>
               </div>
            </form>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="row mb-5">
                  <div class="col-md-4 mb-3 mb-md-0">
                     <form action="#" method="POST">
                        <button type="submit" name="delete" class="btn btn-black btn-sm btn-block">Xóa giỏ
                           hàng</button>
                     </form>
                     <?php
                     if (isset($_POST['delete'])) {
                        session_unset();
                        echo '<meta http-equiv="refresh" content="0;url=http://localhost:8000/ProjectphP/index.php?action=product">';
                     }
                     ?>
                  </div>
                  <div class="col-md-4">
                     <button class="btn btn-outline-black btn-sm btn-block"><a href="index.php?action=product">Trở lại
                           mua sắm</a></button>
                  </div>
                  <div class="col-md-4">
                     <form action="index.php?action=thongtindon" method="POST">
                        <button class="btn btn-outline-black btn-sm btn-block">Chi tiết đơn hàng</button>
                     </form>

                  </div>
               </div>
               <form action="index.php?action=giohang&act=donhang" method="POST">
                  <div class="row">
                     <div class="col-md-12">
                        <label class="text-black h4" for="coupon">Thông tin đặt hàng</label>
                     </div>
                     <?php
                     $iddh = rand(0, 999);
                     ?>
                     <input type="hidden" name="iddh" value="<?php echo $iddh ?>">
                     <div class="col-md-12">
                        <label for="">Họ tên</label>
                        <input type="text" class="w-100 form-control" name="namekh" placeholder="Nhập họ tên của bạn">
                       
                     </div>
                     <div class="col-md-12">
                        <label for="">Số điện thoại</label>
                        <input type="text" class="w-100 form-control" name="sdtkh"
                           placeholder="Nhập số điện thoại của bạn">
                     </div>
                     <div class="col-md-12">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="w-100 form-control" name="diachikh"
                           placeholder="Nhập địa chỉ nhận hàng của bạn">
                     </div>
                     <div class="col-md-12">
                        <?php
                        if (isset($_SESSION['makh'])) {
                           ?>
                           <button type="submit" name="submitdh"
                              class="bg-warning text-white btn btn-black btn-lg py-3 btn-block">Đặt hàng</button>
                        <?php } else { ?>
                           <a href="http://localhost:8000/ProjectphP/index.php?action=login&act=dangnhap" type="submit"
                              name="submit" class="bg-secondary text-white btn btn-black btn-lg py-3 btn-block">Bạn cần
                              phải đăng nhập</a>
                        <?php } ?>
                     </div>
                  </div>
            </div>
            </form>

            <div class="col-md-6 pl-5">
               <?php
               if (isset($_SESSION['cart'])):
                  ?>
                  <div class="row justify-content-end">
                     <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-12 text-right border-bottom mb-5">
                              <h3 class="text-info h4 text-uppercase">Tổng bill</h3>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-8">
                              <span class="text-black">Số món: </span>
                           </div>
                           <div class="col-md-4 text-right">
                              <strong class="text-danger">
                                 <?php echo $j ?>
                              </strong>
                           </div>
                        </div>
                        <div class="row mb-5">

                           <?php
                           $sum = 0;
                           foreach ($_SESSION['cart'] as $key => $item) {
                              $sum = $sum + $item['price'] * $item['quatity'];
                           }
                           ?>
                           <div class="col-md-6">
                              <span class="text-black">Tổng tiền: </span>
                           </div>
                           <div class="col-md-6 text-right">
                              <strong class="text-danger">
                                 <?php echo number_format($sum) ?>đ
                              </strong>
                           </div>
                        </div>
                     <?php endif ?>

                     <div class="row">

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>