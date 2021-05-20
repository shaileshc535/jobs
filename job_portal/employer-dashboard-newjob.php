<?php
ob_start();
include 'include/header.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';
$msg = '';
$employer = '';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
      header('location:http://materiallibrary.co.in/signin');
      exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      $loggedin = true;
} else {
      $loggedin = false;
}


//check wether the id is set or not
if (isset($_SESSION['loggedin'])) {
      // get the id & all othr details
      $id = $_SESSION['loggedin'];
      //create sql query
      $query = "SELECT * FROM  job_company WHERE user_id='$id'";

      //execute the query
      $res = mysqli_query($con, $query);

      //count the roe to check wether id is valid or not
      $num = mysqli_num_rows($res);
      $res1 = mysqli_fetch_array($res);

      if (isset($_POST['submit'])) {

            $industry_type_id = $_POST['industry_type_id'];
            $job_func_area_id = $_POST['job_func_area_id'];
            $company_name = $_POST['company_name'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pincode = $_POST['pincode'];
            $address = $_POST['address'];
            $contact_number = $_POST['contact_number'];
            $website = $_POST['website'];
            $email = $_POST['email'];
            $team_size = $_POST['team_size'];
            $about_us = $_POST['about_us'];

            $status = $_POST['status'];

            $facebook_url = $_POST['facebook_url'];
            $instagram_url = $_POST['instagram_url'];
            $twiter_url = $_POST['twiter_url'];
            $linkdin_url = $_POST['linkdin_url'];
            $company_fondation_date = $_POST['company_fondation_date'];
            $cin_number = $_POST['cin_number'];
            // $file=$_POST['image'];
            $varification_image = $_FILES['varification_image']['name'];
            $file_type = $_FILES['varification_image']['type'];
            $tempname = $_FILES['varification_image']['tmp_name'];
            $randome = rand(0, 100000);
            $ext = pathinfo($varification_image, PATHINFO_EXTENSION);
            $rename = 'Upload' . date('Ymd') . $randome;
            $newname = $rename . '.' . $ext;
            $file = "document/" . $_FILES['varification_image']['name'];
            move_uploaded_file($tempname, $file . $newname);

            if ($num == 1) {
                  $update = "UPDATE `job_company` SET `industry_type_id`='$industry_type_id',`job_func_area_id`='$job_func_area_id',`company_name`='$company_name',`country`='$country',`city`='$city',`state`='$state',`pincode`='$pincode',`address`='$address',`contact_number`='$contact_number',`website`='$website',`email`='$email',`team_size`='$team_size',`about_us`='$about_us',`status`='$status',`facebook_url`='$facebook_url',`instagram_url`='$instagram_url',`twiter_url`='$facetwiter_urlbook_url',`linkdin_url`='$linkdin_url',`company_fondation_date`='$company_fondation_date', `cin`='$cin_number', `images`='$file.$newname', `status`='1'  WHERE user_id='$id'";
                  // $update = "UPDATE `job_company` SET `company_name`='$company_name' WHERE user_id='$id'";
                  mysqli_query($con, $update);
                  header('location:http://materiallibrary.co.in/employer-dashboard.php');
            } else {
                  echo '<div class="alert alert-primary" role="alert">
        Can not update information!
         </div>';
            }
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
                  <li><a href="http://materiallibrary.co.in/employer-dashboard.php">Pages</a></li>
                  <li>Companies</li>
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
                                    <form class="careerfy-employer-dasboard" action="employer-dashboard.php"
                                          method="POST" enctype="multipart/form-data">
                                          <div class="careerfy-employer-box-section" id="ml-dashboard">
                                                <div class="careerfy-profile-title">
                                                      <h2>Welcome <?php echo $res1['company_name']; ?></h2>
                                                </div>
                                                <?php
                                                      if ($msg != '') {
                                                            echo $msg;
                                                      }
                                                      ?>
                                                <ul class="careerfy-row careerfy-employer-profile-form">
                                                      <li class="careerfy-column-6">
                                                            <label>Company Name *</label>
                                                            <input type="text" placeholder="Company Name"
                                                                  value="<?php echo $res1['company_name']; ?>"
                                                                  name="company_name">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Email *</label>
                                                            <input type="email" placeholder="Email Address" name="email"
                                                                  value="<?php echo $res1['email']; ?>">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Phone *</label>
                                                            <input type="text" placeholder="Phone Number"
                                                                  name="contact_number"
                                                                  value="<?php echo $res1['contact_number']; ?>">
                                                      </li>



                                                      <li class="careerfy-column-6">
                                                            <label>Category</label>
                                                            <div class="careerfy-profile-select">
                                                                  <select name="industry_type_id">
                                                                        <option value="">Select Job Category Name
                                                                        </option>
                                                                        <?php
                                                                              $query = mysqli_query($con, "SELECT * FROM job_industry_type");
                                                                              while ($row = mysqli_fetch_array($query)) {
                                                                              ?>
                                                                        <option value="<?php echo $row['id']; ?>">
                                                                              <?php echo $row['industry_type']; ?>
                                                                        </option>
                                                                        <?php
                                                                              }
                                                                              ?>
                                                                  </select>
                                                            </div>
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Founded Date *</label>
                                                            <input type="month" name="company_fondation_date"
                                                                  value="<?php echo $res1['company_fondation_date']; ?>">
                                                      </li>
                                                      <li class="careerfy-column-6">
                                                            <label>Team Size *</label>
                                                            <div class="careerfy-profile-select">
                                                                  <select name="team_size">
                                                                        <option selected>Choose..</option>
                                                                        <option value="0 -50 ">0 -50 </option>
                                                                        <option value="50 -100">50 -100</option>
                                                                        <option value="100 -500">100 -500</option>
                                                                        <option value="500 Above">500 Above</option>
                                                                  </select>
                                                            </div>
                                                      </li>

                                                      <li class="careerfy-column-12">
                                                            <label>Description *</label>
                                                            <textarea placeholder="Company Description"
                                                                  name="about_us"><?php echo $res1['about_us']; ?></textarea>
                                                      </li>
                                                </ul>
                                          </div>

                                          <div class="careerfy-employer-box-section" id="ml-addlocation">
                                                <div class="careerfy-profile-title">
                                                      <h2>Address / Location</h2>
                                                </div>
                                                <ul class="careerfy-row careerfy-employer-profile-form">
                                                      <li class="careerfy-column-6">
                                                            <label>Building *</label>
                                                            <input type="text" placeholder="Full Address" name="address"
                                                                  value="<?php echo $res1['address']; ?>">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>State
                                                                  *</label>
                                                            <?php
                                                                  include_once "./backend/Common.php";
                                                                  $common = new Common();
                                                                  $allStates = $common->getState($con);
                                                                  ?>

                                                            <div class=" careerfy-select-style">
                                                                  <select type="text" name="state" id="stateId"
                                                                        class="form-control"
                                                                        onchange="getCityByState();">
                                                                        <option>Delhi</option>

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
                                                            <div class="careerfy-profile-select">
                                                                  <select class="form-control" name="city" id="cityDiv">
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
                                                            <input type="text" placeholder="Area Pincode" name="pincode"
                                                                  value="<?php echo $res1['pincode']; ?>">
                                                      </li>
                                                </ul>
                                          </div>



                                          <div class="careerfy-employer-box-section" id="ml-social">
                                                <div class="careerfy-profile-title">
                                                      <h2>Company Social</h2>
                                                </div>
                                                <ul class="careerfy-row careerfy-employer-profile-form">
                                                      <li class="careerfy-column-6">
                                                            <label>Website</label>
                                                            <input type="text" placeholder="Website URL" name="website"
                                                                  value="<?php echo $res1['website']; ?>">
                                                      </li>
                                                      <li class="careerfy-column-6">
                                                            <label>Facebook</label>
                                                            <input type="text" placeholder="Facebook URL"
                                                                  name="facebook_url"
                                                                  value="<?php echo $res1['facebook_url']; ?>">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Instagram</label>
                                                            <input type="text" placeholder="Instagram URL"
                                                                  name="instagram_url"
                                                                  value="<?php echo $res1['instagram_url']; ?>">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Twitter</label>
                                                            <input type="text" placeholder="Twiter URL"
                                                                  name="twiter_url"
                                                                  value="<?php echo $res1['twiter_url']; ?>">
                                                      </li>

                                                      <li class="careerfy-column-6">
                                                            <label>Linkedin</label>
                                                            <input type="text" placeholder="Linkdin URL"
                                                                  name="linkdin_url"
                                                                  value="<?php echo $res1['linkdin_url']; ?>">
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="careerfy-employer-box-section" id="ml-organise">

                                                <div class="careerfy-profile-title">
                                                      <h2>Organization Verification</h2>
                                                </div>
                                                <p> <b>Note:</b>Verify using CIN Number or any official document.</p>
                                                <br>
                                                <ul class="careerfy-row careerfy-employer-profile-form">

                                                      <li class="careerfy-column-6">
                                                            <label for="CIN Number">CIN Number</label>
                                                            <input type="text" name="cin_number"
                                                                  placeholder="Your CIN Number" max='17'>
                                                      </li><br>
                                                      <li class="careerfy-column-6">
                                                            <h3>Or</h3>
                                                            <label for="TIN Number">Upload Official Documents</label>
                                                            <input type="file" name="varification_image">
                                                      </li>
                                                      <p>View the list of documents accepted by MaterialLibrary <a
                                                                  href="#" data-toggle="modal"
                                                                  data-target="#DocModal">click here</a></p>



                                                </ul>

                                          </div>


                                          <!-- <input type="submit" class="careerfy-employer-profile-submit" name="submit" value="Submit"> -->
                                          <button name="submit" type="submit" value="submit"
                                                class="btn btn-lg btn-info btn-block careerfy-employer-profile-submit">
                                                <span id="payment-button-amount">Submit</span>
                                          </button>
                                    </form>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      <!-- Main Section -->


      <li class="modal fade" id="DocModal" role="dialog">
            <div class="modal-dialog">


                  <div class="modal-content">
                        <div class="modal-footer">
                              <span data-dismiss="modal"><i id="close-modal" class="fas fa-times fa-2x"></i></span>
                        </div>
                        <div class="modal-body">
                              <p>PAN Card.</p>
                              <p>GST document.</p>
                              <p>Business license and permits from
                                    government.</p>
                              <p>Certificate of formation or
                                    incorporation.</p>
                              <p>Business Tax or VAT registration
                                    certificate.</p>

                        </div>

                  </div>

            </div>
      </li>
      <!-- Main Content -->
      <!-- Footer -->
      <?php
      include 'include/footer.php';
}
// else{
//     header('location:http://materiallibrary.co.in/signin');
// }
      ?>

      <style>
      #DocModal {
            overflow: auto;
            /* margin-left: auto;
      margin-right: auto;
  
      margin-top: 200px; */


      }

      #DocModal p {
            /* margin: 0px 0px 3px 10px; */

      }

      /* #close-modal { */
      /* margin: 10px 10px 0px 0px; */


      /* } */
      </style>