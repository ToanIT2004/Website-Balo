<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <div style="height: 300px" class="shadow mb-5 pt-3">
            <form action="index.php?action=forget&act=password_action" method="POST">
               <h1 class="text-center">Mật khẩu mới</h1>
               <div class="mb-3">
                  <h3 class="mx-3">Password</h3>
                  <input type="text" name="password" placeholder="Nhập mật khẩu" class="dn_input px-3">
               </div>

               <div class="mb-3">
                  <h3 class="mx-3">Confirm_Password</h3>
                  <input type="text" name="confirm_password" placeholder="Nhập mật khẩu xác nhận" class="dn_input px-3">
               </div>

               <button name="submit_password" type="submit" class="btn btn-primary dn_button mb-1">GỬI</button>
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