

<hr>
<br>
<div class="luachon">
      <div class="chon_giohang">
        <h2 id="chon" style="font-size: 50px;">Giỏ hàng</h2>
      </div>
    </div>
<?php 
$i = 1; 

if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {  ?>
<div class="khunggiohang">
      <div class="sanphamtronggiohang">
        <div class="table_san_pham">
          <table style="border-collapse: collapse">
            <tr class="dongtieude">
              <td style=" text-align: center">
                <h3>Sản Phẩm</h3>
              </td>
              <td style="text-align: center"><h3>Giá</h3></td>
              <td style="text-align: center"><h3>Số lượng</h3></td>
              <td style="text-align: center"><h3>Tạm tính</h3></td>
            </tr>
        <?php $tongtien = 0;  ?> 
<form action="/azuki/muahang/thanhtoangiohang" method="POST"  >
    <?php  
    $quantities = []; 
    foreach ($_SESSION['giohang'] as $masp => $sanpham) {  
        if(isset($_SESSION['soluong0tk'][$masp])){
            $quantities[$masp]=$_SESSION['soluong0tk'][$masp]; }
           else{
            $quantities[$masp] = 1;
           }

           while ($row = mysqli_fetch_array($sp)) {
            if ($row['masp'] == $masp) {
                $soluongton = $row['soluong'];
                break;
            }
            
        }
         
        
        ?>
  <tr>
    <td>
      <div class="dong_san_pham">
      <div class="huysp">
    <a 
      href="<?php echo WEBROOT . 'muahang/xoaspgiohangkhongtk/'.$masp ; ?>" 
      onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm  ra khỏi giỏ hàng không?');">
      <p>X</p>
    </a>
  </div>
        <div class="anhsp">
          <img
            src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$sanpham['hinhanh']  ?>"
            alt=""
          />
        </div>
        <div class="tensp">
          <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>"><?php echo $sanpham['tensp'] ?></a>
        </div>
      </div>
    </td>
    <td>
      <b id="price<?php echo $i; ?>" data-price="<?php echo $sanpham['gia']   ?>">
        <?php  echo number_format($sanpham['gia'], 0, '', '.'); 
        ?>₫
      </b>
    </td>
    <td>
      <?php if($sanpham['soluongton']==0){?>
         <p style="color: red">sản phẩm này đã hết</p>
        <?php } else{?>
      <div class="soluongsp_giohang">
        <!-- Truyền $i để nhận diện sản phẩm -->
        <p onclick="decreaseQuantity(<?php echo $i; ?>)" class="giamsp">
         -
        </p>
        <input
          type="number"
          id="sp<?php echo $i; ?>"
          name="quantity_<?php echo $masp;  ?>"
          min="1"
          max="<?php echo $soluongton; ?>"
          value="<?php if(isset($_SESSION['soluong0tk'])){ 
           if(isset($_SESSION['soluong0tk'][$masp])){
            echo $_SESSION['soluong0tk'][$masp]; }
            else{ echo '1';}
            
            
            } else{ echo '1';}?>"
          step="1"
          class="soluong"
          oninput="updateQuantity('<?php echo $masp; ?>', this.value)"
          style="
          width:33px;
          height:33px;
          margin-top:-10px;
          "
            readonly

        />
        <p onclick="increaseQuantity(<?php echo $i; ?>)" class="tangsp">
          +
        </p>
      </div>
      <?php }?>
    </td>
    <td>
      <b id="total_price<?php echo $i; ?>">
        <?php ?>₫
      </b>
    </td>
  </tr>
  <?php $i++;  }?>
 
  
              <tr class="ngatdong">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="xemsp_capnhat">
            <div class="tieptucxemsp" style="max-width:300px ">
              <a href="/azuki/trangchu/shop" style="width:300px "><h3>← Xem thêm sản phẩm</h3></a>
            </div>
          </div>
        </div>
        <div class="tongtientronggiohang">
          <div class="tieudetongtien">
            <h2 >Tổng tiền trong giỏ hàng</h2>
            <hr />
          </div>
          <div class="tamtinh">
    <div class="loptamtinh">
      <div class="tieudetamtinh"><p>Tạm tính</p></div>
      <div class="tientamtinh"><p id="tempSubtotal">0₫</p></div>
    </div>
    <hr />
  </div>
  <div class="tamtinh">
    <div class="loptamtinh">
      <div class="tieudetamtinh"><p>Tổng tiền</p></div>
      <div class="tientamtinh"><p id="tempTotal">0₫</p></div>
    </div>
    <hr />
  </div>
  
          <div class="thanhtoan">
          <input type="hidden" id="quantities_input" name="quantities" value='<?php echo json_encode($quantities); ?>'>
          <input type="hidden" name="mahd" value="<?php ?>">
            <input type="submit" value="Thanh toán giỏ hàng ">
            
          </div>
   </form>




       
      </div>
    </div>
  </div>
  
<?php  } else { ?>
<h1 style="text-align: center;"> BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG </h1>

<h3 style="text-align: center;">
  <a href="/azuki/trangchu/shop" class="hover-link"> ← Chọn sản phẩm</a>
</h3>

<style>
  .hover-link {
    text-decoration: none; 
    color: black; 
  }

  .hover-link:hover {
    color: orange; 
  }
</style>
  <?php  } ?>

   
  
    <script>
      let quantities = <?php echo json_encode($quantities); ?>;
    </script>