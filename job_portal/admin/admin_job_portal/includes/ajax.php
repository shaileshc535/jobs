<?php
include "_dbconnect.php";
include_once "Common.php";
if (isset($_POST['getStatesByCountry']) == "getStatesByCountry") {
    $statesData = '';
    $countryId = $_POST['countryId'];
    $common = new Common();
    $allStates = $common->getStatesByCountry($con, $countryId);
    if ($allStates->num_rows > 0) {
        while ($states = $allStates->fetch_object()) {
            $stateId = $states->id;
            $stateName = $states->name;
            $statesData .= '<option value="' . $stateId . '">' . $stateName . '</option>';
        }
    }
    echo "test^" . $statesData;
}

if (isset($_POST['getCityByState']) == "getCityByState") {
    $cityData = '';
    $stateId = $_POST['stateId'];
    $common = new Common();
    $allCity = $common->getCityByState($con, $stateId);
    if ($allCity->num_rows > 0) {
        while ($city = $allCity->fetch_object()) {
            $cityId = $city->id;
            $cityName = $city->name;
            $cityData .= '<option value="' . $cityId . '">' . $cityName . '</option>';
        }
    }
    echo "test^" . $cityData;
}