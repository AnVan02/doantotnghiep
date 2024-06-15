
<section>
     <div class="img-bg">
     <img src="Content/image/banner.jpg"  height="50px" alt="Hình Ảnh Minh Họa">
     </div>
     <div class="noi-dung">
         <div class="form">
             <h2> Đăng Nhập</h2>
             <form action="">
             <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Tên Đăng Nhập</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Mật Khẩu</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>
          <p>Chúng tôi cam kết bảo mật thông tin của quý khách hàng</p>
          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
            </div>
                 <div class="input-form">
                     <p>Bạn Mới Biết Đến GongCha? <a href="#">Đăng Ký</a></p>
                 </div>
             </form>
             <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
             <ul class="icon-dang-nhap">
                 <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                 <li><i class="fa fa-google" aria-hidden="true"></i></li>
                 <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
             </ul>
         </div>
     </div>
     <ul class="countdown">
  <li class="countdown-item"><span class="countdown-number days">28</span><span class="countdown-text">days</span></li>
  <li class="countdown-item"><span class="countdown-number hours">10</span><span class="countdown-text">hours</span></li>
  <li class="countdown-item"><span class="countdown-number minutes">40</span><span class="countdown-text">minutes</span></li>
  <li class="countdown-item"><span class="countdown-number seconds">53</span><span class="countdown-text">seconds</span></li>
</ul>
     
     <!--Kết Thúc Phần Nội Dung-->
     <style>
      {
     margin:0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Roboto', sans-serif;
  }
  section{
      position: relative;
      width: 100%;
      height: 100vh;
      display: flex;
  }
  section .img-bg{
      position: relative;
      width: 50%;
      height: 100%;
  }
  section .img-bg img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
  section .noi-dung{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50%;
      height: 100%;
  }
  section .noi-dung .form{
      width: 50%;
  }
  section .noi-dung .form h2{
      color: #607d8b;
      font-weight: 500;
      font-size: 1.5em;
      text-transform: uppercase;
      margin-bottom: 20px;
      border-bottom: 4px solid #ff4584;
      display: inline-block;
      letter-spacing: 1px;
  }
  section .noi-dung .form .input-form{
      margin-bottom: 20px;
  }
  section .noi-dung .form .input-form span{
      font-size: 16px;
      margin-bottom: 5px;
      display: inline-block;
      color: #607db8;
      letter-spacing: 1px;
        }
  section .noi-dung .form .input-form input{
      width: 100%;
      padding: 10px 20px;
      outline: none;
      border: 1px solid #607d8b;
      font-size: 16px;
      letter-spacing: 1px;
      color: #607d8b;
      background: transparent;
      border-radius: 30px;
      }
  section .noi-dung .form .input-form input[type="submit"]{
      background: #ff4584;
      color: #fff;
      outline: none;
      border: none;
      font-weight: 500;
      cursor: pointer;
      box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                  0 2px 2px rgba(0,0,0,0.12),
                  0 4px 4px rgba(0,0,0,0.12),
                0 8px 8px rgba(0,0,0,0.12),
                0 16px 16px rgba(0,0,0,0.12);
  }
  section .noi-dung .form .input-form input[type="submit"]:hover{
      background: #f53677;
  }
  section .noi-dung .form .nho-dang-nhap{
      margin-bottom: 10px;
      color: #607d8b;
      font-size: 14px;
  }
  section .noi-dung .form .input-form p{
      color: #607d8b;
  }
  section .noi-dung .form .input-form p a{
      color: #ff4584;
  }
  section .noi-dung .form h3{
      color: #607d8b;
      text-align: center;
      margin: 80px 0 10px;
      font-weight: 500;
  }
  section .noi-dung .form .icon-dang-nhap{
      display: flex;
      justify-content: center;
      align-items: center;
  }
  section .noi-dung .form .icon-dang-nhap li{
      list-style: none;
      cursor: pointer;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(1){
      color: #3b5999;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(2){
      color: #dd4b39;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(3){
      color: #55acee;
  }
  section .noi-dung .form .icon-dang-nhap li i{
      font-size: 24px;
  }
  .countdown {
   display: flex;
   justify-content: center;
   padding: 2rem 0;
   border-radius: 4px;
   background-color: #1a1c28;
   color: white;
   font-size: 2rem;
}

.countdown-item {
   display: flex;
   flex-direction: column;
   justify-content: center;
   text-align: center;
   padding: 0px 2rem;
   width: 25%;
}

.countdown-number {
   font-weight: 600;
   font-size: 5rem;
   margin-bottom: 5px;
}

.countdown-text {
   font-weight: 300;
   font-size: 1.2rem;
}

@media screen and (max-width: 767px) {
   .countdown-number {
      font-size: 3.5rem;
   }
}
</style>
