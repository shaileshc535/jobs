<?php

class Common
{
    public function getCountries($con)
    {
        $query = "SELECT * FROM countries WHERE id=1";
        $result = $con->query($query);
        return $result;
    }

    public function getStatesByCountry($con, $countryId)
    {
        $query = "SELECT * FROM states WHERE country_id='$countryId'";
        $result = $con->query($query);
        return $result;
    }

    public function getCityByState($con, $stateId)
    {
        $query = "SELECT * FROM cities WHERE state_id='$stateId'";
        $result = $con->query($query);
        return $result;
    }
}