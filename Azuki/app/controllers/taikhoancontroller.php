<?php 
require_once 'core/Controller.php';
require_once 'app/models/taikhoan.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class taikhoanController extends Controller {
    private $taikhoanModel;
    public function __construct(){
        $this->taikhoanModel = $this->model('taikhoanModel');
    }
    public function login(){
       $this->view('taikhoan/login');
    }
    public function checktk() {
        $username = $_POST['user'];
        $password = $_POST['password'];
        $checkusername = $this->taikhoanModel->checkusernametk($username);
        if (mysqli_num_rows($checkusername) == 0) {
           
            $_SESSION['loidangnhap'] = "Không tồn tại tài khoản.";
            $_SESSION['hienthiusername'] ="";
            $_SESSION['saipass']=""; 
            $this->view('taikhoan/login');
            exit();
        }
        $row = mysqli_fetch_assoc($checkusername); 
        if (password_verify($password, $row['password'])) {
            
            if (isset($_POST['remember'])) {
                setcookie('user_login', $username, time() + (7 * 24 * 60 * 60), "/");
                setcookie('user_password', $password, time() + (7 * 24 * 60 * 60), "/");
            }
            $_SESSION['name']= $row['hoten'];
            $_SESSION['username'] = $username;
            $name = $row['hoten'];
            $username = $username;  
            $role=$row['role'];
          
            setcookie('name', $name, time()  + (7 * 24 * 60 * 60), "/"); 
            setcookie('username', $username, time() + (7 * 24 * 60 * 60), "/");
            setcookie('role', $role, time() + (7 * 24 * 60 * 60), "/");
            $_SESSION['role']=$role;
            if (isset($_SESSION['loidangnhap'])) {
                unset($_SESSION['loidangnhap']);
                unset($_SESSION['hienthiusername']);
                unset($_SESSION['saipass']);
            }
            if($row['role']>0){
                header('Location: /Azuki/trangchu/home');
            }
            exit();
        } else {
           
            $_SESSION['loidangnhap'] = "Bạn đã nhập sai Password.";
            $_SESSION['hienthiusername'] = $username;
            $_SESSION['saipass']=""; 
            $this->view('taikhoan/login');
            exit();
        }
    }
    
    
    public function dangxuat(){
        if(isset($_COOKIE['username'])){
            setcookie('name', '', time() - 3600, '/'); // Đặt thời gian hết hạn trong quá khứ
            setcookie('username', '', time() - 3600, '/');
            setcookie('role', '', time() - 3600, '/');
            if(isset($_SESSION['role'])){
                unset($_SESSION['role']) ;
            }
            header('Location: /Azuki/taikhoan/login');
        }
     }


     public function signup(){
        $this->view('taikhoan/signup');
     }



     public function xulydangky(){
       $username= $_POST['user'];
       $password= $_POST['password9'];
       $password_hash= password_hash($password,PASSWORD_DEFAULT);
       $hoten=$_POST['hoten'];
       $sdt=$_POST['sodienthoai'];
       $email=$_POST['email'];
       $checkusername= $this->taikhoanModel->checkusernametk($username);
       $checksdt= $this->taikhoanModel->checksdttk($sdt);
       $checkemail= $this->taikhoanModel->checkemailtk($email);
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
      $object=new taikhoan($username,$password_hash,$hoten,$sdt,$email);
       $this->taikhoanModel->themtaikhoan($object);
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
       header('Location: /azuki/taikhoan/login'); 
      }
      else{
        $_SESSION['hienthiten']=$hoten;
        $_SESSION['hienthipass']=$password;
        header('Location: /azuki/taikhoan/signup');

      }

     }



     
     public function quenmk(){
        $this->view('taikhoan/quenmk');
     }
     public function resetmk($fgtk){
        $result0 = $this->taikhoanModel->checkfgtk($fgtk);
       if(mysqLi_num_rows($result0)==1){
            $this->view('taikhoan/resetmk',['token' => $result0]);
        }
       
     }
     public function xulyresetmk(){
        echo "hihi";
        $token= $_POST['token'];
        $password= $_POST['newpass9'];
        $password_hash= password_hash($password,PASSWORD_DEFAULT);
        $this->taikhoanModel->doimk($password_hash,$token);
        echo " <script>
        alert('Lấy lại mật khẩu thành công.');
        window.location.href = 'http://localhost/azuki/taikhoan/login';
        </script>"; 

     }

     public function guimailquenmatkhau(){
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
            $mail->setFrom('theducnguyen17@gmail.com', 'Mailer');
            $mail->addAddress($to);         
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);                                        
            $mail->Subject = $subject;
            $mail->Body    = $message;
        
            $mail->send();
            return true ;
        } catch (Exception $e) {
            return false;
        }
        }
        
        
        function shal($input) {
            return hash('sha256', $input); 
        }
        
        
        
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $result0 = $this->taikhoanModel->checkemail($email);
            if(mysqLi_num_rows($result0) == 0){
                echo "<script>
                        alert('Không có email trên hệ thống');
                         window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                      </script>";
            } else {
                define('_WEB_HOST', 'http://localhost/');
                $forgotToken = shal(uniqid().time());
                $fgtk = $forgotToken;
                $this->taikhoanModel->updatetoken($fgtk,$email);
                $linkRest ='http://localhost/azuki/taikhoan/resetmk/'.$fgtk;
                $subject = "Yêu cầu khôi phục mật khẩu";
                $content = "Chào. <br>";
                $content .= "Chúng tôi nhận được yêu cầu khôi phục mật khẩu, click vào link sau <br>";
                $content .= $linkRest . '<br>';
                $content .= 'Cảm ơn';
                $sendEmail = sendMail($email, $subject, $content);
              if ($sendEmail) {
                echo "<script>
                alert('Đã gửi mail cho bạn, xin vui lòng check mail');
                         window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                 </script>";
                       } else {
                        echo "<script>
                        alert('Gửi mail không thành công');
                        window.location.href = '../page/forgot.php'; 
                         </script>";
                             }        
            }
        }
     }

     public function thongtincanhan(){
        $trang="tongquan";
        $loaisp2=$this->taikhoanModel->getAll2();
        $username=$_COOKIE['username'];
        $thongtintk= $this->taikhoanModel->checkusernametk($username);
        $this->view('header',['trang'=>$trang]);
        $this->view('taikhoan/thongtincanhan',['thongtin'=> $thongtintk]);
        $this->view('footer',['loaisp' => $loaisp2]);

     }

     public function xacnhanmk(){
        if(isset($_POST['capnhat'])){
            $_SESSION['thaotac']= 'capnhat';
        }
        if(isset($_POST['doimk'])){
            $_SESSION['thaotac']= 'doimk';
        }
       $this->view('taikhoan/xnmk');


     }

     public function checkmk(){
     $username=$_COOKIE['username'];
     $password =$_POST['pass'];
     $checkusername = $this->taikhoanModel->checkusernametk($username);
     $row = mysqli_fetch_assoc($checkusername); 
     if (password_verify($password, $row['password'])) { 
         if(isset($_SESSION['tbsaimk'])){ 
           unset($_SESSION['tbsaimk'] );
           }
        
        if($_SESSION['thaotac']== 'capnhat'){
           header('Location: /azuki/taikhoan/capnhattt');
           exit();
        } 

        if($_SESSION['thaotac']== 'doimk'){    
          header('Location: /azuki/taikhoan/doimk');
          exit();
        }

     }else{
        header('Location: /azuki/taikhoan/xacnhanmk');
        $_SESSION['tbsaimk']="Sai mật khẩu vui lòng nhập lại";
     } 
  
     }





     public function capnhattt(){
        $username=$_COOKIE['username'];
        $thongtin = $this->taikhoanModel->checkusernametk($username);
        $this->view('taikhoan/capnhat',['thongtin' => $thongtin]);

     }

     public function xulycapnhattt(){
        $username=$_COOKIE['username'];
        $hoten=$_POST['hoten'];
        $sdt=$_POST['phone'];
        $email=$_POST['email'];
        $checksdt= $this->taikhoanModel-> checksdttkcapnhat($sdt,$username);
        $checkemail= $this->taikhoanModel->checkemailtkcapnhat($email,$username);
        $i=0;
           if(mysqli_num_rows($checksdt)>0){
                $_SESSION['trungsdt'] = "Số điện thoại này đã được sử dụng.";
               $i=$i+1;
           }
           else{
            if(isset($_SESSION['trungsdt'])){ unset($_SESSION['trungsdt']);}
            $_SESSION['hienthisdt']=$sdt;
           }
           if(mysqli_num_rows($checkemail)>0){
            $_SESSION['trungemail'] = "Email này đã được sử dụng";
            $i=$i+1;
           }
           else{
            if(isset($_SESSION['trungemail'])){ unset($_SESSION['trungemail']);}
            $_SESSION['hienthiemail']=$email;
           }
           
           if($i==0){
            if(isset($_SESSION['trungsdt'])){ unset($_SESSION['trungsdt']);}
            if(isset($_SESSION['trungemail'])){unset($_SESSION['trungemail']);}
            if(isset($_SESSION['hienthiemail'])){
             unset($_SESSION['hienthiemail']);
         }
         if(isset($_SESSION['hienthisdt'])){
             unset($_SESSION['hienthisdt']);
         }
          
            $this->taikhoanModel->capnhatthongtin($hoten,$sdt,$email,$username);
            $_SESSION['capnhatthanhcong']="Cập nhật thông tin thành công";
            unset($_SESSION['thaotac']);
            header('Location: /azuki/taikhoan/thongtincanhan');
        
           }

           else{
            header('Location: /azuki/taikhoan/capnhattt');
 
           }



     }
     

     public function doimk(){
        $this->view('taikhoan/doimk');
     }
     public function xulydoimk(){
     $username=$_COOKIE['username'];
     $password=$_POST['newpass9'];
     $password_hash= password_hash($password,PASSWORD_DEFAULT);
     $this->taikhoanModel->capnhatmk($username,$password_hash);
     $_SESSION['capnhatthanhcong']="Đổi mật khẩu thành công";
     unset($_SESSION['thaotac']);
     header('Location: /azuki/taikhoan/thongtincanhan');


     }




     



    







   
    
}
?>