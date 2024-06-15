<footer>
     <div class="container">
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             <h3>Về Chúng Tôi</h3>
             <p>Tên gọi Gong Cha xuất phát từ ý nghĩa trong tiếng Hoa là Trà cung đình. 
                Thời xưa, các loại trà tốt nhất thường được các vị hoàng thân quý tộc ngự dùng. 
                Ngày nay, Gong Cha mong muốn phục vụ các loại trà tốt nhất cho thực khách, cũng như chính tên gọi của thương hiệu</p>
             <ul class="social-icon">
                 <li><a href=""><i class="fa fa-facebook"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h3>Đường Dẫn </h3>
             <ul>
                 <li><a href="#">Trang Chủ</a></li>
                 <li><a href="#">Về Chúng Tôi</a></li>
                 <li><a href="#">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="noi-dung contact">
             <h3>Thông Tin Liên Hệ</h3>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span>19 Trịnh Đình Thảo<br />
                         Quận Tân Phú, Thành Phố Hồ Chí Minh<br />
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 123 456 789</a>
                         <br />
                         <a href="#">+84 987 654 321</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">vanan0210@gmail.com</a></p>
                </li>
                 <li>
                     <form class="form">
                         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
                         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
                     </form>
                 </li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Liên Hệ-->
     </div>
 </footer>
 <style>
    *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: Roboto;
 }
body{
     display: flex;
     justify-content: flex-end;
     align-items: center;
     min-height: 100vh;
     flex-direction: column;
     background: #FFDEE9;
 }
footer{
     position: relative;
     width: 100%;
     height: auto;
     padding: 50px 100px;
     background: #440000;
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
 }
footer .container{
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
     flex-direction: row;
 }
 /*Thiết Lập Cho Thành Phần Nội Dung Giới Thiệu*/
 footer .container .noi-dung{
     margin-right: 30px;
     color: #FF0000;
 }
footer  .container .noi-dung.about{
     width:40%;
     color: #FF0000;
  
 }
 footer .container .noi-dung.about h3{
     position: relative;
     color: #FF0000;
     font-weight: 500;
     margin-bottom: 15px;
 }
 footer .container .noi-dung.about h3:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background:#FFFF00;
 }
footer .container .noi-dung.about p{
     color:	#333399;
 }
 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: #222;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background:	#FF0000;
 }
.social-icon li a .fa{
     color:#FFFF33;
     font-size: 30px;
 }
.links h2{
     position: relative;
     color:#333399;
     font-weight: 500;
     margin-bottom: 15px;
 }
 .links h2{
     position: relative;
     color: 	#333399;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background:#333399;
 }
.links{
    position: relative;
    width: 25%;
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: #333399;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: 	#FFFF00;
 }
 .contact h2{
     position: relative;
     color: 	#FFFF00;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background:	#333399;
 }
.contact{
     width: calc(35% - 60px);
     margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #9599E2;
     font-size: 20px;
     margin-right: 10px;
 }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: #999;
     text-decoration: none;
 }
 </style>