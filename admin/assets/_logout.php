<?php
session_start();

session_unset();
session_destroy();

header('http://localhost/material_library/admin/sign_in.php');
exit;