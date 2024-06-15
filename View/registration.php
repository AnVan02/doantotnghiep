
<!--  -->
<form  action="index.php?action=registration&act=registration_action" method="post" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text"> 
     </div> 
    </div><label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email" type="email">
     <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      <p>Chúng tôi cam kết bảo mật thông tin của quý khách hàng</p>
   
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
    
   </form> 
 <css>
 <style>
 
 * {box-sizing: border-box}
 body{
   font-family: 'Noto Sans JP', sans-serif;
 }
 h1, label{
   color: DodgerBlue;
 }
   input[type=text], input[type=password] {
   width: 100%;
   padding: 15px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   width:100%;
   resize: vertical;
   padding:15px;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
input[type=text]:focus, input[type=password]:focus {
   outline: none;
 }
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
 }
button {
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
 }
button:hover {
   opacity:1;
 }
.cancelbtn {
   padding: 14px 20px;
   background-color: #f44336;
 }
.signupbtn {
   float: left;
   width: 100%;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
.container {
   padding: 16px;
 }
.clearfix::after {
   content: "";
   clear: both;
   display: table;
 }
 </style>