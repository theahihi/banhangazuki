<?php 
require_once 'core/Controller.php';

class trangchuController extends Controller {
    private $trangchuModel;
    public function __construct(){
        $this->trangchuModel = $this->model('trangchuModel');
    }
    public function home(){
    $trang="tongquan";
      $tongdoanhthu=$this->trangchuModel->doanhthu();
      $donhangmoitrongngay=$this->trangchuModel->donhangmoi();
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/home',['tongdoanhthu'=> $tongdoanhthu,'donhangmoi'=>$donhangmoitrongngay ]);
      
    }
    public function listdonhang(){
        $trang="listdonhang"; 
        $dondathang=$this->trangchuModel->dondathang();
        $chitiet= $this->trangchuModel-> chitietsanphammua();
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/listdonhang',['dondathang' => $dondathang , 'chitietsanphammua' => $chitiet ]);
 
    }

    public function quanlytaikhoan(){
        $trang="quanlytk"; 
        $dstk=$this->trangchuModel->gettaikhoan();
         $this->view('header',['trang'=>$trang]);
         $this->view('trangchu/quanlytk',['dstk'=>$dstk]);

     }

     public function khoataikhoan($id){
         $this->trangchuModel->khoatk($id);
         header("Location: /azuki/trangchu/quanlytaikhoan");
      }

      public function motaikhoan($id){
         $this->trangchuModel->mokhoatk($id);
         header("Location: /azuki/trangchu/quanlytaikhoan");
      }

      public function xoataikhoan($id){
         $this->trangchuModel->xoatktv($id);
         header("Location: /azuki/trangchu/quanlytaikhoan");
      }

      public function themtaikhoan(){
         $trang="quanlytk"; 
          $this->view('header',['trang'=>$trang]);
          $this->view('trangchu/addtv');

      }

      public function taodon(){
        $trang="taodonhang"; 
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/taodon'); 
 
    }

    public function danhsachsanpham(){
        $trang="sanpham"; 
        $sanpham =$this->trangchuModel->getsanpham();
        $slban =$this->trangchuModel->Getsoluongdaban();
        $loaisp=$this->trangchuModel->getloai();
          $this->view('header',['trang'=>$trang]);
          $this->view('trangchu/danhsachsanpham',['sanpham'=>$sanpham,'slban' => $slban,'loaisp'=>$loaisp ]);

      }


      public function updatesp(){ 
         $masp = $_POST['masp'];
         $tensp=$_POST['tensp'];
         $dongia= $_POST['dongia'];
         $soluong = $_POST['soluong'];
         $maloai=$_POST['loai'];
         $thongtinsp =$_POST['thongtin'];
         $chitietsp =$this->trangchuModel->getsanphamtheoma($masp);
         $row = mysqLi_fetch_array($chitietsp);
         $anh_main=$row['anhhienthi1'];
         if(isset($_FILES['anh_main']) && $_FILES['anh_main']['name'] != ''){
             $anh_main = $_FILES['anh_main']['name'];
             $file_tmp =$_FILES['anh_main']['tmp_name'];  
             move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_main);
          }
             
         $this->trangchuModel->updatesp($tensp,$anh_main,$thongtinsp,$maloai,$masp,$dongia,$soluong);
         
         $_SESSION['thanhcong']="Sửa sản phẩm mã : $masp , tên: $tensp Thành công ";
        
