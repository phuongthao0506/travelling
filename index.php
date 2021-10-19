<?php
// include 'Model/tour.php';
// include 'Model/connect.php';
// include 'Model/page.php';
// include 'Model/customer.php';

//Tự động include các file PHP là class (OOP)
//sql_autoload_register("Phương thức")

//Cách 1: Đăng ký hàm xử lý autoload
// function với đầu vào là tham số OOP
spl_autoload_register('myModelClassLader');
function myModelClassLader($className)
{
    $path = "Model/";
    include $path . $className . '.php';
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Library CSS -->
    <link rel="stylesheet" href="Content/css/library/font-awesome.min.css">
    <link rel="stylesheet" href="Content/css/library/bootstrap.min.css">
    <link rel="stylesheet" href="Content/css/library/jquery-ui.min.css">
    <link rel="stylesheet" href="Content/css/library/owl.carousel.css">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="./Content/css/index.css">
</head>

<body>
 


        <!-- =======  HEADER ======  -->
        <?php
          
        include "View/navbar.php";
      
        $ctrl = 'home';
        if (isset($_GET['action'])) {
            $ctrl = $_GET['action'];
        }
        include 'Controller/' . $ctrl . '.php';
        include "View/footer.php";

        ?>
 

    <script type="text/javascript" src="node_modules/js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="node_modules/js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="node_modules/js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="node_modules/js/library/parallax.min.js"></script>
    <script type="text/javascript" src="node_modules/js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="node_modules/js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="node_modules/js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="node_modules/js/script.js"></script>
    <!-- End Main Js -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
</body>