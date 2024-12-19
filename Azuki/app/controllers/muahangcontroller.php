<?php 
require_once 'core/Controller.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class muahangController extends Controller {
    private $muahangModel;
    public function __construct(){
        $this->muahangModel = $this->model('muahangModel');
    } 
    public function giohang(){
        $loaisp2=$this->muahangModel->getAll2();
        $this->view('header');
        if(isset($_COOKIE['username'])){
        $user=$_COOKIE['username'];
        $getgiohang=$this->muahangModel->Getgiohang($user);
        $getmahd=$this->muahangModel->getmahdgiohang($user);
        $licsumuahang =$this->muahangModel->getlichsumuahang($user);
        $this->view('muahang/giohang',['giohang'=> $getgiohang,'mahd'=>$getmahd,'lichsumua' =>$licsumuahang ]); }
        else{
        $user="";
        $thongtinsp=$this->muahangModel->getsanpham();
        $getgiohang=$this->muahangModel->Getgiohang($user);
        $this->view('muahang/giohang2',['sp' => $thongtinsp]);
        }
        $this->view('footer',['loaisp' => $loaisp2]);
     }
     public function xulythemgiohang($masp){
        if(isset($_COOKIE['username'])){
        $thongtinsp=$this->muahangModel->getthongtinsanpham($masp);
        $row = mysqLi_fetch_array($thongtinsp);
        $dongia= $row['dongia'];
        $user=$_COOKIE['username'];
        $checktrungsp=$this->muahangModel->checktrungspgiohang($masp,$user);
        if(mysqLi_num_rows($checktrungsp)==1){
            echo "<script>
            alert('Đã có sản phẩm này trong giỏ hàng');
            window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        exit();
        }
        else{ 
        $maxmahd=$this->muahangModel->maxmahd();
        $maxmahd=mysqLi_fetch_array($maxmahd);
        $sohoadon=$maxmahd['shd']+1;
        $checkgiohang= $this->muahangModel->checkgiohang($user) ;
        if(mysqLi_num_rows($checkgiohang)==0){
            $this->muahangModel->themgiohang($sohoadon,$user) ;
        }
        else {
            $row2=mysqli_fetch_array($checkgiohang);
            $sohoadon=$row2['mahd'];
        }
        $this->muahangModel->themsanphamvaogiohang($sohoadon,$masp,$dongia) ;
        echo "<script>
            alert('bạn thêm sản phẩm này vào giỏ hàng thành công');
            window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        
        }
    } else{

        $thongtinsp=$this->muahangModel->getthongtinsanpham($masp);
        $row = mysqLi_fetch_array($thongtinsp);
        $tensp=$row['tensp'];
        $dongia=$row['dongia'];
        $hinhanh=$row['anhhienthi1'];
        $soluong=$row['soluong'];
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = [];
        }
        if (isset($_SESSION['giohang'][$masp])) {
            echo "<script>
            alert('Đã có sản phẩm này trong giỏ hàng');
            window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        </script>";
        } else {
          
            $_SESSION['giohang'][$masp] = [
                'tensp' => $tensp,
                'gia' => $dongia,
                'hinhanh'=>$hinhanh,
                'soluongton'=>$soluong
            ];
        }
        echo "<script>
        alert('bạn thêm sản phẩm này vào giỏ hàng thành công');
        window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
    </script>";
        

    }
    


}
public function xoasptronggiohang($masp){
   
   $user=$_COOKIE['username'];
   $getmahd=$this->muahangModel->getmahdgiohang($user);
   $rowmahd=mysqLi_fetch_array($getmahd);
   $mahd= $rowmahd['mahd'];
   $this->muahangModel->xoaspgiohang($mahd,$masp);
   $sptronggiohang= $this->muahangModel->getctdondathang($mahd);
   $soluongsp= mysqLi_num_rows($sptronggiohang);
   if($soluongsp ==0){
    $this->muahangModel->xoagiohang($mahd,$user);
    unset($_SESSION['soluong']);
   }
   header("Location: /azuki/muahang/giohang");
   }
   public function xoaspgiohangkhongtk($masp){
    if (isset($_SESSION['giohang'][$masp])) {
        unset($_SESSION['giohang'][$masp]); 
        header("Location: /azuki/muahang/giohang");
    } 
   }
   
   
   public function thanhtoangiohang(){
    $loaisp2=$this->muahangModel->getAll2();
    $this->view('header');
    if(isset($_COOKIE['username'])){
        $user=$_COOKIE['username'];
        $getgiohang=$this->muahangModel->Getgiohang($user);
        $this->view('muahang/thanhtoan',['giohang'=> $getgiohang]);
    }
    else{
        $this->view('muahang/thanhtoan2');
    }
    $this->view('footer',['loaisp' => $loaisp2]);
}
  
