<!-- --------destinations -------- -->



<div class="destinations-cn">
    <!-- Background -->
    <div class="bg-parallax bg-2 container-fluid" style="height: 744px"></div>
    <div class="title-wrap container-fluid">
        <div class="row">
            <div class="col-md-10 travel-title ">
                <h1>Khám phá Việt Nam </h1>
                <h4>Các điểm đến được yêu thích nhất!</h4>
            </div>
            <div class="col-md-2">
                <a href="index.php?action=home&act=tours" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">Xem thêm</a>
            </div>
            <!-- // LINK XEM THÊM --->
        </div>
    </div>
    <div class="container-fluid">
        <div class="div-destinations">
            <!-- lấy dữ liệu dtb số địa điểm đến k trùng nhau lặp lên 168-233 , link chi tiết dùng lọc để lây tour đia diem ,cho i = 0 va i +5 -->
            <?php
            $tour = new Tour();
            $result = $tour->getListDestinationOther();
            $arrTours = $result->fetchAll();
            ?>
            <div class="content-destinations" style="padding:1% ; padding-bottom: 1%;">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                        <div class="destinations-item">
                            <a href="index.php?action=home&act=search&ac=<?php echo $arrTours[0]['typeDestination']?>&name=<?php echo $arrTours[0]['destination'] ?>" title="">
                                <figure class="destinations-img" style="position: relative;">

                                    <img src="Content/images/tour/<?php echo $arrTours[0]['thumbnail']; ?>" alt="">

                                    <div class="test">
                                        <h2><?php echo $arrTours[0]['destination']; ?></h2> <!-- địa điểm đến  -->
                                    </div>
                                </figure>
                            </a>
                        </div>

                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="destinations-item ">
                            <a href="index.php?action=home&act=search&ac=<?php echo $arrTours[1]['typeDestination']?>&name=<?php echo $arrTours[1]['destination'] ?>" title="">
                                <figure class="destinations-img">

                                    <img src="Content/images/tour/<?php echo $arrTours[1]['thumbnail']; ?>" alt="">

                                    <div class="test">
                                        <h2><?php echo $arrTours[1]['destination']; ?></h2> <!-- địa điểm đến  -->
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:2%">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="destinations-item ">
                            <a href="index.php?action=home&act=search&ac=<?php echo $arrTours[2]['typeDestination']?>&name=<?php echo $arrTours[2]['destination'] ?>" title="">
                                <figure class="destinations-img">

                                    <img src="Content/images/tour/<?php echo $arrTours[2]['thumbnail']; ?>" alt="">

                                    <div class="test">
                                        <h2><?php echo $arrTours[2]['destination']; ?></h2> <!-- địa điểm đến  -->
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="destinations-item ">
                            <a href="index.php?action=home&act=search&ac=<?php echo $arrTours[3]['typeDestination']?>&name=<?php echo $arrTours[3]['destination'] ?>" title="">
                                <figure class="destinations-img">

                                    <img src="Content/images/tour/<?php echo $arrTours[3]['thumbnail']; ?>" alt="">

                                    <div class="test">
                                        <h2><?php echo $arrTours[3]['destination']; ?></h2> <!-- địa điểm đến  -->
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                        <div class="destinations-item ">
                            <a href="index.php?action=home&act=search&ac=<?php echo $arrTours[4]['typeDestination']?>&name=<?php echo $arrTours[4]['destination'] ?>" title="">
                                <figure class="destinations-img">

                                    <img src="Content/images/tour/<?php echo $arrTours[4]['thumbnail']; ?>" alt="">

                                    <div class="test">
                                        <h2><?php echo $arrTours[4]['destination']; ?></h2> <!-- địa điểm đến  -->
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Destinations Content -->