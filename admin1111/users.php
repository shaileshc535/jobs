<?php
session_start();
include('includes/_header.php');
if (isset($_SESSION['loggedin']) == true) {
      if (isset($_POST['submit'])) {
            // saving input values in variables
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contactno = $_POST['contact_no'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $qualification = $_POST['qualification'];
            $passingyear = $_POST['passing_year'];
            $dob = $_POST['dob'];
            $skills = $_POST['skills'];
            $aboutme = $_POST['aboutme'];
            //setting upload file name and path
            $resume = $_FILES["resume"]["name"];
            $tempname = $_FILES["resume"]["tmp_name"];
            $folder = "assets/files/" . $_FILES['resume']['name'];
            if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($contactno) && !empty($address) && !empty($city) && !empty($state) && !empty($qualification) && !empty($passingyear) && !empty($dob) && !empty($skills) && !empty($resume) && !empty($aboutme) && !empty($tempname) && !empty($folder)) {
                  //uploading file using given function
                  if (move_uploaded_file($tempname, $folder)) {
                        echo ("Greate");
                  }
                  // inserting values in database table
                  $sql = "INSERT INTO  job_seeker_details(`firstname`, `lastname`, `email`, `password`, `address`, `city`,`state`,`contactno`, `qualification`,`passingyear`,`dob`,`resume`,`skills`,`aboutme`,`active`) VALUES ('$fname','$lname', '$email', '$password', '$address', '$city','$state', '$contactno', '$qualification','$passingyear','$dob','$resume','$skills','$aboutme','1')";
                  if (mysqli_query($con, $sql)) {
                        header('location:http://materiallibrary.co.in/admin/manage_users.php');
                        exit;
                  } else {
                        echo '<div class="alert alert-primary" role="alert">
            Error!
            </div>';
                  }
            } else {
                  echo '<div class="alert alert-primary" role="alert">
        Error!
        </div>';
            }
      }

?>

<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <h1>Add/Create Users </h1>
            </div>
            <div class="container">

                  <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                              <table>
                                    <tr>
                                          <td>
                                                <lable>First Name</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="First Name" type="text" name="first_name"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Last Name</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Last Name" type="text" name="last_name"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Email</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Email" type="email" name="email" class="form-control"
                                                      required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>password</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Password" type="password" name="password"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Contact no</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Contact no" type="text" name="contact_no"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Address</lable>
                                          </td>
                                    </tr>

                                    <tr>
                                          <td><input placeholder="Address" type="text" name="address"
                                                      class="form-control" required>
                                          </td>
                                    </tr>
                                    <!--==================fetching state names from database===========================  -->
                                    <tr>
                                          <td>
                                                <lable>State</lable>
                                          </td>
                                    </tr>
                                    <?php
                                          $result = mysqli_query($con, "SELECT * FROM states");
                                          $count = mysqli_num_rows($result);
                                          ?>
                                    <tr>
                                          <td>
                                                <select placeholder="Select state" type="text" name="state"
                                                      class="form-control" id="state" required>
                                                      <option>Select State</option>
                                                      <?php
                                                            for ($i = 1; $i <= $count; $i++) {
                                                                  $row = mysqli_fetch_array($result);

                                                            ?>
                                                      <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row['name'] ?></option>
                                                      <?php
                                                            }
                                                            ?>
                                                </select>
                                          </td>

                                    </tr>
                                    <!-- ====================fetching city names from database=============== -->
                                    <tr>
                                          <td>
                                                <lable>City</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <select placeholder="Select City" type="text" name="city"
                                                      class="form-control" id="city" required>


                                                </select>
                                          </td>

                                    </tr>

                                    <tr>
                                          <td>
                                                <lable>Qualification</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Qualification" type="text" name="qualification"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Passing Year</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Passing Year" type="date" name="passing_year"
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>DOB</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="DOB" type="date" name="dob" class="form-control"
                                                      required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Resume</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Resume" type="file" name="resume" value=" "
                                                      class="form-control" required></td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>Skills</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="Skills" type="text" name="skills" class="form-control"
                                                      required>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td>
                                                <lable>About me</lable>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><input placeholder="About me." type="text" name="aboutme"
                                                      class="form-control"></td>
                                    </tr>
                              </table>
                        </div>
                        <button name="submit" type="submit" value="submit" class="btn btn-lg btn-info btn-block"
                              href="http://materiallibrary.co.in/admin/manage_user.php">SUBMIT</button>
                  </form>
            </div>


            <?php
            include('includes/_footer.php');
      } else {
            header('location:http://materiallibrary.co.in/admin/sign_in.php');
      }

            ?>