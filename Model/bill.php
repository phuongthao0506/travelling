<?php
    class Bill {
        //Thuộc tính
        var $codeBill = null;
        var $codeCustomer = null;
        var $dataOrder = null;
        var $totalMoney = null;
        //Hàm tạo
        public function __construct() {}

        //Phương thức
            //Insert thông tin vào bảng Bill trên Database
        public function insertBill($codeCustomer,$dateOrder,$totalMoney) {
            $query ="insert into bill(codeBill,codeCustomer,dateOrder,totalMoney)
            values(null,?,?,?)";
            $db = new connect();
            $stm = $db->execP($query);

            $stm->execute([$codeCustomer,$dateOrder,$totalMoney]);
        }
            //Đem các thuộc tình cần vào câu truy vấn
        public function handleBill() {
            //Thuộc tính
            if(isset($_SESSION['totalMoney'])) {
                if(isset($_SESSION['codeCustomer'])) {
                    $codeCustomer = $_SESSION["codeCustomer"];
                }       
                $dateOrder = date('Y-m-d');
                $totalMoney = $_SESSION['totalMoney'];
            }
            $this->insertBill($codeCustomer,$dateOrder,$totalMoney);
        }  
    }
    

?>