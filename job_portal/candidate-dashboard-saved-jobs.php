<?php
ob_start();
// session_start();
// if(isset($_SESSION['id'])){
include('include/header.php');
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
$id = get_safe_value($con, $_GET['u_id']);
// $id=$_SESSION['id'];
$query = mysqli_query($con, "SELECT * FROM job_seeker_details WHERE `user_id`='$id'");
$res = mysqli_fetch_array($query);

?>
<!-- Main Content -->
<div class="careerfy-main-content">

      <!-- Main Section -->
      <div class="careerfy-main-section careerfy-dashboard-fulltwo">
            <div class="container">
                  <div class="row">

                        <aside class="careerfy-column-4">
                              <div class="careerfy-typo-wrap">
                                    <div class="jobsearch_candidate_info">
                                          <figure><img src="<?php echo $res['dp']; ?>" alt=""></figure>
                                          <h2><a href="#"><?php echo $res['fname'] . ' ' . $res['lname']; ?></a></h2>
                                          <p><?php echo $res['profession']; ?> </p>
                                          <span><?php echo $res['city'] . ', ' . $res['state']; ?></span>
                                          <small><?php echo $res['email_id'] ?></small>
                                          <ul>
                                                <li><a href="#" data-original-title="facebook"
                                                            class="careerfy-icon careerfy-facebook-logo"></a></li>
                                                <li><a href="#" data-original-title="twitter"
                                                            class="careerfy-icon careerfy-twitter-logo"></a></li>
                                                <li><a href="#" data-original-title="linkedin"
                                                            class="careerfy-icon careerfy-linkedin-button"></a></li>
                                                <li><a href="#" data-original-title="google-plus"
                                                            class="careerfy-icon careerfy-google-plus-logo-button"></a>
                                                </li>
                                                <li><a href="#" data-original-title="dribbble"
                                                            class="careerfy-icon careerfy-dribbble-logo"></a></li>
                                          </ul>
                                          <!-- <a href="#" class="careerfy-candidate-download-btn"><i class="careerfy-icon careerfy-download-arrow"></i> Download Portfolio</a> -->
                                    </div>
                                    <div class="widget widget_contact_form">
                                          <div class="careerfy-widget-title">
                                                <h2>Contact Form</h2>
                                          </div>
                                          <div>
                                                <ul>
                                                      <li>
                                                            <label>User Name:</label>
                                                            <input value="Enter Your Name"
                                                                  onblur="if(this.value == '') { this.value ='Enter Your Name'; }"
                                                                  onfocus="if(this.value =='Enter Your Name') { this.value = ''; }"
                                                                  type="text">
                                                            <i class="careerfy-icon careerfy-user"></i>
                                                      </li>
                                                      <li>
                                                            <label>Email Address:</label>
                                                            <input value="Enter Your Email Address"
                                                                  onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }"
                                                                  onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }"
                                                                  type="text">
                                                            <i class="careerfy-icon careerfy-mail"></i>
                                                      </li>
                                                      <li>
                                                            <label>Phone Number:</label>
                                                            <input value="Enter Your Phone Number"
                                                                  onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }"
                                                                  onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }"
                                                                  type="text">
                                                            <i class="careerfy-icon careerfy-technology"></i>
                                                      </li>
                                                      <li>
                                                            <label>Message:</label>
                                                            <textarea>After using Big Interview, I now feel much more confident about handling real interviews. I really liked the recording & playback functionality, which allowed me to hear my voice and analyze the strength and confidence of my answer.</textarea>
                                                      </li>
                                                      <li> <img src="extra-images/widget-contact-captcha.jpg" alt="">
                                                      </li>
                                                      <li>
                                                            <input type="submit" value="Send now">
                                                            <p>You accepts our <a href="#">Terms and Conditions</a></p>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </aside>
                        <div class="careerfy-column-8">
                              <div class="careerfy-typo-wrap">

                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-mortarboard"></i> Education</h2>
                                    </div>
                                    <div class="careerfy-candidate-timeline">
                                          <ul class="careerfy-row">
                                                <?php
                                $get_edu = mysqli_query($con, "SELECT * FROM `education` WHERE `user_id`='$id'");
                                while ($run_edu = mysqli_fetch_array($get_edu)) {
                                ?>
                                                <li class="careerfy-column-12">
                                                      <small><?php echo $run_edu['passing_year']; ?></small>
                                                      <div class="careerfy-candidate-timeline-text">
                                                            <span><?php echo $run_edu['education']; ?></span>
                                                            <h2><a href="#"><?php echo $run_edu['stream']; ?></a></h2>
                                                            <p><?php echo $run_edu['institute']; ?></p>
                                                            <p><?php echo $run_edu['percentage'] . '%'; ?></p>
                                                      </div>
                                                </li>
                                                <?php
                                }
                                ?>
                                          </ul>
                                    </div>
                                    <!-- experience -->
                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-social-media"></i> Experince</h2>
                                    </div>

                                    <?php
                        $get_exp = mysqli_query($con, "SELECT * FROM `experience` WHERE `user_id`='$id'");
                        while ($run_exp = mysqli_fetch_array($get_exp)) {
                            if (!empty($run_exp['profile'])) {
                        ?>
                                    <div class="careerfy-candidate-timeline">

                                          <ul class="careerfy-row">

                                                <li class="careerfy-column-12">
                                                      <small><?php echo $run_exp['start_date'] . '/' . $run_exp['end_date']; ?></small>
                                                      <div class="careerfy-candidate-timeline-text">
                                                            <span><?php echo $run_exp["org"]; ?></span>
                                                            <h2><a href="#"><?php echo $run_exp["profile"]; ?></a></h2>
                                                            <p><?php echo $run_exp["description"]; ?></p>
                                                      </div>
                                                </li>

                                          </ul>
                                    </div>

                                    <?php

                            } else {
                                echo "
                                        
                                        <ul class='careerfy-row'>
                                        <li class='careerfy-column-12'>
                                            <p>No Data Avialable</p>
                                            
                                        </li>
                                        
                                    </ul>";
                            }
                        }
                        ?>
                                    <!-- experience -->
                                    <!-- internship -->
                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-social-media"></i> Internship</h2>
                                    </div>

                                    <?php
                        $get_int = mysqli_query($con, "SELECT * FROM `internship` WHERE `user_id`='$id'");
                        while ($run_int = mysqli_fetch_array($get_int)) {
                            if (!empty($run_int['profile'])) {
                        ?>
                                    <div class="careerfy-candidate-timeline">

                                          <ul class="careerfy-row">

                                                <li class="careerfy-column-12">
                                                      <small><?php echo $run_int['start_date'] . '/' . $run_int['end_date']; ?></small>
                                                      <div class="careerfy-candidate-timeline-text">
                                                            <span><?php echo $run_int["org"]; ?></span>
                                                            <h2><a href="#"><?php echo $run_int["profile"]; ?></a></h2>
                                                            <p><?php echo $run_int["description"]; ?></p>
                                                      </div>
                                                </li>

                                          </ul>
                                    </div>

                                    <?php

                            } else {
                                echo "
                                        
                                        <ul class='careerfy-row'>
                                        <li class='careerfy-column-12'>
                                            <p>No Data Avialable</p>
                                            
                                        </li>
                                        
                                    </ul>";
                            }
                        }
                        ?>
                                    <!-- internship -->
                                    <!-- project -->
                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-social-media"></i> Projects</h2>
                                    </div>

                                    <?php
                        $get_pro = mysqli_query($con, "SELECT * FROM `project` WHERE `user_id`='$id'");
                        while ($run_pro = mysqli_fetch_array($get_pro)) {
                            if (!empty($run_pro['title'])) {
                        ?>
                                    <div class="careerfy-candidate-timeline">

                                          <ul class="careerfy-row">

                                                <li class="careerfy-column-12">
                                                      <small><?php echo $run_pro['start_date'] . '/' . $run_pro['end_date']; ?></small>
                                                      <div class="careerfy-candidate-timeline-text">
                                                            <span><a href="<?php echo $run_pro["link"]; ?>"
                                                                        target="_blank"><?php echo $run_pro["link"]; ?></a></span>

                                                            <h2><?php echo $run_pro["title"]; ?></h2>
                                                            <p><?php echo $run_pro["description"]; ?></p>
                                                      </div>
                                                </li>

                                          </ul>
                                    </div>

                                    <?php

                            } else {
                                echo "
                                        
                                        <ul class='careerfy-row'>
                                        <li class='careerfy-column-12'>
                                            <p>No Data Avialable</p>
                                            
                                        </li>
                                        
                                    </ul>";
                            }
                        }
                        ?>
                                    <!-- project -->
                                    <!-- training/course -->
                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-social-media"></i> Training/Course</h2>
                                    </div>

                                    <?php
                        $get_course = mysqli_query($con, "SELECT * FROM `training/course` WHERE `user_id`='$id'");
                        while ($run_course = mysqli_fetch_array($get_course)) {
                            if (!empty($run_course['name'])) {
                        ?>
                                    <div class="careerfy-candidate-timeline">

                                          <ul class="careerfy-row">

                                                <li class="careerfy-column-12">
                                                      <small><?php echo $run_course['start_date'] . '/' . $run_course['end_date']; ?></small>
                                                      <div class="careerfy-candidate-timeline-text">
                                                            <span><?php echo $run_course["org"]; ?></span>

                                                            <h2><a href="#"><?php echo $run_course["name"]; ?></a></h2>
                                                            <p><?php echo $run_course["description"]; ?> </p>
                                                      </div>
                                                </li>

                                          </ul>
                                    </div>

                                    <?php

                            } else {
                                echo "
                                        
                                        <ul class='careerfy-row'>
                                        <li class='careerfy-column-12'>
                                            <p>No Data Avialable</p>
                                            
                                        </li>
                                        
                                    </ul>";
                            }
                        }
                        ?>
                                    <!-- training/course -->
                                    <!-- skills -->
                                    <div class="jobsearch_progressbar_wrap">
                                          <div class="careerfy-row">
                                                <div class="careerfy-column-6">
                                                      <div class="careerfy-candidate-title">
                                                            <h2><i class="careerfy-icon careerfy-design-skills"></i>
                                                                  Skills</h2>
                                                      </div>

                                                      <?php
                                    $get_skill = mysqli_query($con, "SELECT * FROM `candidate_skill` WHERE `user_id`='$id'");
                                    while ($run_skill = mysqli_fetch_array($get_skill)) {

                                    ?>

                                                      <div class="jobsearch_progressbar1" data-width='90'>
                                                            <?php echo $run_skill["skill"]; ?></div>
                                                      <?php
                                    }
                                    ?>
                                                </div>
                                          </div>
                                    </div>
                                    <!-- skills -->

                                    <div class="careerfy-candidate-title">
                                          <h2><i class="careerfy-icon careerfy-briefcase"></i> Portfolio</h2>
                                    </div>
                                    <?php
                        $get_port = mysqli_query($con, "SELECT * FROM `portfolio_link` WHERE `user_id`='$id'");
                        while ($run_port = mysqli_fetch_array($get_port)) {

                        ?>

                                    <div class="careerfy-gallery careerfy-simple-gallery candidate_portfolio">
                                          <ul class="careerfy-row grid">
                                                <span><a href="<?php echo $run_port['link']; ?>"
                                                            target="_blank"><?php echo $run_port['link']; ?></a></span>
                                          </ul>
                                    </div>

                                    <?php
                        }
                        ?>
                              </div>

                        </div>
                  </div>

            </div>
      </div>
</div>
<!-- Main Section -->

</div>
<!-- Main Content -->

<!-- Footer -->
<?php
include 'include/footer.php';
// }
// else{
//     header('location:http://materiallibrary.co.in/signin');
//     exit;
// }
?>