          header("location: /azuki/trangchu/danhsachsanpham");
     }

     public function addsp(){ 
         $masp = 'SP01';
         $tensp=$_POST['tensp'];
         $dongia= $_POST['dongia'];
         $soluong = $_POST['soluong'];
         $maloai=$_POST['loai'];
         $thongtinsp =$_POST['thongtin'];
         $anh_main="";
         if(isset($_FILES['anh_main']) && $_FILES['anh_main']['name'] != ''){
             $anh_main = $_FILES['anh_main']['name'];
             $file_tmp =$_FILES['anh_main']['tmp_name'];  
             move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_main);
          }
          $result =$this->trangchuModel->getmaxmsp();
          if($result && mysqLi_num_rows($result)>0){
             $row= mysqLi_fetch_array($result);
             $maxmsp=$row['max_masp'];
          }
          $masp='SP' . ($maxmsp + 1);
          $this->trangchuModel->insertsanpham($tensp, $anh_main,$thongtinsp, $maloai, $masp,$dongia,$soluong);

         $_SESSION['thanhcong']="Thêm sản phẩm sản phẩm Thành công ";
        
          header("location: /azuki/trangchu/danhsachsanpham");
     }

     public function baohanh() {
        $trang = "baohanh";
        $danhsach_baohanh = $this->trangchuModel->getAllWarranties();
    
        // Xử lý thêm mới bảo hành
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
            $action = $_POST['action'];
            $mabaohanh = $_POST['mabaohanh'] ?? '';
            $ngaybaohanh = $_POST['ngaybaohanh'] ?? date('Y-m-d');
            $ngaytra = $_POST['ngaytra'] ?? '';
            $serinumber = $_POST['serinumber'] ?? '';
            $loimota = $_POST['loimota'] ?? '';
            $trangthai = $_POST['trangthai'] ?? 'đang xử lý'; // Giá trị mặc định
    
            if ($action === 'add') {
                $this->trangchuModel->addWarranty($mabaohanh, $ngaybaohanh, $ngaytra, $serinumber, $loimota, $trangthai);
            } elseif ($action === 'edit') {
                $this->trangchuModel->updateWarranty($mabaohanh, $ngaytra, $serinumber, $loimota, $trangthai);
            }
    
            echo json_encode(['success' => true]);
            exit;
        }
    
        // Xử lý xóa bảo hành

    
        // Load view
        $this->view('header', ['trang' => $trang]);
        $this->view('trangchu/baohanh', ['danhsach_baohanh' => $danhsach_baohanh]);
    }
    public function taodonhang() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tongtien_raw = $_POST['tongtien']; 
            $tongtien = intval(str_replace(',', '', $tongtien_raw));
            $hoten=$_POST['hoten'];
            $sodienthoai=$_POST['sdt'];
            $email=$_POST['email'];
            $facebook=$_POST['facebook'];
            $phuongthuc=$_POST['phuongthuc'];
            $ghichu=$_POST['ghichu'];
            $this->trangchuModel->themdonhang($hoten,$sodienthoai,$email,$facebook,$ghichu,$tongtien,$phuongthuc);
           $result= $this->trangchuModel->maxmhd();
           $row=mysqLi_fetch_array($result);
           $mahd = $row['max'];
            if (isset($_POST['productData'])) {
                $productData = json_decode($_POST['productData'], true); 
        
                if (is_array($productData)) {
                    foreach ($productData as $product) {
                        echo "Mã sản phẩm: " . htmlspecialchars($product['productId']) . "<br>";
                        echo "Tên sản phẩm: " . htmlspecialchars($product['productName']) . "<br>";
                        echo "Số lượng: " . htmlspecialchars($product['quantity']) . "<br>";
                        echo "Seri number: " . htmlspecialchars($product['serinumber']) . "<br>";
                        echo "Giá: " . htmlspecialchars($product['price']) . "<br><br>";
                        $masp=$product['productId'];
                        $soluong= $product['quantity'];
                        $dongia= $product['price'];
                        $this->trangchuModel->themchitiethd($mahd,$masp,$soluong,$dongia);
                        $this->trangchuModel->giamsl($soluong,$masp);

                    }
                } else {
                    echo "Không có dữ liệu sản phẩm.";
                }
            }
            $sdt = $this->trangchuModel->checksdtkh($sodienthoai);
            if(mysqLi_num_rows($sdt)==0){
                $this->trangchuModel->themkhachhang($hoten,$sodienthoai,$email,$facebook);
            }
            $_SESSION['thanhcong']="Tạo đơn thành công ";
            header("location: /azuki/trangchu/taodon ") ; 
        }
    }

    public function goiykhachhang() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sdt'])) {
            $sdt = $_POST['sdt'];
            $result = $this->trangchuModel->khachhang($sdt);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="search-item" 
                         data-customer-sdt="' . htmlspecialchars($row['sodienthoai']) . '" 
                         data-customer-name="' . htmlspecialchars($row['hoten']) . '" 
                         data-customer-email="' . htmlspecialchars($row['email']) . '" 
                         data-customer-facebook="' . htmlspecialchars($row['facebook']) . '">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <span style="font-size: 16px; font-weight: bold;">' . htmlspecialchars($row['sodienthoai']) . '</span>
                        </div>
                    </div>';
                }
            } else {
                echo "<div style='dis;'>Không tìm thấy sản phẩm</div>";
            }
        } else {
            echo "<div>Dữ liệu không hợp lệ</div>";
        }
    }


    public function dondathang_loc() {
        $tungay = isset($_POST['tungay']) ? $_POST['tungay'] : null;
        $denngay = isset($_POST['denngay']) ? $_POST['denngay'] : null;
        $hoten = isset($_POST['khachhang']) ? $_POST['khachhang'] : null;
        $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
        $serinumber = isset($_POST['serinumber']) ? $_POST['serinumber'] : null;
        $chitiet = $this->trangchuModel->chitietsanphammua();
        $dondathang = $this->trangchuModel->dondathang_loc($serinumber,$hoten, $sdt, $tungay, $denngay);
    
        // Trả về view danh sách đơn hàng
        $this->view('trangchu/listdonhangloc', [
            'dondathang' => $dondathang,
            'chitietsanphammua' => $chitiet
        ]);
    }
    public function danhsachkhachhang(){
        $trang="khachhang"; 
        $dskh=$this->trangchuModel->dskh();
        $slmua=$this->trangchuModel->soluongmua();
          $this->view('header',['trang'=>$trang]);
          $this->view('trangchu/danhsachkhachhang',['dskh' =>$dskh,'slmua'=> $slmua]);

      }

      public function danhsachkhachhang_loc() {
        $hoten = isset($_POST['khachhang']) ? $_POST['khachhang'] : null;
        $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
        $slmua=$this->trangchuModel->soluongmua();
        $dskh = $this->trangchuModel-> danhsachkhachhang_loc($hoten , $sdt );
    
        // Trả về view danh sách đơn hàng
        $this->view('trangchu/danhsachkhachhangloc',['dskh' =>$dskh,'slmua'=> $slmua]);

    }


    public function goiytimkiem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nd'])) {
            $nd = $_POST['nd'];
            $result = $this->trangchuModel->tensp($nd);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Thêm các giá trị cần thiết vào HTML trả về
                    echo '
                    <div class="search-item" 
                         data-product-id="' . htmlspecialchars($row['masp']) . '" 
                         data-product-name="' . htmlspecialchars($row['tensp']) . '" 
                         data-product-price="' . htmlspecialchars($row['dongia']) . '">
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <img style="width: 70px; height: auto; margin-right: 10px;" 
                                 src="' . WEBROOT . 'public/client/Picture/anhsanpham/' . htmlspecialchars($row['anhhienthi1']) . '" 
                                 alt="Ảnh sản phẩm">
                            <span style="font-size: 16px; font-weight: bold;">' . htmlspecialchars($row['tensp']) . '</span>
                        </div>
                    </div>';
                }
            } else {
                echo "<div style='display:none'>Không tìm thấy sản phẩm</div>";
            }
        } else {
            echo "<div>Dữ liệu không hợp lệ</div>";
        }
    }

    public function getDoanhThuJSON() {
        $month = isset($_POST['month']) ? $_POST['month'] : null; // Get the selected month from POST
        $doanhThuNgay = $this->trangchuModel->getDoanhThuNgay($month); // Pass the month to the model
        echo json_encode($doanhThuNgay);
    }
     
    public function doitra($mahd){
        $trang="listdonhang"; 
        $thongtinkh=$this->trangchuModel->thongtinkh($mahd);
        $chitiethd= $this->trangchuModel->chitietdonhangmua($mahd);
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/doitradonhang',['chitiet' => $chitiethd,'thongtinkh' => $thongtinkh,'mahd'=>$mahd  ]);
    }

 public function xulydoitra(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mahd=$_POST['mahd'];
        $selectedProducts = json_decode($_POST['selectedProductsData'], true);
        $replacementProducts = json_decode($_POST['productData'], true);
            foreach ($selectedProducts as $product) {
                echo "Mã sản phẩm: {$product['productId']}, 
                Sản phẩm gốc: {$product['name']}, 
                Seri: {$product['serinumber']}, 
                Số lượng: {$product['quantity']}<br>";
            $masp=$product['productId'];
            $result0=$this->trangchuModel->layslhanghoatrongdonhang($mahd,$masp);
            $soluongchon=mysqLi_fetch_array($result0);
            $soluongbandau=$soluongchon['soluong'];
            $soluongtra=$product['quantity'];
            if($product['quantity']==$soluongchon['soluong']){
                $this->trangchuModel->xoaspdonhang($masp,$mahd);
            }else{
                $this->trangchuModel->giamslspkhidoitra($soluongbandau,$soluongtra,$mahd,$masp);

            } 
        }
    
        // Xử lý sản phẩm thay thế
        foreach ($replacementProducts as $product) {
            echo "Mã SP: {$product['productId']}, Tên: {$product['name']}, Đơn giá: " . number_format($product['price'], 0, ',', '.') . "₫, SL: {$product['quantity']}<br>";
            $soluong =$product['quantity'];
            $masp=$product['productId'];
            $dongia=$product['price'];
            $result0=$this->trangchuModel->layslhanghoatrongdonhang($mahd,$masp);
            if(mysqLi_num_rows($result0)>0){
               $soluongchon=mysqLi_fetch_array($result0);
               $soluongbandau=$soluongchon['soluong'];
               echo $soluongbandau;
               $this->trangchuModel->tangslspkhidoitra($soluongbandau,$soluong,$mahd,$masp);
            }else{
                $this->trangchuModel->themsanphamdoitra($mahd,$masp,$soluong,$dongia);
            }

        }
        $result2= $this->trangchuModel->tinhlaitongtien($mahd);
        $tong=mysqLi_fetch_array($result2);
        $tongtienmoi=$tong['tongtien'];
        $this->trangchuModel-> updatetongtien($mahd,$tongtienmoi);
        header('location: /azuki/trangchu/listdonhang');
    }
    
    
    
    
    }

    public function baocaodoanhthu(){
        $trang = "baocaodoanhthu"; 
        $doanhthutheothang = $this->trangchuModel->doanhthutheothang();
        $sanphambanchay = $this->trangchuModel->sanphambanchay();
        $dataDoanhThu = [];
        while ($row = mysqli_fetch_array($doanhthutheothang)) {
            $dataDoanhThu[] = [ 'month' => $row['thang'] . '-' . $row['nam'],
                'revenue' => $row['doanhthu']
            ];
        }
            $dataSanPhamBanChay = [];
        while ($row = mysqli_fetch_array($sanphambanchay)) {
            $dataSanPhamBanChay[] = ['name' => $row['ten_san_pham'], 'sold' => $row['tong_soluong_ban']
            ];
        }
        $doanhthukhachhang = $this->trangchuModel->doanhthutheokhachhang();

        $khachhang_data = [];
        while ($row = mysqli_fetch_assoc($doanhthukhachhang)) {
            $khachhang_data[] = [
                'name' => $row['hoten'] . ' (' . $row['sodienthoai'] . ')',
                'total_orders' => $row['so_don_hang'],
                'total_revenue' => $row['tong_doanh_thu']
            ];
        }
        usort($khachhang_data, function ($a, $b) {
            return $b['total_revenue'] - $a['total_revenue']; 
        });
        
        $doanhthutheosanpham = $this->trangchuModel->doanhthutheosanpham();
    $data_sanpham_doanhthu = [];
    while ($row = mysqli_fetch_array($doanhthutheosanpham)) {
        $data_sanpham_doanhthu[] = [
            'product' => $row['ten_san_pham'],
            'revenue' => $row['tong_doanh_thu']
        ];
    }
        $khachhang_json = json_encode($khachhang_data);
        $doanhthutheothang_json = json_encode($dataDoanhThu);
        $sanphambanchay_json = json_encode($dataSanPhamBanChay);
        $doanhthutheosanpham_json = json_encode($data_sanpham_doanhthu);

            $this->view('header', ['trang' => $trang]);
        $this->view('trangchu/baocao', ['doanhthutheothang_json' => $doanhthutheothang_json,
        'sanphambanchay_json' => $sanphambanchay_json,'khachhang_json' => $khachhang_json,
        'doanhthutheosanpham_json' => $doanhthutheosanpham_json
        ]);
    }
    
























































    public function shop(){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $sanpham =$this->trangchuModel->getAllproduct();
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongsp();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }  
        $this->view('header');
        $trang="shop";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tongsp'=>$tongsp,'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);

    }


    public function shop_page($page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $sanpham =$this->trangchuModel->getAllproductpage($offset);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $tongsp =  $this->trangchuModel->tongsp();
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }  
  
        
        $this->view('header');
        $trang="shop";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tongsp'=>$tongsp, 'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);

    }

    


    public function loaisanpham($id){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenloai=$this->trangchuModel->getnameloai($id);
        $sanpham =$this->trangchuModel->getproductloai($id);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongsploai($id);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }

        $this->view('header');
        $trang="loaisp";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenloai'=> $tenloai,'tongsp'=>$tongsp, 'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    public function loaisanpham_page($id,$page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenloai=$this->trangchuModel->getnameloai($id);
        $sanpham =$this->trangchuModel->getproductloaipage($id,$offset);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $tongsp =  $this->trangchuModel->tongsploai($id);
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="loaisp";
        $this->view('trangchu/shop',['loaisp' =>$loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenloai'=> $tenloai,'tongsp'=>$tongsp, 'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);  
    }



    public function phong($id){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenphong=$this->trangchuModel->getnamephong($id);
        $sanpham =$this->trangchuModel-> getproductphong($id); 
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();

        $tongsp =  $this->trangchuModel->tongspphong($id);

       
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="phong";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenphong'=>$tenphong,'tongsp'=>$tongsp,'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    public function phong_page($id,$page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenphong=$this->trangchuModel->getnamephong($id);
        $sanpham =$this->trangchuModel-> getproductphongpage($id,$offset); 
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongspphong($id);
        $loaivasosp=$this->trangchuModel->getcountloai();

       
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="phong";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenphong'=>$tenphong,'tongsp'=>$tongsp,'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    
    public function xulytimkiem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nd'])) {
            $nd = $_POST['nd'];
            $nd = urldecode($nd);
            $nd = trim($nd);
            $nd = filter_var($nd, FILTER_SANITIZE_STRING);
            $encoded_nd = urlencode($nd);
           
            header("Location: /azuki/trangchu/shop_timkiem/$encoded_nd");
            exit; 
        } 
    }
    

    
    public function shop_timkiem($nd) {
        $nd = urldecode($nd);
        $nd = trim($nd);
        $nd = filter_var($nd, FILTER_SANITIZE_STRING);
        $phong = $this->trangchuModel->getAll1();
        $loaisp1 = $this->trangchuModel->getAll2();
        $loaisp2 = $this->trangchuModel->getAll2();
        $sanpham = $this->trangchuModel->getAllproduct_timkiem($nd);
        $sanphamoi = $this->trangchuModel->getAll3_home();
        $tongsp = $this->trangchuModel->tongsptimkiem($nd);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
       
    
        while ($row = mysqli_fetch_assoc($phong)) {
            $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
            $phong_with_count[] = $row;
        }
       
        $this->view('header');
        $trang = "timkiem";
        $this->view('trangchu/shop', [
            'loaisp' => $loaivasosp,
            'phong' => $phong_with_count,
            'allsp' => $sanpham,
            'spmoi' => $sanphamoi,
            'tongsp' => $tongsp,
            'trang' => $trang,
            'nd' => $nd
        ]);
        $this->view('footer', ['loaisp' => $loaisp2]); 
    }
    
    public function shop_timkiem_page($nd, $page) {
        $nd = urldecode($nd);
        $nd = trim($nd);
        $nd = filter_var($nd, FILTER_SANITIZE_STRING);
        
        $sosp = 12;
        $offset = ($page - 1) * $sosp;
    
        $phong = $this->trangchuModel->getAll1();
        $loaisp1 = $this->trangchuModel->getAll2();
        $loaisp2 = $this->trangchuModel->getAll2();
        $sanpham = $this->trangchuModel->getAllproduct_timkiempage($nd, $offset);
        $sanphamoi = $this->trangchuModel->getAll3_home();
        $tongsp = $this->trangchuModel->tongsptimkiem($nd);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
       
    
        while ($row = mysqli_fetch_assoc($phong)) {
            $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
            $phong_with_count[] = $row;
        }
       
        $this->view('header');
        $trang = "timkiem";
        $this->view('trangchu/shop', [
            'loaisp' =>$loaivasosp,
            'phong' => $phong_with_count,
            'allsp' => $sanpham,
            'spmoi' => $sanphamoi,
            'tongsp' => $tongsp,
            'trang' => $trang,
            'tranghientai' => $page,
            'nd' => $nd
        ]);
        $this->view('footer', ['loaisp' => $loaisp2]);
    }
    

    
}
?>