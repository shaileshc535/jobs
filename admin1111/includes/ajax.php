<?php
include "../../admin/assets/_dbconnect.php";
include_once "Common.php";

if (isset($_POST['getCityByState']) == "getCityByState") {
    $cityData = '';
    $stateId = $_POST['stateId'];
    $common = new Common();
    $allCity = $common->getCityByState($con, $stateId);

    if ($allCity->num_rows > 0) {
        while ($city = $allCity->fetch_object()) {          //doubt
            $cityId = $city->id;
            $cityName = $city->name;
            $cityData .= '<option value="' . $cityName . '">' . $cityName . '</option>';
        }
    }
    echo "test^" . $cityData;
}