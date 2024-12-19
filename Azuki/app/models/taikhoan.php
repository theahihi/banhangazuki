<?php
    class taikhoan{
        var $username;
        var $password;
        var $hoten;
        var $sdt;
        var $email;
        function __construct($username,$password,$hoten,$sdt,$email){
            $this->username=$username;
            $this->password=$password;
            $this->hoten=$hoten;
            $this->sdt=$sdt;
            $this->email=$email;
            
        }
        function Username()
        {
            return $this->username;
        }
        function Password()
        {
            return $this->password;
        }
        function Hoten()
        {
            return $this->hoten;
        }
        function Sdt()
        {
            return $this->Sdt;
        }
        function Email()
        {
            return $this->email;
        }
    }
?>