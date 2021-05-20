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
      $jid = $_SESSION['jid'];
      if (isset($_GET['type'])) {
            $u_id = $_GET['u_id'];
            $j_id = $_GET['j_id'];
            $type = $_GET['type'];

            if ($type == 'shortlist') {
                  // $get=mysqli_query($con, "SELECT *  FROM candidate_shortlist WHERE `user_id`='$u_id' && `job_id`='$j_id'");
                  $set = mysqli_query($con, "UPDATE job_apply_job_post  SET `status`='Resume Shortlisted' WHERE `user_id`='$u_id' && `job_post_id`='$j_id'");
                  // if(mysqli_num_rows($get)>0){
                  //     echo "hai pahle se";
                  // }

                  $sql3 = "INSERT INTO candidate_shortlist (`user_id`, `company_id`, `job_id`) VALUES ('$u_id', '$id', '$j_id')";
                  $res3 = mysqli_query($con, $sql3);


                  header("location:http://materiallibrary.co.in/employer-dashboard-applied-candidate.php?id=$jid");
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
                  <li><a href="http://materiallibrary.co.in/employer-dashboard-resumes">Pages</a></li>
                  <li>Candidates</li>
            </ul>
      </div>
</div>
<!-- SubHeader -->

<!-- Main Content -->
<div class="careerfy-main-content">

      <!-- Main Section -->
      <div class="careerfy-main-section careerfy-top-full">
            <div class="container">
                  <div class="row">

                        <aside class="careerfy-column-3">
                              <div class="careerfy-typo-wrap">
                                    <div class="careerfy-employer-dashboard-nav">

                                          <ul>
                                                <!-- <li class="active"><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                        Profile</a></li> -->

                                                <li><a href="employer-manage-jobs.php"><i
                                                                  class="careerfy-icon careerfy-briefcase"></i> Manage
                                                            Jobs</a></li>

                                                <li><a href="employer-dashboard-applied-candidate.php?id=<?php echo $jid; ?>"><i
                                                                  class="careerfy-icon careerfy-heart"></i>
                                                            Applied Candidates</a></li>

                                                <li><a href="employer-dashboard-resumes.php?id=<?php echo $jid; ?>"><i
                                                                  class="careerfy-icon careerfy-heart"></i> Shortlisted
                                                            Resumes</a></li>
                                                <li class='active'><a href=""><i
                                                                  class="careerfy-icon careerfy-heart"></i>Hired
                                                            Candidates</a></li>

                                                <!-- <li><a href="employer-dashboard-newjob"><i class="careerfy-icon careerfy-add"></i>
                        Post a New Job</a></li> -->
                                                <!-- <li><a href="employer-dashboard-confirmation" ><i class="far fa-star-half"></i>
                        Job Status</a></li> -->

                                                <!-- <li><a href="employer-dashboard-changed-password.php?id=<?php echo $id; ?>"><i
                            class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                </li> -->

                                                <!-- <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i>
                        Logout</a></li> -->
                                          </ul>
                                    </div>
                              </div>
                        </aside>

                        <div class="careerfy-column-9">
                              <div class="careerfy-typo-wrap">
                                    <div class="careerfy-employer-dasboard">
                                          <div class="careerfy-employer-box-section" id="ml-shortlist">
                                                <!-- Profile Title -->
                                                <div class="careerfy-profile-title">
                                                      <h2>Shortlisted Resumes</h2>
                                                      <form class="careerfy-employer-search">
                                                            <input value="Search orders"
                                                                  onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                                  onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                                  type="text">
                                                            <input type="submit" value="">
                                                            <i class="careerfy-icon careerfy-search"></i>
                                                      </form>
                                                </div>
                                                <!-- Resumes -->
                                                <div class="careerfy-employer-resumes">
                                                      <ul class="careerfy-row" id="table-data">

                                                      </ul>
                                                </div>

                                                <!-- Pagination -->

                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Main Section -->

</div>
<!-- Main Content -->
<script type="text/javascript">
$(document).ready(function() {
      function loadTable(page) {
            $.ajax({
                  url: "pagination/hiredCandidatePagination.php",
                  type: "POST",
                  data: {
                        page_no: page
                  },
                  success: function(data) {
                        $("#table-data").html(data)
                  }
            });
      }
      loadTable();

      //Pagination Code
      $(document).on("click", "#pagination a", function(e) {
            e.preventDefault();
            var page_id = $(this).attr("id");

            loadTable(page_id);
      })
});
</script>
<!-- Footer -->
<?php

      include 'include/footer.php';
}

?>