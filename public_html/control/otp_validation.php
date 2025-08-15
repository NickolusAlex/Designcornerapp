<?php

/* 

GENERATE OTP

*/

// print_r($_POST);
if (isset($_POST['VALIDATION_ACTION'])) {
    $OTP = $_POST['OTP'];
    $random_no = $_POST['random_no'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $DEVICE_IP = get_client_ip();
    $valid = "";

    $find_otp = " SELECT * FROM otp_log WHERE valid_status = 1 AND otp_session = '$random_no' AND otp_key = '$OTP' AND requested_mail = '$email' AND otp_requested_ip = '$DEVICE_IP' AND requested_phone = '$phone' ORDER BY otp_id DESC LIMIT 1";
    $prepare = $DB_conn->prepare($find_otp);
    $exc = $prepare->execute();
    $details = $prepare->fetchAll();
    if ($exc == true) {
        if (COUNT($details) > 0) {
            // if($details[0]['otp_attempt'] >= 3 ){

            // }

            $valid = "VALID OTP";
        } else {
            $update_attempt = "UPDATE otp_log SET otp_attempt = ( 1 + otp_attempt) WHERE valid_status = 1 AND otp_session = '$random_no' AND requested_mail = '$email' AND otp_requested_ip = '$DEVICE_IP' AND requested_phone = '$phone' ";
            $prepare = $DB_conn->prepare($update_attempt);
            $exc = $prepare->execute();

            $valid = "INVALID OTP";
        }
    }
    echo json_encode(array("valid" => $valid));
}
