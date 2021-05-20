<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['job'])){
         $job_profile=$_POST['job_profile'];
         $job_org=$_POST['job_org'];
         $job_start_date=$_POST['job_start_date'];
         $job_end_date=$_POST['job_end_date'];
         $job_desc=$_POST['job_desc'];

        $query= mysqli_query($con, "INSERT INTO `experience`(`user_id`,`profile`,`org`,`start_date`,`end_date`,`description`) VALUES ('$id','$job_profile','$job_org','$job_start_date','$job_end_date','$job_desc')");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
    if(isset($_POST['edit_job'])){
        $newid=$_POST['job_id'];
       

        $new_job_profile=$_POST['new_job_profile'];
        $new_job_org=$_POST['new_job_org'];
        $new_job_start_date=$_POST['new_job_start_date'];
        $new_job_end_date=$_POST['new_job_end_date'];
        $new_job_desc=$_POST['new_job_desc'];

        $query= mysqli_query($con, "UPDATE `experience` SET `profile`='$new_job_profile', `org`='$new_job_org',`start_date`='$new_job_start_date',`end_date`='$new_job_end_date',`description`='$new_job_desc' WHERE `id`='$newid'");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $j_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `experience`  WHERE id='$j_id'");
    header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
}

}
else{
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
?>
                                        