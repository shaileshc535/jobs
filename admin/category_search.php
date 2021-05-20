<?php
include('assets/_dbconnect.php');
require('assets/_functions.php');

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);

    $query = "SELECT * FROM categories WHERE ecom_categories like'%" . $search . "%'";
    $result = mysqli_query($con, $query);

    // $response = array();
    while ($row = mysqli_fetch_array($result)) {
        $response[] = array("value" => $row['id'], "label" => $row['category']);
    }

    echo json_encode($response);
}

exit;