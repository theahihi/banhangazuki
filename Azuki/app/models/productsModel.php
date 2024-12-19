<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class productsModel extends Model {
    protected $table1 = 'phong'; // Tên bảng
    protected $table2 = 'loaisp';
    protected $table3 = 'sanpham';
    protected $tablebl = 'binhluan';
    protected $tablectdondathang = 'chitietdonhang';
    protected $tabledondathang = 'dondathang';
    // Lấy tất cả loại hàng
    public function getAll2() {
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function sanpham($masp) {
        $sql = "SELECT * FROM $this->table3 WHERE masp='$masp'  ";
        $result=$this->con->query($sql);
        return $result;
    } 
    public function getmaloai($masp) {
        $sql = "SELECT maloai FROM $this->table3 WHERE masp='$masp'  ";
        $result=$this->con->query($sql);
        return $result;
    } 

    public function sanphamlienquan($maloai,$masp) {
        $sql = "SELECT * FROM $this->table3 WHERE maloai='$maloai' AND masp != '$masp'  ";
        $result=$this->con->query($sql);
        return $result;
    }  

    public function savecmt($rate,$cmt,$hoten,$email,$masp,$is_registered,$date){
        $sql = "INSERT INTO $this->tablebl(masp,binhluan,hoten,rate,date,email,is_registered,trangthai) VALUES('$masp','$cmt','$hoten','$rate','$date','$email','$is_registered',0)   ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function hienthicmt($masp){
        $sql = "SELECT * FROM $this->tablebl WHERE masp='$masp' AND trangthai=1  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function updaterate($masp){
        $sql = " UPDATE $this->table3 SET rate=(SELECT AVG(rate) FROM $this->tablebl WHERE masp='$masp') WHERE masp='$masp' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function Getsoluongdaban($masp){
      
        $sql = "SELECT SUM(soluong) AS soluongban FROM $this->tablectdondathang 
        INNER JOIN $this->tabledondathang ON $this->tablectdondathang.mahd =$this->tabledondathang.mahd
        WHERE active= 1 AND masp ='$masp'
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
