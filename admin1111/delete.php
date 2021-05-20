<?php
// include('includes/_header.php');
require('assets/_dbconnect.php');
$id = $_GET['id'];
$delquery = "delete from job_post where id=$id";
$query = mysqli_query($con,$delquery);
header("location:http://materiallibrary.co.in/admin/manage_jobs.php");
?>
