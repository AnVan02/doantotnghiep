<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=add_cart" method="post">
                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <?php
                            if(isset($_GET['id']))
                            {
                                $mahh=$_GET['id'];
                                $dt=new HangHoa();
                                $result=$dt->getListDetail($mahh);
                                $tenhh=$result[1];
                                $dongia=$result[2];
                                $giamgia=$result[3];
                                $hinh=$result[4];
                                $mota=$result[10];
                                $nhom=$result[5];
                            }
                           ?>
                            <div class="tab-pane active" id="<?php echo $hinh?>"><img src="<?php echo 'Content/image/'.$hinh;?>" alt="" width="100px" height="400px">
                            </div>
                           
                        </div>
                       
                        <ul class="preview-thumbnail nav nav-tabs">
                          <?php
                            $result=$dt->getListDetailNhom($nhom);
                         
                            while($set=$result->fetch()):
                          ?>
                           <li class="active"><a href="#<?php echo $set['hinh'];?>" data-toggle="tab">
                                <img src="<?php echo 'Content/image/'.$set['hinh'];?>"></a>
                           </li>
                          <?php
                          endwhile;
                          ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh;?>" />
                        <!-- đỗ tên hàng -->
                        <h3 class="product-title"> <?php echo $tenhh;?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <!-- đỗ phần mô tả -->
                        <p class="product-description">
                        <?php echo $mota;?>
                        </p>

                        <h4 class="price">Giá bán: <?php echo  $dongia; ?> đ</h4>
                        
                        <h5 class="colors">size:
                            <select name="mysize" class="form-control" style="width:150px;">
                                <?php
                                    $result=$dt->getListDetailNhom($nhom);
                                    
                                    while($set=$result->fetch()):
                                ?>
                                <option value="<?php echo $set['size'];?>">
                                    <!-- đỗ size vô -->
                                    <?php echo $set['size'];?>
                                </option>
                                <?php
                                endwhile
                                ?>
                            </select><br>
                           
                            <input type="hidden" name="size" id="size" value="" />
                            Kích Thước:
                                <?php
                                    $result=$dt->getListDetailNhomSize($nhom);
                                    // trả về nhiều size bắt buộc dùng vòng lặp 
                                    while($set=$result->fetch()):
                                ?>
                                <button type="button" onclick="chonsize(<?php echo $set['size'];?>)"
                                 name="<?php echo $set['size'];?>" class="btn btn-default-hong btn-circle" id="An"
                                value="<?php echo $set['size'];?>">
                                <!-- hiển thị size -->
                                <?php echo $set['size'];?>
                                </button>
                                <?php
                                endwhile;
                                ?>
                            </br></br>
                            Số Lượng:
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>
                            <a href="https://www.gongcha.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<?php
if(isset($_SESSION['makh'])):
?>
<section>
    <div class="col-12">
            <div class="row">
                <?php
                // kiểm tra mã hh chắc là có hay không
                if(isset($_GET['id']))
                {
                    $u=new User();
                    $result=$u->getTotalComment($_GET['id']);//$result[4]
                    $tong=$result[0];

                }
                 
                ?>
                <p class="float-left"><b>BÌnh luận <?php echo $tong;?> </b></p>
                <hr>
            </div>
            <form action="index.php?action=home&act=comment&id=<?php echo $_GET['id']?>" method="post">
            <div class="row">
              
                    <input type="hidden" name="txtmahh" value="<?php echo $_GET['id'];?>"/>
                    <img src="Content/image/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <br/>
                <?php
               
                $result=$u->displayComment($mahh);
                while($set=$result->fetch())://{
                ?>
                    <div class="col-12">
                        <div class="row">
                            <img src="Content/image/home.png" with="50px" height="50px"/>
                            <p><?php echo '<b>'.$set['username'].'</b>'.$set['noidung'];?></p><br>
                        </div>
                    </div>
                <?php
                endwhile;//}
                ?>
                <br/>
            </div>
        </section>
    <?php
    endif;
    ?>
