<?php
    class DetailBill {
        //thuộc Tính
        var $codeBill = null;
        var $numOld = null;
        var $moneyOld = null;
        var $numYoung = null;
        var $moneyYoung = null;
        var $tourID = null;

        //Hàm tạo
        public function __construct() {}

        //Phương thức
            //Insert thông tin vào bảng Bill trên Database
            public function insertDetailBill($codeBill,$numOld,$moneyOld,$numYoung,$moneyYoung,$tourID) {
                $query ="insert into detailbill(codeBill,numOld,moneyOld,numYoung,moneyYoung,tourID)
                values(?,?,?,?,?,?)";
                $db = new connect();
                $stm = $db->execP($query);

                $stm->execute([$codeBill,$numOld,$moneyOld,$numYoung,$moneyYoung,$tourID]);
            }
                //Đem các thuộc tình cần vào câu truy vấn
            public function handleDetailBill($idTour) {
                //Thuộc tính
                    //Các thuộc tính này đã lưu khi nhấn nút Thanh Toán
                $numOld = $_SESSION['info']['numOld'];
                $moneyOld = $numOld * $_SESSION['priceOld'];

                $numYoung = $_SESSION['info']['numYoung'];
                $moneyYoung =$numYoung * $_SESSION['priceYoung'];

                //Sau khi add thành công vào bảng bill, ta lấy codeBill cuối cùng(vì vừa mới nhận vào)
                // Insert tiếp vào bảng detailbill
                $select = "select codeBill from bill order by codeBill desc limit 1";
                $db = new connect();
                $result = $db->getInstance($select);
                $codeBill = $result[0];

                //Sau khi bấm nút Thanh Toán có kèm thì $_GET['id'] , ta lấy đưa vào phương thức để xuất đúng tour vào bảng detailbill
                $selectTourID = "SELECT tourID from tour where tourID ='$idTour'";
                $db = new connect();
                $row2 = $db->getInstance($selectTourID);

                $tourID = $row2[0];
                
                $this->insertDetailBill($codeBill,$numOld,$moneyOld,$numYoung,$moneyYoung,$tourID);   
            }  
    }
?>