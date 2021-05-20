<?php
session_start();
require_once('../../admin/assets/_dbconnect.php');

$ch = $_POST['ch'];

switch ($ch) {
      case 'send_otp':

            $num = $_POST['mob'];

            $otp = rand(100000, 999999);
            mysqli_query($con, "update users set otp='$otp' where mobile='$num'");

            $curl = curl_init();

            curl_setopt_array($curl, array(
                  CURLOPT_URL => "http://2factor.in/API/V1/0212ddb2-b6ef-11eb-8089-0200cd936042/SMS/" . $num . "/" . $otp . "",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "GET",
                  CURLOPT_POSTFIELDS => "",
                  CURLOPT_HTTPHEADER => array(
                        "content-type: application/x-www-form-urlencoded"
                  ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                  echo "URL Error #:" . $err;
            } else {
                  echo 'success';
            }

            break;



      case 'verify_otp':

            $user_otp = $_POST['otp'];
            $num = $_POST['mob'];

            $res = mysqli_query($con, "SELECT * FROM users WHERE mobile='$num' AND otp='$user_otp'");
            $count = mysqli_num_rows($res);

            if ($count > 0) {
                  mysqli_query($con, "UPDATE users SET otp='', mobile_status=1 WHERE mobile='$num'");

                  echo "success";
            } else {
                  echo "not_exist";
            }

            break;

            case 'expairy_otp':

                  $user_otp = $_POST['otp'];
                  $num = $_POST['mob'];
      
                  $res = mysqli_query($con, "UPDATE users SET otp='' WHERE mobile='$num'");
                  $count = mysqli_num_rows($res);
      
                  break;

      default:
            # code...
            break;
}