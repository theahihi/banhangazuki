<?php 
require_once 'core/Controller.php';

class adminController extends Controller {
    private $adminModel;
    public function __construct(){
        $this->adminModel = $this->model('adminModel');
    } 
    public function quanlybanhang(){ 
        if($_COOKIE['role']>0){
        $tongsp =$this->adminModel->tongsl();
        $tongkh=$this->adminModel->tongkh();
        $tongslban=$this->adminModel->tongslban();
        $danhthu=$this->adminModel->doanhthu();
        $this->view('admin/headeradmin');
        $this->view('admin/admin',['tongsp'=>$tongsp , 'tongkh' => $tongkh,'tongslban'=>$tongslban,'doanhthu' => $danhthu  ]);
        } else {
            header("location: /azuki/trangchu/");

        }
    }

    public function listsp(){ 
        $sanpham =$this->adminModel->getsanpham();
        $slban =$this->adminModel->Getsoluongdaban();
        $this->view('admin/headeradmin');
        $this->view('admin/listsp',['sanpham' => $sanpham,'slban'=>$slban ]);

    }
    public function editsp($masp){ 
        $chitietsp =$this->adminModel->getsanphamtheoma($masp);
        $phong=$this->adminModel->getphong();
        $loai=$this->adminModel->getloai();
        $this->view('admin/headeradmin');
        $this->view('admin/editsp',['chitietsp'=>$chitietsp,'phong'=>$phong,'loai' => $loai ]);

    }
    public function updatesp(){ 
        $masp = $_POST['masp'];
        $tensp=$_POST['tensp'];
        $dongia= $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $maphong=$_POST['phong'];
        $maloai=$_POST['loai'];
        $thongtinsp =$_POST['thongtin'];
        $motact=$_POST['motact'];
        $chitietsp =$this->adminModel->getsanphamtheoma($masp);

        $row = mysqLi_fetch_array($chitietsp);
        $anh_main=$row['anhhienthi1'];
        $anh_detail1 = $row['anhdetail1'];
        $anh_detail2 = $row['anhdetail2'];
        $anh_detail3 = $row['anhdetail3'];
        $anh_detail4 = $row['anhdetail4'];
        $anh_detail5 = $row['anhdetail5'];
        if(isset($_FILES['anh_main']) && $_FILES['anh_main']['name'] != ''){
            $anh_main = $_FILES['anh_main']['name'];
            $file_tmp =$_FILES['anh_main']['tmp_name'];  
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_main);
         }

        
        if(isset($_FILES['anh_detail_1']) && $_FILES['anh_detail_1']['name'] != ''){    
            $anh_detail1 = $_FILES['anh_detail_1']['name'];
            $file_tmp =$_FILES['anh_detail_1']['tmp_name'];     
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_detail1);

             
        }
        if(isset($_FILES['anh_detail_2']) && $_FILES['anh_detail_2']['name'] != ''){
            $anh_detail2 = $_FILES['anh_detail_2']['name'];
            $file_tmp =$_FILES['anh_detail_2']['tmp_name'];
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_detail2); 
        }
        if(isset($_FILES['anh_detail_3']) && $_FILES['anh_detail_3']['name'] != ''){
            $anh_detail3 = $_FILES['anh_detail_3']['name'];
            $file_tmp =$_FILES['anh_detail_3']['tmp_name'];
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_detail3);  
        }
        if(isset($_FILES['anh_detail_4']) && $_FILES['anh_detail_4']['name'] != ''){
            $anh_detail4 = $_FILES['anh_detail_4']['name'];
            $file_tmp =$_FILES['anh_detail_4']['tmp_name'];
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_detail4);
        }

        if(isset($_FILES['anh_detail_5']) && $_FILES['anh_detail_5']['name'] != ''){
            $anh_detail5 = $_FILES['anh_detail_5']['name'];
            $file_tmp =$_FILES['anh_detail_5']['tmp_name'];
            move_uploaded_file($file_tmp,"public/client/Picture/anhsanpham/".$anh_detail5);       
        }
        $this->adminModel->updatesp($tensp,$anh_main,$anh_detail1,$anh_detail2,$anh_detail3,$anh_detail4,$anh_detail5,$thongtinsp,$motact,$maphong,$maloai,$masp,$dongia,$soluong);
        
        $_SESSION['thongbaosua']="Sửa sản phẩm mã : $masp , tên: $tensp Thành công ";
       
         header("location: /azuki/admin/editsp/$masp");
    }

    public function themsp(){ 
      $phong=$this->adminModel->getphong();
      $loai=$this->adminModel->getloai();
      $this->view('admin/headeradmin');
      $this->view('admin/themsp',['phong'=>$phong,'loai' => $loai ]);

  }

  
  



  public function addsp() {
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $dongia = $_POST['dongia'];
    $soluong = $_POST['soluong'];
    $maphong = $_POST['phong'];
    $maloai = $_POST['loai'];
    $thongtinsp = $_POST['thongtin'];
    $motact = $_POST['motact'];
 
    // Xử lý ảnh
    $anh_main = "";
    $anh_detail1 = "";
    $anh_detail2 = "";
    $anh_detail3 = "";
    $anh_detail4 = "";
    $anh_detail5 = "";
 
    if (isset($_FILES['anh_main']) && $_FILES['anh_main']['name'] != '') {
        $anh_main = $_FILES['anh_main']['name'];
        $file_tmp = $_FILES['anh_main']['tmp_name'];  
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_main);
    }
 
    if (isset($_FILES['anh_detail_1']) && $_FILES['anh_detail_1']['name'] != '') {    
        $anh_detail1 = $_FILES['anh_detail_1']['name'];
        $file_tmp = $_FILES['anh_detail_1']['tmp_name'];     
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_detail1);
    }
 
    if (isset($_FILES['anh_detail_2']) && $_FILES['anh_detail_2']['name'] != '') {
        $anh_detail2 = $_FILES['anh_detail_2']['name'];
        $file_tmp = $_FILES['anh_detail_2']['tmp_name'];
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_detail2); 
    }
 
    if (isset($_FILES['anh_detail_3']) && $_FILES['anh_detail_3']['name'] != '') {
        $anh_detail3 = $_FILES['anh_detail_3']['name'];
        $file_tmp = $_FILES['anh_detail_3']['tmp_name'];
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_detail3);  
    }
 
    if (isset($_FILES['anh_detail_4']) && $_FILES['anh_detail_4']['name'] != '') {
        $anh_detail4 = $_FILES['anh_detail_4']['name'];
        $file_tmp = $_FILES['anh_detail_4']['tmp_name'];
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_detail4);
    }
 
    if (isset($_FILES['anh_detail_5']) && $_FILES['anh_detail_5']['name'] != '') {
        $anh_detail5 = $_FILES['anh_detail_5']['name'];
        $file_tmp = $_FILES['anh_detail_5']['tmp_name'];
        move_uploaded_file($file_tmp, "public/client/Picture/anhsanpham/" . $anh_detail5);       
    }
 
    $chitietsp = $this->adminModel->getsanphamtheoma($masp);
    if (mysqli_num_rows($chitietsp) > 0) {
        echo json_encode([
            'success' => false,
            'message' => "Mã sản phẩm đã tồn tại. Vui lòng nhập mã khác."
        ]);
        exit();
    }
    
    $this->adminModel->insertsanpham($tensp, $anh_main, $anh_detail1, $anh_detail2, $anh_detail3, $anh_detail4, $anh_detail5, $thongtinsp, $motact, $maphong, $maloai, $masp, $dongia, $soluong);
 
    echo json_encode([
        'success' => true,
        'message' => "Đã thêm sản phẩm mã: $masp, tên: $tensp thành công."
    ]);
 }
 




