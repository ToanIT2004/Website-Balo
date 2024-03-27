<?php 

    $act = 'giohang';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];  
    }
    
    switch($act) {
        case 'giohang':
            include "./View/giohang.php";
            break;
        case 'donhang': 
            $flag = false;
            if(isset($_POST['submitdh'])) {
                if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    $iddh = $_POST['iddh'];
                    $hoten = $_POST['namekh'];
                    $sdt = $_POST['sdtkh'];
                    $diachi = $_POST['diachikh'];
                    $idkh = $_SESSION['makh'];
                    $dh = new giohang();

                    if($dh->getIDKHinDH($idkh) == false) {
                        $dh->insertDonHang($iddh,$hoten, $sdt, $diachi, $idkh);
                        $flag = false;
                    }else {
                        $kq = $dh->getIDKHinDH($idkh);
                        $idOfDH = $kq['id']; // Hàm này trả ra id đơn hàng
                        echo $kq['idkh'];
                        $flag = true;
                    }

                    if($flag == false) {
                        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            foreach($_SESSION['cart'] as $item) {
                                $dh->addToCart($item['name'], $iddh, $item['quatity'], $item['img'], $item['price']);
                            }
                            unset($_SESSION['cart']);
                        }
                        echo "<script>alert('Bạn đã mua hàng thành công')</script>";
                        echo "<meta http-equiv='refresh' content='0; url=./index.php?action=thongtindon'";
                    }else {
                        $co = false;
                        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            foreach($_SESSION['cart'] as $item) {
                                $ketqua = $dh->infoCart($idOfDH);
                                while($set = $ketqua->fetch()) {
                                    if($item['name'] == $set['tensp']) {
                                        $co = true;
                                    }
                                }

                                if($co == false) {
                                    $dh->InsertCart($item['name'],$idOfDH ,$item['quatity'], $item['img'], $item['price']);
                                    echo "<script>alert('Bạn đã mua hàng thành công')</script>";
                                    echo "<meta http-equiv='refresh' content='0; url=./index.php?action=thongtindon'";
                                }else {
                                    $dh->updateGioHang($item['quatity'],$item['name']);
                                    echo "<script>alert('Bạn đã mua hàng thành công')</script>";
                                    echo "<meta http-equiv='refresh' content='0; url=./index.php?action=thongtindon'";
                                    $co = false;
                                }
                            }
                            unset($_SESSION['cart']);
                        }
                    }
                }else {
                    echo "<script>alert('Bạn không có giỏ hàng')</script>";
                }
            } 
            break;
    }

?>
