<?php 
   class giohang {
      function insertDonHang($iddh, $hoten, $sdt, $diachi, $idkh) {
         $db = new connect();
         $select = "INSERT INTO `donhang`(`id`, `hoten`, `sdt`, `diachi`, `idkh`) 
         VALUES ($iddh,'$hoten','$sdt','$diachi','$idkh')";
         $db->exec($select);
      }

      function addToCart($tensp, $iddh, $soluong, $img, $dongia) {
         $db = new connect();
         $select = "INSERT INTO `cart`(`id`, `tensp`, `iddh`, `soluong`, `img`, `dongia`) 
         VALUES (Null,'$tensp','$iddh','$soluong','$img', '$dongia')";
         $db->exec($select);
      }

      function infoDH($idkh) {
         $db = new connect();
         $select = "SELECT * FROM donhang WHERE idkh = '$idkh'";
         $result = $db->getInstance($select);
         return $result;
      }

      // Lấy ra danh sách giỏ hàng
      function infoCart($iddh) {
         $db = new connect();
         $select = "SELECT * FROM cart WHERE iddh = '$iddh'";
         $result = $db->getList($select);
         return $result;
      }

      // Lấy ra 1 phần tử giỏ hàng
      

      // Hàm kiểm tra tồn tại idkh có đơn hàng chưa
      function getIDKHinDH($idkh) {
         $db = new connect();
         $select = "SELECT dh.id, dh.idkh FROM donhang as dh WHERE idkh='$idkh'";
         $result = $db->getInstance($select);
         return $result;
      } 

      // Hai hàm này viết cho trường hợp người dùng đang có đơn hàng
      // Hàm update giỏ hàng khi người dùng đã mua sản phẩm
      function updateGioHang($sl,$tensp) {
         $db = new connect();
         $select = "UPDATE `cart` SET `soluong`= soluong+$sl WHERE tensp='$tensp'";
         $db->exec($select);
      }

      // Hàm thêm sản phẩm vào giỏ hàng khi người dùng chưa mua 
      function InsertCart($tensp, $iddh, $sl, $img, $dongia) {
         $db = new connect();
         $select = "INSERT INTO `cart`(`id`, `tensp`, `iddh`, `soluong`, `img`, `dongia`) 
         VALUES (Null,'$tensp', $iddh ,$sl ,'$img',$dongia)";
         $db->exec($select);
      }
   }
?>