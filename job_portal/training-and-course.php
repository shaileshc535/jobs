<?php
session_start();
ob_start();
include 'include/header.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';

$msg = '';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: http://materiallibrary.co.in/signin');
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
    if (isset($_GET['id'])) {
        $job_id = $_GET['id'];

        $sql4 = "SELECT * FROM  job_post WHERE id='$job_id'";
        $res4 = mysqli_query($con, $sql4);
        $row4 = mysqli_fetch_array($res4);
    }

    if (isset($_POST['update'])) {

        $job_title = $_POST['job_title'];
        // $job_deadline = $_POST['job_deadline'];
        // $desc = $_POST['desc'];
        // $u_email = $_POST['u_email'];
        // $u_username = $_POST['u_username'];
        // $job_category = $_POST['job_category'];
        // $job_type = $_POST['job_type'];
        // $gender = $_POST['gender'];
        // $salary = $_POST['salary'];
        // $experience = $_POST['experience'];
        // $u_vacancy = $_POST['u_vacancy'];
        // $u_qualification = $_POST['u_qualification'];
        // $app_deadline = $_POST['app_deadline'];
        // $country = $_POST['country'];
        // $region = $_POST['region'];
        // $city = $_POST['city'];
        // $pastcode = $_POST['pastcode'];
        // $address = $_POST['address'];

        $update = "UPDATE job_post SET `jobtitle`='$job_title' WHERE `id`='$job_id'";

        //yha where clause lga kr kis company k id p jana vo add krna baki hai.....
        $run = mysqli_query($con, $update);
        header('location:http://materiallibrary.co.in/employer-manage-jobs');
    }
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

                        <aside class="careerfy-column-3">
                              <div class="careerfy-typo-wrap">
                                    <div class="careerfy-employer-dashboard-nav">
                                          <figure>
                                                <a href="#" class="employer-dashboard-thumb"><img
                                                            src="extra-images/<?php echo $res1['logo']; ?>" alt=""></a>
                                                <figcaption>
                                                      <div class="careerfy-fileUpload">
                                                            <span><i class="careerfy-icon careerfy-add"></i> Upload
                                                                  Photo</span>
                                                            <input type="file" class="careerfy-upload" />
                                                      </div>
                                                      <h2><?php echo $res1['company_name']; ?></h2>
                                                </figcaption>
                                          </figure>
                                          <ul>
                                                <li><a href="http://materiallibrary.co.in/employer-dashboard"><i
                                                                  class="careerfy-icon careerfy-user"></i> Company
                                                            Profile</a></li>
                                                <li><a href="http://materiallibrary.co.in/employer-manage-jobs"><i
                                                                  class="careerfy-icon careerfy-briefcase-1"></i> Manage
                                                            Jobs</a></li>
                                                <!-- <li><a href="employer-dashboard-transactions"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                                <li><a href="http://materiallibrary.co.in/employer-dashboard-applied-candidate"><i
                                                                  class="careerfy-icon careerfy-heart"></i> Applied
                                                            Candidates</a></li>
                                                <li><a href="http://materiallibrary.co.in/employer-dashboard-resumes"><i
                                                                  class="careerfy-icon careerfy-heart"></i> Shortlisted
                                                            Resumes</a></li>
                                                <!-- <li><a href="employer-dashboard-packages"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                                <li class="active"><a
                                                            href="http://materiallibrary.co.in/employer-dashboard-newjob"><i
                                                                  class="careerfy-icon careerfy-plus"></i> Post a New
                                                            Job</a></li>
                                                <!-- <li><a href="employer-manage-jobs"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li> -->
                                                <li><a href="http://materiallibrary.co.in/employer-dashboard-changed-password?id=<?php echo $id; ?>"><i
                                                                  class="careerfy-icon careerfy-multimedia"></i> Change
                                                            Password</a>
                                                </li>
                                                <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i>
                                                            Logout</a></li>
                                          </ul>
                                    </div>
                              </div>
                        </aside>

                        <div class="careerfy-column-9">
                              <div class="careerfy-typo-wrap">
                                    <div class="careerfy-employer-dasboard">

                                          <form method="post">
                                                <div class="careerfy-employer-box-section" id="ml-deepakpost">
                                                      <!-- Profile Title -->
                                                      <div class="careerfy-profile-title">
                                                            <h2>Post a New Job</h2>
                                                      </div>
                                                      <!-- New Job -->
                                                      <!-- <nav class="careerfy-employer-jobnav">
                                        <ul>
                                            <li class="active"><a href="employer-dashboard-newjob"><i
                                                        class="careerfy-icon careerfy-briefcase-1"></i> <span>Job
                                                        Detail</span></a></li>
                  
                                            <li><a href="employer-dashboard-confitmation"><i
                                                        class="careerfy-icon careerfy-checked"></i>
                                                    <span>Confirmation</span></a></li>
                                        </ul>
                                    </nav> -->

                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-6">
                                                                  <label>Job Title *</label>
                                                                  <input value="<?php echo $row4['jobtitle'] ?>"
                                                                        onblur="if(this.value == '') { this.value ='Enter Tutle'; }"
                                                                        onfocus="if(this.value =='Enter Tutle') { this.value = ''; }"
                                                                        type="text" name="job_title">
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Deadline Submission *</label>
                                                                  <input value="<?php echo $row4['job_deadline'] ?>"
                                                                        onblur="if(this.value == '') { this.value ='Enter Deadline Submission'; }"
                                                                        onfocus="if(this.value =='Enter Deadline Submission') { this.value = ''; }"
                                                                        type="text" name="job_deadline">
                                                            </li>

                                                            <li class="careerfy-column-12">
                                                                  <label>Description *</label>
                                                                  <textarea
                                                                        name="desc"><?php echo $row4['description']; ?></textarea>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Email Address</label>
                                                                  <input type="email" name="u_email"
                                                                        value="<?php echo $row4['u_email']; ?>">
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Username</label>
                                                                  <input type="text" name="u_username"
                                                                        value="<?php echo $row4['u_username']; ?>">
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Job Category *</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="job_category">
                                                                              <option selected>
                                                                                    <?php echo $row4['job_category']; ?>
                                                                              </option>
                                                                              <?php
                                                        $query = "select * from job_func_area";
                                                        $run = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($run)) {

                                                            $functional_area = $row['functional_area'];

                                                            echo "<option value='$functional_area'>$functional_area</option>";
                                                        }
                                                        ?>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Job Type *</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="job_type">
                                                                              <option selected>
                                                                                    <?php echo $row4['job_type']; ?>
                                                                              </option>
                                                                              <option value="Full-Time">Full-Time
                                                                              </option>
                                                                              <option value="Part-Time">Part-Time
                                                                              </option>
                                                                              <option value="Internship">Internship
                                                                              </option>
                                                                              <option value="Contract">Contract</option>
                                                                              <option value="Other">Other</option>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <!-- <li class="careerfy-column-6">
                                            <label>Job Level *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Select a Level</option>
                                                    <option>Select a Level</option>
                                                </select>
                                            </div>
                                        </li> -->

                                                            <!-- <li class="careerfy-column-6">
                                            <label>Gender *</label>
                                            <div class="careerfy-profile-select">
                                                <select name="gender">
                                                    <option selected>Choose..</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </li> -->

                                                            <!-- <li class="careerfy-column-6">
                                            <label>Salary From</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Enter Salary From</option>
                                                    <option>Enter Salary From</option>
                                                </select>
                                            </div>
                                        </li> -->

                                                            <li class="careerfy-column-6">
                                                                  <label>Salary</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="salary">
                                                                              <option selected>
                                                                                    <?php echo $row4['salary']; ?>
                                                                              </option>
                                                                              <option value="10-25k">10 - 20k</option>
                                                                              <option value="20-35k">20 - 35k</option>
                                                                              <option value="35-50k">35 - 50k</option>
                                                                              <option value="50-60k">50 - 60k</option>
                                                                              <option value="60-70k">60 - 70k</option>
                                                                              <option value="70-85k">70 - 85k</option>
                                                                              <option value="85k-1lack">85k - 1lack
                                                                              </option>
                                                                              <option value="above the 1 lack">above the
                                                                                    1 lack</option>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Experience</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="experience">
                                                                              <option selected hiden>
                                                                                    <?php echo $row4['experience']; ?>
                                                                              </option>
                                                                              <option value="0 -1 year">0 - 1 year
                                                                              </option>
                                                                              <option value="1 -3 year">1 - 3 year
                                                                              </option>
                                                                              <option value="5 -10 year">5 - 10 year
                                                                              </option>
                                                                              <option value="10 year +">10 year +
                                                                              </option>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Vacancy</label>
                                                                  <input type="text" name="u_vacancy"
                                                                        value="<?php echo $row4['vacancy']; ?>">
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Qualification</label>
                                                                  <input type="text" name="u_qualification"
                                                                        value="<?php echo $row4['qualification']; ?>">
                                                                  <!-- <div class="careerfy-profile-select">
                                            </div> -->
                                                            </li>

                                                      </ul>
                                                </div>
                                                <div class="careerfy-employer-box-section" id="ml-address23">
                                                      <div class="careerfy-profile-title">
                                                            <h2>Address / Location</h2>
                                                      </div>
                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-6">
                                                                  <label>Country *</label>
                                                                  <input type="text" name="country" value="India">

                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>State *</label>
                                                                  <?php
                                                include_once "./backend/Common.php";
                                                $common = new Common();
                                                $allStates = $common->getState($con);
                                                ?>

                                                                  <div class=" careerfy-select-style">
                                                                        <select type="text" name="state" id="stateId"
                                                                              class="form-control"
                                                                              onchange="getCityByState();">

                                                                              <?php
                                                        if ($allStates->num_rows > 0) {
                                                            while ($state = $allStates->fetch_object()) {
                                                                $stateId = $state->id;
                                                                $stateName = $state->name;
                                                        ?>
                                                                              <option value="<?php echo $stateId; ?>">
                                                                                    <?php echo $stateName; ?>
                                                                              </option>
                                                                              <?php }
                                                        }
                                                        ?>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>City / Town *</label>
                                                                  <div class=" careerfy-select-style">
                                                                        <select class="form-control" name="city"
                                                                              id="cityDiv">
                                                                              <option value="">
                                                                                    <?php echo $row4['city']; ?>
                                                                              </option>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                            <script>
                                                            function getCityByState() {
                                                                  let stateId = $("#stateId").val();
                                                                  $.post("backend/ajax.php", {
                                                                        getCityByState: 'getCityByState',
                                                                        stateId: stateId
                                                                  }, function(response) {
                                                                        // alert(response);
                                                                        let data = response.split('^');
                                                                        let cityData = data[1];
                                                                        $("#cityDiv").html(cityData);
                                                                  });
                                                            }
                                                            </script>

                                                            <li class="careerfy-column-6">
                                                                  <label>Postcode *</label>
                                                                  <input type="text" name="pastcode"
                                                                        value=<?php echo $row4['pastcode']; ?>>
                                                            </li>

                                                            <li class="careerfy-column-10">
                                                                  <label>Full Address *</label>
                                                                  <input type="text" name="address"
                                                                        value="<?php echo $row4['address']; ?>">
                                                            </li>
                                                      </ul>
                                                </div>
                                                <input type="submit" class="careerfy-employer-profile-submit"
                                                      value="Post Job" name="update">
                                          </form>
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