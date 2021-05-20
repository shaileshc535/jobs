<?php

ob_start();
include 'include/header.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';

$msg = '';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
      header('location:http://materiallibrary.co.in/signin');
      exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      $loggedin = true;
} else {
      $loggedin = false;
}

if (isset($_SESSION['loggedin'])) {
      $id = $_SESSION['loggedin'];
      $query = "SELECT * FROM  job_company WHERE user_id='$id'";
      $res = mysqli_query($con, $query);
      $res1 = mysqli_fetch_array($res);


      $sql4 = "SELECT * FROM  job_post WHERE company_id='$id'";
      $res4 = mysqli_query($con, $sql4);
      $count4 = mysqli_num_rows($res4);
?>


<!-- Header -->

<!-- SubHeader -->
<div class="careerfy-subheader careerfy-subheader-without-bg">
      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <div class="careerfy-page-title">
                              <h1>Companies</h1>
                              <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="clearfix"></div>
      <div class="careerfy-breadcrumb">
            <ul>
                  <li><a href="http://materiallibrary.co.in/">Home</a></li>
                  <!--<li><a href="#">Pages</a></li>-->
                  <li>Candidates</li>
            </ul>
      </div>
</div>
<!-- SubHeader -->

<!-- Main Content -->
<div class="careerfy-main-content">

      <!-- Main Section -->
      <div class="careerfy-main-section careerfy-dashboard-fulltwo">
            <div class="container">
                  <div class="row">

                        <?php
                              include './backend/employer_aside.php';
                              ?>
                        <div class="careerfy-column-9">
                              <div class="careerfy-typo-wrap">
                                    <div class="careerfy-employer-dasboard">
                                          <div class="careerfy-employer-box-section" id="ml-newjob">
                                                <!-- Profile Title -->
                                                <div class="careerfy-profile-title">
                                                      <h2>Post a New Job</h2>
                                                </div>
                                                <!-- New Job -->
                                                <nav class="careerfy-employer-jobnav">
                                                      <ul>
                                                            <li><a href="employer-dashboard-newjob"><i
                                                                              class="careerfy-icon careerfy-briefcase-1"></i>
                                                                        <span>Job
                                                                              Detail</span></a></li>

                                                            <li class="active"><a
                                                                        href="employer-dashboard-confitmation"><i
                                                                              class="careerfy-icon careerfy-checked"></i>
                                                                        <span>Confirmation</span></a></li>
                                                      </ul>
                                                </nav>
                                                <!-- Confitmation -->
                                                <div class="careerfy-employer-confitmation">
                                                      <!-- <img src="images/employer-confirmation-icon.png" alt=""> -->
                                                      <h2>Thank you for submitting</h2>
                                                      <p>Thank you for submitting, your job has been published AFTER THE
                                                            VARIFICATION. If
                                                            you need help please
                                                            contact us via email materiallibrary2021@gmail.com</p>
                                                      <div class="clearfix"></div>
                                                      <div class="careerfy-managejobs-list-wrap">
                                                            <ul class="careerfy-row" id="table-data">
                                                                  <div
                                                                        class='careerfy-table-layer careerfy-managejobs-thead'>
                                                                        <div class='careerfy-table-row'>
                                                                              <div class='careerfy-table-cell'>Job Title
                                                                              </div>
                                                                              <div class='careerfy-table-cell'>Status
                                                                              </div>
                                                                              <div class='careerfy-table-cell'>Actions
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <?php

                                                                        while ($row4 = mysqli_fetch_assoc($res4)) {

                                                                        ?>
                                                                  <div
                                                                        class='careerfy-table-layer careerfy-managejobs-tbody'>


                                                                        <div class='careerfy-table-row'>
                                                                              <div class='careerfy-table-cell col-md-4'>
                                                                                    <?php echo $row4['jobtitle']; ?>
                                                                              </div>

                                                                              <div class='careerfy-table-cell col-md-4'>
                                                                                    <?php
                                                                                                echo $row4['verify'];
                                                                                                ?>
                                                                              </div>
                                                                              <div class='careerfy-table-cell col-md-4'>
                                                                                    <?php
                                                                                                echo $row4['verify'];
                                                                                                ?>
                                                                              </div>


                                                                        </div>
                                                                  </div>
                                                                  <?php
                                                                        }
                                                                        ?>
                                                            </ul>
                                                      </div>

                                                </div>
                                          </div>
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
}
?>