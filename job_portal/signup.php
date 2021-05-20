<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['skill'])){
         $candidate_skill=$_POST['candidate_skill'];
         

        $query= mysqli_query($con, "INSERT INTO `candidate_skill`(`user_id`,`skill`) VALUES ('$id','$candidate_skill')");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
    if(isset($_POST['edit_skill'])){
        $newid=$_POST['skill_id'];
       

        
        $new_candidate_skill=$_POST['new_candidate_skill'];
       
        $query= mysqli_query($con, "UPDATE `candidate_skill` SET `skill`='$new_candidate_skill' WHERE `id`='$newid'");
        header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $s_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `candidate_skill`  WHERE id='$s_id'");
    header('location:http://materiallibrary.co.in/candidate-dashboard-resume');
}

}
else{
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
?>
                                        