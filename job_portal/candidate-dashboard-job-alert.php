<?php
ob_start();

include('include/header.php');
include('../admin/assets/_dbconnect.php');
include_once "./backend/Common.php";
$common = new Common();
$allStates = $common->getState($con);
if (isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] == true)) {
    $id = $_SESSION['loggedin'];
    $query = mysqli_query($con, "SELECT * FROM job_seeker_details WHERE `user_id` ='$id'");
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_array($query);
    // if(isset($_POST['profile_image'])){

    // }
    // if(isset($_POST['upload_image'])){
    //     
    // }

    if (isset($_POST['submit'])) {
        $stateId = $_POST['state'];
        $select = mysqli_query($con, "SELECT * FROM `states` WHERE `id`=$stateId");
        $res = mysqli_fetch_array($select);
        $name = $_POST['name'];
        $email_id = $_POST['email_id'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $aboutme = $_POST['aboutme'];
        $state = $res['name'];
        $city = $_POST['city'];
        $bachelor = $_POST['bachelor'];
        $profession = $_POST['category'];
        $pincode = $_POST['pincode'];
        // image

        // $dp=$newname;

        if ($num == 1) {
            $update = "UPDATE `job_seeker_details` SET `fname`='$name', `email_id`='$email_id', `dob`='$dob', `mobile`='$mobile', 
            `profession`='$profession',`aboutme`='$aboutme', `country`='IND', `state`='$state', `city`='$city', `pincode`='$pincode', `status`=0 WHERE `user_id`='$id'";
            // $update="UPDATE `job_seeker_details` SET fname='$name', `email_id`='$email_id' WHERE `user_id`='$id'";
            mysqli_query($con, $update);
            header('location:http://materiallibrary.co.in/candidate-dashboard-profile-seting');
        } else {
            echo '<div class="alert alert-primary" role="alert">
        Can not update information!
         </div>';
        }
        // else{
        //     $insert="INSERT INTO `job_seeker_details`(`user_id`, `fname`, `email_id`, `dob`, `mobile`, `aboutme`, `state`, `city`, `bachelor`) VALUES ('$id', '$name', '$email_id', '$dob', '$mobile', '$aboutme', '$state', '$city', '$bachelor')";
        //     mysqli_query($con, $insert);
        // }
    }

?>

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

                              <?php
                        include('aside.php');
                        ?>
                              <div class="careerfy-column-9">
                                    <div class="careerfy-typo-wrap">
                                          <form class="careerfy-employer-dasboard" method="POST">
                                                <div class="careerfy-employer-box-section" id="ml-basic">
                                                      <div class="careerfy-profile-title">
                                                            <h2>Basic Information</h2>
                                                      </div>
                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-6">
                                                                  <label>Your Name *</label>
                                                                  <input value="<?php echo $res['fname']; ?>"
                                                                        onblur="if(this.value == '') { this.value ='Jody Wisternoff'; }"
                                                                        onfocus="if(this.value =='Jody Wisternoff') { this.value = ''; }"
                                                                        name="name" type="text">
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Email *</label>
                                                                  <input value="<?php echo $res['email_id']; ?>"
                                                                        onblur="if(this.value == '') { this.value ='contact@jodywisternoff'; }"
                                                                        onfocus="if(this.value =='contact@jodywisternoff') { this.value = ''; }"
                                                                        type="text" name="email_id">
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Date of Birth:</label>
                                                                  <div class="careerfy-three-column-row">
                                                                        <input value="<?php echo $res['dob']; ?>"
                                                                              onblur="if(this.value == '') { this.value ='0979380947'; }"
                                                                              onfocus="if(this.value =='0979380947') { this.value = ''; }"
                                                                              type="date" name="dob">
                                                                        <!-- <input type="date" name="dob" value=""> -->
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Phone *</label>
                                                                  <input value="<?php echo $res['mobile']; ?>"
                                                                        onblur="if(this.value == '') { this.value ='0979380947'; }"
                                                                        onfocus="if(this.value =='0979380947') { this.value = ''; }"
                                                                        type="tel" pattern="[0-9]{10}" name="mobile">
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Category*</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select name="category">
                                                                              <option><?php echo $res['profession']; ?>
                                                                              </option>
                                                                              <?php
                                                        $get = mysqli_query($con, "SELECT * FROM `candidate_type`");
                                                        while ($type = mysqli_fetch_array($get)) {

                                                        ?>
                                                                              <option><?php echo $type['type'] ?>
                                                                              </option>
                                                                              <?php
                                                        }
                                                        ?>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Job Title *</label>
                                                                  <input value="PHP Developer at various agencies"
                                                                        onblur="if(this.value == '') { this.value ='PHP Developer at various agencies'; }"
                                                                        onfocus="if(this.value =='PHP Developer at various agencies') { this.value = ''; }"
                                                                        type="text">
                                                            </li>
                                                            <li class="careerfy-column-12">
                                                                  <label>Description *</label>
                                                                  <textarea
                                                                        name="aboutme"><?php echo $res['aboutme'] ?></textarea>
                                                            </li>
                                                      </ul>
                                                </div>
                                                <div class="careerfy-employer-box-section" id="ml-add">
                                                      <div class="careerfy-profile-title">
                                                            <h2>Address / Location</h2>
                                                      </div>
                                                      <ul class="careerfy-row careerfy-employer-profile-form">
                                                            <li class="careerfy-column-6">
                                                                  <label>Country *</label>
                                                                  <div class="careerfy-profile-select">
                                                                        <select type="text" name="country"
                                                                              id="countryId" size="1"
                                                                              class="form-control">
                                                                              <option>INDIA</option>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Region *</label>
                                                                  <div class="careerfy-profile-select">

                                                                        <select class="form-control" name="state"
                                                                              id="stateId" onchange="getCityByState();">
                                                                              <option><?php echo $res['state']; ?>
                                                                              </option>
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
                                                                        <select class="form-control" name="city"
                                                                              id="cityDiv">
                                                                              <option><?php echo $res['city']; ?>
                                                                              </option>
                                                                              <option value="">City</option>
                                                                        </select>
                                                                  </div>
                                                            </li>
                                                            <li class="careerfy-column-6">
                                                                  <label>Pincode *</label>
                                                                  <input value="<?php echo $res['pincode']; ?>"
                                                                        onblur="if(this.value == '') { this.value ='746000'; }"
                                                                        onfocus="if(this.value =='746000') { this.value = ''; }"
                                                                        type="text" name="pincode">
                                                            </li>
                                                      </ul>
                                                </div>
                                                <div class="careerfy-employer-box-section" id="ml-save">
                                                      <!-- <div class="careerfy-profile-title"><h2>Other Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Experience *</label>
                                                
                                                <input type="number" >
                                                
                                            </li>
                                           
                                            
                                            <li class="careerfy-column-6">
                                                <label>Education Levels *</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="bachelor">
                                                        <option><?php echo $res['bachelor']; ?></option>
                                                        <?php
                                                        $get = mysqli_query($con, "SELECT * FROM `degries`");
                                                        while ($degree = mysqli_fetch_array($get)) {

                                                        ?>    
                                                            <option><?php echo $degree['degree'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    -->

                                                      <input type="submit" class="careerfy-employer-profile-submit"
                                                            name="submit" value="Save Setting">
                                          </form>

                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->
      <script>
      // function getStatesByCountry() {
      //     var countryId = $("#countryId").val();
      //     $.post("include/ajax.php", {
      //         getStatesByCountry: 'getStatesByCountry',
      //         countryId: countryId
      //     }, function(response) {
      //         //  alert(response);
      //         var data = response.split('^');
      //         var stateData = data[1];
      //         $("#stateId").html(stateData);
      //     });
      // }


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
      <!-- Footer -->
      <?php
    include('include/footer.php');
} else {
    header('location:http://materiallibrary.co.in/signin');
    exit;
}
    ?>