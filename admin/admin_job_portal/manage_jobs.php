<?php
session_start();
include("../assets/_dbconnect.php");
if(isset($_SESSION['loggedin'] = true)){
if(isset($_GET['type']) && $_GET['type']!=''){
	$type= $_GET['type'];
	if($type=='status'){
		$operation=$_GET['operation'];
		$id=$_GET['id'];
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="UPDATE job_post SET status='$status' WHERE id='$id'";
		mysqli_query($con,$update_status_sql);
  }
}
$result = mysqli_query($con,"SELECT * FROM job_post");
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
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Material Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                    class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-2.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jeremy
                                                            Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-3.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">John Abraham </span>is
                                                        now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-4.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Monaan Pechi</span> is
                                                        watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-5.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jessica
                                                            Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="assets/_logout.php"><i
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="../../admin/index.php">Ecommerce</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Job Portal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="../../video_library/video_library_admin/index.php">Video
                                                Library</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../behance/behance_admin/index.php">Portfolio
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
                                            <a class="nav-link" href="job_categories.php">Create Job Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage_job_categories.php">Manage Job
                                                Categories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fa fa-fw fa-rocket"></i>Users</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="users.php">Add Users</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage_users.php">Manage Users</a>
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
                                            <a class="nav-link" href="employer.php">Add Employers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage_employer.php">Manage Employers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-5" aria-controls="submenu-5"><i
                                        class="fa fa-fw fa-rocket"></i>Job Post</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="jobs.php">Add/Create Jobs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="manage_jobs.php">Manage Job Posts</a>
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
                                            <a class="nav-link" href="contact_us.php">Manage Complaints</a>
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
            <h1>Manage Job Posts</h1>
            <div class="input-group rounded">
  
</div>
    
            <?php

    





if (mysqli_num_rows($result) > 0){
?>

  <table id="manage_jobs" class="table table-borderless">
    <thead>
      <tr>
      <th>ID</th>
        <th>Company</th>
        <th>Category</th>
        <th>Status</th>
        <th>City</th>
        <th>Stipend</th>
        <th>Salary</th>
        <th>Experience</th>
        <th>Openings</th>
        <th>Action
        </th>

      </tr>
    </thead>
  <tbody>
    <?php
         
        while($row = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['company'];?></td>
        <td><?php echo $row['jobtitle'];?></td>
        <td><?php echo $row['verify'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['stipend'];?></td>
        <td><?php echo $row['salary'];?></td>
        <td><?php echo $row['experience'];?></td>
        <td><?php echo $row['openings'];?></td>
        <td>
        <div class="btn-group">
      
  <?php
      if($row['status']==1){
        echo"<span class='badge'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>";
      }
      else{
        echo"<span class='badge'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>";
      }



      if($row['verify']=='Verified'){
        echo"<span class='badge'><a href='job_detail.php?id=".$row['id']."&cid=".$row['company_id']."'>Verified</a></span>";
      }
      elseif($row['verify']=='Declined'){
        echo"<span class='badge'><a href='job_detail.php?id=".$row['id']."&cid=".$row['company_id']."'>Rejected</a></span>";
      }
      elseif($row['verify']=='Closed'){
        echo"<span class='badge'><a href='job_detail.php?id=".$row['id']."&cid=".$row['company_id']."'>Closed</a></span>";
      }
      else{
        echo"<span class='badge'><a href='job_detail.php?id=".$row['id']."&cid=".$row['company_id']."'>Verify</a></span>";
      }
  ?>
  
  <span class='badge'><a href="delete.php?id=<?php echo $row['id'];?>" role="button">Delete</a></span>
 
  </div>
</td>
      </tr>
      <?php
        
        }
?>
  </tbody>
</table>

  <?php
}
else{
    echo "No result found";
}
?>

    </div>
        </div>
      <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                Copyright &copy; <?php echo date('Y') ?> All rights reserved. <a href="#">Material
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
        $('#manage_jobs').DataTable();

    });
    </script>
</body>

</html>
        <?php
        // include('includes/_footer.php');
}
else{
    header('location:sign_in.php');
}
        ?>

       
