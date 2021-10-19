<div id="header" class="">
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-2">
                <div class="logo float-left">
                    <a href="index.php" title=""><img src="Content/images/logo-header.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-10">
                <nav class="navigation" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li class="current-menu-parent">
                                        <!-- LINK CÁC TOUR CÓ NƠI KHỞI HÀNH Ở MIỀN BẮC  -->
                                        <a href="index.php?action=home&act=search&id=1" title="">TOUR MIỀN BẮC</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $tours = new Tour();
                                            $result = $tours->getListDestination(1);
                                            while ($set = $result->fetch()) :
                                            ?>
                                                <!-- LINK ĐẾN TOUR THEO ĐIỂM ĐẾN -->
                                                <li><a href="index.php?action=home&act=search&ac=<?php echo $set['typeDestination'] ?>&name=<?php echo $set['destination'] ?>" title=""><?php echo $set['destination'] ?></a></li>
                                            <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </li>

                                    <li>
                                        <!-- LINK CÁC TOUR CÓ NƠI KHỞI HÀNH Ở MIỀN TRUNG  -->
                                        <a href="index.php?action=home&act=search&id=2" title="">TOUR MIỀN TRUNG</a>
                                        <ul class="sub-menu">

                                            <?php
                                            $tours = new Tour();
                                            $result = $tours->getListDestination(2);
                                            while ($set = $result->fetch()) :
                                            ?>
                                                <!-- LINK ĐẾN TOUR THEO ĐIỂM ĐẾN -->
                                                <li><a href="index.php?action=home&act=search&ac=<?php echo $set['typeDestination'] ?>&name=<?php echo $set['destination'] ?>" title=""><?php echo $set['destination'] ?></a></li>
                                            <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </li>

                                    <li>
                                        <!-- LINK CÁC TOUR CÓ NƠI KHỞI HÀNH Ở MIỀN NAM  -->
                                        <a href="index.php?action=home&act=search&id=3" title="">TOUR MIỀN NAM</a>
                                        <ul class="sub-menu">

                                            <?php
                                            $tours = new Tour();
                                            $result = $tours->getListDestination(3);
                                            while ($set = $result->fetch()) :
                                            ?>
                                                <!-- LINK ĐẾN TOUR THEO ĐIỂM ĐẾN -->
                                                <li><a href="index.php?action=home&act=search&ac=<?php echo $set['typeDestination'] ?>&name=<?php echo $set['destination'] ?>" title=""><?php echo $set['destination'] ?></a></li>
                                            <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </li>

                                    <!-- ============= HIỂN THỊ TÊN USER =============  -->
                                    <li>
                                        <?php
                                        // KIỂM TRA TỒN TẠI ĐĂNG NHẬP CỦA KHÁCH HÀNG VÀ HIỆN TÊN KHÁCH HÀNG TRÊN NAVBAR
                                        if (isset($_SESSION['codeCustomer']) && isset($_SESSION['nameCustomer'])) {
                                            $name = $_SESSION['nameCustomer'];
                                        ?>

                                            <a style="color: red; margin-top: 20px; margin-left: 0px;" href="" title=""> <?php echo "Xin chào | " . $name; ?> </a>
                                    <li> <a href="index.php?action=login&act=log_out">ĐĂNG XUẤT</a> </li>
                                <?php
                                        } else {
                                            echo '<li>
                                    <a href="index.php?action=login" title="">TÀI KHOẢN </a>
                                    <ul class="sub-menu">
                                        <li> <a href="index.php?action=login" title="">ĐĂNG NHẬP</a> </li>
                                        <li> <a href="index.php?action=register">ĐĂNG KÝ</a> </li>    
                                    </ul>
                                </li>';
                                            echo '<li><a style="color: red; margin-top: 20px; margin-left: 0px;">' . "Xin chào Quý khách " . '</a></li>';
                                        }
                                ?>
                                </li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


    </div>
</div>