<?php
ob_start();
session_start();



include 'include/header2.php';
include('../admin/assets/_dbconnect.php');
$id = $_GET['jid'];

$query = mysqli_query($con, "SELECT * FROM job_post WHERE id='$id'");
$row = mysqli_fetch_array($query);
$path = "../admin/admin_job_portal/img/.";



// if(isset($_SESSION['user_login'])){
//     $uid = $_SESSION['id'];
//     if(mysqli_num_rows(mysqli_query($con,"select * from job_shortlist where user_id='$uid' and id_jobpost='$id'"))>0){

//         echo"Already Added";
//     }
//     else{
//         $date = date('y-m-d h:i:s');           
//         mysqli_query($con,"insert into job_shortlist(user_id,id_jobpost,date) values('$uid','$id','$date')");  
//         header('Location:job-detail-two.php');
//     }
// }
// else{
//     echo"Not Loggedin";
// }


?>


<div id="app">
      <div class="fixed-list">
            <ul class="nav" id="init-scrollspy">
                  <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                        <a href="#" class="nav-link" id="calculate"><i class="fas fa-calculator"></i></a>
                  </li>
                  <li data-tooltip="tooltip" data-placement="left" title="Unit Converter">
                        <a class="nav-link"><i class="fas fa-drafting-compass"></i></a>
                  </li>
                  <li data-tooltip="tooltip" data-placement="left" title="Money Converter">
                        <a class="nav-link"><i class="fas fa-rupee-sign"></i></a>
                  </li>
                  <li data-tooltip="tooltip" data-placement="left" title="AR / Coming Soon">
                        <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
                  </li>
                  <li data-tooltip="tooltip" data-placement="left" title="VR / Coming Soon">
                        <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
                  </li>
                  <li data-tooltip="tooltip" data-placement="left" title="Vastu / Coming Soon">
                        <a class="nav-link"><i class="fas fa-star-of-david"></i></a>
                  </li>
            </ul>
      </div>



      <!-- SubHeader -->
      <div class="careerfy-subheader-style7">

            <!-- SubHeader Style7 Top -->
            <div class="careerfy-subheader-style7-top">
                  <div class="container">
                        <div class="row">
                              <div class="careerfy-column-12">
                                    <a href="http://materiallibrary.co.in/job-listings" class="careerfy-left"><i
                                                class="careerfy-icon careerfy-arrows22"></i> Back to all Jobs</a>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- SubHeader Style7 Top -->
            <div class="careerfy-breadcrumb-style7">
                  <div class="container">
                        <ul>
                              <li><a href="http://materiallibrary.co.in/">Home</a></li>

                              <li><?php echo $row['jobtitle'] ?></li>
                        </ul>
                  </div>
            </div>

      </div>
      <!-- SubHeader -->

      <!-- Main Content -->
      <div class="careerfy-main-content">

            <!-- Main Section -->
            <div class="careerfy-main-section">
                  <div class="container">
                        <div class="row">

                              <!-- Job Detail Content -->
                              <div class="careerfy-column-8">
                                    <div class="careerfy-typo-wrap">
                                          <div class="careerfy-jobdetail-content-list">
                                                <h2><?php echo $row['jobtitle']; ?></h2>
                                                <ul>
                                                      <li><span><?php echo $row['job_type']; ?></span></li>
                                                      <li><i class="careerfy-icon careerfy-maps-and-flags"></i>
                                                            <small><?php echo $row['state'] . "," . $row['city']  ?></small>
                                                      </li>
                                                      <li><i class="careerfy-icon careerfy-building"></i>Posted on
                                                            <?php echo $row['createdat'] ?> – Accepting applications
                                                      </li>


                                                </ul>
                                          </div>
                                          <div class="careerfy-jobdetail-content">
                                                <div class="careerfy-content-title">
                                                      <h2>Job Detail</h2>
                                                </div>
                                                <div class="careerfy-jobdetail-services">
                                                      <ul class="careerfy-row">
                                                            <li class="careerfy-column-4">
                                                                  <i class="careerfy-icon careerfy-salary"></i>
                                                                  <div class="careerfy-services-text">Offerd Salary
                                                                        <small><?php echo "₹" . $row['salary'] . ' ' . $row['salary-type']; ?></small>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-4">
                                                                  <i class="careerfy-icon careerfy-social-media"></i>
                                                                  <div class="careerfy-services-text">Career Level
                                                                        <small>Manager</small>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-4">
                                                                  <i class="careerfy-icon careerfy-briefcase"></i>
                                                                  <div class="careerfy-services-text">Experience <small>
                                                                              <?php echo $row['experience'] . " Year"; ?>
                                                                        </small></div>
                                                            </li>

                                                            <li class="careerfy-column-4">
                                                                  <i class="careerfy-icon careerfy-network"></i>
                                                                  <div class="careerfy-services-text">Industry
                                                                        <small>Banking</small>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-4">
                                                                  <i class="careerfy-icon careerfy-mortarboard"></i>
                                                                  <div class="careerfy-services-text">Qualification
                                                                        <small><?php echo $row['qualification']; ?></small>
                                                                  </div>
                                                            </li>
                                                      </ul>
                                                </div>
                                                <div class="careerfy-content-title">
                                                      <h2>Job Description</h2>
                                                </div>
                                                <div class="careerfy-description">
                                                      <p><?php echo $row['description']; ?></p>
                                                </div>

                                                <div class="careerfy-content-title">
                                                      <h2>What we can offer you</h2>
                                                </div>
                                                <div class="careerfy-description">
                                                      <p><?php echo $row['perks']; ?> </p>

                                                </div>
                                                <div class="careerfy-content-title">
                                                      <h2>Required skills</h2>
                                                </div>
                                                <div class="careerfy-jobdetail-tags">
                                                      <p><?php echo $row['skill']; ?> </p>
                                                      <!-- <a href="#">AutoCAD</a>
                                            <a href="#">Civils</a>
                                            <a href="#">food</a>
                                            <a href="#">17th edition</a>
                                            <a href="#">electrical</a>
                                            <a href="#">engineer</a>
                                            <a href="#">engineer</a>
                                            <a href="#">engineering</a>
                                            <a href="#">dairy</a>
                                            <a href="#">projects</a>
                                            <a href="#">Maintenance engineer</a> -->
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <!-- Job Detail Content -->
                              <!-- Job Detail SideBar -->
                              <?php
                              if (isset($_SESSION['loggedin'])) {
                                    $uid = $_SESSION['loggedin'];
                              ?>
                              <aside class="careerfy-column-4">
                                    <div class="careerfy-typo-wrap">
                                          <div class="widget widget_application_apply">
                                                <img src="<?php echo $path . $row['image'] ?>" height="100px"
                                                      width="100px" alt="">
                                                <h2><?php echo $row['company'] ?></h2>
                                                <?php
                                                      $job_id = $row['id'];
                                                      $sql = mysqli_query($con, "SELECT * FROM job_shortlist WHERE id_jobpost='$job_id' AND `user_id`='$uid' ");
                                                      $result = mysqli_fetch_array($sql);
                                                      if (empty($result)) {
                                                      ?>
                                                <a href="shortlist_manage.php?id=<?php echo $row['id'] ?>"
                                                      class="shortlist_job_btn">Shortlist this job</a>
                                                <?php
                                                      } else {
                                                      ?>
                                                <a href="javascript:void()" class="shortlist_job_btn">Shortlisted</a>
                                                <?php } ?>

                                                <?php
                                                      $select = mysqli_query($con, "SELECT status FROM job_apply_job_post WHERE `user_id`='$uid' && `job_post_id`='$id'");
                                                      $num = mysqli_num_rows($select);
                                                      if ($num > 0) {
                                                      ?>
                                                <a href="candidate-gen-resume.php?id=<?php echo $row['id'] ?>&cid=<?php echo $row['company_id'] ?>"
                                                      class="widget_application_apply_btn">Applied</a>
                                                <?php
                                                      } else {
                                                      ?>
                                                <a href="candidate-gen-resume.php?id=<?php echo $row['id'] ?>&cid=<?php echo $row['company_id'] ?>"
                                                      class="widget_application_apply_btn">Apply to this job</a>
                                                <?php }
                                                      ?>

                                          </div>
                              </aside>
                              <?php } else { ?>
                              <aside class="careerfy-column-4">
                                    <div class="careerfy-typo-wrap">
                                          <div class="widget widget_application_apply">
                                                <img src="<?php echo $path . $row['image'] ?>" height="100px"
                                                      width="100px" alt="">
                                                <h2><?php echo $row['company'] ?></h2>

                                                <a href="http://materiallibrary.co.in/signin"
                                                      class="shortlist_job_btn">Shortlist this job</a>




                                                <a href="http://materiallibrary.co.in/signin"
                                                      class="widget_application_apply_btn">Apply to this job</a>


                                          </div>
                              </aside>
                              <?php } ?>
                              <!-- Job Detail SideBar -->

                              <!-- Job's Listing's -->
                              <!-- <div class="careerfy-column-12">
                                
                                <div class="careerfy-joblisting-view4-title"> <h2>Related Jobs</h2> </div>
                                <div class="careerfy-job-listing careerfy-joblisting-view4">
                                    <ul class="row">
                                        <li class="col-md-12">
                                            <div class="careerfy-joblisting-wrap">
                                                <div class="careerfy-joblisting-media">
                                                    <figure>
                                                        <a href="#"> <img src="extra-images/employer-seven-1.png" alt=""> </a>
                                                    </figure>
                                                </div>
                                                <div class="careerfy-joblisting-text">
                                                    <h2><a href="#">Development Team Lead (Group Wide Technology)</a> <span style="background-color: #ffffff; border-color: #53b427; color: #53b427"> Freelance </span> </h2>
                                                    <div class="careerfy-company-name"><a href="#">@Bandujo Advertising + Design </a></div>
                                                    <small><i class="careerfy-icon careerfy-maps-and-flags"></i>  Netherlands, Rotterdam</small>
                                                    <div class="careerfy-job-skills">
                                                        <a href="#">wordpress</a>
                                                        <a href="#">php</a>
                                                        <a href="#">mysql</a>
                                                        <a href="#">symfony</a>
                                                        <a href="#">laravel</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <span class="careerfy-joblisting-view4-featured">Featured</span>
                                            </div>
                                        </li>
                                        <li class="col-md-12">
                                            <div class="careerfy-joblisting-wrap">
                                                <div class="careerfy-joblisting-media">
                                                    <figure>
                                                        <a href="#"> <img src="extra-images/employer-seven-2.png" alt=""> </a>
                                                    </figure>
                                                </div>
                                                <div class="careerfy-joblisting-text">
                                                    <h2><a href="#">Development Team Lead (Group Wide Technology)</a> <span style="background-color: #f1630d; color: #ffffff">Part Time</span> </h2>
                                                    <div class="careerfy-company-name"><a href="#">@Bandujo Advertising + Design </a></div>
                                                    <small><i class="careerfy-icon careerfy-maps-and-flags"></i>  Netherlands, Rotterdam</small>
                                                    <div class="careerfy-job-skills">
                                                        <a href="#">wordpress</a>
                                                        <a href="#">php</a>
                                                        <a href="#">mysql</a>
                                                        <a href="#">symfony</a>
                                                        <a href="#">laravel</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <span class="careerfy-joblisting-view4-new">New</span>
                                            </div>
                                        </li>
                                        <li class="col-md-12">
                                            <div class="careerfy-joblisting-wrap">
                                                <div class="careerfy-joblisting-media">
                                                    <figure>
                                                        <a href="#"> <img src="extra-images/employer-seven-3.png" alt=""> </a>
                                                    </figure>
                                                </div>
                                                <div class="careerfy-joblisting-text">
                                                    <h2><a href="#">Development Team Lead (Group Wide Technology)</a> <span style="background-color: #ffffff; border-color: #186fc9; color: #186fc9">Full Time</span> </h2>
                                                    <div class="careerfy-company-name"><a href="#">@Bandujo Advertising + Design </a></div>
                                                    <small><i class="careerfy-icon careerfy-maps-and-flags"></i>  Netherlands, Rotterdam</small>
                                                    <div class="careerfy-job-skills">
                                                        <a href="#">wordpress</a>
                                                        <a href="#">php</a>
                                                        <a href="#">mysql</a>
                                                        <a href="#">symfony</a>
                                                        <a href="#">laravel</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <span class="careerfy-joblisting-view4-new">New</span>
                                            </div>
                                        </li>
                                        <li class="col-md-12">
                                            <div class="careerfy-joblisting-wrap">
                                                <div class="careerfy-joblisting-media">
                                                    <figure>
                                                        <a href="#"> <img src="extra-images/employer-seven-4.png" alt=""> </a>
                                                    </figure>
                                                </div>
                                                <div class="careerfy-joblisting-text">
                                                    <h2><a href="#">Development Team Lead (Group Wide Technology)</a> <span style="background-color: #ffffff; border-color: #e12335; color: #e12335">temporary</span> </h2>
                                                    <div class="careerfy-company-name"><a href="#">@Bandujo Advertising + Design </a></div>
                                                    <small><i class="careerfy-icon careerfy-maps-and-flags"></i>  Netherlands, Rotterdam</small>
                                                    <div class="careerfy-job-skills">
                                                        <a href="#">wordpress</a>
                                                        <a href="#">php</a>
                                                        <a href="#">mysql</a>
                                                        <a href="#">symfony</a>
                                                        <a href="#">laravel</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <span class="careerfy-joblisting-view4-date">July 26, 2018</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
    
                            </div> -->
                              <!-- Job's Listing's -->

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->


      <?php

      include 'include/footer.php';
      //    }
      //    else{
      //       header('location:http://materiallibrary.co.in/signin');
      //    }
      ?>