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
        $sphd=$this->trangchuModel->getallctdh();
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/taodon',['sphd' => $sphd ]); 
 
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




////
public function baohanh() {
    $trang = "baohanh";

    // Lấy dữ liệu từ form lọc
    $search = isset($_GET['search']) ? trim($_GET['search']) : null;

    // Gọi model để lấy danh sách bảo hành theo bộ lọc
    $danhsach_baohanh = $this->trangchuModel->getAllWarranties($search);

    // Xử lý yêu cầu POST để thêm hoặc chỉnh sửa bảo hành
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        $action = $_POST['action'];
        $mabaohanh = $_POST['mabaohanh'] ?? null;
        $ngaybaohanh = $_POST['ngaybaohanh'] ?? date('Y-m-d');
        $ngaytra = $_POST['ngaytra'] ?? null;
        $masp = $_POST['masp'] ?? null;
        $loimota = $_POST['loimota'] ?? '';
        $trangthai = $_POST['trangthai'] ?? 'đang xử lý';

        if ($action === 'add') {
            // Tạo mã bảo hành tự động
            $generatedCode = $this->trangchuModel->generateWarrantyCode();

            $this->trangchuModel->addWarranty(
                $generatedCode,
                $ngaybaohanh,
                $ngaytra,
                $masp,
                $loimota,
                $trangthai
            );
        } elseif ($action === 'edit') {
            $this->trangchuModel->updateWarranty($mabaohanh, $ngaytra, $masp, $loimota, $trangthai);
        }

        echo json_encode(['success' => true]);
        exit;
    }

    // Load view
    $this->view('header', ['trang' => $trang]);
    $this->view('trangchu/baohanh', [
        'danhsach_baohanh' => $danhsach_baohanh,
        'search' => $search
    ]);
}
    public function checkInvoice() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input = json_decode(file_get_contents('php://input'), true);
            $mahd = $input['mahd'];
    
            $result = $this->trangchuModel->getInvoiceDetails($mahd);
    
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
    
                // Kiểm tra ngày đặt
                $orderDate = new DateTime($row['ngaydat']);
                $currentDate = new DateTime();
                $diff = $orderDate->diff($currentDate)->y;
    
                if ($diff < 1) { // Nếu hóa đơn trong 1 năm
                    // Lấy danh sách sản phẩm trong hóa đơn
                    $products = [];
                    $productResult = $this->trangchuModel->getInvoiceProducts($mahd);
                    while ($product = mysqli_fetch_assoc($productResult)) {
                        $products[] = $product;
                    }
                    echo json_encode(['status' => 'valid', 'products' => $products]);
                } else {
                    echo json_encode(['status' => 'expired']);
                }
            } else {
                echo json_encode(['status' => 'not_found']);
            }
        }
    }

    public function addWarranty() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mabaohanh = $_POST['mabaohanh'];
            $ngaybaohanh = $_POST['ngaybaohanh'];
            $ngaytra = $_POST['ngaytra'];
            $masp = $_POST['masp'];
            $loimota = $_POST['loimota'];
            $trangthai = $_POST['trangthai'];
    
            $this->trangchuModel->addWarranty($mabaohanh, $ngaybaohanh, $ngaytra, $masp, $loimota, $trangthai);
            echo json_encode(['success' => true]);
        }
    }

    public function updateWarranty() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mabaohanh = $_POST['mabaohanh'] ?? null;
            $ngaytra = $_POST['ngaytra'] ?? null;
            $masp = $_POST['masp'] ?? null;
            $loimota = $_POST['loimota'] ?? null;
            $trangthai = $_POST['trangthai'] ?? null;
            $result = $this->trangchuModel->updateWarranty($mabaohanh, $ngaytra, $masp, $loimota, $trangthai);
            echo json_encode(['success' => true]);

    }
    }
  ///





        public function taodonhang() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tongtien_raw = $_POST['tongtien']; 
                $tongtien = intval(str_replace(',', '', $tongtien_raw));
                $hoten=$_POST['hoten'];
                $sodienthoai=$_POST['sdt'];
                $phuongthuc=$_POST['phuongthuc'];
                $ghichu=$_POST['ghichu'];
                $this->trangchuModel->themdonhang($hoten,$sodienthoai,$ghichu,$tongtien,$phuongthuc);
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
                    $this->trangchuModel->themkhachhang($hoten,$sodienthoai);
                }
            $_SESSION['thanhcong']="Tạo đơn thành công ";
            $_SESSION['print'] = [
                'sohoadon'=> $mahd,
                'hoten'=>$hoten,
                'sdt'=> $sodienthoai,
                'phuongthuc'=> $phuongthuc,
                'ghichu'=>$ghichu,
                'tongtien'=> $tongtien_raw

            ];
            
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
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <span style="font-size: 12px; font-weight: bold;">' . htmlspecialchars($row['sodienthoai']) . '</span>
                        </div>
                    </div>';
                }
            } else {
                echo "<div style='dis;'>Không tìm thấy khách hàng này</div>";
            }
        } else {
            echo "<div>Dữ liệu không hợp lệ</div>";
        }
    }


    public function dondathang_loc() {
        $tungay = isset($_POST['tungay']) ? $_POST['tungay'] : null;
        $denngay = isset($_POST['denngay']) ? $_POST['denngay'] : null;
        $noidung = isset($_POST['noidung']) ? $_POST['noidung'] : null;   
        $chitiet = $this->trangchuModel->chitietsanphammua();

        // Sử dụng $this->tranghuModel đã khởi tạo
        $dondathang = $this->trangchuModel->dondathang_loc($noidung, $tungay, $denngay);

        // Trả về view danh sách đơn hàng
        $this->view('trangchu/listdonhangloc', [
            'dondathang' => $dondathang,
            'chitietsanphammua' => $chitiet
        ]);
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
     
 

    public function baocaobanhang(){
        $trang = "baocaobanhang"; 
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
        $this->view('trangchu/baocaobanhang', ['doanhthutheothang_json' => $doanhthutheothang_json,
        'sanphambanchay_json' => $sanphambanchay_json,'khachhang_json' => $khachhang_json,
        'doanhthutheosanpham_json' => $doanhthutheosanpham_json
        ]);
    }

    public function baocaotaichinh(){
        $trang = "baocaotaichinh"; 
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
        $this->view('trangchu/baocaotaichinh', ['doanhthutheothang_json' => $doanhthutheothang_json,
        'sanphambanchay_json' => $sanphambanchay_json,'khachhang_json' => $khachhang_json,
        'doanhthutheosanpham_json' => $doanhthutheosanpham_json
        ]);
    }

    public function baocaobaohanh() {
        $trang = "baocaobaohanh";
    
        // Lấy dữ liệu bộ lọc tháng và năm từ GET
        $thang = isset($_GET['thang']) && is_numeric($_GET['thang']) ? (int) $_GET['thang'] : null;
        $nam = isset($_GET['nam']) && is_numeric($_GET['nam']) ? (int) $_GET['nam'] : null;
    
        // Lấy dữ liệu bảo hành và đơn hàng trong tháng
        $baohanhTrongThang = $this->trangchuModel->baohanhTrongThang($thang, $nam);
        $dataBaoHanhThang = [];
        if ($baohanhTrongThang) {
            while ($row = mysqli_fetch_array($baohanhTrongThang)) {
                $dataBaoHanhThang[] = [
                    'thang' => $row['thang'],
                    'nam' => $row['nam'],
                    'tong_so_bao_hanh' => $row['tong_so_bao_hanh'],
                    'tong_so_don_hang' => $row['tong_so_don_hang']
                ];
            }
        }
    
        // Lấy dữ liệu sản phẩm bảo hành nhiều nhất
        $sanphamBaoHanhNhieuNhat = $this->trangchuModel->sanphamBaoHanhNhieuNhat($thang, $nam);
        $dataSanPhamBaoHanhNhieuNhat = [];
        if ($sanphamBaoHanhNhieuNhat) {
            while ($row = mysqli_fetch_array($sanphamBaoHanhNhieuNhat)) {
                $dataSanPhamBaoHanhNhieuNhat[] = [
                    'thang' => $row['thang'],
                    'nam' => $row['nam'],
                    'masp' => $row['masp'],
                    'tong_so_bao_hanh' => $row['tong_so_bao_hanh']
                ];
            }
        }
    
        // Chuyển dữ liệu thành JSON
        $baohanh_thang_json = json_encode($dataBaoHanhThang);
        $sanpham_baohanh_nhieu_json = json_encode($dataSanPhamBaoHanhNhieuNhat);
    
        // Gửi dữ liệu đến view
        $this->view('header', ['trang' => $trang]);
        $this->view('trangchu/baocaobaohanh', [
            'baohanh_thang_json' => $baohanh_thang_json,
            'sanpham_baohanh_nhieu_json' => $sanpham_baohanh_nhieu_json
        ]);
    }
    
    public function suakhachhang() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hoten = $_POST['name'];
            $sodienthoai = $_POST['phone'];
            $id = $_POST['id'];
        
            $this->trangchuModel->editkhachhang($hoten, $sodienthoai, $id);
            $_SESSION['message'] = "Sửa thông tin khách hàng thành công!";
            header('location: /azuki/trangchu/danhsachkhachhang ');
        }
    }
    public function danhsachkhachhang(){
        $trang="khachhang"; 
        $dskh=$this->trangchuModel->dskh();
        $slmua=$this->trangchuModel->soluongmua();
          $this->view('header',['trang'=>$trang]);
          $this->view('trangchu/danhsachkhachhang',['dskh' =>$dskh,'slmua'=> $slmua]);

      }
    public function danhsachkhachhang_loc() {
       // $hoten = isset($_POST['khachhang']) ? $_POST['khachhang'] : null;
        $noidung = isset($_POST['noidung']) ? $_POST['noidung'] : null;
        $slmua=$this->trangchuModel->soluongmua();
        $dskh = $this->trangchuModel-> danhsachkhachhang_loc( $noidung );
    
        // Trả về view danh sách đơn hàng
        $this->view('trangchu/danhsachkhachhangloc',['dskh' =>$dskh,'slmua'=> $slmua]);

    }
    
    public function listdoitra(){
        $trang="danhsachdoitra";
        $listdoitra=$this->trangchuModel->getlistdoitra();
        $chitiet= $this->trangchuModel-> getchitietdoitra();

        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/listdoitra',['listdoitra'=>$listdoitra,'chitietdoitra'=>$chitiet]);

    }
     
    public function listdoitra_loc() {
        $tungay = isset($_POST['tungay']) ? $_POST['tungay'] : null;
        $denngay = isset($_POST['denngay']) ? $_POST['denngay'] : null;
        $noidung = isset($_POST['noidung']) ? $_POST['noidung'] : null;   
        $chitiet= $this->trangchuModel-> getchitietdoitra();

        // Sử dụng $this->tranghuModel đã khởi tạo
        $listdoitra = $this->trangchuModel->listdoitra_loc($noidung, $tungay, $denngay);

        // Trả về view danh sách đơn hàng
        $this->view('trangchu/listdoitra_loc', ['listdoitra'=>$listdoitra,'chitietdoitra'=>$chitiet]);
    }


    public function danhsachdoitra() {
        $trang="danhsachdoitra";
        $tgbaohanh=7;
        $mahd=isset($_POST['mahd']) ? $_POST['mahd'] : null;
        $danhsachdoitra=$this->trangchuModel->sanphamdoitra($mahd);
        $result=$this->trangchuModel->checkdoitra($mahd);
        $checkdoitra=mysqLi_fetch_array($result);
        if(isset($_POST['mahd'])){
            if(mysqLi_num_rows($danhsachdoitra)==0){
                $_SESSION['thongbao']="Không tồn tại mã hoá đơn :$mahd ";
            }else if($checkdoitra['so_ngay']>7){
                $_SESSION['thongbao']="đơn hàng số: $mahd đã mua sản phẩm được: ".$checkdoitra['so_ngay']. " ngày không thể đổi trả ";
                $tgbaohanh=$checkdoitra['so_ngay'];
            }
           

        }
       
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/danhsachdoitra',['danhsachdoitra' => $danhsachdoitra,'mahd'=>$mahd,'tgbaohanh'=>$tgbaohanh ]);
    }


    public function doitra(){
        $trang="danhsachdoitra";
        $mahd=$_POST['mhd'];
        $selectedProducts = isset($_POST['selectedProducts']) ? json_decode($_POST['selectedProducts'], true) : [];
        $thongtinkh=$this->trangchuModel->thongtinkh($mahd);
        $chitiethd= $this->trangchuModel->chitietdonhangmua($mahd);
        $this->view('header',['trang'=>$trang]);
        $this->view('trangchu/doitradonhang',['chitiet' => $chitiethd,'thongtinkh' => $thongtinkh,'mahd'=>$mahd,'selectedProducts' => $selectedProducts  ]);
    }


 public function xulydoitra(){
    $mahd = $_POST['mahd']; // Lấy mã hóa đơn
    $replacementProducts = json_decode($_POST['productData'], true); // Mảng sản phẩm thay thế
    $orderProducts = json_decode($_POST['orderProductsData'], true); // Mảng sản phẩm khách hàng trả

    // Debug dữ liệu
    echo "Mã hóa đơn: " . htmlspecialchars($mahd) . "<br>";
    echo "Sản phẩm khách hàng trả: <pre>" . print_r($orderProducts, true) . "</pre>";
    echo "Sản phẩm thay thế: <pre>" . print_r($replacementProducts, true) . "</pre>";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mahd=$_POST['mahd'];
        $selectedProducts = json_decode($_POST['orderProductsData'], true);;
        $replacementProducts = json_decode($_POST['productData'], true);
        $this->trangchuModel->themdondoitra($mahd);
        $result=$this->trangchuModel-> maxmadt();
        $maxmadt=mysqli_fetch_array($result);
        $madt=$maxmadt['max'];
            foreach ($selectedProducts as $product) {
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
    
        foreach ($replacementProducts as $product) {
            echo "Mã SP: {$product['productId']}, Tên: {$product['name']}, Đơn giá: " . number_format($product['price'], 0, ',', '.') . "₫, SL: {$product['quantity']}<br>";
            $soluong =$product['quantity'];
            $masp=$product['productId'];
            $dongia=$product['price'];
            $this->trangchuModel->themctdondoitra($madt,$masp,$soluong);
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
        $_SESSION['thanhcong']="Tạo đơn đổi trả mới thành công";
        header('location: /azuki/trangchu/danhsachdoitra'); 
    }
    
    
    
    
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