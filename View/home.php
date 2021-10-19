<!-- //TOUR SALE  -->
<div class="sales">
    <!-- Title tour sale   -->
    <div class="title-wrap container-fluid">
        <div class="row">
            <div class="col-md-10 travel-title ">   
                    <h1>Ưu đãi tốt nhất hôm nay</h1>
                    <h4>Nhanh tay đặt ngay. Để mai kẻo lỡ !</h4>
            </div>
            <div class="col-md-2">
                <a href="index.php?action=home&act=saleTours" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">Xem thêm</a>
            </div>
            <!-- // LINK XEM THÊM --->

        </div>
    </div>
    <!-- CONTENT TOUR SALE   -->
    <div class="sales-cn container-fluid">
        <div class="row" style="margin-bottom:1%">
            <?php
            $tour = new Tour();
            $result = $tour->getListProductSaleLimit();
            while ($set = $result->fetch()) :
            ?>
                <!-- HostSales Item -->
                <div class="col-xs-6 col-md-3">
                    <div class="sales-item border border-info" style="height:580px ">
                        <figure class="home-sales-img">
                            <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>" title="">
                                <img src="Content/images/Tour/<?php echo $set['thumbnail']; ?>" alt="" class="card-img-top">
                            </a>
                            <figcaption>
                                Giảm giá <span><?php echo $set['sale']; ?></span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text" style="height:240px ">
                            <div class="home-sales-name-places" style="height:138px ">
                                <div class="home-sales-name">
                                    <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>" title="">
                                        <h3><?php echo $set['destination']; ?></h3>
                                    </a>
                                </div>
                                <div class="home-sales-places">
                                    <p>
                                        <?php echo $set['tourName']; ?>
                                    </p>
                                </div>
                            </div>

                            <hr class="hr">
                            <div class="price-box" style="height:62px ">
                                <span class="price old-price"> <del><?php echo number_format($set['priceTour']); ?>VNĐ</del></span>
                                <span class="price special-price"><?php echo number_format($set['saleTour']); ?>VNĐ<small>/người</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End vòng lặp -->
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>


