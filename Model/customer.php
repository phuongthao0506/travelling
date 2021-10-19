<?php
    class Customer {
        //Thuộc tính
        var $codeCustomer = null;
        var $nameCustomer = null;
        var $userName = null;
        var $passWord = null;
        var $email = null;
        var $address = null;
        var $phone = null; 

        //Hàm tạo
        public function __construct() {
        
        }

        //Phương thức
        //Phương thức insert vào bảng khách hàng
        public function insertUser($nameCustomer, $userName, $passWord,$email, $address, $phone) {
            $query ="insert into customer(codeCustomer,nameCustomer,userName,passWord,email,address,phone)
            values(null,?,?,?,?,?,?)";
            $db = new connect();
            $stm = $db->execP($query);

            $stm->execute([$nameCustomer, $userName, $passWord, $email, $address, $phone]);
        }
        //Phương thức lưu dữ liệu lên database
        public function handleReg() {
            //Thuộc tính
            $nameCustomer = $_POST['nameCustomer'];
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $confirmPass = $_POST['confirmPass'];
            $crypt = md5($passWord);
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            
            $this->insertUser($nameCustomer, $userName, $crypt, $email, $address, $phone);
            echo '<script> alert("Đăng ký thành công"); </script>';
        }

        //Login
        public function login($userName, $passWord) {
            $select = "select * from customer where userName = '$userName' and passWord='$passWord'";
            $db = new connect();
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;    
        }
    }

    
?>