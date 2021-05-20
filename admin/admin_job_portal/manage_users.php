<?php
session_start();
include '../assets/_dbconnect.php';
include('includes/_header.php');
if(isset($_SESSION['loggedin'] = true)){
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="UPDATE job_seeker_details SET active='$status' WHERE id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
        $select=mysqli_query($con, "SELECT * FROM job_seeker_details WHERE id='$id'");
        $res= mysqli_fetch_array($select);
		$delete_sql="DELETE FROM job_seeker_details WHERE id='$id'";
		mysqli_query($con,$delete_sql);
        // unlink("assets/files/".$res['resume']);
	}
    
}




$sql="SELECT * FROM job_seeker_details";
$res=mysqli_query($con,$sql);
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        </div>
        <div class="container">
            <table class="table" id="manage_user">
                <thead style="text-align:center">
                    <tr>
                        <th class="serial">SR</th>
                        <th>User id</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
            <tbody style="text-align:center">
                <?php 
					$i=1;
					while($row=mysqli_fetch_assoc($res)){?>
                    <tr>
                        <td class="serial" ><?php echo $i++?></td>
                        <td><?php echo $row['user_id'];?></td>
                        <td><?php echo $row['fname'].' '.$row['lname']?></td>
                        <td><?php echo $row['email_id']?></td>
                        <td>
                            <?php
								if($row['active']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								            }
								    // echo "<span class='badge badge-edit'><a href='?id=".$row['id_user']."'>Edit</a></span>&nbsp;";
								
								    // echo "<span class=' badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								    // echo "<span  class=' badge badge-delete'><a class='delete' href='?type=delete&id=".$row['id']."' > CDelete</a></span>";
								    echo "<span class='badge badge-pending'><a href='candidate_detail.php?type=viewDetail&id=".$row['id']."'>Detail</a></span>";
                                    
								
							?>
                            
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
            </table> 
        </div>
 
        <?php
        include('includes/_footer.php');
                                        }
                                        else{
                                            header('location:sign_in.php');
                                        }
        ?>