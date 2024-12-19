<?php 
require_once 'core/Controller.php';

class productsController extends Controller {
    private $productsModel;
    public function __construct(){
        $this->productsModel = $this->model('productsModel');
    } 
    public function productdetail($masp){
        $loaisp2=$this->productsModel->getAll2();
        $sanpham=$this->productsModel->sanpham($masp);
        $sanphamgetmaloai=$this->productsModel->sanpham($masp);
        $hienthicmt= $this->productsModel->hienthicmt($masp);
        $row = mysqLi_fetch_array($sanphamgetmaloai);
        $soluongban=$this->productsModel->Getsoluongdaban($masp);
        $maloai=$row['maloai'];
        $sanphamcungloai=$this->productsModel->sanphamlienquan($maloai,$masp);
         $this->view('header');
         $this->view('products/productdetail',['sanpham' => $sanpham,'sanphamcungloai' => $sanphamcungloai,'hienthicmt' => $hienthicmt,'soluongban' => $soluongban]);
         $this->view('footer',['loaisp' => $loaisp2]);
      
     }
    
    public function savecmt($masp){
        $rate= $_POST['rating'];
        $cmt= $_POST['comment'];
        $hoten= $_POST['name'];
        $email = $_POST['email'];
        $masp = $_POST['masp'];
        if(isset($_POST['cophailakh'])){
        $is_registered = $_POST['cophailakh'];}
        else {
            $is_registered="Chưa đăng ký";
        }
        $date = date("d/m/Y");
       $this->productsModel->savecmt($rate,$cmt,$hoten,$email,$masp,$is_registered,$date);
       $this->productsModel->updaterate($masp) ;

       header("Location: /azuki/products/productdetail/$masp");
       

    }

   

    
}
?>