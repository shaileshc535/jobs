<?php
include('assets/_dbconnect.php');
require('assets/_functions.php');

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);

    $query = "SELECT * FROM ecom_brand WHERE brand_name like'%" . $search . "%'";
    $result = mysqli_query($con, $query);

    // $response = array();
    while ($row = mysqli_fetch_array($result)) {
        $response[] = array("value" => $row['id'], "label" => $row['brand_name']);
    }

    echo json_encode($response);
}

exit;