<?php
    $action ="cart";
    if(isset($_GET["act"])) {
        $action =$_GET["act"];
    }
    switch($action) {
        case "infoCustomer" :
            include "View/infoCustomer.php";
            break;
        // case "info" :
        //     $nameCus = $_POST["nameCus"];
        //     $emailCus = $_POST["emailCus"];
        //     $phoneCus = $_POST["phoneCus"];
        //     $addressCus = $_POST["addressCus"];
        //     $numOld = $_POST["numOld"];
        //     $numYoung = $_POST["numYoung"];
        //     //Mảng của 1 sản phẩm
        // $item = array(
        //     'nameCus'=>$nameCus,
        //     'emailCus'=>$emailCus,
        //     'phoneCus'=>$phoneCus,
        //     'addressCus'=>$addressCus,
        //     'numOld'=>$numOld,
        //     'numYoung'=>$numYoung,
        // );
        // $_SESSION['info']=$item;

        //     include "View/cart.php";
        //     break;
        case "bill" :
            $nameCus = $_POST["nameCus"];
            $emailCus = $_POST["emailCus"];
            $phoneCus = $_POST["phoneCus"];
            $addressCus = $_POST["addressCus"];
            $numOld = $_POST["numOld"];
            $numYoung = $_POST["numYoung"];
            
            //Mảng của 1 đơn hàng
        $item = array(
            'nameCus'=>$nameCus,
            'emailCus'=>$emailCus,
            'phoneCus'=>$phoneCus,
            'addressCus'=>$addressCus,
            'numOld'=>$numOld,
            'numYoung'=>$numYoung,
        );
        $_SESSION['info']=$item;
            include "View/bill.php";
            break;        
    }
?>