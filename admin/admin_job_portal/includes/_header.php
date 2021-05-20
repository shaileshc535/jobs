<?php
include('../assets/_dbconnect.php');
// include('../assets/_function.php');


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:' . $SITEURL . 'admin/sign_in.php');
    exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
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
      <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
      <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
      <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
      <link rel="stylesheet"
            href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
                                                                                    <span
                                                                                          class="notification-list-user-name">Jeremy
                                                                                          Rakestraw</span>accepted your
                                                                                    invitation to join the team.
                                                                                    <div class="notification-date">2 min
                                                                                          ago</div>
                                                                              </div>
                                                                        </div>
                                                                  </a>
                                                                  <a href="#"
                                                                        class="list-group-item list-group-item-action">
                                                                        <div class="notification-info">
                                                                              <div class="notification-list-user-img">
                                                                                    <img src="assets/images/avatar-3.jpg"
                                                                                          alt=""
                                                                                          class="user-avatar-md rounded-circle">
                                                                              </div>
                                                                              <div class="notification-list-user-block">
                                                                                    <span
                                                                                          class="notification-list-user-name">John
                                                                                          Abraham </span>is
                                                                                    now following you
                                                                                    <div class="notification-date">2
                                                                                          days ago</div>
                                                                              </div>
                                                                        </div>
                                                                  </a>
                                                                  <a href="#"
                                                                        class="list-group-item list-group-item-action">
                                                                        <div class="notification-info">
                                                                              <div class="notification-list-user-img">
                                                                                    <img src="assets/images/avatar-4.jpg"
                                                                                          alt=""
                                                                                          class="user-avatar-md rounded-circle">
                                                                              </div>
                                                                              <div class="notification-list-user-block">
                                                                                    <span
                                                                                          class="notification-list-user-name">Monaan
                                                                                          Pechi</span> is
                                                                                    watching your main repository
                                                                                    <div class="notification-date">2 min
                                                                                          ago</div>
                                                                              </div>
                                                                        </div>
                                                                  </a>
                                                                  <a href="#"
                                                                        class="list-group-item list-group-item-action">
                                                                        <div class="notification-info">
                                                                              <div class="notification-list-user-img">
                                                                                    <img src="assets/images/avatar-5.jpg"
                                                                                          alt=""
                                                                                          class="user-avatar-md rounded-circle">
                                                                              </div>
                                                                              <div class="notification-list-user-block">
                                                                                    <span
                                                                                          class="notification-list-user-name">Jessica
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
                                                <a class="dropdown-item" href="#"><i
                                                            class="fas fa-user mr-2"></i>Account</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cog mr-2"></i>Setting</a>
                                                <a class="dropdown-item"
                                                      href="http://localhost/material_library/admin/sign_in.php"><i
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
                              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
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
                                                                  <a class="nav-link" href="../index.php">Ecommerce</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link" href="index.php">Job Portal</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link"
                                                                        href="../admin_video_library/index.php">Video
                                                                        Library</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link"
                                                                        href="../admin_behance/index.php">Portfolio
                                                                        Management</a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </li>

                                          <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-2"
                                                      aria-controls="submenu-2"><i
                                                            class="fa fa-fw fa-rocket"></i>Categories</a>
                                                <div id="submenu-2" class="collapse submenu">
                                                      <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                  <a class="nav-link" href="job_categories.php">Create
                                                                        Job Categories</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link"
                                                                        href="manage_job_categories.php">Manage Job
                                                                        Categories</a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </li>

                                          <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-3"
                                                      aria-controls="submenu-3"><i
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
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-4"
                                                      aria-controls="submenu-4"><i
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
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-6"
                                                      aria-controls="submenu-6"><i class="fa fa-fw fa-rocket"></i>SEO
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
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-5"
                                                      aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Job
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
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                      aria-expanded="false" data-target="#submenu-12"
                                                      aria-controls="submenu-12"><i
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