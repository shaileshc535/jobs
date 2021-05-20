<?php
ob_start();
session_start();
if (isset($_SESSION['loggedin'])) {
      $uid = $_SESSION['loggedin'];


      include 'include/header2.php';
      include('../admin/assets/_dbconnect.php');
      $id = $_GET['id'];

      $query = mysqli_query($con, "SELECT * FROM job_post WHERE id='$id'");
      $row = mysqli_fetch_array($query);
      $path = "../admin/admin_job_portal/img/.";
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
                                                                        <small>Manager</small></div>
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
                                                                        <small>Banking</small></div>
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
                                                      <a href="#">AutoCAD</a>
                                                      <a href="#">Civils</a>
                                                      <a href="#">food</a>
                                                      <a href="#">17th edition</a>
                                                      <a href="#">electrical</a>
                                                      <a href="#">engineer</a>
                                                      <a href="#">engineer</a>
                                                      <a href="#">engineering</a>
                                                      <a href="#">dairy</a>
                                                      <a href="#">projects</a>
                                                      <a href="#">Maintenance engineer</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <!-- Job Detail Content -->

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->


      <?php

      include 'include/footer.php';
} else {
      echo "Login First";
}
      ?>