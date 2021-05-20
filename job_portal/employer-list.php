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

    if (isset($_GET['type'])) {
        $u_id = $_GET['u_id'];
        $type = $_GET['type'];
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
                  <li><a href="http://materiallibrary.co.in/employer-manage-jobs.php">Pages</a></li>
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
                                          <div class="careerfy-employer-box-section" id="ml-manage45">
                                                <!-- Profile Title -->
                                                <div class="careerfy-profile-title">
                                                      <h2>Manage Jobs</h2>
                                                      <form class="careerfy-employer-search">
                                                            <input value="Search orders"
                                                                  onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                                  onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                                  type="text">
                                                            <input type="submit" value="">
                                                            <i class="careerfy-icon careerfy-search"></i>
                                                      </form>
                                                </div>
                                                <!-- Manage Jobs -->
                                                <div class="careerfy-managejobs-list-wrap">
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
                  url: "pagination/manageJobsPagination.php",
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
<?php
if (isset($_GET['id'])) {

    $delete_id = $_GET['id'];
    $delete = "delete from job_post where id='$delete_id'";
    $d_run = mysqli_query($con, $delete);

    if ($run) {
        echo "<script>window.open('http://materiallibrary.co.in/employer-manage-jobs.php','_self')</script>";
    }
}

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'status') {
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $update_status_sql = "update job_post set status='$status' where id='$id'";
        mysqli_query($con, $update_status_sql);
    }
}
?>