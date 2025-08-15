<?php

/* 

GENERATE OTP

*/

if (isset($_POST['VALIDATION_ACTION'])) {

    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $status_action  = $_POST['status_action'];
    $random_no      = $_POST['random_no'];

    $status_code    = "";
    $status         = "";

    $repeated_mail  = $repeated_phone = 0;

    // $OTP = random_int(100000, 999999); // GENERAION OF OTP
    $OTP = "000000";

    $DEVICE_IP = get_client_ip();

    $sql_check_contact = " SELECT * FROM `user_details` WHERE ( u_mail = '$email' OR u_phone = '$phone' ) AND auth_status = 1 AND delete_status = 0 ";
    $prepare = $DB_conn->prepare($sql_check_contact);
    $exc = $prepare->execute();
    if ($exc == true) {
        $old_details = $prepare->fetchAll();
        if (COUNT($old_details) > 0) {

            $status = false;
            $status_code = "REPEATED CONTACT";

            if ($old_details[0]['u_mail'] == $email) {
                $repeated_mail = 1;
            }
            if ($old_details[0]['u_phone'] == $phone) {
                $repeated_phone = 1;
            }
        }
    }

    if ($repeated_mail == 0 && $repeated_phone == 0) {
        // if ($status_action == "resend") {
        $update_sql_otp_old = "UPDATE otp_log SET valid_status = 0 WHERE otp_requested_ip = '$DEVICE_IP'";
        $prepare = $DB_conn->prepare($update_sql_otp_old);
        $exc = $prepare->execute();

        if ($exc == true) {
            $rand  = rand(1000, 9999);
            $d = new DateTime();
            $micro_time = $d->format("Hisv");
            $random_no = $rand . $micro_time;
        }
        // }

        $insert_array = array(
            "otp_key"           => $OTP,
            "otp_session"       => $random_no,
            "requested_mail"    => $email,
            "requested_phone"   => $phone,
            "otp_confirmation"  => 0,
            "otp_attempt"       => 0,
            "otp_requested_ip"  => $DEVICE_IP,
            "valid_status"      => 1,
        );

        $sql_log = " INSERT INTO otp_log (otp_key, otp_session, requested_mail, requested_phone, otp_confirmation, otp_attempt, otp_requested_ip, valid_status) VALUES (:otp_key,:otp_session,:requested_mail,:requested_phone,:otp_confirmation,:otp_attempt,:otp_requested_ip,:valid_status)  ";

        $prepare = $DB_conn->prepare($sql_log);
        $exc = $prepare->execute($insert_array);
        $send_status = true;
        if ($exc == true) {
            $send_status = send_otp($OTP, $phone, $email);

            if ($send_status == true) {
                $status = true;
            } else {
                $status = false;
                $status_code = "SMS NOT SENDED";
            }
        } else {
            $status = false;
            $status_code = "OTP NOT GENERATED";
        }
    }
    echo json_encode(array("generated" => $status, "session_key" => $random_no, "status_code" => $status_code, "repeated_phone" => $repeated_phone, "repeated_mail" => $repeated_mail, "sql_check_contact" => $sql_check_contact));
}


function send_otp($OTP, $phone, $email)
{
    return true;


    $apiKey = urlencode('Your apiKey');
    // Message details
    $numbers = array(918123456789, 918987654321);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode('This is your message');
    $numbers = implode(',', $numbers);

    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;
}
