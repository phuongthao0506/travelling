<?php
    $action ="home";
    if(isset($_GET["act"])) {
        $action =$_GET["act"];
    }
    switch ($action) {
        case "home":
            include "View/header.php";
            include 'View/home.php';
            include 'View/favoriteDestination.php';
            include 'View/blog.php';
            include "View/contact.php";
            break;
        case "tours":
            include "View/header.php";
            include 'View/tour_list.php';
            break;
        case "saleTours":
            include "View/header.php";
            include 'View/tour_list.php';
            break;  
        case "detailTour":
            include 'View/tour_detail.php';
            break; 
        case "search":
            include "View/header.php";
            include 'View/tourSearch.php';
            break;
               
        case "success":
            $bill = new Bill();
            $bill->handleBill();

            $id = $_GET["id"];
            $detailBill = new DetailBill();
            $detailBill->handleDetailBill($id); 
            include "View/success.php";
            break;    
    }
?>