<?php
    $action = "login";
    if(isset($_GET['act'])) {
        $action = $_GET['act']; //login_action;
    }

    switch($action) {
        case "login" :
            include 'View/login.php';
        break;

        case "login_action" :
            $username = $_POST['userName'];
            echo $username . '</br>';
            $password = $_POST['passWord'];
            echo $password . '</br>';
            $crypt = md5($password);
            echo $crypt . '</br>';
            
            $user = new Customer();
            $row = $user->login($username, $crypt); //= $set[]

            if($row != false) {
                $_SESSION['codeCustomer'] = $row[0];
                $_SESSION['nameCustomer'] = $row[1];
                $_SESSION['userName'] = $row[2];
                $_SESSION['passWord'] = $row[3];
                $_SESSION['email'] = $row[4];
                $_SESSION['address'] = $row[5];
                $_SESSION['phone'] = $row[6];

                echo '<script> alert("Đăng nhập thành công"); </script>';
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home&act=home"/>';
            }  
        break;

        case "log_out":
            if(isset($_SESSION['codeCustomer'])) {
                unset($_SESSION['codeCustomer']);
            }    
            echo '<script> alert("Đăng xuất thành công"); </script>';
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home&act=home"/>';
        break;

    }

    
?>