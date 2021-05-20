<?php
ob_start();

include('include/header.php');
include('../admin/assets/_dbconnect.php');
if (isset($_SESSION['loggedin'])) {
    $id = $_SESSION['loggedin'];
    $query = mysqli_query($con, "SELECT * FROM job_seeker_details WHERE `user_id` ='$id'");
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_array($query);

?>
<style>
input[type=text],
select,
textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
}

input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
}

input[type=submit]:hover {
      background-color: #45a049;
}

.event {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 30px 30px 18px 30px;
      top: 115%;
      left: -679px;

}
</style>
<div id="app">
      <!-- <div class="fixed-list">
            <ul class="nav" id="init-scrollspy">
               <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                  <a href="#" class="nav-link" id="calculate"><i  class="fas fa-calculator" ></i></a>
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
        </div> -->

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
                        <!-- <li><a href="#">Pages</a></li> -->
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

                              <?php include('aside.php'); ?>
                              <div class="careerfy-column-9">
                                    <div class="careerfy-typo-wrap">
                                          <!-- <form class="careerfy-candidate-dasboard" method="POST"> -->
                                          <div class="careerfy-employer-box-section" id="ml-resume">
                                                <div class="careerfy-profile-title">
                                                      <h2>My Resume</h2>
                                                </div>
                                                <div class="careerfy-candidate-section">
                                                      <!-- <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-resume-1"></i> Cover Letter</h2> </div>
                                            <div class="careerfy-candidate-dashboard-editor"><img src="extra-images/candidate-dashboard-editor.jpg" alt=""></div>
                                            </div> -->
                                                      <!-- ================================start personal details======================= -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2><i class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Personal Details
                                                                  </h2>
                                                            </div>

                                                            <?php
                                            $get_info = mysqli_query($con, "SELECT * FROM `job_seeker_details` WHERE `user_id`='$id'");
                                            while ($run_info = mysqli_fetch_array($get_info)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <?php echo "<small>{$run_info['email_id']}</small>
                                                                    <h2><a href='#'>{$run_info['fname']} {$run_info['lname']}</a></h2>
                                                                     <p> {$run_info['city']}, {$run_info['state']}, {$run_info['pincode']}
                                                                    <br>{$run_info['mobile']}
                                                               </p>
                                                               <p>{$run_info['aboutme']}</p>
                                                               "; ?>
                                                                                    </div>

                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>

                                                      <!-- ================================end personal details========================= -->

                                                      <!-- =====================================start education====================================== -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Education
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="education.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Education*</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select name="education">

                                                                                                <?php
                                                                    $degree = mysqli_query($con, "SELECT * FROM `degries` ");
                                                                    while ($run_degree = mysqli_fetch_array($degree)) {
                                                                    ?>
                                                                                                <option>
                                                                                                      <?php echo $run_degree['degree'] ?>
                                                                                                </option>
                                                                                                <?php
                                                                    }
                                                                    ?>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>

                                                                              <li class="careerfy-column-6">
                                                                                    <label>Institute *</label>
                                                                                    <input value="Institute"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="institute" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>Stream *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select name="stream">

                                                                                                <?php
                                                                    $stream = mysqli_query($con, "SELECT * FROM `candidate_type` ");
                                                                    while ($run_stream = mysqli_fetch_array($stream)) {
                                                                    ?>
                                                                                                <option>
                                                                                                      <?php echo $run_stream['type'] ?>
                                                                                                </option>
                                                                                                <?php
                                                                    }
                                                                    ?>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>Passing Year *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <input type="month"
                                                                                                name="passing_year">
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Percentage *</label>
                                                                                    <input value="Percentage"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          name="percentage"
                                                                                          type="number">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <input name="edu" type="submit"
                                                                                          value="Add">
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>
                                                            <?php
                                            $get_edu = mysqli_query($con, "SELECT * FROM `education` WHERE `user_id`='$id'");
                                            while ($run_edu = mysqli_fetch_array($get_edu)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <small><?php echo $run_edu['passing_year']; ?></small>
                                                                                          <h2><a href="#"><?php echo $run_edu['education']; ?></a>
                                                                                          </h2>
                                                                                          <span><?php echo $run_edu['institute']; ?></span>
                                                                                    </div>
                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="education.php?type=delete&id=<?php echo $run_edu['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action="education.php"
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Education
                                                                                                                        *</label>

                                                                                                                  <div
                                                                                                                        class="careerfy-profile-select">
                                                                                                                        <select
                                                                                                                              name="new_education">

                                                                                                                              <?php
                                                                                            $degree = mysqli_query($con, "SELECT * FROM `degries` ");
                                                                                            while ($run_degree = mysqli_fetch_array($degree)) {
                                                                                            ?>
                                                                                                                              <option>
                                                                                                                                    <?php echo $run_degree['degree'] ?>
                                                                                                                              </option>
                                                                                                                              <?php
                                                                                            }
                                                                                            ?>
                                                                                                                        </select>
                                                                                                                  </div>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>Institute
                                                                                                                        *</label>
                                                                                                                  <input value="Masters in Fine Arts"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_institute"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Stream
                                                                                                                        *</label>
                                                                                                                  <div
                                                                                                                        class="careerfy-profile-select">
                                                                                                                        <select
                                                                                                                              name="new_stream">

                                                                                                                              <?php
                                                                                            $stream = mysqli_query($con, "SELECT * FROM `candidate_type` ");
                                                                                            while ($run_stream = mysqli_fetch_array($stream)) {
                                                                                            ?>
                                                                                                                              <option>
                                                                                                                                    <?php echo $run_stream['type'] ?>
                                                                                                                              </option>
                                                                                                                              <?php
                                                                                            }
                                                                                            ?>
                                                                                                                        </select>
                                                                                                                  </div>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>To
                                                                                                                        Date
                                                                                                                        *</label>

                                                                                                                  <input type="month"
                                                                                                                        name="new_passing_year">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>Percentage
                                                                                                                        *</label>

                                                                                                                  <input type="number"
                                                                                                                        name="new_percentage">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="edu_id"
                                                                                                                        value="<?php echo $run_edu['id']; ?>">
                                                                                                                  <input name="edit_edu"
                                                                                                                        type="submit"
                                                                                                                        value="Add ">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>

                                                      <!--==========================end education=====================  -->
                                                      <!-- =======================start job details====================== -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Experience
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="experience.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Profile *</label>
                                                                                    <input value="Profile"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="job_profile"
                                                                                          type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <label>organization *</label>
                                                                                    <input value="Organization"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="job_org" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>From Date *</label>
                                                                                    <input value="Start Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="job_start_date"
                                                                                          type="month">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>To Date *</label>

                                                                                    <input value="End Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="job_end_date"
                                                                                          type="month">

                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <input value="Description"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          name="job_desc" type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <input name="job" type="submit"
                                                                                          value="Add">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_exp = mysqli_query($con, "SELECT * FROM `experience` WHERE `user_id`='$id'");
                                            while ($run_exp = mysqli_fetch_array($get_exp)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <small><?php echo $run_exp['start_date'] . '/' . $run_exp['end_date']; ?></small>
                                                                                          <h2><a href="#"><?php echo $run_exp['profile']; ?></a>
                                                                                          </h2>
                                                                                          <span><?php echo $run_exp['org']; ?></span>
                                                                                          <p><?php $run_exp['description']; ?>
                                                                                          </p>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="experience.php?type=delete&id=<?php echo $run_exp['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='experience.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Profile
                                                                                                                        *</label>
                                                                                                                  <input value="Profile"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_job_profile"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Organization
                                                                                                                        *</label>
                                                                                                                  <input value="Organization"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_job_org"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>From
                                                                                                                        Date
                                                                                                                        *</label>
                                                                                                                  <input value="Start Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_job_start_date"
                                                                                                                        type="month">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>To
                                                                                                                        Date
                                                                                                                        *</label>

                                                                                                                  <input value="End Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_job_end_date"
                                                                                                                        type="month">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Description
                                                                                                                        *</label>
                                                                                                                  <input value="Description"
                                                                                                                        onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                                                        onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                                                        name="new_job_desc"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="job_id"
                                                                                                                        value="<?php echo $run_exp['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_job"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>
                                                      <!-- ================================end job details========================================= -->
                                                      <!-- =============================start internship details================================ -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Internship
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="internship.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Profile *</label>
                                                                                    <input value="Profile"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="int_profile"
                                                                                          type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <label>organization *</label>
                                                                                    <input value="Organization"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="int_org" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>From Date *</label>
                                                                                    <input value="Start Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="int_start_date"
                                                                                          type="month">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>To Date *</label>

                                                                                    <input value="End Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="int_end_date"
                                                                                          type="month">

                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <input value="Description"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          name="int_desc" type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <input name="int" type="submit"
                                                                                          value="Add">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_int = mysqli_query($con, "SELECT * FROM `internship` WHERE `user_id`='$id'");
                                            while ($run_int = mysqli_fetch_array($get_int)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <small><?php echo $run_int['start_date'] . '/' . $run_int['end_date']; ?></small>
                                                                                          <h2><a href="#"><?php echo $run_int['profile']; ?></a>
                                                                                          </h2>
                                                                                          <span><?php echo $run_int['org']; ?></span>
                                                                                          <p><?php $run_int['description']; ?>
                                                                                          </p>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="internship.php?type=delete&id=<?php echo $run_int['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='internship.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Profile
                                                                                                                        *</label>
                                                                                                                  <input value="Profile"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_int_profile"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Organization
                                                                                                                        *</label>
                                                                                                                  <input value="Oganization"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_int_org"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>From
                                                                                                                        Date
                                                                                                                        *</label>
                                                                                                                  <input value="Start Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_int_start_date"
                                                                                                                        type="month">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>To
                                                                                                                        Date
                                                                                                                        *</label>

                                                                                                                  <input value="End Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_int_end_date"
                                                                                                                        type="month">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Description
                                                                                                                        *</label>
                                                                                                                  <input value="Description"
                                                                                                                        onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                                                        onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                                                        name="new_int_desc"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="int_id"
                                                                                                                        value="<?php echo $run_int['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_int"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>
                                                      <!-- ================================end internhsip details============================= -->
                                                      <!-- ===================================start project details============================= -->

                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Projects
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="project.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Title *</label>
                                                                                    <input value="Title"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="pro_title" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>From Date *</label>
                                                                                    <input value="Start Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="pro_start_date"
                                                                                          type="month">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>To Date *</label>

                                                                                    <input value="End Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="pro_end_date"
                                                                                          type="month">

                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <input value="Description"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          name="pro_desc" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Project Link *</label>
                                                                                    <input value="https://example.com"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="pro_link" type="text">
                                                                                    <p><b>Note:</b>If you have an
                                                                                          offline project, upload and
                                                                                          provide link to google drive
                                                                                    </p>
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <input name="pro" type="submit"
                                                                                          value="Add">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_pro = mysqli_query($con, "SELECT * FROM `project` WHERE `user_id`='$id'");
                                            while ($run_pro = mysqli_fetch_array($get_pro)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <small><?php echo $run_pro['start_date'] . '/' . $run_pro['end_date']; ?></small>
                                                                                          <h2><a href="#"><?php echo $run_pro['title']; ?></a>
                                                                                          </h2>
                                                                                          <span><?php echo $run_pro['link']; ?></span>
                                                                                          <p><?php $run_pro['description']; ?>
                                                                                          </p>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="project.php?type=delete&id=<?php echo $run_pro['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='project.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Title
                                                                                                                        *</label>
                                                                                                                  <input value="Title"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_pro_title"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>From
                                                                                                                        Date
                                                                                                                        *</label>
                                                                                                                  <input value="Start Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_pro_start_date"
                                                                                                                        type="month">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>To
                                                                                                                        Date
                                                                                                                        *</label>

                                                                                                                  <input value="End Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_pro_end_date"
                                                                                                                        type="month">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Description
                                                                                                                        *</label>
                                                                                                                  <input value="Description"
                                                                                                                        onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                                                        onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                                                        name="new_pro_desc"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Project
                                                                                                                        Link
                                                                                                                        *</label>
                                                                                                                  <input value="https://example.com"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_pro_link"
                                                                                                                        type="text">
                                                                                                                  <p><b>Note:</b>If
                                                                                                                        you
                                                                                                                        have
                                                                                                                        an
                                                                                                                        offline
                                                                                                                        project,
                                                                                                                        upload
                                                                                                                        and
                                                                                                                        provide
                                                                                                                        link
                                                                                                                        to
                                                                                                                        google
                                                                                                                        drive
                                                                                                                  </p>
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="pro_id"
                                                                                                                        value="<?php echo $run_int['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_pro"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>
                                                      <!-- ====================================end project details============================== -->
                                                      <!-- =======================start traning and course========== -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Training/Course
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="training-and-course.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Training/Course Name
                                                                                          *</label>
                                                                                    <input value="Training/Course"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="training_course"
                                                                                          type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">
                                                                                    <label>Istitute *</label>
                                                                                    <input value="Institute"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="institute" type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>From Date *</label>
                                                                                    <input value="Start Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="start_date"
                                                                                          type="month">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>To Date *</label>

                                                                                    <input value="End Date"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="end_date" type="month">

                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <input value="Description"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          name="desc" type="text">
                                                                              </li>

                                                                              <li class="careerfy-column-12">

                                                                                    <input name="tc" type="submit"
                                                                                          value="Add ">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_course = mysqli_query($con, "SELECT * FROM `training/course` WHERE `user_id`='$id'");
                                            while ($run_course = mysqli_fetch_array($get_course)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <small><?php echo $run_course['start_date'] . '/' . $run_course['end_date']; ?></small>
                                                                                          <h2><a href="#"><?php echo $run_course['name']; ?></a>
                                                                                          </h2>
                                                                                          <span><?php echo $run_course['org']; ?></span>
                                                                                          <p><?php $run_course['description']; ?>
                                                                                          </p>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="training-and-course.php?type=delete&id=<?php echo $run_course['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='training-and-course.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Training/Course
                                                                                                                        Name
                                                                                                                        *</label>
                                                                                                                  <input value="Training/Course"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_training_course"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Istitute
                                                                                                                        *</label>
                                                                                                                  <input value="Institute"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_institute"
                                                                                                                        type="text">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>From
                                                                                                                        Date
                                                                                                                        *</label>
                                                                                                                  <input value="Start Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_start_date"
                                                                                                                        type="month">
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>To
                                                                                                                        Date
                                                                                                                        *</label>

                                                                                                                  <input value="End Date"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_end_date"
                                                                                                                        type="month">

                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Description
                                                                                                                        *</label>
                                                                                                                  <input value="Description"
                                                                                                                        onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                                                        onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                                                        name="new_desc"
                                                                                                                        type="text">
                                                                                                            </li>

                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="c_id"
                                                                                                                        value="<?php echo $run_course['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_tc"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>
                                                      <!-- ======================end training and course=============== -->
                                                      <!-- ==================================start skill================================= -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Skills
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="skill.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-6">
                                                                                    <label>Skill *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select
                                                                                                name="candidate_skill">

                                                                                                <?php
                                                                    $skill = mysqli_query($con, "SELECT * FROM `skills` ");
                                                                    while ($run_list = mysqli_fetch_array($skill)) {
                                                                    ?>
                                                                                                <option>
                                                                                                      <?php echo $run_list['skill'] ?>
                                                                                                </option>
                                                                                                <?php
                                                                    }
                                                                    ?>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>


                                                                              <li class="careerfy-column-12">
                                                                                    <input name="skill" type="submit"
                                                                                          value="Add">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_skill = mysqli_query($con, "SELECT * FROM `candidate_skill` WHERE `user_id`='$id'");
                                            while ($run_skill = mysqli_fetch_array($get_skill)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <h2><a href="#"><?php echo $run_skill['skill']; ?></a>
                                                                                          </h2>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="skill.php?type=delete&id=<?php echo $run_skill['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='skill.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-6">
                                                                                                                  <label>Slill
                                                                                                                        *</label>
                                                                                                                  <div
                                                                                                                        class="careerfy-profile-select">
                                                                                                                        <select
                                                                                                                              name="new_candidate_skill">

                                                                                                                              <?php
                                                                                            $skill = mysqli_query($con, "SELECT * FROM `skills` ");
                                                                                            while ($run_list = mysqli_fetch_array($skill)) {
                                                                                            ?>
                                                                                                                              <option>
                                                                                                                                    <?php echo $run_list['skill'] ?>
                                                                                                                              </option>
                                                                                                                              <?php
                                                                                            }
                                                                                            ?>
                                                                                                                        </select>
                                                                                                                  </div>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="skill_id"
                                                                                                                        value="<?php echo $run_skill['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_skill"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>
                                                      <!-- =================================end skill========================================= -->
                                                      <!-- ==============================start portfolio===================================== -->
                                                      <div class="careerfy-candidate-resume-wrap ">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2>
                                                                        <i
                                                                              class="careerfy-icon careerfy-mortarboard"></i>
                                                                        Portfolio
                                                                        <a href="javascript:void(0)"
                                                                              class="careerfy-resume-addbtn"><span
                                                                                    class="fa fa-plus"></span> Add</a>
                                                                  </h2>
                                                            </div>
                                                            <form action="portfolio.php" method="POST">
                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Protfolio Link *</label>
                                                                                    <input value="https://example.com"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          name="port_link" type="text">
                                                                                    <p><b>Note:</b>If you have an
                                                                                          offline project, upload and
                                                                                          provide link to google drive
                                                                                    </p>
                                                                              </li>
                                                                              <!-- <li class="careerfy-column-12">
                                                            <label>Description *</label>
                                                            <input value="Profile" onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }" onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }" name="pro_title" type="text">
                                                        </li> -->

                                                                              <li class="careerfy-column-12">
                                                                                    <input name="port" type="submit"
                                                                                          value="Add">

                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </form>

                                                            <?php
                                            $get_port = mysqli_query($con, "SELECT * FROM `portfolio_link` WHERE `user_id`='$id'");
                                            while ($run_port = mysqli_fetch_array($get_port)) {
                                            ?>

                                                            <div class="careerfy-resume-education">
                                                                  <ul class="careerfy-row">
                                                                        <div class="parent">
                                                                              <li class="careerfy-column-12">
                                                                                    <div
                                                                                          class="careerfy-resume-education-wrap">
                                                                                          <span><a
                                                                                                      href="<?php echo $run_port['link']; ?>"><?php echo $run_port['link']; ?></a></span>
                                                                                          <p><?php $run_port['link']; ?>
                                                                                          </p>
                                                                                    </div>

                                                                                    <div class="careerfy-resume-education-btn"
                                                                                          style="position:relative;">
                                                                                          <a href="javascript:void(0)"
                                                                                                class="ready careerfy-icon careerfy-edit"></a>
                                                                                          <a href="portfolio.php?type=delete&id=<?php echo $run_port['id']; ?>"
                                                                                                class="careerfy-icon careerfy-rubbish"></a>
                                                                                          <div class="event"
                                                                                                style="position:absolute;  z-index:1;">
                                                                                                <form action='portfolio.php'
                                                                                                      method="POST">
                                                                                                      <ul
                                                                                                            class="careerfy-row careerfy-employer-profile-form">
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <label>Protfolio
                                                                                                                        Link
                                                                                                                        *</label>
                                                                                                                  <input value="https://example.com"
                                                                                                                        onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                                                        onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                                                        name="new_port_link"
                                                                                                                        type="text">
                                                                                                                  <p><b>Note:</b>If
                                                                                                                        you
                                                                                                                        have
                                                                                                                        an
                                                                                                                        offline
                                                                                                                        project,
                                                                                                                        upload
                                                                                                                        and
                                                                                                                        provide
                                                                                                                        link
                                                                                                                        to
                                                                                                                        google
                                                                                                                        drive
                                                                                                                  </p>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                  class="careerfy-column-12">
                                                                                                                  <input type="hidden"
                                                                                                                        name="port_id"
                                                                                                                        value="<?php echo $run_port['id']; ?>">
                                                                                                                  <input type="submit"
                                                                                                                        name="edit_port"
                                                                                                                        value="SAVE">
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </form>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </div>
                                                                  </ul>
                                                            </div>
                                                            <?php
                                            }
                                            ?>
                                                      </div>

                                                </div>
                                          </div>
                                          <input type="submit" name="update_resume"
                                                class="careerfy-employer-profile-submit" value="Update Resume">
                                          <!-- </form> -->
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->

      <script>
      //*** Function AddToggle
      // jQuery( ".careerfy-resume-addbtn" ).on('click', function (e) {
      // jQuery( this ).parents('.careerfy-candidate-resume-wrap').find('.careerfy-add-popup').slideToggle( "slow", function() {});
      // return false;
      // });

      $('.event').fadeOut();

      $('.ready').on('click', function() {
            $(this).parents('.parent').find('.event').slideToggle("slow", function() {
                  return false;
            });
      })
      </script>
      <?php
    include('include/footer.php');
} else {
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
    ?>