public function xoasp($masp){
    $chitietsp =$this->adminModel->getsanphamtheoma($masp);
    $row=mysqLi_fetch_array($chitietsp);
    $tensp=$row['tensp'];
    $this->adminModel->xoasp($masp);
    $_SESSION['thongbaoxoa']="Đã Xoá sản phẩm mã : $masp , tên: $tensp Thành công ";
   header("location: /azuki/trangchu/danhsachsanpham/");
}

public function xoabh($mabaohanh) {
    if (!empty($mabaohanh)) {
        $result = $this->adminModel->xoabh($mabaohanh);
        if ($result) {
            $_SESSION['thongbaoxoa'] = "Xóa bảo hành mã $mabaohanh thành công!";
        } else {
            $_SESSION['thongbaoxoa'] = "Xóa bảo hành thất bại!";
        }
    } else {
        $_SESSION['thongbaoxoa'] = "Mã bảo hành không hợp lệ!";
    }
    header("Location: /azuki/trangchu/baohanh/");
    exit();
}

public function danhgiakh(){
    $sanpham =$this->adminModel->getsanpham();
    $binhluan =$this->adminModel->getbinhluan();
    $this->view('admin/headeradmin');
    $this->view('admin/danhgia',['binhluan' => $binhluan,'sanpham' => $sanpham ]);
}
public function hienbl($id){

    $this->adminModel->hienbl($id);

    $_SESSION['thongbaohiensp']="Hiện bình luận thành công hãy vào web để kiểm tra";

    if ($_SERVER['HTTP_REFERER'] == 'http://localhost/azuki/admin/danhgiakh_loc') {
        header('Location: /azuki/admin/danhgiakh_loc');
        exit;  
    }else{
        header('Location: /azuki/admin/danhgiakh');
        exit;  
    }

}
public function anbl($id){
  
    $this->adminModel->anbl($id);

    $_SESSION['thongbaoansp']="Ẩn bình luận thành công hãy vào web để kiểm tra";
    if ($_SERVER['HTTP_REFERER'] == 'http://localhost/azuki/admin/danhgiakh_loc') {
        header('Location: /azuki/admin/danhgiakh_loc');
        exit;  
    }else{
        header('Location: /azuki/admin/danhgiakh');
        exit;  
    }

}

