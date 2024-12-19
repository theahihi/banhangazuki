
<style>
    .box-banner-shop {
  width: 100%;
  height: 476px;
  margin-bottom: 60px;
  background-color: aqua;
  padding: 85px 0 90px 0;
  background: url("<?php echo WEBROOT . 'public/client/Picture/slider-5.jpg'?>");
  background-size: cover;
}
</style>
<?php  
if (isset($_SESSION['dacosp'])) {
    echo "<script>alert('" . $_SESSION['dacosp'] . "');</script>";
    unset($_SESSION['dacosp']); }
?>
<div class="box-banner-shop">
        <div class="in-box-banner">
            <div class="text-title-banner">
                Shop
            </div>
            <div class="box-path">
                <div>
                    Home
                </div>
                <div class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div>
                    Shop
                </div>
                <?php if(isset($tenloai)){
                
                ?>
                 <div class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div>
                    <?php $row=mysqLi_fetch_array($tenloai);
                    echo $row['tenloai'];
                    $maloai=$row['maloai'];
                    ?>
                </div>
                <?php  }?>
                <?php if(isset($tenphong)){
                
                ?>
                 <div class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div>
                    <?php $row=mysqLi_fetch_array($tenphong);
                    echo $row['tenphong'];
                    $maphong=$row['maphong'];
                    ?>
                </div>
                <?php  }?>


            </div>
            
        </div>
    </div>
    <div class="box-shop" >
        <div class="box-sidebar">
            <div class="first-sidebar" style="height: 250px;">
                <div class="title-sidebar">
                    Danh mục loại sản phẩm
                </div>
                <?php  While($row=mysqLi_fetch_array($loaisp)){?>
                <div class="in-sidebar">
                <div class="name">
                    <a style=" text-decoration: none;" href="<?php echo '/azuki/trangchu/loaisanpham/' . $row['maloai']; ?>"><?php echo $row['tenloai']; ?>
                    
                </a></div>   
                    <div class="box-number">
                    <?php echo $row['total_sp']; ?>
                    </div>
                </div>
                <?php  } ?>
            </div>
            <div class="first-sidebar" style="height: 250px;">
            <style>
                a{
                    color: #8E8E86; 
                }
               .first-sidebar a:hover {
                 color: black;
                                       }
                  </style>
                <div class="title-sidebar">
                    Danh mục phòng
                </div>
                <?php foreach ($phong as $row_phong) { ?>
    <div class="in-sidebar">
        <div class="name">
            <a style="text-decoration: none;" href="<?php echo WEBROOT .'trangchu/phong/' . $row_phong['maphong']; ?>">
                <?php echo $row_phong['tenphong']; ?>
            </a>
        </div>
        <div class="box-number">
            <?php echo $row_phong['soluong']; ?>
        </div>
    </div>
<?php } ?>
            </div>
            
            <div class="all-box-brands">
                <div class="title-brands">Brands</div>
                <div class="box-list-brands">
                    <div class="box-img-brands">
                        <a href="">
                            <img src="<?php echo WEBROOT . 'public/client/Picture/brand-1-1.jpg'?>" alt="">
                        </a>
                    </div>
                    <div class="box-img-brands">
                        <a href="">
                            <img src="<?php echo WEBROOT . 'public/client/Picture/brand-2-1.jpg'?>" alt="">
                        </a>
                    </div>
                    <div class="box-img-brands">
                        <a href="">
                            <img src="<?php echo WEBROOT . 'public/client/Picture/brand-3-1.jpg'?>" alt="">
                        </a>
                    </div>
                    <div class="box-img-brands">
                        <a href="">
                            <img src="<?php echo WEBROOT . 'public/client/Picture/brand-4-1.jpg'?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box-feature-product">
                <div class="text-feature-product">Sản phẩm mới</div>
                <div>
                 <?php  while($row=mysqLi_fetch_array($spmoi)){?>
                    <div class="box-product-in" >
                        <div class="picture-product-in">
                            <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>">
                                <img src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhhienthi1']?>" alt="">
                            </a>
                        </div>
                        <div class="box-in-content">
                            <div class="box-star">
                            <?php  if($row['rate']>=1 &&$row['rate']<2 ) { ?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']>=2 &&$row['rate']<3 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        
                        <?php } elseif($row['rate']>=3 &&$row['rate']<4 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        
                        <?php } elseif($row['rate']>=4 &&$row['rate']<5 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                       
                        <?php } elseif($row['rate']>=5 &&$row['rate']<6 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']=0 ){?>
                        
                        <?php }?>
                            </div>
                            <div class="title-feature-product">
                                <?php echo $row['tensp']?>
                            </div>
                            <div class="price-feature-prod">
                                <span> <?php echo number_format($row['dongia'], 0, '', ','); ?>₫</span>
                            </div>
                        </div>
                    </div>  
                <?php }?>
                </div>
            </div>
        </div>
        <style>
            .new-product-1 .title-new-product {
    font-size: 16px; /* Kích thước chữ của tên sản phẩm */
    width: 100%; /* Chiều rộng 100% */
    margin-bottom: 10px; /* Tăng khoảng cách giữa tên sản phẩm và giá */
    word-wrap: break-word; /* Tự động xuống dòng nếu nội dung quá dài */
    white-space: normal; /* Cho phép xuống dòng */
    line-height: 1.4; /* Khoảng cách giữa các dòng của tên sản phẩm */
}

