<div class="container-fluid mySuccess">

    <div style=" padding: 1%;border-bottom: 1px solid #80808036;border-top: 1px solid #80808036;">
        <h4><span style="color:gray">1. Nhập thông tin >2.Thanh toán</span> >3 Đặt tour thành công</h4>

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
        <div class="successContent">
            <div class="row">
                <!-- INFO ========================     -->
                <div class=" content-left col-md-8 col-12" style="padding:2%;border-right: 2px dotted #80808036;">
                    <!-- ===========  THONG TIN LIEN LAC =====    -->
                    <div class="form-customer" style="margin-bottom: 3%;padding: 2%;background: white;border-radius: 10px;border: 2px solid #80808036">
                        <h3 class="text-primary" style="border-bottom:1px solid #80808036;padding: 1% 0;">THÔNG TIN LIÊN LẠC</h3>
                        <table style="width:100%;line-height: 3;">
                            <tbody>
                                <tr>
                                    <td> Họ và Tên: </td>
                                    <td><b> <?php echo $info['nameCus']; ?> </b></td>

                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td><b><?php echo $info['emailCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại:</td>
                                    <td><b><?php echo $info['phoneCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td><b> <?php echo $info['addressCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Số lượng khách:</td>
                                    <td><b><?php echo ((int)($info['numOld']) + (int)($info['numYoung'])); ?>người</b> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p> <u> <b> Ghi chú :</b></u>Trong trường hợp muốn thay đổi thông tin vui lòng liên hệ chăm sóc khách hàng trước ngày khởi hành ít nhất 5 ngày</p>
                         
                        </div>
                    </div>
                    <!-- ========= CHI TIET BOOKING ===   -->
                    <div class="form-customer" style="margin-bottom: 3%;padding: 2%;background: white;border-radius: 10px;border: 2px solid #80808036">
                        <h3 class="text-primary" style="border-bottom:1px solid #80808036;padding: 1% 0;">CHI TIẾT BOOKING</h3>
                        <table style="width:100%;line-height: 3;">
                            <tbody>

                                <tr>
                                    <td>Trị giá booking: </td>
                                    <td><b><?php echo $info['emailCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Ngày đăng ký:</td>
                                    <td><b><?php echo $info['phoneCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Hình thức thanh toán:</td>
                                    <td><b> <?php echo $info['addressCus']; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Tình trạng:</td>
                                    <td><b></b> </td>
                                </tr>
                                <tr>
                                    <td>Thời hạn thanh toán:</td>
                                    <td><b></b> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p> <u> <b> Ghi chú :</b></u> Nếu quá thời hạn trên mà quý khách chưa thanh toán. Book awesome trips sẽ hủy booking này</p>

                        </div>
                    </div>
                </div>


                <!-- ===== tom tat ===   -->
                <div class="col-md-4 col-12 right" style="padding: 2%" ;>
                    <div class="group-checkout">
                        <h3 class="my-3 text-primary" style="margin-bottom: 5%;">PHIẾU XÁC NHẬN BOOKING</h3>
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
                            <table style="width:100%;line-height: 3;">
                                <tbody>
                                    <tr>
                                        <td>Thời gian : </td>
                                        <td style="float: right;"><b><?php echo $result['time']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Phương tiện: </td>
                                        <td style="float: right;"><b><?php echo $result['transport']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đi:</td>
                                        <td style="float: right;"><b><?php echo $result['begin']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày về:</td>
                                        <td style="float: right;"><b> <?php echo $result['end']; ?> </b></td>
                                    </tr>
                                    <tr>
                                        <td>Nơi khởi hành:</td>
                                        <td style="float: right;"><b><?php echo $result['startingPoint']; ?> </b> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- =====  MÃ QR ======    -->
                        <div class="qr" style="text-align: center">
                            <?php
                            // Nội dung chl là đưỡng dẫn tơi kink success  --- chưa tạo mã bill 
                            $chl = "http%3A%2F%2Fwww.google.com%2F&choe=UTF-8";
                            // Google Chart API
                            $root_url = "https://chart.googleapis.com/chart?chs=180x180&cht=qr&chl=" . $chl;
                            ?>
                            <img src="<?php echo $root_url ?>" alt="">
                        </div>
                        <br>
                        <p>
                            Để xem thông tin vé tour mới nhất Quý khách có
                            thể dùng điện thoại để quét mã QR bên cạnh để truy cập vào
                            website.
                        </p>
                        <p>
                            Để cài phần mềm quét mã QR Code quý khách có thể tìm trong
                            kho ứng dụng của điện thoại với từ khóa sau: QRCode
                            Scanner, QRCode Reader,..
                        </p>
                        <p  style="color: red"> <u> <b> Ghi chú : </b></u>Phiếu xác nhận Booking - Book awesome trips sẽ gửi qua email cho quý khách</p>
                     





                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>