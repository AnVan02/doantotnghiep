<div class="table-responsive">
  <?php
  if(!isset($_SESSION['cart'])||count($_SESSION['cart'])==0):
    echo '<script> alert("Không có sản phẩm trong giỏ hàng"); </script>';
  
    include "sanpham.php";
  ?>
  <?php
  else:
  ?>
    <form action="index.php?action=giohang&act=update_cart" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th> Sản Phẩm</th>
            <th>Đơn Hàng</th>
            <th >Xoá</th>
            <th class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Chọn Tỉnh Thành</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Tp.Hồ Chí Minh</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">Đắk Lắk</option>
                            <option value="3">Huế</option>
                        </select>
                        </th>

          </tr>
        </thead>
        <tbody>
         
          <?php
          $j=0;
            foreach($_SESSION['cart'] as $key=>$item):
              $cost=number_format($item['cost'],2);
              $total=number_format($item['total'],2);
              $j++;
              
          ?>
            <tr>
              <td><?php echo $j;?></td>
              <td><img width="100px" height="100px" src="Content/image/<?php echo $item['hinh']; ?>">
              <?php echo $item['name']; ?></td>
              Size: <?php echo $item['size']; ?> </td>
              <td>Đơn Giá: <?php echo $cost; ?> - Số Lượng:
              <!-- newqty[12,20] -->
               <input type="text" name="newqty[<?php echo $item['mahh']?>]" value="<?php echo $item['qty']; ?>" /><br />
                <p style="float: right;"> Thành Tiền: <?php echo $total; ?><sup><u>đ</u></sup></p>
              </td>
              <td><a href="index.php?action=giohang&act=emty_cart&id=<?php echo $item['mahh']?>"><button type="button" class="btn btn-danger">Thu Hồi</button></a>

                <button type="submit" class="btn btn-secondary">Sửa</button>
                <th class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Thanh Toán</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Chọn</option>
                            <option value="1">Thẻ Tín Dụng</option>
                            <option value="2">Momo</option>
                            <option value="3">Zalo</option>
                        </select>
                        </th>
              </td>
            </tr>
            <?php
            endforeach;
            ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b><?php echo get_subtotal();?> <sup><u>đ</u></sup></b>
            </td>
            <td><a href="index.php?action=order&act=order_detail">Thanh toán</a></td>
          </tr>
        </tbody>
      </table>
    </form>
    <?php
    endif;
   ?>
   

