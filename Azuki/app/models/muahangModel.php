<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class muahangModel extends Model {
    protected $table2 = 'loaisp';
    protected $tablesp = 'sanpham';
    protected $tablectdondathang = 'chitietdonhang';
    protected $tabledondathang = 'dondathang';
    public function getAll2() {
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getthongtinsanpham($masp){
        $sql = "SELECT * FROM $this->tablesp WHERE masp='$masp'";
        $result=$this->con->query($sql);
        return $result;
    }
    public function checktrungspgiohang($masp,$user){
        $sql = "SELECT * FROM $this->tablectdondathang INNER JOIN $this->tabledondathang 
        ON $this->tablectdondathang.mahd=$this->tabledondathang.mahd 
        WHERE masp='$masp' AND active=0 AND user='$user' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function maxmahd(){
        $sql = "SELECT MAX(mahd) as shd FROM $this->tabledondathang ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function checkgiohang($user){
        $sql = "SELECT * FROM $this->tabledondathang WHERE active=0 AND user ='$user'";
        $result=$this->con->query($sql);
        return $result;
    }
    public function themgiohang($sohoadon,$user){
        $sql = "INSERT INTO $this->tabledondathang(mahd,active,user) VALUES('$sohoadon',0,'$user') ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function themsanphamvaogiohang($sohoadon,$masp,$dongia){
        $sql = "INSERT INTO $this->tablectdondathang(mahd,masp,dongia) VALUES('$sohoadon','$masp','$dongia') ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function Getgiohang($user){
      
            $sql = "SELECT * FROM $this->tablectdondathang INNER JOIN $this->tablesp ON $this->tablectdondathang.masp=$this->tablesp.masp
            INNER JOIN $this->tabledondathang ON $this->tablectdondathang.mahd =$this->tabledondathang.mahd
            WHERE active= 0 AND user ='$user'
               ";
            $result=$this->con->query($sql);
            return $result;
        
    }
    public function Gethoanthanhthanhtoansp($mahd){
      
        $sql = "SELECT $this->tablectdondathang.soluong, $this->tablesp.tensp,$this->tablesp.dongia  FROM $this->tablectdondathang INNER JOIN $this->tablesp ON $this->tablectdondathang.masp=$this->tablesp.masp  WHERE mahd=$mahd";
        $result=$this->con->query($sql);
        return $result;
    
}
public function getmaxmahd(){
    $sql = "SELECT MAX(mahd) as maxmhd FROM $this->tabledondathang  ";
        $result=$this->con->query($sql);
        return $result;
}

public function themmuangay($mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$user,$tongtien,$pttt,$ngaydat){
    $sql = "INSERT INTO $this->tabledondathang VALUES ('$mahd', '$hoten', '$diachinhan', '$sodienthoai', '$email', '$ghichu', '$user', '$tongtien', '$pttt', '$ngaydat', 1,0)";
    $result=$this->con->query($sql);
    return $result;
}
public function themmuangayct($mahd,$masp,$soluong,$dongia){
    $sql = "INSERT INTO $this->tablectdondathang VALUE($mahd,'$masp',$soluong,$dongia) ";
    $result=$this->con->query($sql);
    return $result;
}
public function Gethoanthanhthanhtoannd($mahd){
      
    $sql = "SELECT * FROM $this->tabledondathang  WHERE mahd=$mahd";
    $result=$this->con->query($sql);
    return $result;

}
public function Gethoanthanhthanhmuangay($masp){
      
    $sql = "SELECT * FROM $this->tablesp  WHERE masp='$masp'";
    $result=$this->con->query($sql);
    return $result;

}


    public function getmahdgiohang($user){
        $sql = "SELECT * FROM $this->tabledondathang WHERE active=0 AND user='$user'";
        $result=$this->con->query($sql);
        return $result;
    }

    public function xoaspgiohang($mahd,$masp){
        $sql = "DELETE FROM $this->tablectdondathang WHERE mahd=$mahd AND masp='$masp'  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getctdondathang($mahd){
        $sql = "SELECT * FROM $this->tablectdondathang WHERE mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function xoagiohang($mahd,$user){
        $sql = "DELETE FROM $this->tabledondathang WHERE mahd=$mahd AND user='$user'  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function updatedondathangkhimua($tongtien,$ngaydat,$mahd,$hoten,$diachinhan,$sodienthoai,$email,$ghichu,$pttt){
        $sql ="UPDATE $this->tabledondathang SET tongtien=$tongtien, ngaydat='$ngaydat',active=1,hoten='$hoten',diachinhan='$diachinhan',sodienthoai='$sodienthoai',email='$email',ghichu='$ghichu',phuongthuc='$pttt' WHERE mahd=$mahd  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function updatectdondathangkhimua($soluong,$mahd,$masp){
      $sql ="UPDATE $this->tablectdondathang SET soluong=$soluong WHERE mahd=$mahd AND masp='$masp' ";
      $result=$this->con->query($sql);
      return $result;
    }

    public function getlichsumuahang($user){
        $sql = "SELECT * FROM $this->tabledondathang WHERE  user='$user' AND active = 1 ORDER BY mahd DESC  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function giamslsp($soluong,$masp){
        $sql ="UPDATE $this->tablesp SET soluong= (SELECT soluong FROM $this->tablesp WHERE masp = '$masp' )-$soluong      
        WHERE masp='$masp' ";
        $result=$this->con->query($sql);
        return $result;
      }
    
      
    public function getsanpham(){
        $sql = "SELECT * FROM $this->tablesp  ";
        $result=$this->con->query($sql);
        return $result;
    }
    

    
}
/*
$obj=new CategoryModel();
$loaihang=new Category('L02','sfdàds11111111111','mota');
echo $obj->update($loaihang);*/
?>
