<?php
include('../../admin/assets/_dbconnect.php');
session_start();

$email = $_POST['email'];

$res = mysqli_query($con, "select * from users where email='$email'");

$count = mysqli_num_rows($res);

// echo $email;

if ($count > 0) {
      $otp = rand(100000, 999999);

      mysqli_query($con, "update users set otp='$otp' where email='$email'");

      $html = "Your One Time Password For Email Verification code is " . $otp;

      $_SESSION['EMAIL'] = $email;

      if (smtp_mailer($email, 'OTP Verification', $html)) {
            echo "0";
      } else {

            echo "1";
      }
}


function smtp_mailer($email, $subject, $msg)
{
      require_once("../smtp/class.phpmailer.php");

      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 3;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 587;
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Username = "materiallibrary2021@gmail.com";
      $mail->Password = "Material@123";
      $mail->SetFrom("materiallibrary2021@gmail.com");
      $mail->Subject = $subject;
      $mail->Body = $msg;
      $mail->AddAddress($email);
      if (!$mail->Send()) {
            return 0;
      } else {
            return 1;
      }
      echo smtp_mailer($email, $subject, $msg);
}