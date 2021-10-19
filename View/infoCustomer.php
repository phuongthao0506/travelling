<div class="booking-tour container-fluid" style="background: white;line-height: 30px">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tour = new Tour();
        $result = $tour->getDetailTour($id);
    }
    ?>
    <!-- =========== tong quan chuyen di ========    -->
    <div style="padding: 1%;border-bottom: 1px solid #80808036;border-top: 1px solid #80808036;">
        <h4>1. Nhập thông tin <span style="color:gray"> >2.Thanh toán >3 Đặt tour thành công</span></h4>
    </div>
    <div class="container-fluid" style="margin:2% auto">
        <div class="tour-item" style="padding-bottom: 2%; border-bottom: 2px dotted #d3cdcd;">
            <div class=" row ">
                <!-- Confidence -->
                <div class="col-md-3">

                    <a href="">
                        <img src="Content/images/Tour/<?php echo $result['thumbnail']; ?>" alt="" style="width:100%;border-radius: 10px 0px 0px 10px;">
                    </a>
                </div>
                <div class="col-md-7" style="border-right: 2px dotted #d3cdcd;">
                    <!-- //  TÊN ĐỔI SANG IN HOA HẾT  -->
                    <div class="cruise-name">
                        <h2 href="tour-detail.html">
                            <h3><?php echo $result['tourName']; ?></h3>
                        </h2>
                    </div>
                    <div class="content-item">
                        <!-- ======= diem xuat [hat - diem den ] chuyen het qua chu hoa  -->
                        <div class="departure cruise-name" style="margin-top:18px">
                            <h4> <?php echo $result['startingPoint']; ?> - <?php echo $result['destination']; ?></h4>
                        </div>
                        <!-- ============ dtb lay thoi gian xuất phát và kêt sthucs =========  -->
                        <p class="time">Thời gian : <b><?php echo $result['begin']; ?> - <?php echo $result['end']; ?> </b> </p>
                        <p class="vehicle">
                            Phương tiện : <b> <?php echo $result['transport']; ?></b>
                        </p>
                        <p class="departurePlace">
                            Nơi khởi hành : <b><?php echo $result['startingPoint']; ?> </b>

                        </p>
                    </div>
                </div>
                <!-- === thieu link chi tiet   -->
                <div class="col-md-2">
                    <a href="index.php?action=home&act=detailTour&id=<?php echo $result['tourID']; ?>" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">CHI TIẾT</a>
                </div>
            </div>
        </div>
    </div>


    <!-- ==========  thong tin lien lac ===========    -->
    <!-- FORM THÔNG TIN KHÁCH HÀNG -->
    <form method="post" action="index.php?action=cart&act=bill&id=<?php echo $result['tourID']; ?>">
        <section class="checkout-main order-tour">
            <div class="container-fluid">
                <div class="row">
                    <!-- INFO ========================     -->
                    <div class=" content-left col-md-8 col-12" style="padding:2%;border-right: 2px solid #80808036;">
                        <div class="description hardCode">
                            <p> <b> <u>Lưu ý :</u> </b><i> Khách từ 70 tuổi trở lên và khách mang thai
                                    trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của Book awesome.
                                    Không áp
                                    dụng đăng ký tour online đối với khách từ 70 tuổi trở lên.</i>
                            </p>
                        </div>
                        <div class="form-customer">

                            <h1>Thông tin liên lạc</h1>
                            <i> Thông tin Vé điện tử của quý khách sẽ được gửi đến đây </i>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Họ và Tên <b style="font-size: 15px;color: red;">*</b></label>
                                    <input name="nameCus" type="text" class="form-control" placeholder="Họ và Tên" value="<?php if (isset($_SESSION["codeCustomer"])) {
                                                                                                                                echo $_SESSION["nameCustomer"];
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email <b style="font-size: 15px;color: red;">*</b></label>
                                    <input name="emailCus" type="text" class="form-control" placeholder="Email" value="<?php if (isset($_SESSION["codeCustomer"])) {
                                                                                                                            echo $_SESSION["email"];
                                                                                                                        } else {
                                                                                                                            echo "";
                                                                                                                        } ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Số điện thoại <b style="font-size: 15px;color: red;">*</b></label>
                                    <input name="phoneCus" type="text" class="form-control" placeholder="Số điện thoại" value="<?php if (isset($_SESSION["codeCustomer"])) {
                                                                                                                                    echo $_SESSION["phone"];
                                                                                                                                } else {
                                                                                                                                    echo "";
                                                                                                                                } ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Địa chỉ <b style="font-size: 15px;color: red;">*</b></label>
                                    <input name="addressCus" type="text" class="form-control" placeholder="Địa chỉ" value="<?php if (isset($_SESSION["codeCustomer"])) {
                                                                                                                                echo $_SESSION["address"];
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>">
                                </div>
                            </div> <!-- END row -->


                        </div>

                        <!-- ========== .   số lượng hành khách ========   -->
                        <div class="customer">
                            <h3 style="margin:0">Hành khách</h3>
                            <i><u>Lưu ý : </u></i>
                            <p style="color: red;">- Bé dưới 3 tuổi miễn phí bố mẹ vui lòng tự chuẩn bị đồ ăn, Bé ngủ cùng với bố mẹ</p>
                            <p style="color: red;">- Bé từ 4 - 12 tuổi tính 70% giá vé người lớn. Ngủ chung với bố mẹ. </p>
                            <p style="color: red;">- 2 người lớn chỉ kèm 1 trẻ em, trẻ em thứ 2 phụ thu 50% giá vé ( thu khi nhận phòng khách sạn ) để đảm bảo suất ngủ cho bé. </p>

                            <div>
                                <div class="tour-item">
                                    <div class=" row ">
                                        <div class=" col-md-4" style="border-right: 1px solid #80808036; padding: 1% 2%; ">
                                            <div class="">
                                                <div class="row">
                                                    <div class=" col-md-5">
                                                        <h5> <b>Người lớn</b> </h5>
                                                        <p style="font-size: 12px;line-height: 1px;"> > 12 tuổi</p>
                                                    </div>
                                                    <div class=" col-md-7">
                                                        <input onchange="getValue()" id="numOld" name="numOld" type="number" class="form-control" placeholder="0" style="width: 50%; float: left;" value="0">&nbsp; /người
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-4" style="border-right: 1px solid #80808036; padding: 1% 2%;">
                                            <div class="">
                                                <div class="row">
                                                    <div class=" col-md-5">
                                                        <h5>Trẻ em </h5>
                                                        <p style="font-size: 12px;line-height: 1px;">
                                                            &lt; 12 tuổi</p>
                                                    </div>
                                                    <div class=" col-md-7">
                                                        <input onchange="getValue()" id="numYoung" name="numYoung" type="number" class="form-control" placeholder="0" style="width: 50%; float: left;" value="0">&nbsp; /người
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-4" style="padding: 1% 2%;">
                                            <div class="">
                                                <div class="row">
                                                    <div class=" col-md-5">
                                                        <h5>Em bé</h5>
                                                        <p style="font-size: 12px;line-height: 1px;">
                                                            0-3 tuổi</p>
                                                    </div>
                                                    <div class=" col-md-7">
                                                        <input onchange="getValue()" id="numChild" name="numChild" type="number" class="form-control" placeholder="0" style="width: 50%; float: left;" value="0">&nbsp; /người
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ======= THONG TIN CHI TIET ====== -->
                            <!-- dùng vòng lặp for hiển thị ra dòng nhập thông tin  -->
                            <div class="detail-customer">
                                <div class="list">
                                    <h3>Thông tin hành khách</h3>
                                    <div class="customer-contact-inner" action="" method="get" id="formMember" style="margin: 2% 0;">
                                        <!-- ===========  dùng vòng lặp để hiện nhiều row============   -->
                                    </div>
                                </div>
                            </div>
                            <div style=" clear:both"> </div>
                            <!-- ============ CHỌN PHÒNG ===========     -->
                            <div class="typeRoom">
                                <h3>Đặt phòng theo yêu cầu </h3>
                                <div class="row">
                                    <!-- =======  phong don     -->
                                    <div class=" col-md-4" style="padding: 1% 2%;">
                                        <div class="card" style="border: 1px solid #80808040;background: white;">
                                            <figure class="home-sales-img" style="height: 18rem;">
                                                <img src="Content/images/Tour/pd.jpeg" alt="" class="card-img-top" style="height: 100%;width: 100%;">
                                            </figure>
                                            <div class="card-body text-center" style="padding:4%">
                                                <h4 class="card-text">Phòng đơn <p>(1 người/1 phòng)</p>
                                                </h4>
                                                <div style="color:red">
                                                    600.000 vnd/phòng
                                                </div>
                                                <table>
                                                    <td style="font-size: 12px">Số lượng : </td>
                                                    <td style="width: 43%;">
                                                        <input name="singleRoom " type="number" class="form-control" style="width: 59%;margin-left: 50%;" placeholder="0">
                                                    </td>
                                                    <td style="font-size: 12px">&nbsp; /phòng</td>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ======   phong doi 2 nguoi ==  -->
                                    <div class=" col-md-4" style="padding: 1% 2%;">
                                        <div class="card" style="border: 1px solid #80808040;background: white;">
                                            <figure class="home-sales-img" style="height: 18rem;">
                                                <img src="Content/images/Tour/pdoi1a.jpeg" alt="" class="card-img-top" style="height: 100%;width: 100%;">
                                            </figure>
                                            <div class="card-body text-center" style="padding:4%">
                                                <h4 class="card-text">Phòng đôi <p>(2 người/1 phòng)</p>
                                                </h4>
                                                <div style="color:red">
                                                    800.000 vnd/phòng
                                                </div>
                                                <table>
                                                    <td style="font-size: 12px">Số lượng : </td>
                                                    <td style="width: 43%;">
                                                        <input name="singleRoom " type="number" class="form-control" style="width: 59%;margin-left: 50%;" placeholder="0">
                                                    </td>
                                                    <td style="font-size: 12px">&nbsp; /phòng</td>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ===== phong doi 4 nguoi =====    -->
                                    <div class=" col-md-4" style="padding: 1% 2%;">
                                        <div class="card" style="border: 1px solid #80808040;background: white;">
                                            <figure class="home-sales-img" style="height: 18rem;">
                                                <img src="Content/images/Tour/pdoi2.jpeg" alt="" class="card-img-top" style="height: 100%;width: 100%;">
                                            </figure>
                                            <div class="card-body text-center" style="padding:4%">
                                                <h4 class="card-text">Phòng đôi <p>(4 người/1 phòng)</p>
                                                </h4>
                                                <div style="color:red">
                                                    1.200.000 vnd/phòng
                                                </div>
                                                <table>
                                                    <td style="font-size: 12px">Số lượng : </td>
                                                    <td style="width: 43%;">
                                                        <input name="singleRoom " type="number" class="form-control" style="width: 59%;margin-left: 50%;" placeholder="0">
                                                    </td>
                                                    <td style="font-size: 12px">&nbsp; /phòng</td>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 100%; margin: 5% 0; font-size: 20px; border-radius: 8px;">ĐẶT TOUR </button>
                    </div>
                    <div class="col-md-4 col-12 right" style="padding: 0 2%">
                        <div class="group-checkout">
                            <h2 class="my-3">Tóm tắt chuyến đi</h2>
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
                                                    <h2 style="color:red" class="font-weight-bolder">Giá Tour</h2>
                                                </th>
                                                <!-- <th class="l2 text-right">
                                                <span style="font-size: 20px;">5</span> <i class="fas fa-users" style="font-size: 20px;"></i>
                                                <p class="add-more"></p>
                                            </th> -->
                                            </tr>
                                            <tr>
                                                <th>Người lớn(> 12 tuổi): </th>

                                                <td class="t-price text-right" id="AdultPrice"> <?php echo ($result['saleTour'] > 0) ? number_format((int)$result['saleTour']) : number_format((int)$result['priceTour']); ?> vnd/người</td>

                                            </tr>
                                            <tr>
                                                <th>Trẻ em: (< 12 tuổi)</th>
                                                <td class="t-price text-right" id="ChildrenPrice"> <?php echo ($result['saleTour'] > 0) ? number_format((int)($result['saleTour'] * 70 / 100)) : number_format((int)($result['priceTour'] * 70 / 100)); ?> vnd/người</td>
                                            </tr>
                                            <tr>
                                                <th>Em bé: (0-3 tuổi)</th>
                                                <td class="t-price text-right" id="ChildrenPrice"> 0 vnd/người</td>
                                            </tr>
                                            <tr>
                                                <th>Phòng đơn (1 người):</th>
                                                <td class="t-price text-right" id="ChildrenPrice"> 600.000 vnd/Phòng</td>
                                            </tr>
                                            <tr>
                                                <th>Phòng đôi (2 người):</th>
                                                <td class="t-price text-right" id="ChildrenPrice"> 800.000 vnd/Phòng</td>
                                            </tr>
                                            <tr>
                                                <th>Phòng đôi (4 người):</th>
                                                <td class="t-price text-right" id="ChildrenPrice"> 1.200.000 vnd/Phòng</td>
                                            </tr>
                                            <br>
                                            <br>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
