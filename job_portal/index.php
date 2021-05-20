<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['int'])){
         $int_profile=$_POST['int_profile'];
         $int_org=$_POST['int_org'];
         $int_start_date=$_POST['int_start_date'];
         $int_end_date=$_POST['int_end_date'];
         $int_desc=$_POST['int_desc'];

        $query= mysqli_query($con, "INSERT INTO `internship`(`user_id`,`profile`,`org`,`start_date`,`end_date`,`description`) VALUES ('$id','$int_profile','$int_org','$int_start_date','$int_end_date','$int_desc')");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
    if(isset($_POST['edit_int'])){
        $newid=$_POST['int_id'];
       

        $new_int_profile=$_POST['new_int_profile'];
        $new_int_org=$_POST['new_int_org'];
        $new_int_start_date=$_POST['new_int_start_date'];
        $new_int_end_date=$_POST['new_int_end_date'];
        $new_int_desc=$_POST['new_int_desc'];

        $query= mysqli_query($con, "UPDATE `internship` SET `profile`='$new_int_profile', `org`='$new_int_org',`start_date`='$new_int_start_date',`end_date`='$new_int_end_date',`description`='$new_int_desc' WHERE `id`='$newid'");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $i_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `internship`  WHERE id='$i_id'");
    header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
}

}
else{
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
?>
                                        