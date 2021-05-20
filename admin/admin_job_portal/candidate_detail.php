<?php
session_start();
include '../assets/_dbconnect.php';
include('includes/_header.php');
if(isset($_SESSION['loggedin'] = true)){
$type=$_GET['type'];
if($type=='viewDetail'){
    $id=$_GET['id'];
    $select=mysqli_query($con, "SELECT * FROM job_seeker_details WHERE id='$id'");
    $res=mysqli_fetch_array($select);
    $user_id=$res['user_id'];
    $get_edu=mysqli_query($con,"SELECT * FROM education WHERE `user_id`='$user_id'");
    $get_job=mysqli_query($con,"SELECT * FROM experience WHERE `user_id`='$user_id'");
    $get_int=mysqli_query($con,"SELECT * FROM internship WHERE `user_id`='$user_id'");
    $get_tr=mysqli_query($con,"SELECT * FROM `training/course` WHERE `user_id`='$user_id'");
    $get_course=mysqli_query($con,"SELECT * FROM project WHERE `user_id`='$user_id'");
    $get_skill=mysqli_query($con,"SELECT * FROM candidate_skill WHERE `user_id`='$user_id'");
    $get_port=mysqli_query($con,"SELECT * FROM portfolio_link WHERE `user_id`='$user_id'");
    $run_port=mysqli_fetch_array($get_port);

}
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        
        <input type="button" value="Back" onclick="window.history.back()" /> 
        </div>
        <div class="container-fluid dashboard-content ">
        
            <h1>Candidate Details</h1>
        </div>
        
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../../../git_repo/job_portal/<?php echo $res['dp']; ?>" alt=""/>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    <!-- <h6>
                                        Web Developer and Designer
                                    </h6> -->
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal_details" role="tab" aria-controls="home" aria-selected="true">Prsonal Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="educational-tab" data-toggle="tab" href="#educational_details" role="tab" aria-controls="profile" aria-selected="true">Educational Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience_details" role="tab" aria-controls="profile" aria-selected="false">Job/Internship</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="project-tab" data-toggle="tab" href="#training_project" role="tab" aria-controls="profile" aria-selected="false">Training/Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="skill-tab" data-toggle="tab" href="#skill" role="tab" aria-controls="profile" aria-selected="false">Skills</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    
                        
                        <span  class="badge badge-light" name="view_portfolio" ><a href="<?php echo $run_port['link']; ?>" target="_blank">View Portfolio</a></span>
                      
                    </div>
                    
                </div>
                <br>
                <div class="row">
                   
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
<!-- ============================== Start Personal Details================================= -->
                            <div class="tab-pane fade show active" id="personal_details" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6" >
                                                <label >User Id:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_id'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['fname'].' '.$res['lname'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['email_id'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['mobile'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['dob'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Category</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['profession'];?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['city'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['state'];?></p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['pincode'];?></p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['aboutme'];?></p>
                                            </div>
                                        </div>   
                            </div>
<!-- ==================================End Personal Details================================ -->
<!-- ==================================Start Education Details============================= -->

                            <div class="tab-pane fade" id="educational_details" role="tabpanel" aria-labelledby="educational-tab">

                            <?php while($run_edu=mysqli_fetch_array($get_edu)){
    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Education</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_edu['education'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Institute</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_edu['institute'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Stream</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_edu['stream'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Passing Year</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_edu['passing_year'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Percentage</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_edu['percentage'];?></p>
                                            </div>
                                        </div>
                                        <?php echo '<============================================================================>';?>
                                        <?php
                        }
                        ?>

                            </div>
                        
<!-- =====================================End Education Details===================================== -->
<!-- =====================================Start Job Details========================================= -->

                            <div class="tab-pane fade" id="experience_details" role="tabpanel" aria-labelledby="experience-tab">
                            <?php while($run_job=mysqli_fetch_array($get_job)){
    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Job Profile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_job['profile'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Organization</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_job['org'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Start Date | End Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_job['start_date'].' | '.$run_job['end_date'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_job['description'];?></p>
                                            </div>
                                        </div>
                                        <?php echo '<=================================================================>';?>
                            
         <?php } while($run_int=mysqli_fetch_array($get_int)){?>                   
      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Internship Profile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_int['profile'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Organization</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_int['org'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Start Date | End Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_int['start_date'].' | '.$run_int['end_date'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_int['description'];?></p>
                                            </div>
                                        </div>
                                        <?php echo '<=================================================================>';?>
                                        <?php }?> 
                        </div>
                           
<!-- ============================================End JOb Details========================================== -->
<!-- ============================================start training/project details=========================== -->

                            <div class="tab-pane fade" id="training_project" role="tabpanel" aria-labelledby="project-tab">
                            <?php while($run_tr=mysqli_fetch_array($get_tr)){
    ?>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label>Training/Course name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_tr['name'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Institute</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_tr['org'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Start Date | End Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_tr['start_date'].' | '.$run_tr['end_date'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_tr['description'];?></p>
                                            </div>
                                        </div>

                                        <?php echo'<===============================================================>'; }
                                           while($run_course=mysqli_fetch_array($get_course)){ 
                                        ?>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Project Title</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_course['title'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Start Date | End Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_course['start_date'].' | '.$run_course['end_date'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_course['description'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Link</label>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?php echo $run_course['link'];?>" target="_blank"><?php echo $run_course['link'];?></a>
                                            </div>
                                        </div>
                                      <?php }?>                                  
                            </div>


<!--=============================================End traingin/project details============================  -->
<!-- ============================================Start Skill=============================================== -->

                            <div class="tab-pane fade" id="skill" role="tabpanel" aria-labelledby="skill-tab">
                            <?php while($run_skill=mysqli_fetch_array($get_skill)){?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><?php echo $run_skill['skill'];?></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $run_skill['level'];?></p>
                                            </div>
                                        </div>

                                      <?php }?>                                  
                            </div>

<!-- ============================================End SKill================================================= -->
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        
        <?php
            include('includes/_footer.php');
                            }
                            else{
                                header('location:sign_in.php');
                            }
        ?>