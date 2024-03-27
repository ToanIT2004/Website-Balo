<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <div style="height: 400px" class="shadow mb-5 pt-3">
            <form action="index.php?action=login&act=change_password" method="POST">
               <h1 class="text-center">Đổi mật khẩu</h1>
               <div class="mb-3">
                  <h3 class="mx-3">Mật khẩu cũ</h3>
                  <input type="password" name="old_password" placeholder="Nhập mật khẩu cũ" class="dn_input px-3">
               </div>

               <div class="mb-3">
                  <h3 class="mx-3">Mật khẩu mới</h3>
                  <input type="password" name="new_password" placeholder="Nhập mật khẩu mới" class="dn_input px-3">
               </div>

               <div class="mb-3">
                  <h3 class="mx-3">Xác nhận mật khẩu</h3>
                  <input type="password" name="confirm_password" placeholder="Nhập mật khẩu xác nhận" class="dn_input px-3">
               </div>

               <button name="change_password" type="submit" class="btn btn-primary dn_button mb-1">GỬI</button>
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