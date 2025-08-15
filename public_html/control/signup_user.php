<?php

if (isset($_POST['VALIDATION_ACTION'])) {

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $phone      = $_POST['phone'];
    $email      = $_POST['email'];

    $cordova    = $_POST['cordova'];
    $model      = $_POST['model'];
    $platform   = $_POST['platform'];
    $uuid       = $_POST['uuid'];
    $version    = $_POST['version'];
    $otp_status = $_POST['otp_status'];

    $DEVICE_IP = get_client_ip();

    $status = "";

    if ($otp_status == 1) {

        $auth_array = array(
            
            "user_privilege"        => 3,
            "user_category"         => "customer",
            "user_name"             => $_POST['username'],
            "user_password"         => $_POST['password'],
            "logged_in_status"      => 0,
            "last_used_device"      => $cordova,
            "last_used_ip"          => $DEVICE_IP,
            "last_used_uuid"        => $uuid,
            "last_used_platform"    => $platform,
            "active_status"         => 1,
            "delete_status"         => 0,
        
        );

        $sql_auth = "INSERT INTO user_auth (user_privilege, user_category, user_name, user_password, logged_in_status, last_used_device, last_used_ip, last_used_uuid, last_used_platform, active_status, delete_status) VALUES (:user_privilege, :user_category, :user_name, :user_password, :logged_in_status, :last_used_device, :last_used_ip, :last_used_uuid, :last_used_platform, :active_status, :delete_status)";
        $prepare = $DB_conn->prepare($sql_auth);
        $exc = $prepare->execute($auth_array);

        $user_details_id = $DB_conn->lastInsertId();

        if ($exc == true) {

            $signup_array = array(

                "u_auth_id"     => $user_details_id,
                "u_name"        => $_POST['username'],
                "u_mail"        => $_POST['email'],
                "u_phone"       => $_POST['phone'],
                "u_city"        => "",
                "auth_status"   => $_POST['otp_status'],
                "delete_status" => 0,

            );
            $sql_signup = " INSERT INTO user_details (u_auth_id, u_name, u_mail, u_phone, u_city, auth_status, delete_status) VALUES (:u_auth_id, :u_name, :u_mail, :u_phone, :u_city, :auth_status, :delete_status) ";
            $prepare = $DB_conn->prepare($sql_signup);
            $exc = $prepare->execute($signup_array);

            if ($exc == true) {
                $status = "USER CREATED";
            } else {
                $status = "USER DETAILS CREATED";
            }
        } else {
            $status = "USER NOT CREATED";
        }
    } else {
        $status = "OTP NOT VERIFIED";
    }

    echo json_encode(array("status" => $status));
}
