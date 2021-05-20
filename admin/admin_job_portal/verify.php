<?php

 include('assets/_dbconnect.php');
// include('includes/_header.php');
$id = $_GET['id'];
$cid = $_GET['cid'];
$operation = $_GET['operation'];
$var = 'verified';
if($operation=='verify')
{

    $sql = mysqli_query($con,"insert into job_post (verify) values('$var') where id=$id ");
    header('location:job_deatil.php');
   
}

if($operation='reject')
{

    // $sql = mysqli_query($con,"");
    header('location:job_deatil.php');

}




?>