public function muangay($masp){
    
    $loaisp2=$this->muahangModel->getAll2();
    
    $masanpham= $masp;
    $soluong=$_POST['quantity'];
    $_SESSION['slmuangay']=$_POST['quantity'];
    $spmuangay=$this->muahangModel->Gethoanthanhthanhmuangay($masp);
    $this->view('header');
    $this->view('muahang/thanhtoan',['giohang'=> $spmuangay]);
    $this->view('footer',['loaisp' => $loaisp2]);

}

public function guimailmuangay($email, $soluong, $masp, $mahd, $hoten, $tongtien) {
    include "PHPMailer/src/PHPMailer.php";
    include "PHPMailer/src/Exception.php";
    include "PHPMailer/src/POP3.php";
    include "PHPMailer/src/SMTP.php";

    $result = $this->muahangModel->getthongtinsanpham($masp);
    $row = mysqli_fetch_array($result);
    $tensp = $row['tensp'];

    function sendMail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'theducnguyen17@gmail.com';
            $mail->Password   = 'yxzr jtof nbls aynt';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->setFrom('theducnguyen17@gmail.com', 'Mailer');
            $mail->addAddress($to);
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    define('_WEB_HOST', 'http://localhost/');

    $subject = "Đơn hàng #$mahd tại azuki";

    $content = "Chào bạn ".$hoten.",<br>";
    $content .= "Cảm ơn bạn đã mua hàng tại azuki. Dưới đây là thông tin đơn hàng của bạn:<br>";
    $content .= "<strong>Mã đơn hàng:</strong> $mahd<br>";
    $content .= "<strong>Thông tin sản phẩm:</strong><br>";
    $content .= "<table border='1' cellpadding='5' cellspacing='0'>";
    $content .= "<thead><tr><th>Tên sản phẩm</th><th>Số lượng</th></tr></thead>";
    $content .= "<tbody>";
    $content .= "<tr><td>$tensp</td><td>$soluong</td></tr>";
    $content .= "</tbody></table>";
    
    $content .= "<br><strong>Tổng tiền:</strong> " . number_format($tongtien, 0, ',', '.') . " VND<br>";
    $content .= "Cảm ơn bạn đã mua hàng!<br>azuki Team";

    $sendEmail = sendMail($email, $subject, $content);
    if ($sendEmail) {
        echo "<script>
            alert('Cảm ơn bạn đã mua hàng. Email xác nhận đã được gửi.');
        </script>";
    }
}




