<?php
    class User{
        private $tenkh;
        private $email;
        private $tendangnhap;
        private $password;
        private $sdt;
        private $sex;
       public function set_tenkh($tenkh){
            $this->tenkh=$tenkh;
        }
        public function get_tenkh(){
            return $this->tenkh;
        }
        public function set_email($email) {
            $this->email = $email;
        }
        public function get_email() {
            return $this->email;
        }
        public function set_tendangnhap($tendangnhap) {
            $this->tendangnhap = $tendangnhap;
        }
        public function get_tendangnhap() {
            return $this->tendangnhap;
        }
        public function set_password($password) {
            $this->password = $password;
        }
        public function get_password() {
            return $this->password;
        }
        public function set_sdt($sdt) {
            $this->sdt = $sdt;
        }
        public function get_sdt() {
            return $this->sdt;
        }
        public function set_sex($sex) {
            $this->sex = $sex;
        }
        public function get_sex() {
            return $this->sex;
        }
        
        function __construct($tenkh,$email,$tendangnhap,$password,$sdt,$sex) {
            $this->tenkh = $tenkh;
            $this->email= $email;
            $this->tendangnhap= $tendangnhap;
            $this->password = $password;
            $this->sdt= $sdt;
            $this->sex= $sex;
        }
        function ShowUser(){
            echo "Tên:".$this->tenkh."<br>";
            echo "Email:".$this->email."<br>";
            echo "Tên đăng nhập:".$this->tendangnhap."<br>";
            echo "Password:".$this->password."<br>";
            echo "Số điện thoại:".$this->sdt."<br>";
            echo "Giới tính:".$this->sex."<br>";
        }
       
    }
?>