<?php

$rand  = rand(1000, 9999);

$d = new DateTime();
$micro_time = $d->format("Hisv");
$random_no = $rand . $micro_time;


?>

<link rel="stylesheet" type="text/css" href="css/boot.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/css/util.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/css/main.css">

<script src="pages_links/login/vendor/bootstrap/js/popper.js"></script>
<script src="pages_links/login/vendor/select2/select2.min.js"></script>
<script src="pages_links/login/js/main.js"></script>


<script>
    function clickEvent(first, last) {
        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }

    /*  
        $(":input[type='text']").keyup(function(event) {
                if (valid) {
                    if ($(this).next('[type="text"]').length > 0) {
                        $(this).next('[type="text"]')[0].focus();
                    } else {
                        if ($(this).parent().next().find('[type="text"]').length > 0) {
                            $(this).parent().next().find('[type="text"]')[0].focus();
                        } else {
                            alert('no more text input found !');
                        }
                    }

                }
            });
    
    */
</script>
<!-- Modal -->
<div class="modal fade" id="otp_modal" tabindex="-1" role="dialog" aria-labelledby="otp_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otp_modalTitle">Enter OTP</h5>
                <button type="button" class="close" onclick="modal_toggle('otp_modal')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div style="padding-top: 10px;">

                    <center>
                        <input type="text" id="ist" style="border: 1px solid black;" maxlength="1" size="1" onkeyup="clickEvent(this,'sec')">
                        <input type="text" id="sec" style="border: 1px solid black;" maxlength="1" size="1" onkeyup="clickEvent(this,'third')">
                        <input type="text" id="third" style="border: 1px solid black;" maxlength="1" size="1" onkeyup="clickEvent(this,'fourth')">

                        <input type="text" id="fourth" style="border: 1px solid black;" maxlength="1" size="1" onkeyup="clickEvent(this,'fifth')">
                        <input type="text" id="fifth" style="border: 1px solid black;" maxlength="1" size="1" onkeyup="clickEvent(this,'sixth')">
                        <input type="text" id="sixth" style="border: 1px solid black;" maxlength="1" size="1">
                    </center>
                    <br>

                    <div class="p-t-5 p-b-14 p-l-238">
                        <a href="#" onclick="get_otp('resend');" class="txt1">
                            Didn't Receive Code ? <span style="color:blue;"><strong>Resend Code !</strong></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="container-login100-form-btn p-t3 p-b-25">
                <input type="hidden" name="otp_status" value="0" id="otp_status">
                <input type="hidden" name="random_no" value="<?php echo $random_no; ?>" id="random_no">
                <button onclick="verify_otp()" class="login100-form-btn">
                    Verify Code
                </button>
            </div>

        </div>
    </div>
