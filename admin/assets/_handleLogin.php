<?php
require('_functions.php');
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $username = get_safe_value($con, $_POST['username']);
    $email = get_safe_value($con, $_POST['email']);
    $password = get_safe_value($con, $_POST['password']);

    $sql = "Select * from admin where username='$username' AND email='$email'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('location: http://localhost/material_library/admin/index.php');
            } else {
                $showError = " Email or Password Did Not Match";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }
}