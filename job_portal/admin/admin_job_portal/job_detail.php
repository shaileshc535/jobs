<?php
session_start();
include('includes/_header.php');
if(isset($_SESSION['loggedin'] )== true){
 $id = $_GET['id'];
 $cid=$_GET['cid'];
 $path = "./img/";
 


if(isset($_GET['operation'])=='verify'){
	$operation=$_GET['operation'];
    if($operation=='verify'){		
		$id=$_GET['id'];
        $cid=$_GET['cid'];
        $ver = 'Active';
		$update_status_sql="UPDATE job_post SET verify='$ver' WHERE id='$id'";
		mysqli_query($con,$update_status_sql);
    }
}
if(isset($_GET['operation'])=='reject'){
	$operation=$_GET['operation'];
    if($operation=='reject'){		
		$id=$_GET['id'];
        $cid=$_GET['cid'];
        $ver = 'Declined';
		$update_status_sql="UPDATE job_post SET verify='$ver' WHERE id='$id'";
		mysqli_query($con,$update_status_sql);
    }
}

if(isset($_GET['operation'])=='close'){
	$operation=$_GET['operation'];
    if($operation=='close'){		
		$id=$_GET['id'];
        $cid=$_GET['cid'];
        $ver = 'Closed';
		$update_status_sql="UPDATE job_post SET verify='$ver' WHERE id='$id'";
		mysqli_query($con,$update_status_sql);
    }
}

 $sql=mysqli_query($con ,"SELECT * FROM job_post WHERE id='$id' ");
 $array = mysqli_fetch_array($sql);
 $sql1=mysqli_query($con ,"SELECT * FROM job_company WHERE user_id='$cid' ");
 $array1 = mysqli_fetch_array($sql1);
?>



<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo $path.$array['image'];?>" height="180" width="180"  alt=""/>
                            
                        </div>
                    </div>
            <h1><?php echo $array['company'];?> </h1>
        </div>
        <div class="container">
        <div class="container emp-profile">

        <div class="col-md-6">
    <div class="profile-head">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 
                                 <li class="nav-item">
                                     <a class="nav-link " id="home-tab" data-toggle="tab" href="#job-detail" role="tab" aria-controls="home" aria-selected="true">Job Details</a>
                                 </li>

                                 <li class="nav-item">
                                     <a class="nav-link " id="company-tab" data-toggle="tab" href="#company_detail" role="tab" aria-controls="profile" aria-selected="true">Company Details</a>
                                 </li>
        </ul>
    </div>
</div>
            <form method="post">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                                                             
                                    </h5>
                                    <h6>
                                   
                                    </h6>
    
                        </div>
                    </div>
                    <div class="col-md-3"> 
                    <?php                         
                                          
                                            
                        if($array['verify']=='Active'){
                                echo"<span class='badge'><a href='#'>Verified</a></span>";
                               
                                echo"<span class='badge'><a href='job_detail.php?&operation=reject&id=".$array['id']."&cid=".$array1['user_id']."'>Reject</a></span>";  
                                
                                echo"<span class='badge'><a href='job_detail.php?&operation=close&id=".$array['id']."&cid=".$array1['user_id']."'>Close</a></span>";
                            } 
                           
                                
                               
                                                                            
                            elseif($array['verify']=='Declined')
                            {
                                echo"<span class='badge'><a href='#'>Rejected</a></span>";
                            }

                            elseif($array['verify']=='Closed'){
                                echo"<span class='badge'><a href='#'>Verified</a></span>";
                                echo"<span class='badge'><a href='job_detail.php?&operation=reject&id=".$array['id']."&cid=".$array1['user_id']."'>Reject</a></span>";                                
                                echo"<span class='badge'><a href='job_detail.php?&operation=close&id=".$array['id']."&cid=".$array1['user_id']."'>Closed</a></span>";
                            } 
                            else{
                                echo"<span class='badge'><a href='job_detail.php?&operation=verify&id=".$array['id']."&cid=".$array1['user_id']."'>Verify</a></span>";
                                echo"<span class='badge'><a href='job_detail.php?&operation=reject&id=".$array['id']."&cid=".$array1['user_id']."'>Reject</a></span>";                                


                            }
                           
                              ?>        

                    
                   

                        
                   
                    <?php  
                        // if($array['verify']==1){
                        //         echo"<span class='badge'><a href='?type=status&operation=verify&id=".$array['id']."&cid=".$array1['user_id']."'>Verified</a></span>";
                        //     }
                            // else{
                            //     echo"<span class='badge'><a href='?type=status&operation=verified&id=".$array['id']."&cid=".$array1['user_id']."'>Verify</a></span>";
                            //     }
                     ?>                        
                    </div>
                   
                </div>
                <div class="row">
                   
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="job-detail" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Name</label>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <p><?php echo $array['company'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['email'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Job Category</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['jobtitle'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['state'];?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['city'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Stipend</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['stipend'];?> </p>
                                            </div>
                                        </div><div class="row">
                                            <div class="col-md-6">
                                                <label>Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['salary'];?> </p>
                                            </div>
                                        </div><div class="row">
                                            <div class="col-md-6">
                                                <label>Experience Required(in year)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['experience'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Openings</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['openings'];?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['qualification'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                    if($array['status']=='1')
                                                    {
                                                        echo"Active";
                                                    }
                                                    else{
                                                        echo"Deactive";
                                                    }
                                                
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $array['description'];?> </p>
                                            </div>
                                        </div>
                                            
                                </div>
                                    

<div class="tab-pane fade" id="company_detail" role="tabpanel" aria-labelledby="company-tab">

        
            <div class="row">
                <div class="col-md-6">
                    <label>Company Name</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array['company'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Email</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['email']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>State</label> 
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['state'];?></p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>City</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['city'];?></p>
                </div>
                </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label>Website</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['website']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Linkedin</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['linkdin_url']; ?></p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>Facebook</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['facebook_url']; ?></p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>Twitter</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['twiter_url']; ?></p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>Document</label>
                </div>
                <div class="col-md-6">
                    <p><a href="<?php echo $path.$array['docs'] ?>">View</a></p>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>CompanyFoundation Date</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $array1['company_fondation_date']; ?></p>
                </div>
            </div>
           
             
            <?php echo '<============================================================================>';?>
 


</div>
                                        </div>
                                       
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</div>
        <?php
        include('includes/_footer.php');
                                                }
                                                else{
                                                    header('location:sign_in.php');
                                                }
        ?> 