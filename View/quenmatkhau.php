<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-md-3">
         <div style="height: 230px" class="shadow mb-5 pt-3">
            <form action="index.php?action=forget&act=forget_action" method="POST">
               <h1 class="text-center">PHỤC HỒI MẬT KHẨU</h1>
               <div class="mb-3">
                  <h3 class="mx-3">Email</h3>
                  <input type="email" id="email" name="email" placeholder="Nhập Email" class="dn_input px-3">
               </div>

               <button name="submit_email" type="submit" class="btn btn-primary dn_button mb-1">GỬI</button>
               <a href="index.php?action=login&act=dangnhap" class="mx-3 text-info">Hủy</a>
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