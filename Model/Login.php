<?php 
   class Login {
      function getAccount($user, $pass) {
         $db = new connect();
         $select = "SELECT kh.makh, kh.tenkh, kh.taikhoan, kh.matkhau 
         
         FROM khachhang kh WHERE taikhoan='$user' AND matkhau='$pass'";
         $result = $db->getInstance($select);
         return $result;
      }

      function regisAccount($makh, $tenkh, $taikhoan, $matkhau, $email, $sodienthoai) {
         $db = new connect();
         $select = "INSERT INTO `khachhang`(`makh`, `tenkh`, `email`, `sodienthoai`, `taikhoan`, `matkhau`) VALUES (Null,'$tenkh','$email','$sodienthoai','$taikhoan','$matkhau');";
         $result = $db->exec($select);
         return $result;
      }

      function checkEmail($email) {
         $db = new connect();
         $select = "SELECT * from khachhang a WHERE a.email='$email'";
         $result = $db->getInstance($select);
         return $result;
      }

      function updatePass($pass,$email) {
         $db = new connect();
         $select = "UPDATE khachhang SET matkhau='$pass' WHERE email='$email'";
         $result = $db->exec($select);
         return $result;
      }

      function changePass($makh, $oldpass, $newpass) {
         $db = new connect();
         $select = "UPDATE khachhang
         SET matkhau = '$newpass'
         WHERE makh = $makh AND matkhau = '$oldpass';";
         $result = $db->exec($select);
         return $result;
      }
   }
