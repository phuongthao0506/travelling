<div class="container-fluid" style="background-color:white;">
    <div style="padding: 1%;border-bottom: 1px solid #80808036;border-top: 1px solid #80808036;">
        <h4><span style="color:gray">1. Nhập thông tin </span>>2.Thanh toán <span style="color:gray"> >3 Đặt tour thành công</span></h4>
    </div>

    <!-- Lấy thông tin của tour đã chọn bằng ID của no -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tour = new Tour();
        $result = $tour->getDetailTour($id);
    }
    ?>

    <!-- LẤY THÔNG TIN NGƯỜI ĐẶT TỪ FORM NHẬP THÔNG TIN (file infoCustomer.php) -->
    <?php
    if (isset($_SESSION['info'])) :
        $info = $_SESSION['info'];
    ?>
        <div class="billContent">
            <div class="row">
                <!-- INFO ========================     -->
                <div class=" content-left col-md-8 col-12" style="padding:2%;border-right: 2px solid #80808036;">
                    <div class="pay">
                        <h3 class="my-3 text-primary" style="margin-bottom: 3%;">Các Hình Thức Thanh Toán </h3>
                        <!-- ================================FORM DDK THANH TOAN -=====    -->
                        <form action="">
                            <div class="row">
                                <div class="col-md-6" style="padding: 0 5%;margin-bottom: 3%;">
                                    <div class="row" style="padding: 2%;background: #80808026;border-radius: 5px;">
                                        <div class="col-md-10">
                                            <h4>Tiền mặt</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4><input type="radio" id="css" name="fav_language" value="money" style="float: right;"></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5%;margin-bottom: 3%;">
                                    <div class="row" style="padding: 2%;background: #80808026;border-radius: 5px;">
                                        <div class="col-md-10">
                                            <h4> Chuyển khoản ngân hàng </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4><input type="radio" id="css" name="fav_language" value="money" style="float: right;"></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5%;margin-bottom: 3%;">
                                    <div class="row" style="padding: 2%;background: #80808026;border-radius: 5px;">
                                        <div class="col-md-10">
                                            <h4>ATM/Internet Banking</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4><input type="radio" id="css" name="fav_language" value="money" style="float: right;"></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding: 0 5%;margin-bottom: 3%;">
                                    <div class="row" style="padding: 2%;background: #80808026;border-radius: 5px;">
                                        <div class="col-md-10">
                                            <h4> Thanh toán bằng Momo </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4><input type="radio" id="css" name="fav_language" value="money" style="float: right;"></h4>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </form>
                    </div>
                    <div class="notePay" style="margin-bottom:3%">
                        <h3 class="my-3 text-primary" style="margin-bottom: 3%;"> <u>Lưu Ý Khi Thanh Toán : </u> </h3>
                        <div class="row">
                            <div class="col-sm-6" style="border-right: 2px dotted gray;">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title text-primary " style="font-size: 23px;"><i class="fas fa-money-bill-alt "></i>&nbsp;&nbsp;Tiền mặt</h4>
                                        <p class="card-text">- Khi thanh toán, Quý khách vui lòng cung cấp đầy đủ thông tin và thanh toán trước ngày khởi hành 05 ngày làm việc (tour ngày thường) và trước 10 ngày làm việc (tour dịp Lễ, Tết)”.</p>
                                        <p> - Quý khách vui lòng đến văn phòng gần nhất để thanh toán </p>
                                        <div>
                                            <p>
                                                <i class="fas fa-map-marker"></i>
                                                <b>HCM:</b> Lầu 2, Tòa nhà Anh Đăng, 215 Nam Kỳ Khởi Nghĩa, Phường 7, Quận 3
                                            </p>
                                            <p>
                                                <i class="fas fa-map-marker"></i>
                                                <b>HN:</b> Tầng 1, Tòa nhà Ladeco, 266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình
                                            </p>
                                            <p>
                                                <i class="fas fa-map-marker"></i>
                                                <b>Cần Thơ:</b> Tầng 7 - Tòa nhà STS - 11B Đại Lộ Hòa Bình, P. Tân An, Q. Ninh Kiều
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title text-primary " style="font-size: 23px;"><i class="fas fa-money-check-alt"></i>&nbsp;&nbsp;Chuyển khoản ngân hàng</h4>
                                        <p>-Book awesome tripsravel chấp nhận thanh toán chuyển khoản tại quầy giao dịch khách hàng</p>
                                        <p class="card-text">- Thanh toán chuyển khoản tới tài khoản ngân hàng của Book awesome trips.</p>
                                        <ul>
                                            <li>Tên Tài Khoản : Công ty CP Du lịch và Tiếp thị Book awesome trips</li>
                                            <li>Tên tài khoản viết tắt : AWESOME</li>
                                            <li>Số Tài khoản : 007 100 8888</li>
                                            <li>Ngân hàng : Vietcombank – CN Tp.HCM</li>
                                        </ul>
                                        <u>Lưu ý giữ lại hoá đơn chuyển tiền </u>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" style="border-top: 2px dotted gray; margin-top:3%">
                            <div class="col-sm-6" style="border-right: 2px dotted gray;">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title text-primary " style="font-size: 23px;"><i class="fas fa-mobile"></i>&nbsp;&nbsp;ATM/Internet Banking</h4>
                                        <p>- Hãy đảm bảo bạn đang sử dụng thẻ ATM do ngân hàng trong nước phát hành và đã được kích hoạt chức năng thanh toán trực tuyến.</p>
                                        <p class="card-text">- Thanh toán chuyển khoản tới tài khoản ngân hàng của Book awesome trips.</p>
                                        <ul>
                                            <li>Tên Tài Khoản : Công ty CP Du lịch và Tiếp thị Book awesome trips</li>
                                            <li>Tên tài khoản viết tắt : AWESOME</li>
                                            <li>Số Tài khoản : 007 100 8888</li>
                                            <li>Ngân hàng : Vietcombank – CN Tp.HCM</li>
                                        </ul>
                                        <u>Lưu ý chụp màn hình hoá đơn chuyển tiền </u>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary " style="font-size: 23px;"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Thanh toán bằng Momo</h4>
                                        <p class="card-text">- Thanh toán bằng Momo tới tài khoản momo của Book awesome trips.</p>
                                        <ul>
                                            <li>Tên Tài Khoản : Công ty CP Du lịch và Tiếp thị Book awesome trips</li>
                                            <li>Tên tài khoản viết tắt : AWESOME</li>
                                            <li>Số momo : 0368967399</li>

                                        </ul>
                                        <u>Lưu ý chụp màn hình hoá đơn chuyển tiền </u>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i><b style="font-size: 15px;color: red;">*</b > <b class="text-danger">Vé du lịch là hợp đồng lữ hành và được lập thành 2 bản, mỗi bên giữ một bản, có giá trị như nhau.</b></i>
                </div>


                <!-- ===== tom tat ===   -->
                <div class="col-md-4 col-12 right" style="padding: 2%";>
                    <div class="group-checkout">
                        <h3 class="my-3 text-primary" style="margin-bottom: 5%;">Tóm tắt chuyến đi</h3>
                        <div class="product">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="Content/images/Tour/<?php echo $result['thumbnail']; ?>" alt="" style="width:100%;border-radius: 10px;">
                                </div>
                                <!-- =========   TÊN TOUR chuyen qua  chữ hoa het =========   -->
                                <div class="col-md-8">
                                    <h4 class="title"><?php echo $result['tourName']; ?></h4>
                                    <!-- ============ dtb lay thoi gian xuất phát và kêt sthucs =========  -->
                                    <p class="time"> <b> <?php echo $result['begin']; ?> - <?php echo $result['end']; ?> </b> </p>
                                </div>
                            </div>

                        </div>
                        <div class="go-tour" style="margin:8% auto; position: relative;">
                            <div class="start" style=" margin-bottom: 24%;">
                                <div class="start-content">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="far fa-calendar-plus" style="font-size:30px"></i>
                                        </div>
                                        <!-- =========  dtb lấy ngày xuat phat , ngay ket thuc, thoi gian dia diem =======   -->
                                        <div class="col-md-9">
                                            <h4>Bắt đầu chuyến đi</h4>
                                            <p>Khởi hành : <b style="color:red;font-size:15px"> <?php echo $result['begin']; ?></b></p>
                                            <h5> <?php echo $result['startingPoint']; ?>
                                                <span style="margin: auto 1%">
                                                    <i class="fas fa-car-side"></i>
                                                </span>
                                                 <?php echo $result['destination']; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="middle" style="width: 100%;
                                             height: 168px;
                                             position: absolute;
                                             top: 30px;
                                             margin: 0 3.5%;
                                             border-left: 2px dotted gray;">
                            </div>
                            <div class="end">
                                <div class="end-content">
                                    <div class="row" style="border-bottom: 1px solid #d5d5d5">
                                        <div class="col-md-2">
                                            <i class="far fa-calendar-check" style="font-size:30px"></i>
                                        </div>
                                        <!-- =========  dtb lấy ngày xuat phat , ngay ket thuc, thoi gian dia diem =======   -->
                                        <div class="col-md-9">
                                            <h4>Kết thúc chuyến đi</h4>
                                            <p>Khởi hành : <b style="color:red;font-size:15px"> <?php echo $result['end']; ?></b></p>
                                            <h5> <?php echo $result['destination']; ?>
                                                <span style="margin: auto 1%">
                                                    <i class="fas fa-car-side"></i>
                                                </span>
                                                 <?php echo $result['startingPoint']; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="detail">
                                <table style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th class="l1">
                                                <h3>Hành khách</h3>
                                            </th>
                                            <th class="l2 text-right">
                                                <span style="font-size: 20px;">
                                                    <?php echo ((int)($info['numOld']) + (int)($info['numYoung'])); ?>
                                                </span> <i class="fas fa-users" style="font-size: 20px;"></i>
                                                <p class="add-more"></p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Người lớn </td>

                                            <td class="t-price text-right" id="AdultPrice"><?php echo (int)($info['numOld']);  ?> x <?php $_SESSION['priceOld'] = ($result['saleTour'] > 0) ? ((int)$result['saleTour']) : ((int)$result['priceTour']);
                                                                                                                                    echo number_format($_SESSION['priceOld']); ?>  vnđ</td>

                                        </tr>
                                        <tr style="border-bottom: 1px solid #d5d5d5">
                                            <td>Trẻ em</td>
                                            <td class="t-price text-right" id="ChildrenPrice"><?php echo (int)($info['numYoung']); ?> x <?php $_SESSION['priceYoung'] = ($result['saleTour'] > 0) ? ((int)$result['saleTour'] * 70 / 100) : ((int)$result['priceTour'] * 70 / 100);
                                                                                                                                        echo number_format($_SESSION['priceYoung']); ?>  vnđ</td>
                                        </tr>
                                        <br>
                                        <br>

                                        <tr class="total">
                                            <td>
                                                <h4 style="color:red;">Tổng cộng</h4>
                                            </td>
                                            <td class="t-price text-right" id="TotalPrice">
                                                <h3 style="color:red;">
                                                    <?php $_SESSION['totalMoney'] = ((int)($info['numOld']) * (int)($_SESSION['priceOld'])) + ((int)($info['numYoung']) * (int)($_SESSION['priceYoung']));
                                                    echo number_format($_SESSION['totalMoney']); ?> vnđ
                                                </h3>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                                <a href="index.php?action=home&act=success&id=<?php echo $result[0]; ?>"><button style="width: 100%; margin: 5% 0; font-size: 20px; border-radius: 8px;" class="btn btn-danger">ĐẶT NGAY</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php endif; ?>
        </div>
</div>