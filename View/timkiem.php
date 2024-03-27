<?php
$sp = new sanpham();

?>
</div>
<!-- our product -->

<div class="product-bg">
   <div class="product-bg-white">
      <h1 class="text-center mb-3">TOÀN BỘ SẢN PHẨM</h1>
      <div class="container">
         <?php
         $search = '';
         if (isset($_POST['search'])) {
            if ($_POST['txtsearch'] != '') {
               $search = $_POST['txtsearch'];
            }else {
               echo "<meta http-equiv='refresh' content='0;url=./index.php?action=product'>";
               // return header('Location index.php?action=product');
            }
         }
         ?>
         <form action="index.php?action=product&act=timkiem" method="POST">
            <div class="row">
               <div class="col-lg-5">
                  <input name="txtsearch" value="<?php if(isset($_POST['txtsearch'])) echo $_POST['txtsearch']?>" placeholder="Tìm kiếm sản phẩm" type="text" class="form-control">
               </div>
               <div class="col-lg-2">
                  <button type="submit" name="search" style="height: 51px" class="btn btn-success">Tìm kiếm</button>
               </div>
            </div>
         </form>
         <div class="row">
            <?php
            $kq = $sp->getProductSearch($search);
            while ($set = $kq->fetch()) {
               ?>
               <a href="index.php?action=product&act=chitietsanpham&id=<?php echo $set['id']; ?>"
                  class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box" style="height: 340px">
                     <i><img src="./Content/images/<?php echo $set['img'] ?>" /></i>
                     <h3>
                        <?php echo $set['name'] ?>
                     </h3>
                     <span>
                        <?php echo number_format($set['price']) ?>đ
                     </span>
                     <p>
                        <?php echo $set['mota'] ?>
                     </p>
                  </div>
               </a>
            <?php } ?>
         </div>
      </div>
   </div>
</div>