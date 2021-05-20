<?php
ob_start();

if (!isset($_SESSION['loggedin'])) {
      include('include/header.php');
      include('../admin/assets/_functions.php');
      $login = false;
      $showError = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include('../admin/assets/_dbconnect.php');
            $email = get_safe_value($con, $_POST['email']);
            $username = get_safe_value($con, $_POST['email']);
            $password = get_safe_value($con, $_POST['password']);

            $sql = "SELECT * FROM `users` WHERE `email`='$email' or `username`='$username'";
            $sql2 = "SELECT * FROM `job_seeker_details` WHERE `email_id`='$email'";
            $res = mysqli_query($con, $sql);
            $res2 = mysqli_query($con, $sql2);
            $out = mysqli_fetch_array($res);
            $out2 = mysqli_fetch_array($res2);
            $num = mysqli_num_rows($res);
            if ($out2['active'] == 1) {
                  echo '<div class="alert alert-danger" role="alert">
        YOUR ACCOUNT IS BLOCKED!
         </div>';
                  exit;
            }
            if ($num == 1 && password_verify($password, $out['password'])) {
                  $login = true;
                  session_start();
                  $_SESSION['loggedin'] = $out['user_id'];
                  $id = $_SESSION['loggedin'];
                  $_SESSION['email'] = $email;
                  if ($out['type'] == 0) {
                        header('location:http://materiallibrary.co.in/');
                        exit;
                  } else {
                        $get_detail = mysqli_query($con, "SELECT * FROM job_company WHERE `user_id`='$id' ");
                        $run = mysqli_fetch_array($get_detail);
                        if ($run['status'] == 1) {
                              header('location:http://materiallibrary.co.in/employer-manage-jobs.php');
                              exit;
                        } else {
                              header('location:http://materiallibrary.co.in/employer-dashboard.php');
                              exit;
                        }
                  }
            } else {
                  echo '<div class="alert alert-danger" role="alert">
        Inccorect E-mail or Password!
         </div>';
            }
      }
?>


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

                                                <a href="/home">Home</a>
                                          </li>
                                          <li class="is-marked">

                                                <a href="signin">Signin</a>
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
                                          <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
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
                                                <h1 class="gl-h1">I'M NEW USER</h1>

                                                <div class="u-s-m-b-15">

                                                      <a class="l-f-o__create-link btn--e-transparent-brand-b-2"
                                                            href="http://materiallibrary.co.in/signup">CREATE AN ACCOUNT</a>
                                                </div>
                                                <h1 class="gl-h1">SIGNIN</h1>
                                                <form class="l-f-o__form" method="post">
                                                      <!--<div class="gl-s-api">-->
                                                      <!--      <div class="u-s-m-b-15">-->

                                                      <!--            <button class="gl-s-api__btn gl-s-api__btn--fb"-->
                                                      <!--                  type="button"><i class="fab fa-facebook-f"></i>-->

                                                      <!--                  <span>Signin with Facebook</span></button>-->
                                                      <!--      </div>-->
                                                      <!--      <div class="u-s-m-b-15">-->

                                                      <!--            <button class="gl-s-api__btn gl-s-api__btn--gplus"-->
                                                      <!--                  type="button"><i class="fab fa-google"></i>-->

                                                      <!--                  <span>Signin with Google</span></button>-->
                                                      <!--      </div>-->
                                                      <!--</div>-->
                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="login-email">E-MAIL/Username
                                                                  *</label>

                                                            <input class="input-text input-text--primary-style form-control"
                                                                  type="text" id="login-email" name="email"
                                                                  placeholder="E-mail/Username">
                                                      </div>

                                                      <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="login-password">PASSWORD
                                                                  *</label>

                                                            <input class="input-text input-text--primary-style form-control"
                                                                  type="password" id="login-password" name="password"
                                                                  placeholder="Enter Password">
                                                      </div>
                                                      <div class="gl-inline">
                                                            <!-- <div class="u-s-m-b-30">

                                                    <button class="btn btn--e-transparent-brand-b-2 form-control"
                                                        type="submit" name="submit" value="submit">LOGIN</button>
                                                </div> -->
                                                            <div class="u-s-m-b-15">

                                                                  <button
                                                                        class="btn btn-sm btn-primary btn--e-transparent-brand-b-2"
                                                                        name="submit" value="submit"
                                                                        type="submit">SUBMIT</button>
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                  <a class="gl-link btn btn-lg btn-danger"
                                                                        href="http://materiallibrary.co.in/email_verification">Lost Your
                                                                        Password?</a>
                                                            </div>
                                                      </div>
                                                      <div class="u-s-m-b-30">

                                                            <!--====== Check Box ======-->
                                                            <div class="check-box">

                                                                  <input type="checkbox" id="remember-me">
                                                                  <div
                                                                        class="check-box__state check-box__state--primary">

                                                                        <label class="check-box__label"
                                                                              for="remember-me">Remember
                                                                              Me</label>
                                                                  </div>
                                                            </div>
                                                            <!--====== End - Check Box ======-->
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


<?php

      include('include/footer.php');
} else {
      header('location:http://materiallibrary.co.in/');
}
?>