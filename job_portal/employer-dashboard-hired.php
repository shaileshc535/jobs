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
      // if(isset($_GET['id'])){
      //     $job_id = $_GET['id'];

      //     $sql4 = "SELECT * FROM  job_post WHERE id='$job_id'";
      //     $res4 = mysqli_query($con, $sql4);
      //     $count4 = mysqli_fetch_array($res4);
      // }



      if (isset($_POST['submit'])) {

            $job_title = $_POST['job_title'];
            $job_deadline = $_POST['job_deadline'];
            $desc = $_POST['desc'];
            $u_email = $_POST['u_email'];

            $job_category = $_POST['job_category'];
            $job_type = $_POST['job_type'];
            // $gender = $_POST['gender'];
            $salary_type = $_POST['salary-type'];
            $salary = $_POST['salary'];
            $experience = $_POST['experience'];
            $u_vacancy = $_POST['u_vacancy'];
            $u_qualification = $_POST['u_qualification'];
            // $app_deadline = $_POST['app_deadline'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pastcode = $_POST['pastcode'];
            $address = $_POST['address'];
            $skill = $_POST['skill'];





            //   $insert = "INSERT INTO `job_post`(`company_id`) VALUES ('455')";
            $insert = "INSERT INTO `job_post` (`company_id`,`jobtitle`,`description`,`job_type`, `country`, `state`, `city`,`salary`,`salary-type`, `experience`, `openings`, `qualification`, `skill`, `job_deadline`, `job_category`, `pastcode`, `address`, `createdat`) VALUES ('$id','$job_title','$desc','$job_type', '$country', '$state', '$city','$salary', '$salary_type', '$experience', '$u_vacancy', '$u_qualification', '$skill', '$job_deadline', '$job_category', '$pastcode', '$address', current_timestamp())";



            //yha where clause lga kr kis company k id p jana vo add krna baki hai.....
            mysqli_query($con, $insert);
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

                                          <form method="post" enctype="multipart/form-data">
                                                <div class="careerfy-employer-box-section" id="ml-postnewjob">
                                                      <!-- Profile Title -->
                                                      <div class="careerfy-profile-title">
                                                            <h2>Post a New Job</h2>
                                                      </div>
                                                      <!-- New Job -->
                                                      <nav class="careerfy-employer-jobnav">
                                                            <ul>
                                                                  <li class="active"><a
                                                                              href="http://materiallibrary.co.in/employer-dashboard-newjob"><i
                                                                                    class="careerfy-icon careerfy-briefcase-1"></i>
                                                                              <span>Job
                                                                                    Detail</span></a></li>

                                                                  <li><a href="http://materiallibrary.co.in/employer-dashboard-confirmation"><i
                                                                                    class="careerfy-icon careerfy-checked"></i>
                                                                              <span>Confirmation</span></a></li>
                                                            </ul>
                                                      </nav>

                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-6">
                                                                  <label>Job Title *</label>
                                                                  <input value=""
                                                                        onblur="if(this.value == '') { this.value ='Enter Tutle'; }"
                                                                        onfocus="if(this.value =='Enter Tutle') { this.value = ''; }"
                                                                        type="text" name="job_title" required>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Deadline Submission *</label>
                                                                  <input value="Enter Deadline Submission"
                                                                        onblur="if(this.value == '') { this.value ='Enter Deadline Submission'; }"
                                                                        onfocus="if(this.value =='Enter Deadline Submission') { this.value = ''; }"
                                                                        type="text" name="job_deadline" required>
                                                            </li>

                                                            <li class="careerfy-column-12">
                                                                  <label>Description *</label>
                                                                  <textarea name="desc" required></textarea>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Email Address</label>
                                                                  <input type="email" name="u_email" required>
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Job Category *</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="job_category" required>
                                                                              <option selected>Choose..</option>
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
                                                                        <select name="job_type" required>
                                                                              <option selected>Choose..</option>
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
                                                            <li class="careerfy-column-6">
                                                                  <label>Experience</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="experience" required>
                                                                              <option selected>Choose..</option>
                                                                              <option value="0 -1 year">0 - 1 year
                                                                              </option>
                                                                              <option value="1 -3 year">1 - 3 year
                                                                              </option>
                                                                              <option value="5 -10 year">5 - 10 year
                                                                              </option>
                                                                        </select>
                                                                  </div>
                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Vacancy</label>

                                                                  <input type="number" name="u_vacancy" max="10"
                                                                        required>

                                                            </li>

                                                            <li class="careerfy-column-6">
                                                                  <label>Qualification</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="u_qualification" required>
                                                                              <?php
                                                                                    $get_degree = mysqli_query($con, "SELECT * FROM degries");
                                                                                    while ($run_degree = mysqli_fetch_array($get_degree)) {
                                                                                          echo "<option>{$run_degree['degree']}</option>";
                                                                                    }

                                                                                    ?>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-12">
                                                                  <label>Skills required</label>
                                                            </li>
                                                            <input type="text" id="skill" name="skill" required>
                                                            <script>
                                                            $(document).ready(function() {

                                                                  $('#skill').tokenfield({
                                                                        // autocomplete:{
                                                                        // source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
                                                                        // delay:100
                                                                        // },
                                                                        // showAutocompleteOnFocus: true
                                                                  });
                                                            });
                                                            </script>

                                                      </ul>
                                                </div>
                                                <div class="careerfy-employer-box-section" id="ml-salary">
                                                      <div class="careerfy-profile-title">
                                                            <h2>Salary Detail</h2>
                                                      </div>
                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-12">
                                                                  <label>Salary</label>
                                                                  <div class="col-md-3">
                                                                        <label><input type="radio" name="salary-type"
                                                                                    id="fixed-salary" value="Fixed"
                                                                                    required> &nbsp;Fixed</label>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                        <label><input type="radio" name="salary-type"
                                                                                    id="negotiable-salary"
                                                                                    value="Negotiable" required>
                                                                              &nbsp;Nagotiable</label>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                        <label><input type="radio" name="salary-type"
                                                                                    id="pb-salary"
                                                                                    value="Performance Based" required>
                                                                              &nbsp;Performance based</label>
                                                                  </div>
                                                            </li>
                                                            <li class=" col-md-12">
                                                                  <div class="col-md-3">
                                                                        <input type="text" name="salary"
                                                                              placeholder="e.g. ₹5000 " required>
                                                                  </div>
                                                                  <div class="careerfy-profile-select col-md-3">
                                                                        <select type="text">
                                                                              <option>/month</option>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                      </ul>
                                                </div>
                                                <div class="careerfy-employer-box-section" id="ml-location">
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
                                                                              onchange="getCityByState();" required>

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
                                                                              id="cityDiv" required>
                                                                              <option value="">City</option>
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
                                                                  <input type="text" name="pastcode" required>
                                                            </li>

                                                            <li class="careerfy-column-10">
                                                                  <label>Full Address *</label>
                                                                  <input type="text" name="address" required>
                                                            </li>
                                                      </ul>
                                                </div>



                                                <input href="#" type="submit" class="careerfy-employer-profile-submit"
                                                      value="POST" name="submit">
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