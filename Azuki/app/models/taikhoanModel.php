<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class taikhoanModel extends Model {
    protected $tabletk ="taikhoan";
    protected $table2 = 'loaisp';
    public function checktk($username,$password) {
        $sql = "SELECT * FROM $this->tabletk WHERE username= '$username' AND password='$password' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function checkusernametk($username){
        $sql = "SELECT * FROM $this->tabletk WHERE username= '$username' ";
        $result=$this->con->query($sql);
        return $result;

    } 
    public function checkpasstk($password){
        $sql = "SELECT * FROM $this->tabletk WHERE password='$password' ";
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
    
    public function checkfgtk($fgtk){
        $sql = "SELECT * FROM $this->tabletk WHERE forgottoken='$fgtk' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function doimk($password_hash,$token){
        $sql="UPDATE $this->tabletk SET password='$password_hash' WHERE forgottoken='$token'  ";
        $result=$this->con->query($sql);
        return $result;
    }



        
    public function themtaikhoan($object) {
        $thuocTinh =get_object_vars($object);
        $slthuoctinh=count($thuocTinh);
        $query = "INSERT INTO $this->tabletk(username,password,hoten,sdt,email) VALUES ("; 
        $i=1;
        foreach ($thuocTinh as $key => $value) {
            
            if (is_string($value))
                $query.="'$value'";
            else
                $query.="$value";
            if ($i!=$slthuoctinh)
                $query.=",";
            $i=$i+1;

        }
        $query.=")";
        echo $query ;
       
        return $this->con->query($query);
    }
   
    public function checkemail($email){
        $sql = "SELECT * FROM $this->tabletk WHERE email='$email' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function updatetoken($fgtk,$email){
        $sql = "UPDATE $this->tabletk SET forgottoken='$fgtk' WHERE email ='$email' ";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getAll2() {
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getthongtincanhan(){
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function capnhatthongtin($hoten,$sdt,$email,$username){
        $sql = "UPDATE $this->tabletk SET hoten='$hoten', sdt='$sdt',email='$email' WHERE username='$username' ";
        $result=$this->con->query($sql);
        return $result;
    }


    public function checksdttkcapnhat($sdt,$username){
        $sql = "SELECT * FROM $this->tabletk WHERE sdt='$sdt' AND username != '$username' ";
        $result=$this->con->query($sql);
        return $result;

    } 
    public function checkemailtkcapnhat($email,$username){
        $sql = "SELECT * FROM $this->tabletk WHERE email='$email'  AND username != '$username' ";
        $result=$this->con->query($sql);
        return $result;

    } 
    public function capnhatmk($username,$password_hash){
        $sql = "UPDATE $this->tabletk SET password='$password_hash' WHERE username='$username' ";
        $result=$this->con->query($sql);
        return $result;
    }
        
    }

?>