.new-product-1 div {
    margin-bottom: 8px; /* Tăng khoảng cách giữa các phần tử */
}

.new-product-1 > div:last-child {
    margin-top: 10px; /* Tăng khoảng cách giữa giá và phần tử trên */
    font-size: 14px; /* Kích thước chữ của giá sản phẩm */
    color: rgb(170, 167, 167); /* Màu chữ của giá sản phẩm */
}

        </style>
        <div class="box-all-product" >
            <div class="header-product">
                <!--
                <select name="" id="box-all-list">
                    <option value="">Lọc sản phẩm theo giá</option>
                    <option value="">Từ thấp đến cao</option>
                    <option value="">Từ cao đến thấp</option>
                </select>
                -->
                <h2>Hãy chọn  sản phẩm bạn yêu thích nhé !</h2>
            </div>
            <?php if(isset($nd)){?>
                    <?php if(mysqLi_num_rows($allsp)>=1) { ?>
                   <h2>KẾT QUẢ TÌM KIẾM CỦA : '<?php echo $nd;?>'</h2>
                   <?php  } else{?>
                    <h2> KHÔNG CÓ KẾT QUẢ TÌM KIẾM CỦA : '<?php echo $nd;?>'</h2>
              <?php  } } ?>
            <div class="all-box-new-product" style="display: grid; grid-template-columns: repeat(3, 1fr); ">
                <?php 
                $i=1;
                While($row=mysqLi_fetch_array($allsp)){
                ?>
                <div class="new-product-1">
                    <div class="pic-product-1">
                        <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>">
                            <img class="Pic-product" src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/'.$row['anhhienthi1']?>" alt="">
                            
                            <div class="box-icon-new-product">
                                <?php if($row['soluong']>0) {?>
                               <a href="<?php echo WEBROOT . 'muahang/xulythemgiohang/'.  $row['masp']?>"> <i style="font-size: 19px;" id="cart-Product" class="fa-solid fa-cart-shopping"></i></a>
                               <?php }?>
                               <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>">     <i style="font-size: 18px;" id="search-Product" class="fa-solid fa-magnifying-glass"></i>    </a>
                            </div>
                        </a>
                    </div>
                    <div class="box-star" style="width: 100%; height: 23px;">
                        <?php  if($row['rate']>=1 &&$row['rate']<2 ) { ?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']>=2 &&$row['rate']<3 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']>=3 &&$row['rate']<4 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']>=4 &&$row['rate']<5 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']>=5 &&$row['rate']<6 ){?>
                        <i style="color: #fcad02; margin-left: 0;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <i style="color: #fcad02;" class="fa-solid fa-star"></i>
                        <?php } elseif($row['rate']=0 ){?>
                        <i style=" margin-left: 0;" class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <i  class="fa-solid fa-star"></i>
                        <?php }?>
                        <span style="margin-left: 5px; color: rgb(201, 201, 201); font-size: 12px;">(<?php  echo $row['total_reviews'] ;?> review)</span>
                    </div>
                    <div class="title-new-product">
                        <a href=""><?php echo $row['tensp']?></a>
                    </div>
                    <div style="font-size: 16px; color: rgb(170, 167, 167);">
                    <?php echo number_format($row['dongia'], 0, '', ','); ?>₫
                    </div>
                </div>
                <?php  $i=$i+1; }  ?>
                
               
              
                
            </div>   
            <p style="text-align: center">
                 <?php
            $page=1;
            $sosp = 12 ;  
            $row=mysqLi_fetch_array($tongsp);
            $tongsp= $row['tongsp'];
            $tongsotrang= ceil($tongsp/$sosp);
            $eachrecor =$tongsotrang ;
            $p=1;?>
<?php
while ($p <= $eachrecor) {
    ?>
    <?php if ($trang == "shop") { ?>
        <a href="/azuki/trangchu/shop_page/<?php echo $page ?>" 
           style="margin-right: 3px; 
           <?php if (isset($tranghientai) && $tranghientai == $page) { ?>
               color: orange; 
               font-size: 20px;
           <?php } ?>">
            <?php echo $page ?>
        </a>
    <?php } elseif ($trang == "loaisp") { ?>
        <a href="/azuki/trangchu/loaisanpham_page/<?php echo $maloai ?>/<?php echo $page ?>" 
           style="margin-right: 3px; 
           <?php if (isset($tranghientai) && $tranghientai == $page) { ?>
               color: orange; 
               font-size: 20px;
           <?php } ?>">
            <?php echo $page ?>
        </a>
    <?php } elseif ($trang == "phong") { ?>
        <a href="/azuki/trangchu/phong_page/<?php echo $maphong ?>/<?php echo $page ?>" 
           style="margin-right: 3px; 
           <?php if (isset($tranghientai) && $tranghientai == $page) { ?>
               color: orange; 
               font-size: 20px;
           <?php } ?>">
            <?php echo $page ?>
        </a>
    <?php }elseif ($trang == "timkiem") { $nd=urlencode($nd) ?>
        <a href="/azuki/trangchu/shop_timkiem_page/<?php echo $nd ?>/<?php echo $page ?>" 
           style="margin-right: 3px; 
           <?php if (isset($tranghientai) && $tranghientai == $page) { ?>
               color: orange; 
               font-size: 20px;
           <?php } echo $nd;  ?>">
           
            <?php echo $page ;
             ?>
        </a>
    <?php } ?> 
    <?php
    $page++;
    $p++;
}
?>
        </div>
    </div>
 
