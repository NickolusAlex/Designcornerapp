<link rel="stylesheet" type="text/css" href="css/boot.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/css/util.css">
<link rel="stylesheet" type="text/css" href="pages_links/login/css/main.css">

<script src="pages_links/login/vendor/bootstrap/js/popper.js"></script>
<script src="pages_links/login/vendor/select2/select2.min.js"></script>
<script src="pages_links/login/js/main.js"></script>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-20 p-b-30">
            <div class="login100-form validate-form">
                <div class="login100-form-avatar">
                    <!-- <img src="<?php echo $IP_SITE; ?>/img/logo.png" alt="DC"> -->
                    <img src="img/logo.png" alt="DC">
                </div>
                <div class="row  justify-content-md-center">

                </div>
                <span class="login100-form-title p-t-5 p-b-3">
                    Welcome back!
                </span>
                <span class="login100-form-subtitle p-t-5 p-b-31">
                    Login to your account
                </span>

                <div class="wrap-input100 validate-input m-b-30 " data-validate="Username is required">
                    <input class="input100" id="username" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <div class="container">
                            <span class="far fa-stack fa-2x " style="margin-left: -53px; text-shadow: 1px 6px 5px 1px;">
                                <i class="far fa-user fa-stack-1x circle" style="color: #0f4874;font-size: 19px;"></i>
                            </span>
                        </div>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
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
                <div class="p-t-5 p-b-14 p-l-152">
                    <a href="#" class="txt1">
                        Forgot Username / Password?
                    </a>
                </div>
                <div class="container-login100-form-btn p-t3 p-b-25">
                    <!-- fetch_page('home') -->
                    <button onclick="verify_user();" class="login100-form-btn">
                        Login
                    </button>
                </div>
                <d iv class="text-center w-full">

                    <a class="txt1" href="#" onclick="fetch_page('signup')">
                        Don't have an account? Sign up here
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
            </div>
        </div>
    </div>
</div>
<script>
    function verify_user() {

        var username = $("#username").val();
        var password = $("#password").val();

        var REQUEST_URL = IP_SITE + "/control/check_user.php";

        var cordova = device.cordova;
        var model = device.model;
        var platform = device.platform;
        var uuid = device.uuid;
        var version = device.version;

        if (username != "" && password != "") {

            $.ajax({
                url: URL_SITE,
                type: "POST",
                crossOrigin: true,
                data: {
                    "REQUEST_KIND": "ACCESS_VERIFICAION",
                    "VALIDATION_ACTION": "LOGIN_VERIFICAION",

                    "username": username,
                    "password": password,

                    "cordova": cordova,
                    "model": model,
                    "platform": platform,
                    "uuid": uuid,
                    "version": version,
                },
                dataType: "JSON",
                success: function(msg) {
                    if (msg.status == "USER VALID") {
                        window.localStorage.setItem("user_id", msg.user_id);
                        window.localStorage.setItem("current_ip", msg.current_ip);
                        window.localStorage.setItem("loggedIn", 1);

                        fetch_page('home');
                    } else {
                        alert(msg.status);
                    }
                },
            });
        }
    }
</script>