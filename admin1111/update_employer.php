<?php
$msg = '';
session_start();
if (isset($_SESSION['add'])) {
      echo $_SESSION['add'];
      unset($_SESSION['add']);
}

include('includes/_header.php');
?>

<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="card">
                                    <label>
                                          <?php
                                          if ($msg != '') {
                                                echo $msg;
                                          }
                                          ?>
                                    </label>
                                    <div>
                                          <h5 class="card-header">Update Employer/Company Details</h5>
                                    </div>
                                    <div class="card-body">
                                          <?php
                                          //check wether the id is set or not
                                          if (isset($_GET['id'])) {
                                                // get the id & all othr details
                                                $id = $_GET['id'];
                                                //create sql query
                                                $sql = "SELECT * FROM job_company WHERE id=$id";

                                                //execute the query
                                                $res = mysqli_query($con, $sql);

                                                //count the roe to check wether id is valid or not
                                                $count = mysqli_num_rows($res);

                                                if ($count == 1) {
                                                      //get all the data
                                                      $row = mysqli_fetch_assoc($res);
                                                      $id = $row['id'];
                                                      $industry_type_id = $row['industry_type_id'];
                                                      $job_func_area_id = $row['job_func_area_id'];
                                                      $company_name = $row['company_name'];
                                                      $country = $row['country'];
                                                      $state = $row['state'];
                                                      $city = $row['city'];
                                                      $pincode = $row['pincode'];
                                                      $address = $row['address'];
                                                      $contact_number = $row['contact_number'];
                                                      $website = $row['website'];
                                                      $email = $row['email'];
                                                      $team_size = $row['team_size'];
                                                      $about_us = $row['about_us'];
                                                }
                                          }
                                          ?>
                                          <form method="POST" enctype="multipart/form-data">

                                                <div class="form-group">
                                                      <label for="formGroupExampleInput">Company Name</label>
                                                      <input type="text" class="form-control" id="formGroupExampleInput"
                                                            name="company_name" placeholder="Enter Your Company Name"
                                                            value="<?php echo $company_name; ?>">
                                                </div>

                                                <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                            <label for="formGroupExampleInput">Select Industry
                                                                  Type</label>
                                                            <?php
                                                            $query2 = mysqli_query($con, "SELECT * FROM job_industry_type where id=$industry_type_id");
                                                            while ($row = mysqli_fetch_array($query2)) {
                                                                  $industry = $row['industry_type'];
                                                            }
                                                            ?>
                                                            <select name="industry_type" class="form-control" size="1">
                                                                  <option value="" selected disabled hidden>
                                                                        <?php echo $industry; ?></option>

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

                                                      <div class="form-group col-md-6">
                                                            <label for="formGroupExampleInput">Select Functional
                                                                  Area</label>
                                                            <?php
                                                            $query2 = mysqli_query($con, "SELECT * FROM job_func_area where id=$job_func_area_id");
                                                            while ($row = mysqli_fetch_array($query2)) {
                                                                  $functional = $row['functional_area'];
                                                            }
                                                            ?>
                                                            <select name="job_func_area" class="form-control" size="1">
                                                                  <option value="" selected disabled hidden>
                                                                        <?php echo $functional; ?>
                                                                  </option>
                                                                  <?php
                                                                  $query = mysqli_query($con, "SELECT * FROM  job_func_area");
                                                                  while ($row = mysqli_fetch_array($query)) {
                                                                  ?>
                                                                  <option value="<?php echo $row['id']; ?>">
                                                                        <?php echo $row['functional_area']; ?>
                                                                  </option>
                                                                  <?php
                                                                  }
                                                                  ?>
                                                            </select>
                                                      </div>
                                                </div>

                                                <div class="form-row">

                                                      <?php
                                                      include "assets/_dbconnect.php";
                                                      include_once "includes/Common.php";
                                                      $common = new Common();
                                                      $allCountries = $common->getCountries($con);
                                                      ?>

                                                      <div class="form-group col-md-3">
                                                            <label for="country">Country</label>
                                                            <select type="text" name="country" id="countryId" size="1"
                                                                  class="form-control" onchange="getStatesByCountry();">
                                                                  <option value="<?php echo $country; ?>">
                                                                        <?php echo $country; ?></option>
                                                                  <?php
                                                                  if ($allCountries->num_rows > 0) {
                                                                        while ($country = $allCountries->fetch_object()) {
                                                                              $countryId = $country->id;
                                                                              $countryName = $country->name; ?>
                                                                  <option value="<?php echo $countryId; ?>">
                                                                        <?php echo $countryName; ?>
                                                                  </option>
                                                                  <?php }
                                                                  }
                                                                  ?>
                                                            </select>
                                                      </div>

                                                      <div class="form-group col-md-3">
                                                            <label for="state">State</label>
                                                            <select class="form-control" size="1" name="state"
                                                                  id="stateId" onchange="getCityByState();">
                                                                  <option value=""><?php echo $state; ?></option>
                                                            </select>
                                                      </div>

                                                      <div class="form-group col-md-3">
                                                            <label for="city">City</label>
                                                            <select class="form-control" size="1" name="city"
                                                                  id="cityDiv">
                                                                  <option value=""><?php echo $city; ?></option>
                                                            </select>
                                                      </div>

                                                      <script>
                                                      function getStatesByCountry() {
                                                            var countryId = $("#countryId").val();
                                                            $.post("includes/ajax.php", {
                                                                  getStatesByCountry: 'getStatesByCountry',
                                                                  countryId: countryId
                                                            }, function(response) {
                                                                  // alert(response);
                                                                  var data = response.split('^');
                                                                  var stateData = data[1];
                                                                  $("#stateId").html(stateData);
                                                            });
                                                      }

                                                      function getCityByState() {
                                                            var stateId = $("#stateId").val();
                                                            $.post("includes/ajax.php", {
                                                                  getCityByState: 'getCityByState',
                                                                  stateId: stateId
                                                            }, function(response) {
                                                                  // alert(response);
                                                                  var data = response.split('^');
                                                                  var cityData = data[1];
                                                                  $("#cityDiv").html(cityData);
                                                            });
                                                      }
                                                      </script>


                                                      <div class="form-group col-md-3">
                                                            <label for="pincode">Pincode</label>
                                                            <input type="number" class="form-control" name="pincode"
                                                                  value="<?php echo $pincode; ?>">
                                                      </div>
                                                </div>

                                                <div class="form-row form-group">
                                                      <div class="col-md-6">
                                                            <label for="email" class="form-label">Email address</label>
                                                            <input type="email" class="form-control" name="email"
                                                                  value="<?php echo $email; ?>"
                                                                  placeholder="Enter Your Email">
                                                      </div>

                                                      <div class="col-md-6">
                                                            <label for="website">Website</label>
                                                            <input type="email" class="form-control" name="website"
                                                                  value="<?php echo $website; ?>"
                                                                  placeholder="Enter Your Website">
                                                      </div>
                                                </div>

                                                <div class="form-row form-group">
                                                      <div class="col-md-6">
                                                            <label for="mobile" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control"
                                                                  name="contact_number"
                                                                  value="<?php echo $contact_number; ?>"
                                                                  placeholder="Enter Your Mobile Number">
                                                      </div>

                                                      <div class="col-md-6">
                                                            <label for="address" class="form-label">Company
                                                                  Address</label>
                                                            <input type="text" class="form-control" name="address"
                                                                  value="<?php echo $address; ?>"
                                                                  placeholder="Enter Your Company Address">
                                                      </div>
                                                </div>

                                                <div class="form-row form-group">
                                                      <div class="form-group col-md-6">
                                                            <label class="control-label" for="teamsize">Team
                                                                  Size</label>
                                                            <select name="team_size" class="form-control" size="1"
                                                                  required>
                                                                  <option value="" selected disabled hidden>
                                                                        <?php echo $team_size; ?></option>
                                                                  <option value="0-50">0-50</option>
                                                                  <option value="50-250">50-250</option>
                                                                  <option value="250-500">250-500</option>
                                                                  <option value="500-1000">500-1000</option>
                                                                  <option value="1000-Above">1000-Above</option>
                                                            </select>
                                                      </div>

                                                      <div class="form-group col-md-6">
                                                            <label for="logo">- Logo -</label>
                                                            <input type="file" name="image"
                                                                  value="<?php echo $logo; ?>">
                                                      </div>
                                                </div>

                                                <div class="mb-3">
                                                      <label for="About" class="form-label">About Company</label>
                                                      <textarea name="about_us" class="form-control" cols="30" rows="4"
                                                            placeholder="Enter About Company"
                                                            value="<?php echo $about_us; ?>"><?php echo $about_us; ?></textarea>
                                                </div>

                                                <button type=" submit" name="submit"
                                                      class="btn btn-primary">Submit</button>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <?php
            if (isset($_POST['submit'])) {

                  // get the data from the form
                  $industry_type = $_POST['industry_type'];
                  $job_func_area = $_POST['job_func_area'];
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

                  if (isset($_FILES['image']['name'])) {
                        //get the details of the selected image 
                        $image_name = $_FILES['image']['name'];

                        if ($image_name != "") {
                              //A. rename the image
                              //get the extension of selected image like jpg png gif etc
                              $ext = end(explode('.', $image_name));

                              //create new name for image
                              $image_name = "Employer" . rand(0000000, 9999999) . '.' . $ext;

                              //get the source path & destination path
                              $source_path = $_FILES['image']['tmp_name'];

                              //destination path to upload the images
                              $destination_path = "../images/logo/" . $image_name;

                              $upload = move_uploaded_file($source_path, $destination_path);

                              //check wether image is uploded or not 
                              if ($upload == false) {
                                    //failed to upload image
                                    $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";

                                    //redirect to add_food page
                                    header('location:http://materiallibrary.co.in/admin/employer.php');

                                    //stop the proccess
                                    die();
                              }
                        }
                  } else {
                        echo "hello";
                        $image_name = "";
                  }

                  $check = mysqli_query($con, "SELECT * FROM job_company WHERE email='$email'");

                  if (mysqli_num_rows($check) > 0) {
                        echo "Employer Already Exist";
                  } else {

                        // sql query to save the data in database
                        $sql2 = "UPDATE job_company SET industry_type_id='$industry_type',  WHERE id='$id'";

                        $res2 = mysqli_query($con, $sql2);
                        if ($res2 == TRUE) {
                              // create session veriable to display message
                              $_SESSION['add'] = '<div class="success">Employer Updated Succesfully.</div>';
                        } else {

                              // create session veriable to display message
                              $_SESSION['add'] = '<div class="error">Employer Did not Update.</div>';
                              // redirect page to manage admin
                              header("location:http://materiallibrary.co.in/admin/update_job_categories.php");
                        }
                  }
            }
            ?>

            <?php
            include('includes/_footer.php');
            ?>