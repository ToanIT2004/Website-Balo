<?php
$sp = new sanpham();

?>
</div>
<!-- our product -->



    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    <?php
                    $kq = $sp->getAllProducts(3);
                    while ($set = $kq->fetch()) {
                        ?>
                        <a href="index.php?action=product&act=chitietsanpham&id=<?php echo $set['id'];?>" class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
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