<!-- ===========   thanh toán =========    -->
<script>
    function getValue() {
      
        var total =0
        var valueOld = parseInt(document.getElementById("numOld").value)
        var valueYoung = parseInt(document.getElementById("numYoung").value)
        var valueChild = parseInt(document.getElementById("numChild").value)
       total  += (valueOld + valueYoung + valueChild)
        var content = ''
        for (let i = 0; i < total; i++) {
            content += `   <div class="group-info block" style="margin-bottom: 2%;">
                                    <h4 class="text-primary"> Hành khách ${i+1} </h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="group-info-name">
                                                        <span>Họ tên</span>
                                                        <b style="font-size: 15px;color: red;">*</b></label>
                                                        <input value="1" data-val="true" data-val-number="The field persontype must be a number." data-val-required="The persontype field is required." name="nameM${i+1}" type="hidden">
                                                        <input class="form-control" name="[0].fullname" placeholder="Vui lòng nhập Họ tên" required="required" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-info-sex">
                                                        <span>Giới tính</span>
                                                        <b style="font-size: 15px;color: red;">*</b></label>
                                                        <select class="form-control" name="genderM${i+1}" placeholder="Vui lòng chọn giới tính" required="required">

                                                            <option value="0">Nữ</option>
                                                            <option value="1">Nam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-info-birthday">
                                                        <span>Ngày sinh</span>
                                                        <b style="font-size: 15px;color: red;">*</b></label>
                                                        <select class="form-control" name="dayM${i+1}" placeholder="Vui lòng chọn ngày" required="required">
                                                            <option selected="selected" value="">Ngày</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-info-month">
                                                        <span>&nbsp;</span>
                                                        <select class="form-control" name="monthM${i+1}" placeholder="Vui lòng chọn tháng" required="required">
                                                            <option selected="selected" value="">Tháng</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-info-year">
                                                        <span>&nbsp;</span>
                                                        <select class="form-control" name="yearM${i+1}" placeholder="Vui lòng chọn năm" required="required">
                                                            <option selected="selected" value="">Năm</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr>
                                        </div>`

        }
        document.getElementById("formMember").innerHTML = content

    }
</script>