</div>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-10 p-b-30">
            <div class="login100-form validate-form">
                <!-- <form class="login100-form validate-form"> -->
                <div class="login100-form-avatar_cre">
                    <img src="img/logo.png" alt="DC">
                    <!-- <img src="<?php echo $IP_SITE ?>/img/logo.png" alt="DC"> -->
                </div>
                <span class="login100-form-title p-t-5 p-b-3">
                    Welcome back!
                </span>
                <span class="login100-form-subtitle p-t-5 p-b-31">
                    Create your account
                </span>

                <div class="wrap-input100 validate-input m-b-30 " data-validate="Username is required">
                    <input class="input100" type="text" name="username" id="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <div class="container">
                            <span class="far fa-stack fa-2x " style="margin-left: -53px; text-shadow: 1px 6px 5px 1px;">
                                <i class="far fa-user fa-stack-1x circle" style="color: #0f4874;font-size: 19px;"></i>
                            </span>
                        </div>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-30 " data-validate="Email is required">
                    <input class="input100" type="email" id="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <div class="container">
                            <span class="far fa-stack fa-2x " style="margin-left: -53px; text-shadow: 1px 6px 5px 1px;">
                                <i class="far fa-envelope fa-stack-1x circle" style="color: #0f4874;font-size: 19px;"></i>
                            </span>
                        </div>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
                    <input class="input100" type="password" id="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <div class="container">
                            <span class="far fa-stack fa-2x " style="margin-left: -53px;box-shadow: 0px 0px 0px 0px;">
                                <i class="far fa-lock fa-stack-1x circle" style="color: #0f4874;font-size: 19px;"></i>
                            </span>
                        </div>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-10 " data-validate="Phone is required">
                    <input class="input100" type="text" id="phone" name="phone" placeholder="Phone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <div class="container">
                            <span class="far fa-stack fa-2x " style="margin-left: -53px; text-shadow: 1px 6px 5px 1px;">
                                <i class="far fa-phone fa-stack-1x circle" style="color: #0f4874;font-size: 19px;"></i>
                            </span>
                        </div>
                    </span>
                </div>
                <div class="p-t-5 p-b-14 p-l-238">
                    <a id="otp_tag" href="#" onclick="get_otp('newsend');" class="txt1">
                        <span style="color:red;"><strong>*GET OTP</strong></span>
                    </a>
                </div>
                <div class="container-login100-form-btn p-t3 p-b-25">
                    <button onclick="signup_user()" class="login100-form-btn">
                        Sign up
                    </button>
                </div>

                <div class="p-t3 p-l-105 p-b-25">
                    <a href="#" onclick="fetch_page('login')" class="txt1">
                        Already Have Account? Login !
                    </a>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<script>
    function get_otp(status_action) {

        var email = $("#email").val();
        var phone = $("#phone").val();
        var random_no = $("#random_no").val();

        if (email != "" && phone != "") {

            $.ajax({
                url: URL_SITE,
                type: "POST",
                crossOrigin: true,
                data: {
                    "REQUEST_KIND": "ACCESS_VERIFICAION",
                    "VALIDATION_ACTION": "OTP_GENERATION",
                    "email": email,
                    "phone": phone,
                    "status_action": status_action,
                    "random_no": random_no
                },
                dataType: "JSON",
                success: function(msg) {
                    if (msg.generated == true) {
                        $("#random_no").val(msg.session_key);
                        if (status_action != "resend") {
                            modal_toggle('otp_modal');
                        }
                    } else {
                        if (msg.status_code == "REPEATED CONTACT") {
                            if (msg.repeated_mail == 1) {
                                alert("Email Already Taken Try Different Mail Id");
                            }
                            if (msg.repeated_phone == 1) {
                                alert("Phone no Already Taken Try Different Number");
                            }
                        } else {
                            alert(msg.status_code);
                        }
                    }
                },
            });

        } else {
            alert("Fill Email/Phone");
        }

    }


    function verify_otp() {

        var ist = $("#ist").val();
        var sec = $("#sec").val();
        var third = $("#third").val();
        var fourth = $("#fourth").val();
        var fifth = $("#fifth").val();
        var sixth = $("#sixth").val();

        var email = $("#email").val();
        var phone = $("#phone").val();
        var random_no = $("#random_no").val();

        if (ist != "" && sec != "" && third != "" && fourth != "" && fifth != "" && sixth != "") {
            $.ajax({
                url: URL_SITE,
                type: "POST",
                crossOrigin: true,
                data: {
                    "REQUEST_KIND": "ACCESS_VERIFICAION",
                    "VALIDATION_ACTION": "OTP_VERIFICAION",
                    "OTP": "" + ist + sec + third + fourth + fifth + sixth,
                    "random_no": random_no,
                    "email": email,
                    "phone": phone,

                },
                dataType: "JSON",
                success: function(msg) {
                    if (msg.valid == "VALID OTP") {
                        $("#otp_status").val('1');
                        $("#otp_tag").hide();
                        modal_toggle('otp_modal');
                    } else {
                        alert("INVALID OTP");
                    }
                },
            });
        }

    }

    function signup_user() {

        var username = $("#username").val();
        var password = $("#password").val();

        var email = $("#email").val();
        var phone = $("#phone").val();

        var REQUEST_URL = IP_SITE + "/control/check_user.php";

        var cordova = device.cordova;
        var model = device.model;
        var platform = device.platform;
        var uuid = device.uuid;
        var version = device.version;
        var otp_status = $("#otp_status").val();

        if (otp_status != 1) {
            alert('PLEASE VERIFY OTP');
            return false;
        }

        if (username != "" && password != "") {

            $.ajax({
                url: URL_SITE,
                type: "POST",
                crossOrigin: true,
                data: {
                    "REQUEST_KIND": "ACCESS_VERIFICAION",
                    "VALIDATION_ACTION": "SIGNUP_USER",

                    "username": username,
                    "password": password,

                    "phone": phone,
                    "email": email,

                    "otp_status": otp_status,
                    "cordova": cordova,
                    "model": model,
                    "platform": platform,
                    "uuid": uuid,
                    "version": version,
                },
                dataType: "JSON",
                success: function(msg) {
                    if (msg.status == "USER CREATED") {
                        fetch_page('login');
                    } else {
                        alert(msg.status);
                    }
                },
            });
        } else {
            alert("Please Fill Username/Password");
        }
    }
</script>