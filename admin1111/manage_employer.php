<?php
session_start();
require('./assets/_dbconnect.php');
require('./assets/_functions.php');
if (isset($_SESSION['loggedin']) == true) {

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
                  $update_status_sql = "update job_company set status='$status' where id='$id'";
                  mysqli_query($con, $update_status_sql);
            }

            if ($type == 'delete') {
                  $id = get_safe_value($con, $_GET['id']);
                  $delete_sql = "delete from job_company where id='$id'";
                  mysqli_query($con, $delete_sql);
            }
      }
?>
<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
      <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/libs/css/style.css">
      <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
      <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <title>Material Library</title>
</head>

<body>
      <!-- ============================================================== -->
      <!-- main wrapper -->
      <!-- ============================================================== -->
      <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
<div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                  <a class="navbar-brand" href="index.php">Material Library</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                              <li class="nav-item">
                                    <div id="custom-search" class="top-search-bar">
                                          <input class="form-control" type="text" placeholder="Search..">
                                    </div>
                              </li>
                              <li class="nav-item dropdown notification">
                                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                          <li>
                                                <div class="notification-title"> Notification</div>
                                                <div class="notification-list">
                                                      <div class="list-group">
                                                            <a href="#"
                                                                  class="list-group-item list-group-item-action active">
                                                                  <div class="notification-info">
                                                                        <div class="notification-list-user-img">
                                                                              <img src="assets/images/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="user-avatar-md rounded-circle">
                                                                        </div>
                                                                        <div class="notification-list-user-block">
                                                                              <span class="notification-list-user-name">Jeremy
                                                                                    Rakestraw</span>accepted your
                                                                              invitation to join the team.
                                                                              <div class="notification-date">2 min
                                                                                    ago</div>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action">
                                                                  <div class="notification-info">
                                                                        <div class="notification-list-user-img">
                                                                              <img src="assets/images/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="user-avatar-md rounded-circle">
                                                                        </div>
                                                                        <div class="notification-list-user-block">
                                                                              <span class="notification-list-user-name">John
                                                                                    Abraham </span>is
                                                                              now following you
                                                                              <div class="notification-date">2
                                                                                    days ago</div>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action">
                                                                  <div class="notification-info">
                                                                        <div class="notification-list-user-img">
                                                                              <img src="assets/images/avatar-4.jpg"
                                                                                    alt=""
                                                                                    class="user-avatar-md rounded-circle">
                                                                        </div>
                                                                        <div class="notification-list-user-block">
                                                                              <span class="notification-list-user-name">Monaan
                                                                                    Pechi</span> is
                                                                              watching your main repository
                                                                              <div class="notification-date">2 min
                                                                                    ago</div>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action">
                                                                  <div class="notification-info">
                                                                        <div class="notification-list-user-img">
                                                                              <img src="assets/images/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="user-avatar-md rounded-circle">
                                                                        </div>
                                                                        <div class="notification-list-user-block">
                                                                              <span class="notification-list-user-name">Jessica
                                                                                    Caruso</span>accepted your
                                                                              invitation to join the team.
                                                                              <div class="notification-date">2 min
                                                                                    ago</div>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="list-footer"> <a href="#">View all notifications</a>
                                                </div>
                                          </li>
                                    </ul>
                              </li>

                              <li class="nav-item dropdown nav-user">
                                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="assets/images/avatar-1.jpg" alt=""
                                                class="user-avatar-md rounded-circle"></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                          aria-labelledby="navbarDropdownMenuLink2">
                                          <div class="nav-user-info">
                                                <h5 class="mb-0 text-white nav-user-name"></h5>
                                                <span class="status"></span><span class="ml-2">Available</span>
                                          </div>
                                          <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                          <a class="dropdown-item"
                                                href="http://materiallibrary.co.in/admin/assets/_logout.php"><i
                                                      class="fas fa-power-off mr-2"></i>Logout</a>
                                    </div>
                              </li>
                        </ul>
                  </div>
            </nav>
      </div>
      <!-- ============================================================== -->
      <!-- end navbar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                          Menu
                                    </li>

                                    <li class="nav-item ">
                                          <a class="nav-link active" href="#" data-toggle="collapse"
                                                aria-expanded="false" data-target="#submenu-1"
                                                aria-controls="submenu-1"><i
                                                      class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                                      class="badge badge-success">6</span></a>
                                          <div id="submenu-1" class="collapse submenu">
                                                <ul class="nav flex-column">

                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Ecommerce</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link"
                                                                  href="http://materiallibrary.co.in/admin/index.php">Job
                                                                  Portal</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="#">Video
                                                                  Library</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link"
                                                                  href="http://materiallibrary.org/admin/index.php">Portfolio
                                                                  Management</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-2" aria-controls="submenu-2"><i
                                                      class="fa fa-fw fa-rocket"></i>Categories</a>
                                          <div id="submenu-2" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="job_categories.php">Create
                                                                  Job Categories</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="manage_job_categories.php">Manage
                                                                  Job
                                                                  Categories</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-3" aria-controls="submenu-3"><i
                                                      class="fa fa-fw fa-rocket"></i>Candidate</a>
                                          <div id="submenu-3" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <!-- <li class="nav-item">
                                                                  <a class="nav-link" href="users.php">Add Users</a>
                                                            </li> -->
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="manage_users.php">Manage
                                                                  Candidate</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-4" aria-controls="submenu-4"><i
                                                      class="fa fa-fw fa-rocket"></i>Employer/Company</a>
                                          <div id="submenu-4" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="employer.php">Add
                                                                  Employers</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="manage_employer.php">Manage
                                                                  Employers</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-6" aria-controls="submenu-6"><i
                                                      class="fa fa-fw fa-rocket"></i>SEO
                                                Section</a>
                                          <div id="submenu-6" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="metatag.php">Add
                                                                  Meta-Tags</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="manage_metatag.php">Manage
                                                                  Meta-Tags</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-5" aria-controls="submenu-5"><i
                                                      class="fa fa-fw fa-rocket"></i>Job
                                                Post</a>
                                          <div id="submenu-5" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="jobs.php">Add/Create
                                                                  Jobs</a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="manage_jobs.php">Manage Job
                                                                  Posts</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>


                                    <li class="nav-item">
                                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-12" aria-controls="submenu-12"><i
                                                      class="fa fa-address-book"></i>Contact Us</a>
                                          <div id="submenu-12" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                      <li class="nav-item">
                                                            <a class="nav-link" href="contact_us.php">Manage
                                                                  Complaints</a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>

                              </ul>
                        </div>
                  </nav>
            </div>
      </div>

            <div class="dashboard-wrapper">
                  <div class="dashboard-ecommerce">
                        <div class="container-fluid dashboard-content ">
                              <div class="container-fluid dashboard-content ">
                                    <div class="row">
                                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="section-block" id="basicform">
                                                      <h3 class="section-title text-center">Employer/Company Details
                                                            Section</h3>
                                                </div>
                                                <div class="card">
                                                      <div>
                                                            <h5 class="card-header">Employer/Company Details</h5>
                                                      </div>
                                                      <div class="card-body">
                                                            <table id="employer_table"
                                                                  class="table table-bordered table-striped table-hover"
                                                                  style="text-align:center;">
                                                                  <thead>
                                                                        <tr class="table_row"
                                                                              style="text-align:center; font-size:14px ">
                                                                              <th>S.No</th>
                                                                              <!-- <th>Id</th> -->
                                                                              <th>Company Name</th>
                                                                              <th>Location</th>
                                                                              <th>Contact</th>
                                                                              <th>Email</th>
                                                                              <th>Action</th>
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>

                                                                        <?php
                                                                              //query to get all company from database
                                                                              $sql = "SELECT * FROM job_company";

                                                                              //execute query
                                                                              $res = mysqli_query($con, $sql);

                                                                              //count rows
                                                                              $count = mysqli_num_rows($res);

                                                                              //create serial number verable
                                                                              $sn = 1;

                                                                              //check wether we have data in data base or not
                                                                              if ($count > 0) {
                                                                                    //we have data in database
                                                                                    //get the data & display
                                                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                                                          $id = $row['id'];
                                                                                          $company_name = $row['company_name'];
                                                                                          $country = $row['country'];
                                                                                          $state = $row['state'];
                                                                                          $city = $row['city'];
                                                                                          $contact_number = $row['contact_number'];
                                                                                          $website = $row['website'];
                                                                                          $email = $row['email'];
                                                                                          $about_us = $row['about_us'];
                                                                                          $logo = $row['logo'];
                                                                                          $status = $row['status'];
                                                                              ?>
                                                                        <tr style="text-align:center; font-size:16px; ">
                                                                              <td><?php echo $sn++; ?></td>

                                                                              <td><?php echo $company_name; ?></td>
                                                                              <td><?php echo $city; ?></td>
                                                                              <td><?php echo $contact_number; ?></td>
                                                                              <td><?php echo $email; ?></td>
                                                                              <td>
                                                                                    <?php
                                                                                                      if ($row['status'] == 1) {
                                                                                                            echo "<span class='badge btn btn-sm btn-light badge-complete' style='color:black;'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
                                                                                                      } else {
                                                                                                            echo "<span class='badge btn btn-sm btn-secondary badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
                                                                                                      }
                                                                                                      echo "<span class='badge btn btn-sm btn-success badge-edit'><a href='update_employer.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";

                                                                                                      echo "<span class='badge btn btn-sm btn-danger badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                                                                                      ?>
                                                                              </td>
                                                                        </tr>

                                                                        <?php

                                                                                    }
                                                                              } else {
                                                                                    //we do not have data
                                                                                    //we will display the message in side the table
                                                                                    ?>
                                                                        <tr>
                                                                              <td colspan="6">
                                                                                    <div class="error">No Category Edit
                                                                                    </div>
                                                                              </td>
                                                                        </tr>
                                                                        <?php
                                                                              }
                                                                              ?>
                                                                  </tbody>
                                                            </table>

                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <!-- footer -->
                        <!-- ============================================================== -->
                        <div class="footer">
                              <div class="container-fluid">
                                    <div class="row">
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                Copyright &copy; <?php echo date('Y') ?> All rights reserved. <a
                                                      href="#">Material
                                                      Library.</a>.
                                          </div>
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="text-md-right footer-links d-none d-sm-block">
                                                      <a href="javascript: void(0);">About</a>
                                                      <a href="javascript: void(0);">Support</a>
                                                      <a href="javascript: void(0);">Contact Us</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end footer -->
                        <!-- ============================================================== -->
                  </div>
                  <!-- ============================================================== -->
                  <!-- end wrapper  -->
                  <!-- ============================================================== -->
            </div>
      </div>
      <!-- ============================================================== -->
      <!-- end main wrapper  -->
      <!-- ============================================================== -->

      <script>
      $(document).ready(function() {
            $('#employer_table').DataTable();

      });
      </script>
</body>

</html>
<?php
} else {
      header('location:http://materiallibrary.co.in/admin/sign_in.php');
}
?>