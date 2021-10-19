<?php
    class Page {
        //Phương thức tìm start
        // cho $limit = 8
            function findStart($limit) {
                //kiểm tra thử current_page trên URL có tồn tại hay không?
                if(!isset($_GET['page']) || ($_GET['page']) == 1) {
                    $start = 0 ;
                    $_GET['page'] = 1;
                }else {
                    // Current_page = $_GET['page'];
                    $start = ($_GET['page'] - 1) * $limit;
                }
                return $start;
            }
        //Phương thức tìm total_record
            function findPage($count, $limit) {
                $page= (($count % $limit) == 0) ? $count / $limit : floor($count / $limit)+1;
                return $page;   
            }    
    }
?>