<?php
ob_start();
include('include/header.php');
include('../admin/assets/_functions.php');
// include('../admin/assets/_functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include('../admin/assets/_dbconnect.php');
      $user_id = rand(1, 10000000);
      $fname = get_safe_value($con, $_POST["fname"]);
      $lname = get_safe_value($con, $_POST["lname"]);
      $user_name = get_safe_value($con, $_POST["user_name"]);
      $email = get_safe_value($con, $_POST["email"]);
      $password  = get_safe_value($con, $_POST["password"]);
      $cpassword = get_safe_value($con, $_POST["cpassword"]);
      $user_type  = get_safe_value($con, $_POST["user_type"]);

      if ($cpassword == $password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            if ($user_type == "candidate") {
                  $query = "INSERT INTO `users`(`user_id`,`fname`,`lname`, `username`, `email`,`type`,`password`) VALUES ('$user_id','$fname','$lname', '$user_name', '$email','0','$hash')";
                  $sql = "INSERT INTO `job_seeker_details`(`user_id`,`fname`,`email_id`,`status`) VALUES ('$user_id','$fname','$email','1')";
                  // type=0 for candidate
            } elseif ($user_type == "employer") {
                  $sql = "INSERT INTO `job_company`(`user_id`) VALUES ('$user_id')";
                  $query = "INSERT INTO `users`(`user_id`,`fname`,`lname`, `username`, `email`,`type`,`password`) VALUES ('$user_id','$fname','$lname', '$user_name', '$email','1','$hash')";

                  // type=1 for employer
            }
      } else {
            echo '<div class="alert alert-primary" role="alert">
    Password did not match!
     </div>';
      }
      if (mysqli_query($con, $query)) {
            mysqli_query($con, $sql);
            session_start();


            header('location:http://materiallibrary.co.in/signin');
            exit;
      } else {
            echo '<div class="alert alert-primary" role="alert">
        User Accouot Already Available!
         </div>';
      }
}

?>
<!--====== End - Main Header ======-->


<!--====== App Content ======-->
<div class="app-content">

      <!--====== Section 1 ======-->
      <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                  <div class="container">
                        <div class="breadcrumb">
                              <div class="breadcrumb__wrap">
                                    <ul class="breadcrumb__list">
                                          <li class="has-separator">

                                                <a href="http://materiallibrary.co.in/">Home</a>
                                          </li>
                                          <li class="is-marked">

                                                <a href="http://materiallibrary.co.in/signup">Signup</a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!--====== End - Section 1 ======-->


      <!--====== Section 2 ======-->
      <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                  <div class="container">
                        <div class="row">
                              <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                          <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                  <div class="container">
                        <div class="row row--center">
                              <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                    <div class="l-f-o">
                                          <div class="l-f-o__pad-box">
                                                <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                                <form class="l-f-o__form" method="POST">
                                                      <!--<div class="gl-s-api">-->
                                                      <!--      <div class="u-s-m-b-15">-->

                                                      <!--            <button class="gl-s-api__btn gl-s-api__btn--fb"-->
                                                      <!--                  type="button"><i class="fab fa-facebook-f"></i>-->

                                                      <!--                  <span>Signup with Facebook</span></button>-->
                                                      <!--      </div>-->
                                                      <!--      <div class="u-s-m-b-30">-->

                                                      <!--            <button class="gl-s-api__btn gl-s-api__btn--gplus"-->
                                                      <!--                  type="button"><i class="fab fa-google"></i>-->

                                                      <!--                  <span>Signup with Google</span></button>-->
                                                      <!--      </div>-->
                                                      <!--</div>-->
                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="text" id="reg-fname" name="fname"
                                                                  placeholder="First Name" required>
                                                      </div>
                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="text" id="reg-lname" name="lname"
                                                                  placeholder="Last Name" required>
                                                      </div>
                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">USER NAME *</label>

                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="text" id="reg-lname" name="user_name"
                                                                  placeholder="USER NAME" required>
                                                      </div>

                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="email" id="reg-email" name="email"
                                                                  placeholder="Enter E-mail" required>
                                                      </div>
                                                      <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-email">User Type *</label>
                                                            <select
                                                                  class="input-text input-text--primary-style   form-control"
                                                                  type="text" id="reg-email" name="user_type"
                                                                  placeholder="Enter E-mail" required>
                                                                  <option
                                                                        class="input-text input-text--primary-style   form-control"
                                                                        value="candidate">Candidate</option>
                                                                  <option
                                                                        class="input-text input-text--primary-style   form-control"
                                                                        value="employer">Employer</option>
                                                            </select>
                                                      </div>
                                                      <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-password">PASSWORD
                                                                  *</label>
                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="password" id="reg-password" name="password"
                                                                  placeholder="Enter Password" required>
                                                      </div>

                                                      <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-password">CONFIRM PASSWORD
                                                                  *</label>
                                                            <input class="input-text input-text--primary-style   form-control"
                                                                  type="password" id="reg-password" name="cpassword"
                                                                  placeholder="Confirm Password" required>
                                                      </div>
                                                      <div class="u-s-m-b-15">

                                                            <button
                                                                  class="btn btn-lg btn-success btn--e-transparent-brand-b-2"
                                                                  name="submit" value="submit"
                                                                  type="submit">SUBMIT</button>
                                                      </div>
                                                      <a class="gl-link btn btn-lg btn-secondary" href="http://materiallibrary.co.in/signin">Allready
                                                            Have a ACCOUNT</a>
                                          </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->


<!--====== Main Footer ======-->
<?php
include 'include/footer.php';
?>