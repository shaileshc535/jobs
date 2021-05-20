<?php
include '../admin/assets/_dbconnect.php';
if(isset($_GET['type']=='delete')){
    $id=$_GET['id'];
    mysqli_query($con,"UPDATE job_post  SET verify=`Closed` WHERE id='$id'");

}

?>