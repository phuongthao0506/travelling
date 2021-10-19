 <!-- Hot Sales Content -->
 <div class="container-fluid" style="background-color:white">
     <br>
     <!-- XỬ LÝ THANH NAVBAR VỀ CÁC MIỀN  -->
     <?php
        if (isset($_GET['id'])) {
            if ($_GET["id"] == 1) {
                echo '
                <div class="title-wrap ">
                    <div class="ravel-title ">   
                            <h1> <u> DANH SÁCH CÁC TOUR MIỀN BẮC</u></h1>
                    </div>
        
                </div> ';
            } else if ($_GET["id"] == 2) {
                echo '
                <div class="title-wrap container-fluid">
                    <div class="ravel-title ">   
                            <h1> <u> DANH SÁCH CÁC TOUR MIỀN TRUNG</u></h1>
                    </div>
                </div> ';
            } else {
                echo '
                <div class="title-wrap container-fluid">
                    <div class="ravel-title ">   
                            <h1> <u>DANH SÁCH CÁC TOUR MIỀN NAM<</u> /h1>
                    </div>
                </div> ';
            }
        }
        ?>

     <?php
        $tour = new Tour();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $tour->getListRegions($id);
        } else if (isset($_GET['ac'])) {
            $typeDestination = $_GET['ac'];
            $result = $tour->getDestination($typeDestination);
        }
        if (isset($_GET['ac'])) :
            if (isset($_GET['name'])) :
                $name =$_GET['name'];
        ?>

             <div class="">
                 <?php
                    echo "
                <div class='title-wrap '>
                    <div class='ravel-title'>   
                    ";
                    echo "<h1 > <u> Danh sách các Tour " . $name . "</u> </h1>";
                    echo " </div>
                </div> ";
                    ?>
             </div>
     <?php
            endif;
        endif;
        ?>

     <?php
        while ($set = $result->fetch()) :

        ?>
         <div class=" my-3" style="margin:3% auto">
             <div class="tour-item" style="padding-bottom: 2%; border-bottom: 2px dotted #d3cdcd;">
                 <div class=" row ">
                     <!-- Confidence -->
                     <div class=" col-md-3">
                         <!-- === LINK XEM CHI TIẾT TOUR TỪ ẢNH CHÍNH   -->
                         <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>">
                             <img src="Content/images/tour/<?php echo $set['thumbnail']; ?>" alt="" style="width:100%;border-radius: 10px 0px 0px 10px;">
                         </a>
                     </div>
                     <div class="col-md-7" style="border-right: 2px dotted #d3cdcd;">
                         <!-- //  TÊN ĐỔI SANG IN HOA HẾT  -->
                         <div class="cruise-name">
                             <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>">
                                 <h2><?php echo $set['tourName']; ?> </h2>
                             </a>
                         </div>
                         <div class="content-item">
                             <!-- ======= diem xuat [hat - diem den ] chuyen het qua chu hoa  -->
                             <div class="departure cruise-name" style="margin-top:18px">
                                 <h4> <?php echo $set['begin']; ?> - <?php echo $set['end']; ?></h4>
                             </div>
                             <div class="time">Thời gian : <b><?php echo $set['time']; ?></b> </div>
                             <div class="vehicle">
                                 Phương tiện : <b> <?php echo $set['transport']; ?> </b> </div>
                             <div class="plan">
                                 <h5> Lịnh trình tour:</h5>
                                 <!-- LẤT DTB LỊNH TRÌNH TOUR LÊN .   -->
                                 <div class="plan-detail">
                                     <?php echo $set['schedule']; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">CHI TIẾT</a>
                     </div>
                 </div>
             </div>
         </div>

     <?php

        endwhile;
        echo " </div>"
        ?>