public function xulythanhtoanngay(){
    if(isset($_COOKIE['username'])){
        $user= $_COOKIE['username'] ;
    } else {
        $user="Khách chưa đăng ký";
    }
    $masp=$_POST['maspmuangay'];
    $dongia=$_POST['dongiamuangay'];
    $soluong = $_POST['slmuangay'];
    $ngaydat= date('d-m-Y');
    $tongtien=$_POST['tongtien'];
    $hoten= $_POST['hoten'];
    $diachinhan= $_POST['diachinhan'];
    $sodienthoai=$_POST['sodienthoai'];
    $email=$_POST['email'];
    $ghichu=$_POST['ghichu'];
    $result= $this->muahangModel->getmaxmahd();
    $row=mysqLi_fetch_array($result);
    $maxmhd= $row['maxmhd'];
    $mahd=$maxmhd+1 ;
    setcookie("mahd", $mahd, time() + 3600, "/");
    if(isset($_POST['phuongthucthanhtoan'])&&($_POST['phuongthucthanhtoan']=='tienmat')){
        $pttt='Tiền mặt';
       $this->muahangModel->themmuangay($mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$user,$tongtien,$pttt,$ngaydat);
       $this->muahangModel->giamslsp($soluong,$masp);
       $this->muahangModel->themmuangayct($mahd,$masp,$soluong,$dongia);

       $this->guimailmuangay($email, $soluong, $masp, $mahd, $hoten, $tongtien);
      header("Location: /azuki/muahang/Hoanthanhthanhtoan");
      unset($_SESSION['soluong']); 
    
       }
    if(isset($_POST['phuongthucthanhtoan'])&&($_POST['phuongthucthanhtoan']=='vnpay')){
    setcookie("soluong", $soluong, time() + 3600, "/");
    setcookie("ngaydat", $ngaydat, time() + 3600, "/");
    setcookie("tongtien", $tongtien, time() + 3600, "/");
    setcookie("hoten", $hoten, time() + 3600, "/");
    setcookie("diachinhan", $diachinhan, time() + 3600, "/");
    setcookie("sodienthoai", $sodienthoai, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");
    setcookie("ghichu", $ghichu, time() + 3600, "/");
    setcookie("masp", $masp, time() + 3600, "/");
    setcookie("dongia", $dongia, time() + 3600, "/");
    $pttt='VNpay';
    echo "hihi"; 
    require_once('config/configvnpay2.php');
    require_once('config/xulyttvnpay.php');
    
       }
    
}



   public function xulythanhtoan(){ 
   if(isset($_POST['mahd'])){
    $mahd =$_POST['mahd'] ; 
   }
   $soluongtungsanphammuahang = $_SESSION['soluong'];
   
   $ngaydat= date('d-m-Y');
   $tongtien=$_POST['tongtien'];
   $hoten= $_POST['hoten'];
   $diachinhan= $_POST['diachinhan'];
   $sodienthoai=$_POST['sodienthoai'];
   $email=$_POST['email'];
   $ghichu=$_POST['ghichu'];
   if (isset($_POST['phuongthucthanhtoan']) && ($_POST['phuongthucthanhtoan'] == 'tienmat')) {
    $pttt = 'Tiền mặt';
    setcookie("mahd", $mahd, time() + 3600, "/");
    foreach ($soluongtungsanphammuahang as $masp => $soluong) {
        $this->muahangModel->updatectdondathangkhimua($soluong, $mahd, $masp);
        $this->muahangModel->giamslsp($soluong, $masp);
    }

    $this->muahangModel->updatedondathangkhimua($tongtien, $ngaydat, $mahd, $hoten, $diachinhan, $sodienthoai, $email, $ghichu, $pttt);

    /// Gửi email
    include "PHPMailer/src/PHPMailer.php";
    include "PHPMailer/src/Exception.php";
    include "PHPMailer/src/POP3.php";
    include "PHPMailer/src/SMTP.php";

    $content = "Chào $hoten,<br>";
    $content .= "Cảm ơn bạn đã đặt hàng tại azuki. Dưới đây là thông tin đơn hàng của bạn:<br>";
    $content .= "<strong>Mã đơn hàng:</strong> $mahd<br>";
    $content .= "<strong>Sản phẩm:</strong><br>";
    $content .= "<table border='1' cellpadding='5' cellspacing='0'>";
    $content .= "<thead><tr><th>Tên sản phẩm</th><th>Số lượng</th></tr></thead>";
    $content .= "<tbody>";

    foreach ($soluongtungsanphammuahang as $masp => $soluong) {
        $result = $this->muahangModel->getthongtinsanpham($masp);
        $row = mysqli_fetch_array($result);
        $tensp = $row['tensp'];
        $content .= "<tr><td>$tensp</td><td>$soluong</td></tr>";
    }

    $content .= "</tbody></table>";
    $content .= "<br><strong>Tổng tiền:</strong> $tongtien VND<br>";
    $content .= "Địa chỉ nhận hàng: $diachinhan<br>";
    $content .= "Phương thức thanh toán: $pttt<br><br>";
    $content .= "Cảm ơn bạn đã mua hàng!<br>azuki Team";

    function sendMail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'theducnguyen17@gmail.com';
            $mail->Password   = 'yxzr jtof nbls aynt';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->setFrom('theducnguyen17@gmail.com', 'azuki');
            $mail->addAddress($to);
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    $subject = "Đơn hàng #$mahd tại azuki";
    $sendEmail = sendMail($email, $subject, $content);
    if ($sendEmail) {
        echo "<script>
                alert('Cảm ơn bạn đã mua hàng. Email xác nhận đã được gửi.');
              </script>";
    } else {
        echo "<script>
                alert('Đã xảy ra lỗi khi gửi email xác nhận.');
              </script>";
    }
//
    header("Location: /azuki/muahang/Hoanthanhthanhtoan");
    unset($_SESSION['soluong']);
}
   if(isset($_POST['phuongthucthanhtoan'])&&($_POST['phuongthucthanhtoan']=='vnpay')){
    setcookie("mahd", $mahd, time() + 3600, "/"); 
    if (is_array($_SESSION['soluong'])) {
        $soluong = json_encode($_SESSION['soluong']); 
    } else {
        $soluong = $_SESSION['soluong']; 
    }
    
    setcookie("soluong", $soluong, time() + 3600, "/");
    setcookie("ngaydat", $ngaydat, time() + 3600, "/");
    setcookie("tongtien", $tongtien, time() + 3600, "/");
    setcookie("hoten", $hoten, time() + 3600, "/");
    setcookie("diachinhan", $diachinhan, time() + 3600, "/");
    setcookie("sodienthoai", $sodienthoai, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");
    setcookie("ghichu", $ghichu, time() + 3600, "/");
    $pttt='VNpay';
    echo "hihi"; 
    require_once('config/configvnpay.php');
    require_once('config/xulyttvnpay.php');

   }
   }
   
 //
 
 public function guimaildanhsachsanpham($email, $mahd, $soluongtungsanphammuahang) {
    include "PHPMailer/src/PHPMailer.php";
    include "PHPMailer/src/Exception.php";
    include "PHPMailer/src/POP3.php";
    include "PHPMailer/src/SMTP.php";

    function sendMail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'theducnguyen17@gmail.com';
            $mail->Password   = 'yxzr jtof nbls aynt';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->setFrom('theducnguyen17@gmail.com', 'azuki');
            $mail->addAddress($to);
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // Tạo nội dung email
    $subject = "Xác nhận đơn hàng mã: $mahd";
    $content = "Chào bạn,<br>";
    $content .= "Cảm ơn bạn đã mua hàng tại azuki. Dưới đây là thông tin đơn hàng của bạn:<br>";
    $content .= "<strong>Mã đơn hàng:</strong> $mahd<br>";
    $content .= "<strong>Thông tin sản phẩm:</strong><br>";
    $content .= "<table border='1' cellpadding='5' cellspacing='0'>";
    $content .= "<thead><tr><th>Tên sản phẩm</th><th>Số lượng</th></tr></thead>";
    $content .= "<tbody>";

    foreach ($soluongtungsanphammuahang as $masp => $soluong) {
        $result = $this->muahangModel->getthongtinsanpham($masp);
        $row = mysqli_fetch_array($result);
        $tensp = $row['tensp'];
        $content .= "<tr><td>$tensp</td><td>$soluong</td></tr>";
    }

    $content .= "</tbody></table>";
    $content .= "<br>Tổng tiền: <strong>" . number_format($_COOKIE['tongtien'], 0, ',', '.') . " VND</strong><br>";
    $content .= "Cảm ơn bạn đã mua hàng!<br>azuki Team";

    sendMail($email, $subject, $content);
}


 //

   public function xulythanhtoanVNP(){ 
    $pttt="VNpay";
    $mahd = $_COOKIE['mahd'] ;
    $soluongtungsanphammuahang = isset($_COOKIE['soluong']) ? json_decode($_COOKIE['soluong'], true) : []; 
    $ngaydat= $_COOKIE['ngaydat'];
    $tongtien=$_COOKIE['tongtien'];
    $hoten= $_COOKIE['hoten'];
    $diachinhan= $_COOKIE['diachinhan'];
    $sodienthoai=$_COOKIE['sodienthoai'];
    $email=$_COOKIE['email'];
    $ghichu=$_COOKIE['ghichu'];
    if(isset($_COOKIE['username'])){
    foreach($soluongtungsanphammuahang as $masp => $soluong){
   $this->muahangModel->updatectdondathangkhimua($soluong,$mahd,$masp);
   }
   foreach($soluongtungsanphammuahang as $masp => $soluong){
    $this->muahangModel->giamslsp($soluong,$masp);
    }
   $this->muahangModel->updatedondathangkhimua($tongtien,$ngaydat,$mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$pttt);
   unset($_SESSION['soluong']);}
   else{
    foreach($soluongtungsanphammuahang as $masp => $soluong){
        $user="Khách chưa đăng ký";
        $giohang = json_decode($_COOKIE['giohang'], true);
        $dongia= $giohang[$masp]['gia'];
        $this->muahangModel->themmuangayct($mahd,$masp,$soluong,$dongia);
        }
        foreach($soluongtungsanphammuahang as $masp => $soluong){
            $this->muahangModel->giamslsp($soluong,$masp);
            }
        $this->muahangModel->themmuangay($mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$user,$tongtien,$pttt,$ngaydat);
       // unset($_SESSION['soluong0tk']);
       // unset($_SESSION['giohang']);
   }
   $this->guimaildanhsachsanpham($email, $mahd, $soluongtungsanphammuahang);
   header("Location: /azuki/muahang/Hoanthanhthanhtoan");
   }


   public function xulythanhtoanVNPngay(){ 
    if(isset($_COOKIE['username'])){
    $user= $_COOKIE['username'] ;
    } else{
     $user="Khách chưa đăng ký";
    }
    $pttt="VNpay";
    $mahd = $_COOKIE['mahd'] ;
    $soluong = $_COOKIE['soluong'];
    $ngaydat= $_COOKIE['ngaydat'];
    $tongtien=$_COOKIE['tongtien'];
    $hoten= $_COOKIE['hoten'];
    $diachinhan= $_COOKIE['diachinhan'];
    $sodienthoai=$_COOKIE['sodienthoai'];
    $email=$_COOKIE['email'];
    $ghichu=$_COOKIE['ghichu'];
    $masp=$_COOKIE['masp'];
    $dongia=$_COOKIE['dongia'];
   $this->muahangModel->themmuangay($mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$user,$tongtien,$pttt,$ngaydat);
   $this->muahangModel->giamslsp($soluong,$masp);
   $this->muahangModel->themmuangayct($mahd,$masp,$soluong,$dongia);
   $this->guimailmuangay($email, $soluong, $masp, $mahd, $hoten, $tongtien);
   header("Location: /azuki/muahang/Hoanthanhthanhtoan");
   }

   //

   public function guimailXacNhan($email, $hoten, $mahd, $tongtien, $dssp) {
    include "PHPMailer/src/PHPMailer.php";
    include "PHPMailer/src/Exception.php";
    include "PHPMailer/src/POP3.php";
    include "PHPMailer/src/SMTP.php";

    $subject = " Đơn hàng #$mahd tại azuki";

    $content = "Chào bạn $hoten,<br>";
    $content .= "Cảm ơn bạn đã mua hàng tại azuki. Dưới đây là thông tin đơn hàng của bạn:<br>";
    $content .= "<strong>Mã đơn hàng:</strong> $mahd<br>";
    $content .= "<strong>Thông tin sản phẩm:</strong><br>";
    $content .= "<table border='1' cellpadding='5' cellspacing='0'>";
    $content .= "<thead><tr><th>Tên sản phẩm</th><th>Số lượng</th></tr></thead>";
    $content .= "<tbody>";

    foreach ($dssp as $sp) {
        $content .= "<tr><td>{$sp['tensp']}</td><td>{$sp['soluong']}</td></tr>";
    }

    $content .= "</tbody></table>";
    $content .= "<strong>Tổng tiền:</strong> " . number_format($tongtien, 0, ',', '.') . " VND<br>";
    $content .= "<br>Cảm ơn bạn đã mua hàng!<br>azuki Team";

    // Sử dụng PHPMailer để gửi email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'theducnguyen17@gmail.com';
        $mail->Password = 'yxzr jtof nbls aynt';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('theducnguyen17@gmail.com', 'azuki');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();
        echo "<script>alert('Đơn hàng đã được xác nhận. Email đã gửi thành công.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Gửi email thất bại. Vui lòng kiểm tra lại.');</script>";
    }
}




   //

   public function xulythanhtoankhongtaikhoan(){ 
    $user="Khách chưa đăng ký";
    $soluongtungsanphammuahang = $_SESSION['soluong0tk'];
    $ngaydat= date('d-m-Y');
    $tongtien=$_POST['tongtien'];
    $hoten= $_POST['hoten'];
    $diachinhan= $_POST['diachinhan'];
    $sodienthoai=$_POST['sodienthoai'];
    $email=$_POST['email'];
    $ghichu=$_POST['ghichu'];
    $result= $this->muahangModel->getmaxmahd();
    $row=mysqLi_fetch_array($result);
    $maxmhd= $row['maxmhd'];
    $mahd=$maxmhd+1 ;
    if(isset($_POST['phuongthucthanhtoan'])&&($_POST['phuongthucthanhtoan']=='tienmat')){
     $pttt='Tiền mặt';
     setcookie("mahd", $mahd, time() + 3600, "/");
     $dssp = [];
     foreach($soluongtungsanphammuahang as $masp => $soluong){
    $dongia= $_SESSION['giohang'][$masp]['gia'];
    $this->muahangModel->themmuangayct($mahd,$masp,$soluong,$dongia);
    $tenspResult = $this->muahangModel->getthongtinsanpham($masp);
    $tenspRow = mysqli_fetch_array($tenspResult);
    $dssp[] = [
            'tensp' => $tenspRow['tensp'],
            'soluong' => $soluong,
            'dongia' => $dongia
        ];
    }
    foreach($soluongtungsanphammuahang as $masp => $soluong){
        $this->muahangModel->giamslsp($soluong,$masp);
    }
    $this->muahangModel->themmuangay($mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$user,$tongtien,$pttt,$ngaydat);
    $this->guimailXacNhan($email, $hoten, $mahd,$tongtien, $dssp);

    header("Location: /azuki/muahang/Hoanthanhthanhtoan");
    unset($_SESSION['soluong0tk']);
    unset($_SESSION['giohang']);
 
    }

    if(isset($_POST['phuongthucthanhtoan'])&&($_POST['phuongthucthanhtoan']=='vnpay')){
     setcookie("mahd", $mahd, time() + 3600, "/"); 
     if (is_array($_SESSION['soluong0tk'])) {
         $soluong = json_encode($_SESSION['soluong0tk']);
     } else {
         $soluong = $_SESSION['soluong']; 
     }
     $giohang = json_encode($_SESSION['giohang']);
     setcookie('giohang', $giohang, time() + (7 * 24 * 60 * 60), '/');

     setcookie("soluong", $soluong, time() + 3600, "/");
     setcookie("ngaydat", $ngaydat, time() + 3600, "/");
     setcookie("tongtien", $tongtien, time() + 3600, "/");
     setcookie("hoten", $hoten, time() + 3600, "/");
     setcookie("diachinhan", $diachinhan, time() + 3600, "/");
     setcookie("sodienthoai", $sodienthoai, time() + 3600, "/");
     setcookie("email", $email, time() + 3600, "/");
     setcookie("ghichu", $ghichu, time() + 3600, "/");
     $pttt='VNpay';
     echo "hihi"; 
     require_once('config/configvnpay.php');
     require_once('config/xulyttvnpay.php');
 
    } 
    } 
    






   public function Hoanthanhthanhtoan(){
    if(isset($_COOKIE['mahd'])){
        $mahd = $_COOKIE['mahd'] ;
    
    $loaisp2=$this->muahangModel->getAll2();
    $hoanthanhttSP=$this->muahangModel->Gethoanthanhthanhtoansp($mahd);
    $hoanthanhttND=$this->muahangModel->Gethoanthanhthanhtoannd($mahd);
    $this->view('header');
    $this->view('muahang/hoanthanhtt',['hoanthanhttsp' => $hoanthanhttSP,'hoanthanhttnd' => $hoanthanhttND]); 
    $this->view('footer',['loaisp' => $loaisp2]);
    }
    }
    public function chitietmuahang($mahd){
        $loaisp2=$this->muahangModel->getAll2();
        $hoanthanhttSP=$this->muahangModel->Gethoanthanhthanhtoansp($mahd);
        $hoanthanhttND=$this->muahangModel->Gethoanthanhthanhtoannd($mahd);
        $this->view('header');
        $this->view('muahang/hoanthanhtt',['hoanthanhttsp' => $hoanthanhttSP,'hoanthanhttnd' => $hoanthanhttND]); 
        $this->view('footer',['loaisp' => $loaisp2]);
        
        }

    
}


?>