public function danhgiakh_loc(){
    if(isset($_POST['loc_tensp'])){
        $_SESSION['masp']=$_POST['loc_tensp'];
    }
    $masp=$_SESSION['masp'];
    $sanpham =$this->adminModel->getsanpham();
    $chitietsp =$this->adminModel->getsanphamtheoma($masp);
    $binhluan =$this->adminModel->getbinhluan_loc($masp);
    $this->view('admin/headeradmin');
    $this->view('admin/danhgia',['binhluan' => $binhluan,'sanpham' => $sanpham,'tensp' => $chitietsp ]); 

}
public function listkh(){
    $taikhoan=$this->adminModel->gettaikhoankh();
    $this->view('admin/headeradmin');
    $this->view('admin/listkh',['taikhoan' => $taikhoan ]); 

}
public function khoatk($id){
    $username=$_COOKIE['username'];
    $this->adminModel->khoatk($id,$username);
    header("location: /azuki/admin/listkh");

}
public function mokhoatk($id){
    $this->adminModel->mokhoatk($id);
    $this->adminModel->mokhoatk($id);
    header("location: /azuki/admin/listkh");

}

public function khoatktv($id){
    $username=$_COOKIE['username'];
    $this->adminModel->khoatk($id,$username);
    header("location: /azuki/admin/listtv");

}
public function mokhoatktv($id){
    $this->adminModel->mokhoatk($id);
    header("location: /azuki/admin/listtv");

}
public function capquyentv($id){
    $this->adminModel->capquyentv($id);
     header("location: /azuki/admin/listtv");

}

public function listtv(){
    $taikhoan=$this->adminModel->gettaikhoantv();
    $this->view('admin/headeradmin');
    $this->view('admin/listtv',['taikhoan' => $taikhoan ]); 

}
public function boquyentv($id){
    $this->adminModel->boquyentv($id);
     header("location: /azuki/admin/listtv");

}
public function xoatktv($id){
    $this->adminModel->xoatktv($id);
    header("location: /azuki/admin/listtv");

}

