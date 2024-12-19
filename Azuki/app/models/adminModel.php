<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class adminModel extends Model {
    protected $table1 = 'phong'; // Tên bảng
    protected $table2 = 'loaisp';
    protected $table3 = 'sanpham';
    protected $tablebl = 'binhluan';
    protected $tablectdondathang = 'chitietdonhang';
    protected $tabledondathang = 'dondathang';
    protected $tabletk='taikhoan';
    public function getsanpham() {
        $sql = "SELECT * FROM $this->table3";
        $result=$this->con->query($sql);
        return $result;
    }
    
    public function Getsoluongdaban(){
        $sql = "SELECT SUM(soluong) AS soluongban,masp FROM $this->tablectdondathang 
        INNER JOIN $this->tabledondathang ON $this->tablectdondathang.mahd =$this->tabledondathang.mahd
        WHERE active= 1  GROUP BY masp
           ";
        $result=$this->con->query($sql);
        return $result;
    
}

public function getsanphamtheoma($masp) {
    $sql = "SELECT * FROM $this->table3 WHERE masp ='$masp' ";
    $result=$this->con->query($sql);
    return $result;
}
public function getphong() {
    $sql = "SELECT * FROM $this->table1  ";
    $result=$this->con->query($sql);
    return $result;
}
public function getloai() {
    $sql = "SELECT * FROM $this->table2  ";
    $result=$this->con->query($sql);
    return $result;
}

public function updatesp($tensp,$anh_main,$anh_detail1,$anh_detail2,$anh_detail3,$anh_detail4,$anh_detail5,$thongtinsp,$motact,$maphong,$maloai,$masp,$dongia,$soluong){
    $sql = "UPDATE $this->table3 SET tensp='$tensp', anhhienthi1='$anh_main',anhdetail1='$anh_detail1',
    anhdetail2='$anh_detail2',anhdetail3='$anh_detail3',anhdetail4='$anh_detail4',
    anhdetail5='$anh_detail5', thongtin='$thongtinsp' ,motasp='$motact',
    maphong=$maphong, maloai=$maloai,dongia=$dongia,soluong=$soluong
    WHERE masp= '$masp'
       ";
    $result=$this->con->query($sql);
    return $result;
}
public function insertsanpham($tensp, $anh_main, $anh_detail1, $anh_detail2, $anh_detail3, $anh_detail4, $anh_detail5, $thongtinsp, $motact, $maphong, $maloai, $masp,$dongia,$soluong) {
    $sql = "INSERT INTO $this->table3 (masp, tensp, anhhienthi1, anhdetail1, anhdetail2, anhdetail3, anhdetail4, anhdetail5, thongtin, motasp,dongia,rate, maphong, maloai,soluong) 
            VALUES ('$masp', '$tensp', '$anh_main', '$anh_detail1', '$anh_detail2', '$anh_detail3', '$anh_detail4', '$anh_detail5', '$thongtinsp', '$motact',$dongia,0, $maphong, $maloai,$soluong)";
    $result = $this->con->query($sql);
    return $result;
}

public function xoasp($masp) {
    $sql = "  DELETE FROM $this->table3 WHERE masp='$masp' ";
    $result=$this->con->query($sql); 
    return $result;
}

public function getbaohanhtheoma($mabaohanh) {
    $sql = "SELECT * FROM $this->tablebaohanh WHERE mabaohanh = ?";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param("s", $mabaohanh);
    $stmt->execute();
    return $stmt->get_result(); // Trả về kết quả truy vấn
}

public function xoabh($mabaohanh) {
    $sql = "DELETE FROM baohanh WHERE mabaohanh = ?";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param("s", $mabaohanh);
    return $stmt->execute();
}

public function getbinhluan() {
    $sql = "SELECT $this->tablebl.*,$this->table3.tensp FROM $this->tablebl INNER JOIN $this->table3 ON $this->tablebl.masp= $this->table3.masp ORDER BY ID DESC    ";
    $result=$this->con->query($sql);
    return $result;
}
public function hienbl($id) {
    $sql = "UPDATE $this->tablebl SET trangthai = 1  WHERE id=  $id  ";
    $result=$this->con->query($sql);
    return $result;
}
public function anbl($id) {
    $sql = "UPDATE $this->tablebl SET trangthai = 0  WHERE id=  $id  ";
    $result=$this->con->query($sql);
    return $result;
}
public function getbinhluan_loc($masp) {
    $sql = "SELECT $this->tablebl.*,$this->table3.tensp FROM $this->tablebl INNER JOIN $this->table3 ON $this->tablebl.masp= $this->table3.masp WHERE $this->tablebl.masp='$masp' ORDER BY ID DESC    ";
    $result=$this->con->query($sql);
    return $result;   
}

public function gettaikhoankh() {
    $sql = "SELECT * FROM $this->tabletk WHERE role=0 ";
    $result=$this->con->query($sql);
    return $result;   
}

public function khoatk($id,$username){
    $sql = " UPDATE $this->tabletk SET trangthai=0, note='Bị khoá bởi:$username' WHERE id_taikhoan=$id  ";
    $result=$this->con->query($sql);
    return $result;  
}
public function mokhoatk($id){
    $sql = " UPDATE $this->tabletk SET trangthai=1 , note='' WHERE id_taikhoan=$id  ";
    $result=$this->con->query($sql);
    return $result;  
}
public function capquyentv($id){
    $sql = " UPDATE $this->tabletk SET role=1  WHERE id_taikhoan=$id  ";
    $result=$this->con->query($sql);
    return $result;  
}
public function gettaikhoantv() {
    $sql = "SELECT * FROM $this->tabletk WHERE role=1 ";
    $result=$this->con->query($sql);
    return $result;   
}
public function boquyentv($id){
    $sql = " UPDATE $this->tabletk SET role=0  WHERE id_taikhoan=$id  ";
    $result=$this->con->query($sql);
    return $result;  
}

public function xoatktv($id) {
    $sql = "  DELETE FROM $this->tabletk WHERE id_taikhoan=$id ";
    $result=$this->con->query($sql); 
    return $result;
}
public function checkusernametk($username){
    $sql = "SELECT * FROM $this->tabletk WHERE username= '$username' ";
    $result=$this->con->query($sql);
    return $result;

} 
public function checksdttk($sdt){
    $sql = "SELECT * FROM $this->tabletk WHERE sdt='$sdt' ";
    $result=$this->con->query($sql);
    return $result;

} 
public function checkemailtk($email){
    $sql = "SELECT * FROM $this->tabletk WHERE email='$email' ";
    $result=$this->con->query($sql);
    return $result;

} 

public function themtktv($username,$password_hash,$hoten,$sdt,$email){
    $sql = "INSERT INTO $this->tabletk(username,password,hoten,sdt,email,role)
    VALUES('$username','$password_hash','$hoten','$sdt','$email',1)
     ";
    $result=$this->con->query($sql);
    return $result;
}

public function tongsl(){
    $sql = "SELECT SUM(soluong) as tongsl FROM $this->table3 ";
    $result=$this->con->query($sql);
    return $result;

} 
public function tongkh(){
    $sql = "SELECT COUNT(id_taikhoan) as tongtk FROM $this->tabletk WHERE role = 0 ";
    $result=$this->con->query($sql);
    return $result;
} 

public function tongslban(){
    $sql = "SELECT SUM(soluong) as tongslban  FROM $this->tablectdondathang ";
    $result=$this->con->query($sql);
    return $result;
}

public function doanhthu(){
    $sql = "SELECT  SUM($this->tablectdondathang.soluong * $this->tablectdondathang.dongia) OVER () AS tong_giatri  FROM $this->tablectdondathang INNER JOIN $this->tabledondathang ON 
    $this->tablectdondathang.mahd=$this->tabledondathang.mahd
    WHERE $this->tabledondathang.active=1
      ";
    $result=$this->con->query($sql);
    return $result;
}

public function dondathang(){
    $sql = "SELECT * FROM $this->tabledondathang WHERE active=1  ORDER BY mahd DESC ";
    $result=$this->con->query($sql);
    return $result;
} 
public function dondathang_loc($trangthai,$hoten,$mahd,$sdt){
    $sql = "SELECT * 
        FROM dondathang 
        WHERE active = 1";

if (!empty($hoten)) {
    $sql .= " AND hoten LIKE '%$hoten%'";
}


if (isset($trangthai)) {
    if($trangthai==""){
   
     $sql .= "";

    }else{ 
    $sql .= " AND trangthai = $trangthai ";}
   
}
if (!empty($mahd)) {
    $sql .= " AND mahd LIKE '%$mahd%'";
}
if (!empty($sdt)) {
    $sql .= " AND sodienthoai LIKE '%$sdt%'";
}
$sql .= " ORDER BY mahd DESC";

    $result=$this->con->query($sql);
    return $result;
} 

public function xacnhan($mahd){
    $sql = "UPDATE $this->tabledondathang SET trangthai=1 WHERE mahd=$mahd ";
    $result=$this->con->query($sql);
    return $result;
} 

public function huydon($mahd){
    $sql = "UPDATE $this->tabledondathang SET trangthai=2 WHERE mahd=$mahd ";
    $result=$this->con->query($sql);
    return $result;
} 
public function slhangdabandonhuy($mahd){
    $sql = " SELECT masp, soluong FROM $this->tablectdondathang WHERE mahd = $mahd";
    $result=$this->con->query($sql);
    return $result;
} 

public function capnhatlaisl($masp,$soluong){
    $sql = "UPDATE $this->table3 SET soluong =(SELECT soluong FROM $this->table3 WHERE masp='$masp')+ $soluong WHERE masp='$masp' ";
    $result=$this->con->query($sql);
    return $result;
}
public function chtietdonhang(){
    $sql = " SELECT masp, soluong FROM $this->tablectdondathang WHERE mahd = $mahd";
    $result=$this->con->query($sql);
    return $result;
}

public function chitietsanphammua(){
    $sql = "SELECT $this->tablectdondathang.*,$this->table3.tensp,$this->table3.dongia,$this->table3.anhhienthi1 FROM $this->tablectdondathang INNER JOIN $this->table3 ON $this->tablectdondathang.masp=$this->table3.masp
       ";
    $result=$this->con->query($sql);
    return $result;
}





}
/*
$obj=new CategoryModel();
$loaihang=new Category('L02','sfdàds11111111111','mota');
echo $obj->update($loaihang);*/
?>
