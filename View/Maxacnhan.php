<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <div style="height: 230px" class="shadow mb-5 pt-3">
            <?php 
               $code = 0;
               if(isset($_POST['submit_code'])) {
                  $code = $_POST['code'];
                  if(isset($_SESSION['code']) && $_SESSION['code'] == $code) {
                      echo "<meta http-equiv='refresh' content='0; url=./index.php?action=forget&act=matkhaumoi'";
                  }else {
                     echo "<script>alert('Mã không hợp lệ')</script>";
                     echo "<meta http-equiv='refresh' content='0; url=./index.php?action=forget&act=maxacnhan'";
                  }
               }
            ?>
            <form action="index.php?action=forget&act=maxacnhan" method="POST">
               <h1 class="text-center">Nhập mã xác nhận</h1>
               <div class="mb-3">
                  <h3 class="mx-3">Nhập mã xác nhận mà chúng tôi gửi về email</h3>
                  <input type="text" name="code" placeholder="Nhập Email" class="dn_input px-3">
               </div>

               <button name="submit_code" type="submit" class="btn btn-primary dn_button mb-1">GỬI</button>
            </form>
         </div>
      </div>
   </div>
</div>
<style>
   .dn_input {
      width: 100%;
      height: 40px;
      border-radius: 30px;
      width: 93%;
      margin: 0 10px;
   }

   .dn_input:focus {
      border: 1.5px solid blue;
   }  

   .dn_button {
      width: 93%;
      border-radius: 30px;
      margin: 0 10px;
   }

   .dn_button:hover {
      opacity: 0.7;
   }
</style>