<?php 
   class lienhe {
      function getInfo($name, $email, $sdt, $content) {
         $db = new connect();
         $getInfo = "INSERT INTO lienhekh (id, ten, email, sdt, noidung) VALUES (Null, '$name', '$email', '$sdt', '$content');";
         $result = $db->exec($getInfo);
         return $result;
      }
   }
?>