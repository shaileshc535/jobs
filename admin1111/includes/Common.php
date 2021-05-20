<?php

class Common
{
    public function getState($con)
    {
        $mainQuery = "SELECT * FROM states";
        $result1 = $con->query($mainQuery);
        return $result1;
    }

    public function getCityByState($con, $stateId)
    {
        $query = "SELECT * FROM cities WHERE state_id='$stateId'";
        $result = $con->query($query);
        return $result;
    }
}