public function themtv(){
    $this->view('admin/headeradmin');
    $this->view('admin/themtv'); 

}
public function xulythemtv(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_hash= password_hash($password,PASSWORD_DEFAULT);
    $hoten=$_POST['fullname'];
    $sdt=$_POST['phone'];
    $email=$_POST['email'];
    $checkusername= $this->adminModel->checkusernametk($username);
    $checksdt= $this->adminModel->checksdttk($sdt);
    $checkemail= $this->adminModel->checkemailtk($email);
    $i=0 ;
    if(mysqli_num_rows($checkusername)>0){
        session_start();
        $_SESSION['trunguser'] = "Username này đã được sử dụng."; 
       $i=$i+1;
   }
   else{
    if(isset($_SESSION['trunguser'])){ unset($_SESSION['trunguser']);}
    $_SESSION['hienthiuser']=$username;
   }
   if(mysqli_num_rows($checksdt)>0){
    session_start();
        $_SESSION['trungsdt'] = "Số điện thoại này đã được sử dụng.";
       $i=$i+1;
   }
   else{
    if(isset($_SESSION['trungsdt'])){ unset($_SESSION['trungsdt']);}
    $_SESSION['hienthisdt']=$sdt;
   }
   if(mysqli_num_rows($checkemail)>0){
    session_start();
    $_SESSION['trungemail'] = "Email này đã được sử dụng";
    $i=$i+1;
   }
   else{
    if(isset($_SESSION['trungemail'])){ unset($_SESSION['trungemail']);}
    $_SESSION['hienthiemail']=$email;
   }

  
   if($i==0){
    $this->adminModel->themtktv($username,$password_hash,$hoten,$sdt,$email);
     if(isset($_SESSION['trunguser'])){ unset($_SESSION['trunguser']);}
     if(isset($_SESSION['trungsdt'])){ unset($_SESSION['trungsdt']);}
     if(isset($_SESSION['trungemail'])){unset($_SESSION['trungemail']);}
     if(isset($_SESSION['hienthiemail'])){
      unset($_SESSION['hienthiemail']);
  }
  if(isset($_SESSION['hienthisdt'])){
      unset($_SESSION['hienthisdt']);
  }
  if(isset($_SESSION['hienthiuser'])){
      unset($_SESSION['hienthiuser']);
  }
  if(isset($_SESSION['hienthiten'])){
      unset($_SESSION['hienthiten']);
  }
  if(isset($_SESSION['hienthipass'])){
      unset($_SESSION['hienthipass']);
  }
     header('Location: /azuki/trangchu/quanlytaikhoan'); 
    }
    else{
      $_SESSION['hienthiten']=$hoten;
      $_SESSION['hienthipass']=$password;
      header('Location: /azuki/trangchu/themtaikhoan');

    } 



}

public function dondathang(){
    $dondathang=$this->adminModel->dondathang();
    $chitietspmua=$this->adminModel->chitietsanphammua();
    $this->view('admin/headeradmin');
    $this->view('admin/dondathang',['dondathang'=>$dondathang,'chitietsanphammua' => $chitietspmua ]); 

}
public function dondathang_loc(){
    $chitietspmua=$this->adminModel->chitietsanphammua();
    if(isset($_POST['trangthai'])){
        $_SESSION['trangthai']=$_POST['trangthai'];
    }
    $trangthai= $_SESSION['trangthai'];
    if(isset($_POST['khachhang'])){
    $_SESSION['hoten']=$_POST['khachhang'];
 
    }
    $hoten=$_SESSION['hoten'];
    if(isset($_POST['sdt'])){
        $_SESSION['sdt']=$_POST['sdt'];
     
        }
    $sdt=$_SESSION['sdt'];
    if(isset($_POST['madonhang'])){
        $_SESSION['mahd']=$_POST['madonhang'];
   
    }
    $mahd=$_SESSION['mahd'];
    $dondathang=$this->adminModel->dondathang_loc($trangthai,$hoten,$mahd,$sdt);
    $this->view('admin/headeradmin');
    $this->view('admin/dondathang',['dondathang'=>$dondathang, 'chitietsanphammua' => $chitietspmua ]); 

}



public function xacnhandonhang($mahd){
 
    echo $mahd;
    $this->adminModel->xacnhan($mahd);
    if ($_SERVER['HTTP_REFERER'] == 'http://localhost/azuki/admin/dondathang_loc') {
        header('Location: /azuki/admin/dondathang_loc');
        exit;  
    }else{
        header('Location: /azuki/admin/dondathang');
        exit;  
    } 

}

public function huydonhang($mahd){
    $sodonhuy= $this->adminModel->slhangdabandonhuy($mahd);
    while( $row=mysqLi_fetch_array($sodonhuy)){
        $masp =$row['masp'];
        $soluong=$row['soluong'];
        $this->adminModel->capnhatlaisl($masp,$soluong);
    }
    $this->adminModel->huydon($mahd);
    
    if ($_SERVER['HTTP_REFERER'] == 'http://localhost/azuki/admin/dondathang_loc') {
        header('Location: /azuki/admin/dondathang_loc');
        exit;  
    }else{
        header('Location: /azuki/admin/dondathang');
        exit;  
    } 
}

   

   

    
}
?>