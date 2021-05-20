<?php
ob_start();
// session_start();
include('include/header.php');
include('../admin/assets/_dbconnect.php');
if (isset($_SESSION['loggedin'])) {
      $id = $_SESSION['loggedin'];

      // $sql = mysqli_query($con,"Select sht.id_jobpost,jp.* from jobs_shortlist sht, job_post jp where id=`$uid`");
      $sql = mysqli_query($con, "select id_jobpost from job_shortlist where user_id='$id'");

?>

<div id="app">
      <!-- <div class="fixed-list">
        <ul class="nav" id="init-scrollspy">
            <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                <a href="#" class="nav-link" id="calculate"><i class="fas fa-calculator"></i></a>
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
            <div class="careerfy-main-section careerfy-dashboard-full">
                  <div class="container">
                        <div class="row">

                              <?php
                                    include('aside.php');
                                    ?>
                              <div class="careerfy-column-9">
                                    <div class="careerfy-typo-wrap">
                                          <div class="careerfy-employer-box-section" id="ml-savedjobs">
                                                <div class="careerfy-profile-title">
                                                      <h2>Saved Jobs</h2>
                                                      <form class="careerfy-employer-search">
                                                            <input value="Search orders"
                                                                  onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                                  onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                                  type="text">
                                                            <input value="" type="submit">
                                                            <i class="careerfy-icon careerfy-search"></i>
                                                      </form>
                                                </div>
                                                <div class="careerfy-candidate-savedjobs">
                                                      <div class="careerfy-candidate-savedjobs-wrap">
                                                            <table>
                                                                  <thead>
                                                                        <tr>
                                                                              <th>Job Title</th>
                                                                              <th>Company</th>
                                                                              <th>Openings</th>
                                                                              <th></th>
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody id="table-data">

                                                                        <!-- ===================================================================================================================== -->
                                                                  </tbody>
                                                            </table>
                                                      </div>
                                                </div>
                                                <!-- Pagination -->

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
                        url: "ajax-saved-jobs-pagination.php",
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
} else {
      header('location:http://materiallibrary.co.in/signin');
      exit;
}
      ?>