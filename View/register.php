<div class="container-fluid bg-2" style="margin-top:0;padding:4%  ;display: flex;background-size: cover;">
    <div class="formRegister" style="width:596px;height: 515px; margin: auto;padding:2%">
        <h2>ĐĂNG KÝ TÀI KHOẢN </h2>
        <!-- CHUYỂN CÁC DỮ LIỆU QUA register.php (Controller) để xử lý -->
        <form  action="index.php?action=register&act=register_action" method="post" class="form" role="form">
            <div class="group">
                <input type="text" name="nameCustomer" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> Tên thật <b style="font-size: 15px;color: red;">*</b</label>
            </div>
            <div class="group">
                <input type="text" name="userName" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Tên đăng nhập <b style="font-size: 15px;color: red;">*</b</label>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="group">
                        <input type="password" name="passWord" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label> Mật khẩu <b style="font-size: 15px;color: red;">*</b</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <input type="password" name="confirmPass" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Xác nhận lại mật khẩu <b style="font-size: 15px;color: red;">*</b</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="group">
                        <input type="email" name="email" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Địa chỉ email <b style="font-size: 15px;color: red;">*</b</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <input type="text" name="phone" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Số điện thoại <b style="font-size: 15px;color: red;">*</b</label>
                    </div>
                </div>
            </div>
            <div class="group">
                <input type="text" name="address" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> Địa chỉ <b style="font-size: 15px;color: red;">*</b</label>
            </div>
            <button class="btn btn-danger" style="width:100%" type="submit" >ĐĂNG KÍ</button>
            <div class="text-left" style="color:black;margin:3% 0">
                Đã có tài khoản?
                <!-- ========= LINK ĐĂNG NHẬP ======    -->
                <a type="button" href="index.php?action=login" class="btn btn-link">Đăng Nhập</a>
            </div>
        </form>
    </div>
</div>
<style>
    * {
        box-sizing: border-box;
    }

    .formRegister {
        background: #FFF;
        padding: 4% 10%;
        width: 100%;
    }

    .formRegister h2 {
        text-align: center;
    }

    /* form starting stylings ------------------------------- */
    .formRegister .group {
        position: relative;
        margin-bottom: 14px;
    }

    .formRegister .group input {
        font-size: 15px;
        padding: 25px 2px 0px 7px;
        border: none;
        border-bottom: 1px solid #757575;
        width: 100%;
        color: black
    }

    .formRegister .group input:focus {
        outline: none;
    }

    /* LABEL ======================================= */
    .formRegister .group label {
        color: #999;
        font-size: 16px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    /* active state */
    .formRegister .group input:focus~label,
    .formRegister .group input:valid~label {
        top: -5px;
        font-size: 14px;
        color: #5264AE;
    }

    /* BOTTOM BARS ================================= */
    .bar {
        position: relative;
        display: block;
        width: 100%;
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #5264AE;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }

    /* active state */
    input:focus~.bar:before,
    input:focus~.bar:after {
        width: 50%;
    }

    /* HIGHLIGHTER ================================== */
    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    /* active state */
    input:focus~.highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }

    /* ANIMATIONS ================ */
    @-webkit-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }

    @-moz-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }

    @keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }
</style>