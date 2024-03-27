<?php
$sp = new sanpham();
$flag = 1;
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
            $search = $_POST['txtsearch'];
         }
         ?>
         <div class="row">
            <div class="col-lg-7">
               <form action="index.php?action=product&act=timkiem" method="POST">
                  <div class="d-flex">
                     <input name="txtsearch" placeholder="Tìm kiếm sản phẩm" type="text" class="form-control">
                     <button type="submit" name="search" style="height: 51px" class="btn btn-success mx-3">Tìm
                        kiếm</button>
                  </div>
               </form>
            </div>
            <div class="col-lg-5">
               <form method="POST" action="index.php?action=product&act=filter" id="filterForm">
                  <select name="searchPrice" onchange="submitForm()">
                     <!-- Dùng selected để chọn -->
                     <option disabled <?php if($flag==1) echo 'selected'?>>Sản phẩm theo giá</option>
                     <option value="low">Giá từ thấp tới cao</option>
                     <option value="tall">Giá từ cao tới thấp</option>
                  </select>
               </form>
               <script>
                  function submitForm() {
                     document.getElementById("filterForm").submit();
                  }
               </script>
            </div>

         </div>

         <div class="row">
            <?php
               if(isset($_GET['act']) && $_GET['act'] == 'filter' && isset($_POST['searchPrice'])) {
                  if($_POST['searchPrice'] == 'low') {
                     $kq = $sp->filterLow();
                  }else if($_POST['searchPrice'] == 'tall') {
                     $kq = $sp->filterTall();
                  }
               }
               else {
                  if(isset($_GET['page'])) {
                     $get_trang = $_GET['page'];
                  }else {
                     $get_trang = "";
                  }

                  if($get_trang == "" || $get_trang == 1) {
                     $trang = 0;
                  }else {
                     $trang = ($get_trang*12)-12;
                  }
                  $kq = $sp->getProduct1to12($trang, 12);
               }
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
         <nav class="d-flex justify-content-center" aria-label="Page navigation example">
            <ul class="pagination">
               <?php 
                  if(isset($get_trang)) {
                     if($get_trang > 1) {
                        echo "<li class='page-item'><a class='page-link text-dark mx-1' style='border-radius: 30px;' href='index.php?action=product&page=".($get_trang-1)."'>Trước</a></li>";
                     }
                  }
               ?>
               <?php 
                  $countsp = $sp->getAllProductss()->rowCount();
                  $a = ceil($countsp/12);
                  for($i=1; $i<=$a; $i++) {
                     $number = $i;
               ?>
               <li class="page-item"><a class="page-link text-dark mx-1" style="border-radius: 30px;" href="index.php?action=product&page=<?php echo $i?>"><?php echo $i?></a></li>
               <?php }?>
            </ul>
         </nav>
      </div>
   </div>
</div>