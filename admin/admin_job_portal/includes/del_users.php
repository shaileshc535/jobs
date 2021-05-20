<?php
include('includes/_header.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
        $select=mysqli_query($con, "SELECT * FROM job_seeker_details WHERE id='$id'");
        $res= mysqli_fetch_array($select);
		$delete_sql="DELETE FROM job_seeker_details WHERE id='$id'";
		mysqli_query($con,$delete_sql);
        // unlink("assets/files/".$res['resume']);
	}
    
}




?>