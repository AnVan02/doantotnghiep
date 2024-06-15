  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  
  <?php

   $hh=new HangHoa();
   $results=$hh->getListHangHoaAll();

   $count=$results->rowCount();//21 record(sản phẩm)

    $limit=8;

    $p=new Page();
    
    $page=$p->findPage($count,$limit);//3
   
    $start=$p->findStart($limit);
    // tìm current_page: trang hiện tại dựa vào get URL
    $current_page=isset($_GET['page'])?$_GET['page']:1;
  ?>
  
 
 <?php
    if(isset($_GET["act"]))
    {
        if($_GET["act"]=="sanpham")
        {
            $ac=1;
        }
        elseif($_GET["act"]=="khuyenmai")
        {
            $ac=2;
        }
        elseif($_GET["act"]=="timkiem")
        {
            $ac=3;
        }
        else{
            $ac=0;
        }
    }
 ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
             <!-- tiêu đề -->
             <?php
             if($ac==1)// là sản phẩm
             {
                 echo ' <h3 class="mb-5 font-weight-bold">SẢN PHẨM</h3>';
             }
             elseif($ac==2)
             {
                 echo ' <h3 class="mb-5 font-weight-bold">SẢN PHẨM KHUYẾN MÃI</h3>';
             }
             elseif($ac==3)
             {
                echo ' <h3 class="mb-5 font-weight-bold">SẢN PHẨM TÌM KIẾM</h3>';
             }
             ?>
            
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
         <!-- CHI TIẾT NỘI DUNG -->
         <?php
            $hh=new HangHoa();
            if($ac==1)
            {
                $results=$hh->getListHangHoaAll();

            }
            elseif($ac==2)
            {
                $results=$hh->getListHangHoaSaleAll();
            }
            elseif($ac==3)
            {
                // echo "hello";
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $timkiem=$_POST['txtsearch'];//dép
                }
             
                $results=$hh->getSeach($timkiem);
            }
            while($set=$results->fetch()):
         ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo 'Content/image/'.$set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                    <!-- tiền tệ -->
                    <?php
                    if($ac==2){
                        echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">'.number_format($set['giamgia']).'<sup><u>đ</u></sup></font>
                        <strike>'.number_format($set['dongia']).'</strike><sup><u>đ</u></sup>
                        </h5>';
                    }
                    else{
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">'.number_format($set['dongia']).'<sup><u>đ</u></sup></br>';
                    }
                    ?>
                    
                  </h5>
                  <a href="index.php?action=home&act=detail&id=<?php echo $set['mahh'];?>">
                      <span><?php echo $set['tenhh'].'-'?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">Thêm Mới </button>
                  
                 

              </div>
        <?php
        endwhile;
        ?>
      </div>
      
  </section>
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					<?php
                    if($current_page>1 && $page>1)
                    {
                        echo '<li ><a href="index.php?action=home&act=sanpham&page='.($current_page-1).'">
                        Trang Trước</a></li>';
                    }
                    for($i=1;$i<=$page;$i++)
                    {
                    ?>  
				    <li ><a href="index.php?action=home&act=sanpham&page=<?php echo $i;?>"><?php echo $i;?>
                    </a></li>
                    <?php
                    }
                    if($current_page<$page && $page>1)
                    {
                        echo '<li ><a href="index.php?action=home&act=sanpham&page='.($current_page+1).'">
                        Trang Sau</a></li>';
                    }
                    ?>
				</ul>
</div>