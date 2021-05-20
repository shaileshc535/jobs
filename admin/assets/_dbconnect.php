<?php
// Script to connect to the database
$server = "localhost";
$username = "u475775397_mljobs";
$password = "Yash@8423388385";
$database = "u475775397_m_library";

$SITEURL = "http://localhost/git_repo/";

// define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/material_library/');
// define('SITE_PATH', 'http://127.0.0.1/ecommerce/');

// define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'admin/media/product/');
// define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'admin/media/product/');

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Error" . mysqli_connect_error());
}