<?php
include('../../admin/assets/_dbconnect.php');
session_start();

$otp = $_POST['otp'];
$email = $_SESSION['EMAIL'];

$res = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND otp='$otp'");

$count = mysqli_num_rows($res);

if ($count > 0) {
      mysqli_query($con, "UPDATE users SET otp='', email_status=1 WHERE email='$email'");

      $_SESSION['IS_LOGIN'] = $email;
      echo "yes";
} else {
      echo "not_exist";
}
?>