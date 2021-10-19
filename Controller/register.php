<?php 
    $action = 'register';
    if(isset($_GET['act'])){
        $action = $_GET['act'];
    }
    switch($action) {
        case 'register':
            include 'View/register.php';
            break;
        case 'register_action':
           $user = new Customer();
           $user->handleReg();
           
            include 'View/home.php';
            break;
    }
?>