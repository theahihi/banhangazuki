<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class trangchuModel extends Model {
    protected $table1 = 'phong'; // Tên bảng
    protected $table2 = 'loaisp';
    protected $table3 = 'sanpham';
    protected $tablebl = 'binhluan';
    protected $tabledondathang = 'dondathang';
    protected $tablectdondathang = 'chitietdonhang';
    protected $tabletk='taikhoan';
    protected $tablekh='khachhang';
    protected $tablebh='baohanh';
    public function dondathang(){
        $sql = "SELECT * FROM $this->tabledondathang WHERE active=1  ORDER BY mahd DESC ";
        $result=$this->con->query($sql);
        return $result;
    } 

    public function chitietsanphammua(){
        $sql = "SELECT $this->tablectdondathang.*,$this->table3.tensp,$this->table3.dongia,$this->table3.anhhienthi1 FROM $this->tablectdondathang INNER JOIN $this->table3 ON $this->tablectdondathang.masp=$this->table3.masp
           ";
        $result=$this->con->query($sql);
        return $result;
    }

    public function gettaikhoan() {
        $sql = "SELECT * FROM $this->tabletk WHERE role=1 ";
        $result=$this->con->query($sql);
        return $result;   
    }

    public function khoatk($id){
        $sql = " UPDATE $this->tabletk SET trangthai=0 WHERE id_taikhoan=$id  ";
        $result=$this->con->query($sql);
        return $result;  
    }

    public function mokhoatk($id){
        $sql = " UPDATE $this->tabletk SET trangthai=1 WHERE id_taikhoan=$id  ";
        $result=$this->con->query($sql);
        return $result;  
    }

    public function xoatktv($id) {
        $sql = "  DELETE FROM $this->tabletk WHERE id_taikhoan=$id ";
        $result=$this->con->query($sql); 
        return $result;
    }

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
   
public function getloai() {
    $sql = "SELECT * FROM $this->table2";
    $result=$this->con->query($sql);
    return $result;
}

public function getsanphamtheoma($masp) {
    $sql = "SELECT * FROM $this->table3 WHERE masp ='$masp' ";
    $result=$this->con->query($sql);
    return $result;
}

public function updatesp($tensp,$anh_main,$thongtinsp,$maloai,$masp,$dongia,$soluong){
    $sql = "UPDATE $this->table3 SET tensp='$tensp', anhhienthi1='$anh_main',
    thongtin='$thongtinsp',
    maloai=$maloai,dongia=$dongia,
    soluong=$soluong
    WHERE masp= '$masp'
       ";
    $result=$this->con->query($sql);
    return $result;
}
public function getmaxmsp() {
    $sql = "SELECT MAX(CAST(SUBSTRING(masp, 3) AS UNSIGNED)) AS max_masp FROM $this->table3";
    $result=$this->con->query($sql);
    return $result;
}


public function insertsanpham($tensp, $anh_main,$thongtinsp, $maloai, $masp,$dongia,$soluong) {
    $sql = "INSERT INTO $this->table3 (masp, tensp, anhhienthi1,thongtin ,dongia, maloai,soluong) 
            VALUES ('$masp', '$tensp', '$anh_main','$thongtinsp',$dongia, $maloai,$soluong)";
    $result = $this->con->query($sql);
    return $result;
}

public function themdonhang($hoten,$sodienthoai,$email,$facebook,$ghichu,$tongtien,$phuongthuc) {
    $sql = "INSERT INTO $this->tabledondathang(hoten,sodienthoai,email,facebook,ghichu,tongtien,phuongthuc,ngaydat) 
            VALUES('$hoten','$sodienthoai','$email','$facebook','$ghichu',$tongtien,'$phuongthuc',NOW()) ";
    $result = $this->con->query($sql);
    return $result;
}

public function maxmhd() {
    $sql = "SELECT MAX(mahd) AS max FROM $this->tabledondathang";
    $result=$this->con->query($sql);
    return $result;
}
public function themchitiethd($mahd,$masp,$soluong,$dongia) {
    $sql = "INSERT INTO $this->tablectdondathang(mahd,masp,soluong,dongia)
            VALUES($mahd,'$masp',$soluong,$dongia) ";
    $result = $this->con->query($sql);
    return $result;
}


public function themkhachhang($hoten,$sodienthoai,$email,$facebook) {
    $sql = "INSERT INTO $this->tablekh(hoten,sodienthoai,email,facebook) 
            VALUES('$hoten','$sodienthoai','$email','$facebook') ";
    $result = $this->con->query($sql);
    return $result;
}

public function checksdtkh($sodienthoai){
    $sql = "SELECT * FROM $this->tablekh WHERE sodienthoai='$sodienthoai'";
    $result=$this->con->query($sql);
    return $result;
}
public function khachhang($sodienthoai){
    $sql = "SELECT * FROM $this->tablekh WHERE sodienthoai LIKE '%$sodienthoai%'";
    $result=$this->con->query($sql);
    return $result;
}

public function  dskh(){
    $sql = "SELECT $this->tablekh.*,SUM(tongtien) as tongtienmua,COUNT(mahd) as solanmua FROM $this->tablekh  INNER JOIN 
    $this->tabledondathang ON $this->tablekh.sodienthoai=$this->tabledondathang.sodienthoai
    GROUP BY $this->tablekh.sodienthoai  ORDER BY tongtienmua DESC
    ";
    $result=$this->con->query($sql);
    return $result;
}

public function soluongmua(){
    $sql = "SELECT sodienthoai,SUM(soluong) as soluong FROM $this->tabledondathang  INNER JOIN 
    $this->tablectdondathang ON $this->tabledondathang.mahd=$this->tablectdondathang.mahd
    GROUP BY $this->tabledondathang.sodienthoai
    ";
    $result=$this->con->query($sql);
    return $result;
}
public function getDoanhThuNgay($month = null) {
    $sql = "SELECT 
                DATE(ngaydat) AS ngay,
                SUM(tongtien) AS doanhthu
            FROM $this->tabledondathang
            WHERE active = 1";

    if ($month) {
        $sql .= " AND DATE_FORMAT(ngaydat, '%Y-%m') = ?"; // Filter by month
    }

    $sql .= " GROUP BY DATE(ngaydat)
              ORDER BY ngay ASC";

    $stmt = $this->con->prepare($sql);
    if ($month) {
        $stmt->bind_param("s", $month);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

 
public function giamsl($soluong,$masp){
    $sql ="UPDATE $this->table3 SET soluong= (SELECT soluong FROM $this->table3 WHERE masp = '$masp' )-$soluong      
    WHERE masp='$masp' ";
    $result=$this->con->query($sql);
    return $result;
  }

  public function dondathang_loc($noidung, $tungay, $denngay) {
    $sql = "SELECT * FROM dondathang WHERE active = 1";

    if (!empty($noidung)) {
        $sql .= " AND (mahd = '$noidung' OR sodienthoai LIKE '%$noidung%' OR hoten LIKE '%$noidung%' )";
    }

    if (!empty($tungay) && !empty($denngay)) {
        $sql .= " AND ngaydat BETWEEN '$tungay 00:00:00' AND '$denngay 23:59:59'";
    } elseif (!empty($tungay)) {
        $sql .= " AND ngaydat >= '$tungay 00:00:00'";
    } elseif (!empty($denngay)) {
        $sql .= " AND ngaydat <= '$denngay 23:59:59'";
    }

    $sql .= " ORDER BY mahd DESC";

    $result = $this->con->query($sql);
    return $result;
}
public function danhsachkhachhang_loc( $noidung ) {
    $sql = "SELECT 
                $this->tablekh.*, 
                SUM(tongtien) as tongtienmua, 
                COUNT(mahd) as solanmua 
            FROM $this->tablekh  
            INNER JOIN $this->tabledondathang 
            ON $this->tablekh.sodienthoai = $this->tabledondathang.sodienthoai ";

    $conditions = [];

    if (!empty($noidung)) {
        $conditions[] = "$this->tablekh.hoten LIKE '%$noidung%' OR $this->tablekh.sodienthoai LIKE '%$noidung%' ";
    }

  /*  if (!empty($sdt)) {
        $conditions[] = "$this->tablekh.sodienthoai LIKE '%$sdt%'";
    } */

    if (!empty($conditions)) {
        $sql .= "WHERE " . implode(" AND ", $conditions) . " ";
    }

    $sql .= "GROUP BY $this->tablekh.sodienthoai 
              ORDER BY tongtienmua DESC
             ";
    $result = $this->con->query($sql);
    return $result;
}

public function doanhthu(){
    $sql = "SELECT  SUM($this->tablectdondathang.soluong * $this->tablectdondathang.dongia) OVER () AS tong_giatri  FROM $this->tablectdondathang INNER JOIN $this->tabledondathang ON 
    $this->tablectdondathang.mahd=$this->tabledondathang.mahd
    WHERE $this->tabledondathang.active=1 AND  $this->tabledondathang.trangthai !=2 
      ";
    $result=$this->con->query($sql);
    return $result;
}





public function getAllWarranties() {
    $sql = "SELECT bh.*, sp.tensp FROM baohanh bh 
            LEFT JOIN sanpham sp ON bh.masp = sp.masp 
            ORDER BY bh.mabaohanh DESC";
    return $this->con->query($sql);
}

public function addWarranty($mabaohanh, $ngaybaohanh, $ngaytra, $masp, $loimota, $trangthai) {
    $sql = "INSERT INTO baohanh (mabaohanh, ngaybaohanh, ngaytra, masp, loimota, trangthai) 
            VALUES ('$mabaohanh', '$ngaybaohanh', '$ngaytra', '$masp', '$loimota', '$trangthai')";
    return $this->con->query($sql);
}

    // public function deleteWarranty($mabaohanh) {
    //     try {
    //         $sql = "DELETE FROM baohanh WHERE mabaohanh = ?";
    //         $stmt = $this->con->prepare($sql);
    //         $stmt->bind_param("s", $mabaohanh);
    //         if ($stmt->execute()) {
    //             return true;
    //         } else {
    //             error_log("Lỗi SQL khi xóa: " . $stmt->error); // Ghi log lỗi SQL
    //             return false;
    //         }
    //     } catch (Exception $e) {
    //         error_log("Exception khi xóa: " . $e->getMessage());
    //         return false;
    //     }
    // }
    

    public function donhangmoi(){
        $sql = "SELECT COUNT(mahd) as soluongdon 
                FROM $this->tabledondathang 
                WHERE DATE(ngaydat) = CURDATE()";
        $result = $this->con->query($sql);
        return $result;
    }
    private function generateWarrantyCode() {
        $sql = "SELECT MAX(CAST(SUBSTRING(mabaohanh, 3) AS UNSIGNED)) AS max_code FROM baohanh";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $nextCode = isset($row['max_code']) ? (int)$row['max_code'] + 1 : 1;

        return 'BH' . str_pad($nextCode, 3, '0', STR_PAD_LEFT);
    }
/// baohanh
    public function updateWarranty($mabaohanh, $ngaytra, $masp, $loimota, $trangthai) {
        $sql = "UPDATE baohanh SET ngaytra = '$ngaytra', masp = '$masp', loimota = '$loimota', trangthai = '$trangthai' 
                WHERE mabaohanh = '$mabaohanh'";
        return $this->con->query($sql);
    }
    public function getInvoiceDetails($mahd) {
        $sql = "SELECT ngaydat FROM dondathang WHERE mahd = '$mahd'";
        $result = $this->con->query($sql);
        if (!$result) {
            error_log("SQL Error: " . $this->con->error); // Ghi log lỗi SQL
        }
        return $result;
    }
    public function getInvoiceProducts($mahd) {
        $sql = "SELECT sp.masp, sp.tensp FROM chitietdonhang ctd 
                INNER JOIN sanpham sp ON ctd.masp = sp.masp 
                WHERE ctd.mahd = '$mahd'";
        return $this->con->query($sql);
    }
// baohanh
///hihi
    public function chitietdonhangmua($mahd){
        $sql = "SELECT $this->tablectdondathang.*,$this->table3.tensp,$this->table3.dongia,$this->table3.anhhienthi1 FROM $this->tablectdondathang INNER JOIN $this->table3 ON $this->tablectdondathang.masp=$this->table3.masp
        WHERE mahd=$mahd
           ";
        $result=$this->con->query($sql);
        return $result;
    }

    public function thongtinkh($mahd){
        $sql = "SELECT * FROM $this->tabledondathang WHERE active=1 AND mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function xoaspdonhang($masp,$mahd){
        $sql = "DELETE FROM $this->tablectdondathang WHERE masp='$masp' AND mahd=$mahd  ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function layslhanghoatrongdonhang($mahd,$masp){
        $sql = "SELECT * FROM $this->tablectdondathang WHERE masp='$masp'AND mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function giamslspkhidoitra($soluongbandau,$soluongtra,$mahd,$masp){
        $sql = "UPDATE $this->tablectdondathang SET soluong= $soluongbandau - $soluongtra  WHERE masp='$masp'AND mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function themsanphamdoitra($mahd,$masp,$soluong,$dongia){
        $sql = "INSERT INTO $this->tablectdondathang(mahd,masp,soluong,dongia) VALUES($mahd,'$masp',$soluong,$dongia) ";
        $result=$this->con->query($sql);
        return $result;
    }
     
    public function tangslspkhidoitra($soluongbandau,$soluong,$mahd,$masp){
        $sql = "UPDATE $this->tablectdondathang SET soluong= $soluongbandau + $soluong  WHERE masp='$masp'AND mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
   


    public function tinhlaitongtien($mahd){
        $sql = "SELECT  SUM($this->tablectdondathang.soluong * $this->tablectdondathang.dongia) OVER () AS tongtien  FROM $this->tablectdondathang
    WHERE mahd=$mahd ; 
      ";
    $result=$this->con->query($sql);
    return $result;
    }

    public function updatetongtien($mahd,$tongtienmoi){
        $sql = "UPDATE $this->tabledondathang SET tongtien= $tongtienmoi   WHERE  mahd=$mahd ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function doanhthutheothang() {
        $sql = "SELECT YEAR(ngaydat) AS nam,MONTH(ngaydat) AS thang,SUM(tongtien) AS doanhthu FROM $this->tabledondathang
            WHERE active = 1  GROUP BY YEAR(ngaydat), MONTH(ngaydat) ORDER BY nam ASC, thang ASC
        ";
        $result = $this->con->query($sql);
        return $result;
    }
    public function sanphambanchay() {
        $sql = "SELECT sp.tensp AS ten_san_pham, SUM(ct.soluong) AS tong_soluong_ban
                FROM $this->tablectdondathang AS ct INNER JOIN $this->table3 AS sp ON ct.masp = sp.masp GROUP BY sp.masp
                ORDER BY tong_soluong_ban DESC";
        $result = $this->con->query($sql);
        return $result;
    }

    public function doanhthutheokhachhang() {
        $sql = "SELECT 
                    ct.hoten, 
                    ct.sodienthoai, 
                    COUNT(DISTINCT ct.mahd) AS so_don_hang, 
                    SUM(ct.tongtien) AS tong_doanh_thu
                FROM $this->tabledondathang AS ct
                WHERE ct.active = 1
                GROUP BY ct.hoten, ct.sodienthoai
                ORDER BY tong_doanh_thu DESC";
        $result = $this->con->query($sql);
        return $result;
    }
    public function doanhthutheosanpham() {
        $sql = "SELECT $this->table3.tensp AS ten_san_pham, 
                       SUM($this->tablectdondathang.soluong * $this->tablectdondathang.dongia) AS tong_doanh_thu 
                FROM $this->tablectdondathang 
                INNER JOIN $this->table3 ON $this->tablectdondathang.masp = $this->table3.masp 
                GROUP BY $this->table3.tensp 
                ORDER BY tong_doanh_thu DESC";
    
        $result = $this->con->query($sql);
        return $result;
    }
    
    
    


// hihi
//haha
public function editkhachhang($hoten,$sodienthoai,$email,$id) {
    $sql = "UPDATE $this->tablekh SET hoten='$hoten', sodienthoai='$sodienthoai',
    email='$email' WHERE id=$id
     ";
$result = $this->con->query($sql);
return $result;

}



//haha
public function baohanhTrongThang($thang = null, $nam = null) {
    $where = "";
    if ($thang && $nam) {
        $where = "WHERE MONTH(dh.ngaydat) = $thang AND YEAR(dh.ngaydat) = $nam";
    }
    $sql = "
        SELECT 
            YEAR(dh.ngaydat) AS nam, 
            MONTH(dh.ngaydat) AS thang, 
            COUNT(bh.mabaohanh) AS tong_so_bao_hanh,
            COUNT(DISTINCT dh.mahd) AS tong_so_don_hang
        FROM dondathang AS dh
        LEFT JOIN chitietdonhang AS ctdh ON dh.mahd = ctdh.mahd
        LEFT JOIN baohanh AS bh ON ctdh.masp = bh.masp
        $where
        GROUP BY YEAR(dh.ngaydat), MONTH(dh.ngaydat)
        ORDER BY nam ASC, thang ASC
    ";
    return $this->con->query($sql);
}

public function sanphamBaoHanhNhieuNhat($thang = null, $nam = null) {
    $where = "";
    if ($thang && $nam) {
        $where = "WHERE MONTH(bh.ngaybaohanh) = $thang AND YEAR(bh.ngaybaohanh) = $nam";
    }
    $sql = "
        SELECT 
            YEAR(bh.ngaybaohanh) AS nam, 
            MONTH(bh.ngaybaohanh) AS thang, 
            sp.masp, 
            COUNT(bh.mabaohanh) AS tong_so_bao_hanh
        FROM baohanh AS bh
        INNER JOIN sanpham AS sp ON bh.masp = sp.masp
        $where
        GROUP BY YEAR(bh.ngaybaohanh), MONTH(bh.ngaybaohanh), sp.masp
        ORDER BY tong_so_bao_hanh DESC
        LIMIT 1
    ";
    return $this->con->query($sql);
}



//huhu

public function sanphamdoitra($mahd){
    $sql = "
    SELECT $this->tablectdondathang.*,$this->table3.tensp FROM $this->tablectdondathang INNER JOIN $this->table3 ON
    $this->tablectdondathang.masp=$this->table3.masp 
    "
    ;
    if(isset($mahd)){
        $sql.="WHERE mahd='$mahd' " ;
    }else{
        $sql.="WHERE mahd=' '";
    }

    $result = $this->con->query($sql);
    return $result; 
}





//huhu



















    // Lấy tất cả loại hàng
    public function getAll1() {
        $sql = "SELECT * FROM $this->table1";
        $result=$this->con->query($sql);
        return $result;
    }

    public function getAll2() {
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getAll3_home() {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC LIMIT 3 ";
        $result=$this->con->query($sql);
        return $result;
    }  
    public function getAllproduct() {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;

    }  
    public function getAllproductpage($offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset ";
         $result=$this->con->query($sql);
         return $result;

    }  

    public function getproductphong($id) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maphong=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getproductphongpage($id,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maphong=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getnamephong($id){
        $sql = "SELECT * FROM $this->table1 WHERE maphong=$id";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getproductloai($id) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maloai=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getproductloaipage($id,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maloai=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset";
         $result=$this->con->query($sql);
         return $result;
    }  

    public function getnameloai($id){
        $sql = "SELECT * FROM $this->table2 WHERE maloai=$id";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getCountProductsByRoom($maphong) {
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maphong";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong'];  
    }
    public function getCountProductsByLoai($maloai) {
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maloai";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong'];  
    }
    
    public function getcountcmt(){
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maloai";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong']; 
    }
    public function tongsp(){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham ";
        $result = $this->con->query($sql);
        return $result;
    }
    public function tongsploai($id){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE maloai= $id ";
        $result = $this->con->query($sql);
        return $result;
    }
    public function tongspphong($id){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE maphong= $id ";
        $result = $this->con->query($sql);
        return $result;
    }
   
    public function getAllproduct_timkiem($nd) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE tensp LIKE '%$nd%'
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;

    }  
    
    public function getcountloai(){
        $sql="SELECT $this->table2.*,COUNT($this->table3.masp) AS total_sp
        FROM $this->table2 
        LEFT JOIN $this->table3 ON $this->table2.maloai = $this->table3.maloai
        GROUP BY $this->table2.maloai";
        $result=$this->con->query($sql);
        return $result;
    }



    public function getAllproduct_timkiempage($nd,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE tensp LIKE '%$nd%'
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset ";
         $result=$this->con->query($sql);
         return $result;

    }  
    public function  tensp($nd){
        $sql = "SELECT tensp,anhhienthi1,masp,dongia FROM $this->table3 WHERE tensp LIKE '%$nd%' LIMIT 10 ";
        $result = $this->con->query($sql);
        return $result;
    }
     
    public function tongsptimkiem($nd){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE tensp LIKE '%$nd%' ";
        $result = $this->con->query($sql);
        return $result;
    }
   

    
    

    
}
/*
$obj=new CategoryModel();
$loaihang=new Category('L02','sfdàds11111111111','mota');
echo $obj->update($loaihang);*/
?>
