<?php
session_start();

session_unset();
session_destroy();

header('http://materiallibrary.co.in/admin/sign_in.php');
exit;