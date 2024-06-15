  
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <marquee style="border:#8BC6EC 2px SOLID ">Giới Thiệu Thức Uống Hấp Dẫn Và Đa Dạng Từ Gong Cha</marquee>
      <div class="row">
          <div class="container">
              <button class="btn btn-danger" font style="height: 40px;;width: 1170PX;font-size:25px;background:#C0C0C0;color:#000000";>SẢN PHẨM MỚI NHẤT</button>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <!-- phương thức get -->
              <a href="index.php?action=home&act=sanpham">
                  <span style="color:#FF0000 ;">Menu Hiện Tại</span></div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
         
            <?php
            $hh=new HangHoa();
            $results=$hh->getListHangHoaNew();
            while($set=$results->fetch()):
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo 'Content/image/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color:#FF0000;"><?php echo number_format($set['dongia']);?><sup><u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                      <span><?php echo $set['tenhh']?></span></br></a>
                
                  

              </div>
            <?php
            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <marquee style="border:#F7CE68 2px SOLID ">Giới Thiệu Thức Uống Hấp Dẫn Và Đa Dạng Từ Gong Cha</marquee>
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">
      <!-- Heading -->
      <div class="row">
      <div class="container">
              <button class="btn btn-danger" font style="height: 40px;;width: 1170PX;font-size:25px;background:#C0C0C0;color:#000000";>SẢN PHẨM KHUYẾN MÃI</h4>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=home&act=khuyenmai">
                  <span style="color: #FF0000;">THỨC UỐNG THEO MÙA</span></div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
         
      <?php
           
            $hh=new HangHoa();
            $results=$hh->getListHangHoaSale();
            while($set=$results->fetch()):
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                  <img src="<?php echo 'Content/image/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo number_format($set['giamgia']);?><sup><u>đ</u></sup></font>
                      <strike><?php echo number_format($set['dongia']);?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                  <span><?php echo $set['tenhh'].'-'.$set['size'];?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">Mới Nhất</button>
                  

              </div>
         <?php
         endwhile;
         ?>
         
      </div>
      
      <!--Grid row-->
      <div class="row">
      <div class="container">
              <button class="btn btn-danger" font style="height: 40px;;width: 1170PX;font-size:25px;background:#C0C0C0;color:#000000";>Tinh túy từ lá trà tươi hảo hạng</h4>
          </div>
  </section>
  <!-- end sản phẩm khuyến mãi -->