    <header>
    <section class="container">
            <div class="container">
            <div id="header-wrap">
                    <nav class="navbar navbar-expand-lg n navbar-light bg-light">
                        <ul class="navbar-nav ml-auto">
                        <form>
                            <input type="hidden" name="thamso" value="tim_kiem" >
                            <input type="text" name="tu_khoa" value="" 
                            style="margin-top:10px;margin-bottom:10px;width:220px;height:28px;border-radius:10px" ><br>
                            <input type="submit" value="Seach" style='font-size:15px;height:28px;width:120px;border-radius:10px;background-color:#FF9900; color:white; font-weight: bolder;margin-left:53px'>
                        </form>
                            <li class="nav nav-tabs">
                                <a href="index.php?action=gioithieu" style="color: black"; class="nav-link">GiớiThiệu</a>
                            </li>
                            <li class="nav nav-tabs">
                                <a href="index.php?action=lienhe" style="color: black"; class="nav-link">LiênHệ</a>
                            </li>
                            <li class="nav nav-tabs">
                                <a href="index.php?action=registration" style="color: black"; class="nav-link">ĐăngKý</a>
                            </li>
                            <li class="nav nav-tabs">
                                <a href="index.php?action=login" style="color: black"; class="nav-link">ĐặngNhập</a>
                            </li>
                            <li class="nav nav-tabs">
                                <a href="index.php?action=login&act=log_out" style="color: black"; class="nav-link">ĐặngXuất</a>
                            </li>
                            <li>
                                <a href="index.php?action=giohang" class="nav-link"><img src="Content/image/cart.png"style="color: black"; width="30px" height="30px" alt=""></a>
                            </li>
                            <li>
                                <?php
                                // nếu giỏ hàng tồn tại thì đếm sản phẩm
                                if(isset($_SESSION['cart']))
                                {
                                    $dem=count($_SESSION['cart']);
                                }
                                else{
                                    $dem=0;
                                }
                                ?>
                                <p style="color: red; margin-top: 20px; margin-left: 0px;">(<?php echo $dem;?>)</p>

                            </li>
                            <li>                    
                                 <?php
                                    if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh'])):
                                        $name=$_SESSION['tenkh'];   
                                 ?>
                                    <p style="color: #85FFBD; margin-top: 20px; margin-left: 0px;"><?php echo "Xin Chào ".$name;?></p> <?php
                                else:
                                    echo'<p style="color:#9599E2; margin-top: 20px; margin-left: 0px;"> Xin Chào </p>';
                                    
                                ?>
                                <?php
                                 endif;
                                ?>
                                <ul class="sub-menu">
                                <li id="menu-item-2816" class="qtranxs-lang-menu-item "><a title="Tiếng Việt" href="https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Vi%E1%BB%87t"><img src="https://gongcha.com.vn/wp-content/plugins/qtranslate-xt-master/flags/vn.png" alt="Tiếng Việt" />&nbsp;Tiếng Việt</a></li>
                                <li id="menu-item-2817" class="qtranxs-lang-menu-item"><a title="English" href="https://en.wikipedia.org/wiki/English_language"><img src="https://gongcha.com.vn/wp-content/plugins/qtranslate-xt-master/flags/gb.png" alt="English" />&nbsp;English</a></li>
                            </ul>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
    </section>
</header>
<!-- dang ky -->
<!-- hinh dộng -->
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                   
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <<div class="carousel-inner z-depth-1-half" role="listbox"> -->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Content/image/herder1.jpg" style="background: 50px;height: 700px;width: 1529px;" alt=" Firsslide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Content/image/herder2.jpg" style="background: 50px;height: 700px;width: 1529px;"alt="Secondslide">
                        </div>
                    </div>
                    <div id="page-heading" style="background-image: url(https://gongcha.com.vn/wp-content/uploads/2018/03/GC-Web-1900x335.jpg)">
                <div class="container">
                    <h2 class="page-title">Cửa hàng</h2>
                    <p>Hãy chọn thành phố bạn đang sống, Gong Cha sẽ hiển thị danh sách các cửa hàng trong khu vực</p>
                </div>
            </div>
            <div id="breadcrumbs">
                <div class="container">
                    <div id="breadcrumbs-nav">
                        <!-- Breadcrumb NavXT 6.0.4 -->
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Gong Cha Vietnam." href="https://gongcha.com.vn" class="home"><i class="fa fa-home"></i> </a><meta property="position" content="1"></span> <i class="fa fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><span property="name">Cửa hàng</span><meta property="position" content="2"></span>        </div>
                </div>
            </div>
            <main class="has-pd">
                <div class="container">
                    <form id="location-form-search">
                        <div class="row" style=" height:352.764; with: 395px;padding: 30px;">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <select name="" id="" class="form-control"style=" height: 60px;; with: 335px;padding: 6px 12 px;">
                                                                        <option value="-1">Chọn Tỉnh/ Thành </option>
                                                                        <option value="21">Hồ Chí Minh</option>
                                                                        <option value="20">Hà Nội</option>
                                                                        <option value="41">Kiên Giang</option>
                                                                        <option value="44">Sóc Trăng</option>
                                                                        <option value="47">Nha Trang</option>
                                                                        <option value="49">Đà Lạt</option>
                                                                        <option value="21">Đắk Lắk</option>
                                                                        <option value="20">Buôn Ma Thuột</option>
                                                                        <option value="30">Đà Nẵng</option>
                                                                        <option value="28">Bình Dương</option>
                                                                        <option value="23">Biên Hòa</option>
                                                                        <option value="26">Cần Thơ</option>
                                                                        <option value="35">Long An</option>
                                                                        <option value="27">Huế</option>
                                                                        <option value="36">Mỹ Tho</option>
                                                                        <option value="29">Vũng Tàu</option>
                                                                        <option value="25">Thanh Hóa</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <button id="btn-search-location" type="button" name="action-search-location"
                                                            class="btn btn-primary btn-block">TÌM CỬA HÀNG <i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>      
                                </header>   