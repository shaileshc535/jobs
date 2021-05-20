<?php
include('includes/_header.php');

$msg = '';

if (isset($_SESSION['upload'])) {
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
}
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">Add Employer/Company</h3>
                    </div>
                    <div class="card">
                        <label>
                            <?php
                            if ($msg != '') {
                                echo $msg;
                            }
                            ?>
                        </label>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Company Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        name="company_name" placeholder="Enter Your Company Name">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">Select Industry Type</label>
                                        <select name="industry_type" class="form-control" size="1">
                                            <option value="">Select Job Category Name</option>
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
                                        <label for="formGroupExampleInput">Select Functional Area</label>
                                        <select name="job_func_area" class="form-control" size="1">
                                            <option value="">Select Job Profile</option>
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
                                    <div class="form-group col-md-4">
                                        <?php
                                        include_once "../../job_portal/backend/Common.php";
                                        $common = new Common();
                                        $allStates = $common->getState($con);
                                        ?>

                                        <div class=" careerfy-select-style">
                                            <select type="text" name="state" id="stateId" class="form-control"
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
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class=" careerfy-select-style">
                                            <select class="form-control" name="city" id="cityDiv">
                                                <option value="">City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <script>
                                    function getCityByState() {
                                        let stateId = $("#stateId").val();
                                        $.post("../../job_portal/backend/ajax.php", {
                                            getCityByState: 'getCityByState',
                                            stateId: stateId
                                        }, function(response) { // alert(response); let
                                            data = response.split('^');
                                            let cityData = data[1];
                                            $("#cityDiv").html(cityData);
                                        });
                                    }
                                    </script>

                                    <div class="form-group col-md-4">
                                        <input type="text" placeholder="Pincode" class="form-control" name="pincode">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter Your Email">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="website">Website</label>
                                        <input type="email" class="form-control" name="website"
                                            placeholder="Enter Your Website">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Enter Your Password">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="cpassword"
                                            placeholder="Enter Your Confirm Password">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" name="contact_number"
                                            placeholder="Enter Your Mobile Number">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="address" class="form-label">Company Address</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Enter Your Company Address">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="teamsize">Team Size</label>
                                        <select name="team_size" class="form-control" size="1" required>
                                            <option selected="selected" value="" selected hidden disabled>- Team Size -
                                            </option>
                                            <option value="0-50">0-50</option>
                                            <option value="50-250">50-250</option>
                                            <option value="250-500">250-500</option>
                                            <option value="500-1000">500-1000</option>
                                            <option value="1000-Above">1000-Above</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="logo">Logo</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="About" class="form-label">About Company</label>
                                    <textarea name="about_us" class="form-control" cols="30" rows="4"
                                        placeholder="Enter About Company"></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        if (isset($_POST['submit'])) {
            $industry_type = $_POST['industry_type'];
            $job_func_area = $_POST['job_func_area'];
            $company_name = $_POST['company_name'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pincode = $_POST['pincode'];
            $address = $_POST['address'];
            $contact_number = $_POST['contact_number'];
            $website = $_POST['website'];
            $email = $_POST['email'];
            $team_size = $_POST['team_size'];
            $about_us = $_POST['about_us'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            //setting upload file name and path
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "images/images/logo/" . $_FILES['image']['name'];
            if (!empty($email) && !empty($password) && !empty($tempname)) {
                //uploading file using given function
                if (move_uploaded_file($tempname, $folder)) {
                    // echo ("Greate");
                }
            }
            // Check whether this employer exists
            $existSql = "SELECT * FROM `job_company` WHERE email = '$email' AND website = '$website'";
            $result = mysqli_query($con, $existSql);
            $numExistRows = mysqli_num_rows($result);
            if ($numExistRows > 0) {
                // $exists = true;
                $showError = "Employer Already Exists";
            } else {
                // $exists = false; 
                if (($password == $cpassword)) {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `job_company` (`industry_type_id`, `job_func_area_id`, `company_name`,`state`, `city`, `pincode`, `address`, `contact_number`, `website`, `email`, `team_size`, `password`, `about_us`, `logo`, `createdAt`, `status`) VALUES ('$industry_type', '$job_func_area', '$company_name','$state', '$city', '$pincode', '$address', '$contact_number', '$website', '$email', '$team_size', '$hash', '$about_us', '$image', current_timestamp(), '1')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        $showAlert = true;
                    }
                } else {
                    $showError = "Passwords do not match";
                }
            }
        }
        ?>

        <?php
        include('includes/_footer.php');
        ?>