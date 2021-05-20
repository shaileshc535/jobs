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
    header("location:http://materiallibrary.co.in/employer-dashboard-resumes.php?id=$jid");
}

elseif ($type == 'hire') {
    $sql5 = "UPDATE job_apply_job_post SET status='Hired' where job_post_id='$jid' && user_id='$uid' ";
    $res5 = mysqli_query($con, $sql5);

    header("location:http://materiallibrary.co.in/employer-dashboard-resumes.php?id=$jid");
}
}
}
else{
    header('location:http://materiallibrary.co.in/signin');
}
?>