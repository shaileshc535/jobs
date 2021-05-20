<?php
ob_start();
session_start();
include('../admin/assets/_dbconnect.php');
if(isset($_SESSION['loggedin'])){
if(isset($_GET['type'])){
        $uid = $_GET['u_id'];
        $type = $_GET['type'];
        $jid=$_GET['j_id'];   
if($type=='reject')
{ 
    $sql="UPDATE job_apply_job_post SET status='NOT SELECTED' where job_post_id='$jid' && user_id='$uid' ";
    mysqli_query($con, $sql);
    header('location:http://materiallibrary.co.in/employer-dashboard-applied-candidate');
}
elseif ($type == 'shortlist') {
    $sql3 = "INSERT INTO canidate_sortlist (`user_id`, `company_id`) VALUES ('$u_id', '$id')";
    $res3 = mysqli_query($con, $sql3);
    
    header('location:http://materiallibrary.co.in/employer-dashboard-applied-candidate');
}
elseif ($type == 'delete') {
    $sql4 = "DELETE FROM job_apply_job_post where job_post_id='$jid' && user_id='$uid' ";
    $res4 = mysqli_query($con, $sql4);

    header('location:http://materiallibrary.co.in/employer-dashboard-applied-candidate');
}
elseif ($type == 'review' && $type != 'reject') {
    $sql5 = "UPDATE job_apply_job_post SET status='Under Review' where job_post_id='$jid' && user_id='$uid' ";
    $res5 = mysqli_query($con, $sql5);

    header('location:http://materiallibrary.co.in/employer-dashboard-applied-candidate');
}
}
}
else{
    header('location:http://materiallibrary.co.in/signin');
}
?>