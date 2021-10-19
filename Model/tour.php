<?php
    class Tour {
        //Thuộc tính
        var $tourID = null;
        var $tourName = null;
        var $startingPoint = null;
        var $destination = null;
        var $time = null;
        var $transport = null;
        var $begin = null;
        var $end = null;
        var $priceTour = null;
        var $sale = null;
        var $saleTour = null;
        var $numPeople = null;
        var $thumbnail = null;
        var $galleries = null;
        var $typeDestination = null;
        var $typeTour = null;
        var $schedule = null;
        var $detailTour = null;

        //Hàm tạo
        public function __construct () {
            if(func_num_args()==16) {
                $this->tourID=func_get_arg(0);
                $this->tourName=func_get_arg(1);
                $this->startingPoint=func_get_arg(2);
                $this->destination=func_get_arg(3);
                $this->time=func_get_arg(4);
                $this->transport=func_get_arg(5);
                $this->begin=func_get_arg(6);
                $this->end=func_get_arg(7);
                $this->priceTour=func_get_arg(8);
                $this->sale=func_get_arg(9);
                $this->saleTour=func_get_arg(10);
                $this->numPeople=func_get_arg(11);
                $this->thumbnail=func_get_arg(12);
                $this->galleries=func_get_arg(13);
                $this->typeTour=func_get_arg(14);
                $this->typeDestination=func_get_arg(15);
                $this->schedule=func_get_arg(16);
                $this->detailTour=func_get_arg(17);
            }
        }

        //Phương thức
        // Lấy dữ liệu từ database
            //Lấy tất cả tour
        public function getListProducts() {
            $db = new connect();
            $selectDB = "select * from tour";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy giới hạn 4 tour đầu
        public function getListProductsLimit() {
            $db = new connect();
            $selectDB = "select * from tour ORDER BY RAND() limit 4";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy tất cả tour đang sale
        public function getListProductSale() {
            $db = new connect();
            $selectDB = "select * from tour where saleTour > 0";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy giới hạn tour sale (4)
        public function getListProductSaleLimit() {
            $db = new connect();
            $selectDB = "select * from tour where saleTour > 0 ORDER BY RAND() limit 4";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy thông tin từng tour
        public function getDetailTour($id) {
            $db = new connect();
            $selectDB = "SELECT * FROM tour where tourID = $id";
            $result = $db->getInstance($selectDB);
            return $result;
        }
            //Lấy các tour thuộc các miền
        public function getListRegions($id) {
            $db = new connect();
            $selectDB = "SELECT * FROM tour where typeTour = $id";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy các tour cùng nơi khởi hành
        public function getListDestination($type) {
            $db = new connect();
            $selectDB = "select distinct destination,typeDestination from tour where typeTour = $type";
            $result = $db->getList($selectDB);
            return $result;
        }
        //   //Lấy các tour có điểm đến khác nhau 
        public function getListDestinationOther() {
            $db = new connect();
            $selectDB = "select distinct destination,typeDestination,thumbnail from tour ORDER BY RAND() limit 5";
            $result = $db->getList($selectDB);
            return $result;
        }
            //Lấy thông tin 1  tour theo điểm đến của tour
        public function getDestination($type) {
            $db = new connect();
            $selectDB = "select * from tour where typeDestination = '$type'";
            $result = $db->getList($selectDB);
            return $result;
        }

        public function getListDestinationLimit($type) {
            $db = new connect();
            $selectDB = "select * from tour where typeTour = $type ORDER BY RAND() limit 3";
            $result = $db->getList($selectDB);
            return $result;
        }
        
    }
?>