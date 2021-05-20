<?php
include "assets/_functions.php";
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'assets/_dbconnect.php';
    $name = get_safe_value($con, $_POST["name"]);
    $username = get_safe_value($con, $_POST["username"]);
    $email = get_safe_value($con, $_POST["email"]);
    $password = get_safe_value($con, $_POST["password"]);
    $cpassword = get_safe_value($con, $_POST["cpassword"]);
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `admin` WHERE username = '$username' AND email = '$email'";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "Username Or Email Already Exists.";
    } else {
        // $exists = false; 
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`name`,`username`, `email`, `password`) VALUES ('$name', '$username', '$email','$hash')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $showAlert = true;
                header('location: http://localhost/material_library/admin/sign_in.php');
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
}