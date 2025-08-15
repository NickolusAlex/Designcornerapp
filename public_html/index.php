<?php
header("Access-Control-Allow-Origin: *");


if (isset($_POST['REQUEST_KIND'])) {

    require_once("control/connection_center.php");
    require_once("control/additional_operation.php");

    if ($_POST['REQUEST_KIND'] == "ACCESS_VERIFICAION") {

        if ($_POST['VALIDATION_ACTION'] == "LOGIN_VERIFICAION") {
            include("control/check_authorization.php");
        } else if ($_POST['VALIDATION_ACTION'] == "SIGNUP_USER") {
            include("control/signup_user.php");
        } else if ($_POST['VALIDATION_ACTION'] == "OTP_VERIFICAION") {
            include("control/otp_validation.php");
        } else if ($_POST['VALIDATION_ACTION'] == "OTP_GENERATION") {
            include("control/otp_generation.php");
        } else if ($_POST['VALIDATION_ACTION'] == "LOGOUT_USER") {
            include("control/logout.php");
        } else {
            include "pages/error.php";
        }
    } else if ($_POST['REQUEST_KIND'] == "ACCESS_REQUEST") {
        if (isset($_POST['page_name']) && ($_POST['page_name'] != "")) {
            $page_name = $_POST['page_name'] . '.php';
            $IP_SITE = $_POST['IP_SITE'];

            if (file_exists($page_name)) {
                include $page_name;
            } else {
                include "pages/error.php";
            }
        }
    } else {
        include "pages/error.php"; // invalid action
    }
} else {
    include "pages/error.php";
}

