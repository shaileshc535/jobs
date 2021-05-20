<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['tc'])){
         $training_course=$_POST['training_course'];
         $institute=$_POST['institute'];
         $start_date=$_POST['start_date'];
         $end_date=$_POST['end_date'];
         $desc=$_POST['desc'];

        $query= mysqli_query($con, "INSERT INTO `training/course`(`user_id`,`name`,`org`,`start_date`,`end_date`,`description`) VALUES ('$id','$training_course','$institute','$start_date','$end_date','$desc')");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
    if(isset($_POST['edit_tc'])){
        $newid=$_POST['c_id'];
       

         $training_course=$_POST['new_training_course'];
         $institute=$_POST['new_institute'];
         $start_date=$_POST['new_start_date'];
         $end_date=$_POST['new_end_date'];
         $desc=$_POST['new_desc'];

        $query= mysqli_query($con, "UPDATE `training/course` SET `name`='$training_course', `org`='$institute',`start_date`='$start_date',`end_date`='$end_date',`description`='$desc' WHERE `id`='$newid'");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $c_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `training/course`  WHERE id='$c_id'");
    header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
}

}
else{
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
?>
                                        