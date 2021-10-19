<section class="tour-detail container-fluid" style="padding: 0">
    <!-- KIỂM TRA TỒN TẠI CỦA ID VÀ XUẤT TOUR THEO ID -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tour = new Tour();
        $result = $tour->getDetailTour($id); //1 mảng
    }
    ?>
    <!-- img thumbnail   -->
    <div class="pageTitle page-image-tour-tag " style="position: relative; ;">
        <img src="Content/images/Tour/<?php echo $result['thumbnail']; ?>" alt="" style="height: 480px; width: 100%;">
        <div class="background-description">
            <!-- =========  tên tour ==============  -->
            <p class="tour-banner-title"><?php echo $result['tourName']; ?></p>
        </div>
    </div>

    <!-- PAGE CONTENT -->
    <section class="mainContentSection singlePackage " style="background-color: white;">
        <div class="promotion-tour  " style="background-color: white;">
            <div class="text-promotion-tour  " style="color: white;; font-size:14px;font-weight: bold;padding: 0">
                <!-- ==========gia ======  -->
                <?php
                if ($result['saleTour'] > 0) :
                ?>
                    <p class="price old-price" style="background: red;width: 25%;padding: 1%;font-size: 16px; border-radius: 0 53px 53px 0;"> <del><?php echo number_format($result['priceTour']); ?>VNĐ</del><br> <!-- gia that  -->
                        Giá tour trọn gói: <?php echo number_format($result['saleTour']); ?>VNĐ</p> <!-- gia giam  -->
                <?php
                else :
                ?>
                    <p class="price old-price" style="background: red;width: 25%;padding: 1%;font-size: 16px; border-radius: 0 53px 53px 0;">
                        <!-- gia that  -->
                        Giá tour trọn gói: <?php echo number_format($result['priceTour']); ?>VNĐ
                    </p>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div class=" detail-tour-kiritm" style="padding: 0 3%;">
            <div class="row" style="line-height: 30px;">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="info-tour" style="position: relative;">

                        <div class="row-info">
                            <div class="row">
                                <!-- ====== thoi gian phuong tien  ..... =======   -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Thời gian:</span>
                                    <b><?php echo $result['time']; ?></b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Phương tiện:</span>
                                    <b class="text-strong">
                                        <?php echo $result['transport']; ?>
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Điểm xuất phát:</span>
                                    <b class="text-strong"><?php echo $result['startingPoint']; ?> </b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Điểm đến:</span>
                                    <b class="text-strong"><?php echo $result['destination']; ?></b>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row-description">
                        <h4 class="title-description">Tour này có gì hay</h4>
                        <!-- ======= lich trinh tour ====  -->
                        <?php echo $result['schedule']; ?>
                    </div>
                    <!-- ======= anh phu ====  dung vong lap -->
                    <div class="row row-image-box isdesktop">
                        <!-- TÁCH CHUỖI CHUYỂN THÀNH ARRAY  -->
                        <?php
                        $sub = explode(',', $result['galleries']);
                        foreach ($sub as $key => $galleries) :
                        ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 isotopeSelector " style="margin-bottom: 25px">
                                <img style="width:100%; height:180px" alt="image tour" src="Content/images/Tour/<?php echo $galleries; ?>">
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <!-- ========= lịch trinh chi tiet ===   -->
                    <div class="content-detail">
                        <h3 class="title-description"> <u>Lịch trình tour</u> </h3>
                        <?php echo $result['detailTour']; ?>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="row" style="padding: 5%; border-left: 2px dotted #80808063;">
                        <div class="col-md-12 col-sm-4 col-xs-12">
                            <a href="index.php?action=cart&act=infoCustomer&id=<?php echo $result['tourID']; ?>"><button type="button" class=" btn-success" style=" border: 1px solid #ccc;padding: 3% 4%;border-radius: 10px; margin-bottom: 15%; width: 100%;">
                                    <h4><i class="fas fa-cart-plus" style="font-size: 25px; margin-right: 3%;"> </i>ĐẶT NGAY</h4>
                                </button></a>
                        </div>
                        <div>
                            <div class="col-md-12 col-sm-4 col-xs-12">
                                <div class="right-detail-tour-box" id="boxInfoSuportSgt" style=" border: 1px solid #ccc;padding: 3% 4%;border-radius: 10px; margin-bottom: 15%;">
                                    <h4 class="title">Hỗ trợ khách hàng</h4>
                                    <ul class="list-rows">
                                        <li class="item">

                                            <i class="fas fa-phone"></i>
                                            <span class="text">Hotline: 1900 1808</span>

                                        </li>
                                        <li class="item">

                                            <i class="fas fa-envelope"></i>
                                            <span class="text">bookawsome@gmail</span>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-4 col-xs-12">
                                <div class="right-detail-tour-box" style=" border: 1px solid #ccc;padding: 3% 4%; border-radius: 10px; margin-bottom: 15%;">
                                    <h4 class="title">Vì sao nên mua tour online?</h4>
                                    <ul class="list-rows">
                                        <li class="item">An toàn - Bảo mật</span> </li>
                                        <li class="item">Tiện lợi, tiết kiệm thời gian</span> </li>
                                        <li class="item">Không tính phí giao dịch</span> </li>
                                        <li class="item">Giao dịch bảo đảm</span> </li>
                                        <li class="item">Nhận thêm ưu đãi</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-4 col-xs-12">
                                <div class="right-detail-tour-box" style=" border: 1px solid #ccc;padding: 3% 4%; border-radius: 10px;margin-bottom: 15%">
                                    <h4 class="title">Thương hiệu uy tín</h4>

                                    <ul class="list-rows">
                                        <li class="item">Thành lập từ năm 1975</span> </li>
                                        <li class="item">Thương hiệu lữ hành hàng đầu</span></li>
                                        <li class="item">Thương hiệu quốc gia</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== SERVICE=====   -->
    <div style=" margin: 2% 0; background:white">

        <div class="col-xs-12" style="background:white;padding: 2% 3%;">
            <h2 class="tourDetailheadLine text-primary">Dịch vụ đi kèm</h2>
            <div class="row tourService">
                <div class="col-xs-6 col-sm-4 tourServiceItem">
                    <span><i class="fas fa-check text-primary" style="font-size:20px"></i></i> &nbsp;&nbsp;Bảo hiểm</span>
                </div>
                <div class="col-xs-6 col-sm-4 tourServiceItem">
                    <span><i class="fas fa-utensils text-primary" style="font-size:20px"></i> &nbsp;&nbsp;Bữa ăn</span>
                </div>
                <div class="col-xs-6 col-sm-4 tourServiceItem">
                    <span><i class="fas fa-flag text-primary" style="font-size:20px"></i> &nbsp;&nbsp;Hướng dẫn viên</span>
                </div>

                <div class="col-xs-6 col-sm-4 tourServiceItem" style="margin-top:20px">
                    <span><i class="fas fa-ticket-alt text-primary" style="font-size:20px"></i> &nbsp;&nbsp;Vé tham quan</span>
                </div>
                <div class="col-xs-6 col-sm-4 tourServiceItem" style="margin-top:20px">
                    <span><i class="fas fa-car text-primary" style="font-size:20px"></i>&nbsp; &nbsp;Xe đưa đón</span>
                </div>

            </div>
        </div>
        <div class="col-xs-12" style="background:white; padding: 2% 3%;">
            <h2 class="text-primary"> Chính sách phụ thu</h2>
            <div class="col-xs-12">
                <p> -&nbsp;Chi phí ngủ phòng đơn (1người/1 phòng) : 600.000 vnd/phòng<br></p>
                <p>-&nbsp;Chi phí ngủ phòng đôi (2người/1phòng) : 800.000 vnd/phòng<br></p>
                <p> -&nbsp;Chi phí ngủ phòng 4 người (4người/1phòng) : 1.200.000 vnd/phòng<br></p>
                <p>-&nbsp;Bé dưới 3 tuổi miễn phí bố mẹ vui lòng tự chuẩn bị đồ ăn, Bé ngủ cùng với bố mẹ </p>
                <p>- Bé từ 4 - 11 tuổi tính 70% giá vé người lớn. Ngủ chung với bố mẹ.&nbsp;</p>
                <p><span style="text-decoration: underline;">Lưu ý</span>: 2 người lớn chỉ kèm 1 trẻ em, trẻ em thứ 2 phụ thu 50% giá vé (thu khi nhận phòng khách sạn)để đảm bảo suất ngủ cho bé.&nbsp;</p>
            </div>

        </div>

    </div>
    <div style="clear: both;"></div>
    <!-- ======   DIEU KHOAN ===  -->
    <div style="background:white;padding:1% 3%;margin: 2% 0;">
        <h1>  <u> Điều khoản</u> </h1>
        <div id="accordion" style="border: 1px solid #ccc; border-radius: 10px; ">

            <div class="card active">
                <div class="card-header" id="headingOne">
                    <div class="mb-0 collapse2">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <u><h3>Giá Bao Gồm</h3></u>
                        </button>
                    </div>
                </div>
                <div id="collapseOne" class="collapse3 active" aria-labelledby="headingOne" data-parent="#accordion" style=" padding:2%">
                    <div>
                        <p><span style="text-decoration: underline;">Vận chuyển:</span></p>
                        <p>- Xe khách đưa đón theo chương trình</p>
                        <p>- Tàu tham quan vịnh Hạ Long.</p>
                        <p>- Chèo Kayak&nbsp;</p>
                        <p><span style="text-decoration: underline;">Lưu trú:</span></p>
                        <p>- Nghỉ đêm tại khách sạn 3 sao tại Bãi Cháy (02-04 khách/phòng)</p>
                        <p><span style="text-decoration: underline;">Khác:</span></p>
                        <p>- Vé thắng cảnh và các bữa ăn theo chương trình</p>
                        <p>- Bữa ăn theo chương trình.&nbsp;</p>
                        <p>- Hướng dẫn viên Anh – Việt kinh nghiệm</p>
                        <p>- Bảo hiểm tai nạn du lịch trọn tour (tách biệt và nằm ngoài với các loại bảo hiểm khác như bảo hiểm trách nhiệm dân sự trên xe ô tô, máy bay, tàu thuỷ nếu có, hoặc bảo hiểm theo các loại vé thắng cảnh có bao gồm trong tour).</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0 collapse2">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <u><h3> Giá Không Bao Gồm</h3></u>  
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style=" padding:2%">
                    <div>
                        <p>-&nbsp;VAT (10%)</p>
                        <p>- Đồ uống trong các bữa ăn, trong phòng nghỉ và các chi phí cá nhân khác.</p>
                        <p>- Các chi phí tham quan ngoài chương trình và chi phí cá nhân khác</p>
                        <p>- Tiền típ cho lái xe và hướng dẫn viên.</p>
                        <p>-&nbsp;Vé cáp treo,tàu thuyền ( nếu có)<br></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0 collapse2">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <u><h3>Hủy Đổi Vé</h3></u> 
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style=" padding:2%">
                    <div>
                        <b>Chính sách hủy:</b><br>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Điều kiện hủy tour (ngày thường)</span></p>
                        <p style="text-align: justify;">-&nbsp;Sau khi đăng ký huỷ tour mất 10% giá tour</p>
                        <p style="text-align: justify;">- Hủy tour 10 ngày trước ngày khởi hành chịu phí 30% giá tour (Không tính ngày lễ và chủ nhật). Phí hủy vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;">- Hủy tour 8 ngày trước ngày khởi hành chịu phí 50% giá tour (Không tính ngày lễ và chủ nhật).Phí hủy vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;">- Hủy tour 5 ngày trước ngày khởi hành chịu phí 100% giá tour (Không tính ngày lễ và chủ nhật).Phí hủy vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Điều kiện hủy tour (ngày lễ tết)</span></p>
                        <p style="text-align: justify;">- Các ngày lễ tết việc dời ngày và hủy tour mất 100% giá tour.</p>
                        <b>Chính sách đổi:</b><br>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Điều kiện dời ngày khởi hành (chỉ được dời&nbsp; 1 lần)</span></p>
                        <p style="text-align: justify;">- Dời trước 10 ngày so với ngày khởi hành: phí dời 0% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời&nbsp; vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;">- Trước 6 so với ngày khởi hành: phí dời 20% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;">- Trước 4 so với ngày khởi hành: phí dời 40% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng.</p>
                        <p style="text-align: justify;">- Sau thời gian trên: phí dời 100% tiền tour (Không tính ngày lễ và chủ nhật).Phí dời vé máy bay theo qui định của hãng.</p>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading4">
                    <h5 class="mb-0 collapse2">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                         <u><h3> Lưu ý</h3></u>   
                        </button>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion" style=" padding:2%">
                    <div>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Lưu ý về việc mua đồ đặc sản</span></p>
                        <p style="text-align: justify;">- Trường hợp mua đồ đặc sản phải được đựng trong thùng xốp dán kín và sạch sẽ. Lái xe có quyền từ chối vận chuyển nếu Quý khách mang theo đồ đặc sản lên xe mà không được đóng gói cẩn thận.</p>
                        <p style="text-align: justify;">- Không mang bất kỳ đồ đặc sản gì lên khoang ghế ngồi. Lái xe có quyền từ chối vận chuyển đồ đặc sảnnếu như Quý khách mua quá nhiều đồ và không có chỗ để trong cốp xe.<br>Những lưu ý khác:</p>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Quý khách chỉ được mua bảo hiểm khi thoả mãn những điều kiện dưới đây:</span></p>
                        <p style="text-align: justify;">- Đặt tour trước tối thiểu 2 ngày so với ngày khởi hành (không tính ngày lễ, thứ 7 và chủ nhật)</p>
                        <p style="text-align: justify;">- Phải gửi đầy đủ thông tin chính xác và đầy đủ về Họ tên + ngày tháng năm sinh</p>
                        <p style="text-align: justify;">- Là người có quốc tịch Việt Nam</p>
                        <p style="text-align: justify;">- Quý khách đi tour (đặc biệt là các tour liên quan đến tàu thủy, tàu hỏa, máy bay… hoặc các tour đi đến các vùng biên giới) phải mang theo giấy tờ tùy thân hợp pháp (CMTND/Thẻ căn cước/Hộ chiếu). Trẻ dưới 14 tuổi tối thiểu phải mang theo giấy khai sinh. Trẻ em từ 14 tuổi trở lên bắt buộc phải có Thẻ căn cước hoặc hộ chiếu.</p>
                        <p style="text-align: justify;">- Nên mang theo thuốc đau bụng do tiêu chảy, thuốc cảm sốt thông thường</p>
                        <p style="text-align: justify;">- Quý khách là người ăn chay vui lòng mang thêm đồ ăn chay theo để đảm bảo khẩu vị của mình</p>
                        <p style="text-align: justify;">- Bất cứ dịch vụ nào trong tour nếu Quý khách không sử dụng cũng không được hoàn lại</p>
                        <p style="text-align: justify;">- Hướng dẫn viên có quyền sắp xếp lại thứ tự các điểm thăm quan cho phù hợp điều kiện từng ngày khởi hành cụ thể nhưng vẫn đảm bảo tất cả các điểm thăm quan trong chương trình.</p>
                        <p style="text-align: justify;"><span style="text-decoration: underline;">Trách nhiệm của khách hàng:</span></p>
                        <p style="text-align: justify;">- Khách hàng tự chịu trách nhiệm về sức khỏe và các bệnh mãn tính (tim mạch, huyết áp, tiểu đường, xương khớp…), bệnh bẩm sinh, bệnh tiềm ẩn, bệnh HIV AIDS, bệnh rối loạn tinh thần và thần kinh, phụ nữ đang mang thai... là những bệnh không nằm trong phạm vi được bảo hiểm. Khi cần thiết Quý khách phải viết cam kết về bệnh tật của bản thân khi tham gia tour. Bên tổ chức tour không chịu trách nhiệm đối với những trường hợp Quý khách không khai báo bệnh, khai báo không trung thực cũng như các trường hợp nằm ngoài phạm vi bảo hiểm du lịch trong tour.</p>
                        <p style="text-align: justify;">- Khách hàng phải tự bảo quản tài sản riêng của mình trong mọi trường hợp và ở tất cả các nơi trong suốt chuyến đi. Bên tổ chức tour không chịu trách nhiệm về những mất mát về tiền bạc, tư trang quý, vé máy bay, và tài sản riêng của khách hàng trong chuyến đi.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- =========  TOUR LIEN QUAN   ========   -->
    <div class="tourMore" style="padding:2%">
        <h1>Tour du lịch hấp dẫn khác</h1>
        <div class=" detail-tour-kiritm">
            <div class="row" style="margin:0">
                <?php
                $typeTour = $result['typeTour'];
                $tour = $tours->getListProductSaleLimit();
                while ($set  = $tour->fetch()) :
                ?>

                    <!-- ========== vong lap 4 lan lay ten tour    -->
                    <div class="col-md-3 col-sm-3 col-xs-3 tourMore-item">
                        <a href="index.php?action=home&act=detailTour&id=<?php echo $set['tourID']; ?>" title="">
                            <div class="card" style="width: 26rem;border: 1px solid #80808040;background: white;">

                                <figure class="home-sales-img" style="height: 18rem;">

                                    <img src="Content/images/Tour/<?php echo $set['thumbnail']; ?>" alt="" class="card-img-top" style="height: 100%;width: 100%;">

                                </figure>
                                <div class="card-body" style="padding:4% ; height:170px">
                                    <h4 class="card-text" style="height:90px"><?php echo $set['tourName']; ?> </h4>
                                    <div style="color:red">
                                        <del><?php echo number_format($set['priceTour']); ?>VNĐ</del><br> <!-- gia that  -->
                                        Giá tour trọn gói: <?php echo number_format($set['saleTour']); ?>VNĐ</p>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                ?>

            </div>
        </div>
    </div>


</section>