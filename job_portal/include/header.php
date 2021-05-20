<?php
ob_start();
session_start();
?>
<!Doctype html>
<html lang="en">

<head>
      <?php
      include('../admin/assets/_dbconnect.php');

      $url = basename($_SERVER['REQUEST_URI']);
      if ($url == 'job_portal') {

            $url = 'http://materiallibrary.co.in/home';
      }

      $metaquery = "SELECT * FROM metatag 
      inner join meta_pages on meta_pages.id=metatag.meta_url
      WHERE meta_pages.page_url='$url'";
      $metares = mysqli_query($con, $metaquery);
      $metarow = mysqli_num_rows($metares);
      $metadata = mysqli_fetch_assoc($metares);

      $meta_title = '';
      $meta_keywords = '';
      $meta_description = '';

      if ($metarow > 0) {
            $meta_title = $metadata['meta_title'];
            $meta_keywords = $metadata['meta_keywords'];
            $meta_description = $metadata['meta_description'];
      } else {
            $meta_title = 'Dynamic Meta Title';
            $meta_keywords = 'Dynamic meta_keywords';
            $meta_description = 'Dynamic meta_description';
      }

      ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="<?php echo $meta_description; ?>">
      <meta name="keywords" content="<?php echo $meta_keywords; ?>">
      <meta name="author" content="Material-Library">
      <title>Material Library:Job-Portal-<?php echo $meta_title; ?></title>

      <!-- Css -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="fonts/update/flat-icon.css" rel="stylesheet">
      <link href="css/slick-slider.css" rel="stylesheet">
      <link rel="stylesheet" href="build/mediaelementplayer.css">
      <link href="plugin-css/fancybox.css" rel="stylesheet">
      <link href="plugin-css/plugin.css" rel="stylesheet">
      <link href="css/color.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href="css/homepage-seven.css" rel="stylesheet">
      <link href="css/homepage-six.css" rel="stylesheet">
      <link href="css/homepage-six-typo.css" rel="stylesheet">
      <link href="css/home-six-color.css" rel="stylesheet">

      <script src="https://kit.fontawesome.com/c930002464.js" crossorigin="anonymous"></script>

      <!-- blank css -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
      <!--====== Vendor Css ======-->
      <link rel="stylesheet" href="vcss/vendor.css">
      <!--====== Utility-Spacing ======-->
      <!-- <link rel="stylesheet" href="vcss/utility.css"> -->
      <!--====== App ======-->
      <link rel="stylesheet" href="vcss/app.css">
      <!-- <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" /> -->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <!-- <link href="vcss/osahan.min.css" rel="stylesheet"> -->

      <!--job portal css-->

      <!--jobportal css-->
      <!-- <link href="vcss/bootstrap.css" rel="stylesheet">
    <link href="vcss/font-awesome.css" rel="stylesheet">
    <link href="fonts/update/flat-icon.css" rel="stylesheet">
    <link href="vcss/slick-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="build/mediaelementplayer.css">
    <link href="plugin-css/fancybox.css" rel="stylesheet">
    <link href="plugin-css/plugin.css" rel="stylesheet">
    <link href="vcss/color.css" rel="stylesheet"> -->
      <!--  
    <link href="xstyle.css" rel="stylesheet"> -->

      <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>

      <!-- Wrapper -->
      <div class="jobsearch-wrapper">

            <header class="header--style-2">

                  <!--====== Nav 1 ======-->
                  <nav class="primary-nav-wrapper">
                        <div class="container">

                              <!--====== Primary Nav ======-->
                              <div class="primary-nav">

                                    <!--====== Main Logo ======-->

                                    <a class="main-logo" href="http://materiallibrary.co.in">

                                          <img src="images/logo/ML JOB.png" alt=""></a>
                                    <!--====== End - Main Logo ======-->


                                    <!--====== Search Form ======-->
                                    <form class="main-form" method="post">

                                          <label for="main-search"></label>

                                          <input class="input-text input-text--border-radius input-text--style-2"
                                                name="search-input" type="text" id="main-search" placeholder="Search here">
                                          <button class=" fas fa-search main-search-button" name="search-submit"
                                                style="margin-top:5px; " type="submit"></button>

                                    </form>
                                    <?php
                                    if (isset($_POST['search-submit']) && $_POST['search-input'] != '') {

                                          $keyword = $_POST['search-input'];
                                          header("location:http://materiallibrary.co.in/job-listings.php?value=$keyword");
                                          exit;
                                    }
                                    ?>
                                    <!--====== End - Search Form ======-->


                                    <!--====== Dropdown Main plugin ======-->
                                    <div class="menu-init" id="navigation">

                                          <button class="btn btn--icon toggle-button toggle-button--white "
                                                type="button"><i class="far fa-address-book fa-2x"></i></button>

                                          <!--====== Menu ======-->
                                          <div class="ah-lg-mode">

                                                <span class="ah-close">✕ Close</span>

                                                <!--====== List ======-->
                                                <ul class='ah-list ah-list--design1 ah-list--link-color-white'>
                                                      <?php

                                                      include('../admin/assets/_dbconnect.php');
                                                      if (isset($_SESSION['loggedin'])) {
                                                            $id = $_SESSION['loggedin'];
                                                            $query = mysqli_query($con, "SELECT * FROM users WHERE user_id='$id'");
                                                            $row = mysqli_fetch_array($query);
                                                            echo "
                                            <li class='has-dropdown' data-tooltip='tooltip' data-placement='left'
                                                title='Account'>";
                                                            if ($row['type'] == 0) {
                                                                  echo "<a href='candidate-dashboard-profile-seting'><i class='far fa-user-circle'></i> {$row['fname']}</a>";
                                                            } elseif ($row['type'] == 1) {
                                                                  echo "<a href='employer-dashboard.php'><i class='far fa-user-circle'></i> {$row['fname']}</a>";
                                                            }

                                                            echo "<li>

                                                        <a href='signout.php'><i class='fas fa-lock-open u-s-m-r-6'></i>

                                                            <span>Signout</span></a>
                                                    </li>
                                                    </ul>
                                                </li>";
                                                      } else {
                                                            echo "
                                                        
                    
                                                            <li>

                                                                <a href='signin'><i class='fas fa-lock u-s-m-r-6'></i>

                                                                <span>Signin</span></a>
                                                            </li>
                                                            <li>

                                                                <a href='signup'><i class='fas fa-user-plus u-s-m-r-6'></i>

                                                                    <span>Signup</span></a>
                                                            </li>
                                                        
                                                    
                                                    ";
                                                      }
                                                      ?>
                                                      <!--====== End - Dropdown ======-->



                                                </ul>
                                                <!--====== End - List ======-->
                                          </div>
                                          <!--====== End - Menu ======-->
                                    </div>
                                    <!--====== End - Dropdown Main plugin ======-->
                              </div>
                              <!--====== End - Primary Nav ======-->
                        </div>

                        <div class="container" style="padding:0px;top-margin:60px;">

                              <!--====== Secondary Nav ======-->
                              <div class="secondary-nav" style="margin-bottom: 40px;">

                                    <!--====== Dropdown Main plugin ======-->
                                    <!--====== End - Dropdown Main plugin ======-->
                                    <div class="menu-init" id="navigation1" style="margin-left:12px;">

                                          <button class="btn btn--icon toggle-mega-text toggle-button" type="button"><i
                                                      class="fas fa-align-justify fa-3x"></i></button>

                                          <!--====== Menu ======-->
                                          <div class="ah-lg-mode">

                                                <span class="ah-close">✕ Close</span>

                                                <!--====== List ======-->


                                                <!--====== List ======-->
                                                <ul class="ah-list ah-list--design2 ah-list--link-color-white"
                                                      style="margin-left: 125px;">
                                                      <li class="has-dropdown" style="color:black">

                                                            <a>WHO YOU ARE?<i
                                                                        class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                            <!--====== Dropdown ======-->

                                                            <span class="js-menu-toggle"></span>
                                                            <ul style="width:170px">
                                                                  <li class="has-dropdown has-dropdown--ul-left-100"
                                                                        style="color:black">

                                                                        <a href="#">Student<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a href="#">Architect<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a href="#">Distributor<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a href="#">Brand<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a href="#">Contractor<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a href="#">Individual<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                                  </li>
                                                            </ul>
                                                      </li>

                                                      <li>
                                                            <a href="#">SHOP</a><span class="js-menu-toggle"></span>
                                                      </li>

                                                      <li class="has-dropdown" style="color:black">

                                                            <a>JOBS<i class=" u-s-m-l-6"></i></a>

                                                            <!--====== Dropdown ======-->
                                                            <?php
                                                            if (isset($_SESSION['loggedin'])) {
                                                                  if ($row['type'] == 0) {
                                                                        echo "<span class='js-menu-toggle'></span>
                                                                <ul style='width:170px'>
                                                                
                                                                     <li
                                                                            class='has-dropdown has-dropdown--ul-left-100'>
                                                                         
                                                                            <a

                                                                                  href='http://materiallibrary.co.in/job-listings'>Job
                                                                                  Listing<i
                                                                                        class='fas fa-angle-down i-state-right u-s-m-l-6'></i></a>
                           
                                                                      </li>
                                                                  
                                                                </ul>";
                                                                  }
                                                            }
                                                            else{
                                                                echo "<span class='js-menu-toggle'></span>
                                                                <ul style='width:170px'>
                                                                
                                                                     <li
                                                                            class='has-dropdown has-dropdown--ul-left-100'>
                                                                         
                                                                            <a

                                                                                  href='http://materiallibrary.co.in/job-listings'>Job
                                                                                  Listing<i
                                                                                        class='fas fa-angle-down i-state-right u-s-m-l-6'></i></a>
                           
                                                                      </li>
                                                                  
                                                                </ul>";
                                                            }
                                                            ?>
                                                      </li>

                                                      <li>
                                                            <a href="http://materiallibrary.org/">PORTFOLIO</a>
                                                      </li>

                                                      <li>
                                                            <a href="#">E-LEARNING</a>
                                                      </li>

                                                      <li class="has-dropdown" style="color:black">
                                                            <a>CONSULT<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                                            <!--====== Dropdown ======-->

                                                            <span class="js-menu-toggle"></span>
                                                            <ul style="width:170px">
                                                                  <li class="has-dropdown has-dropdown--ul-left-100">
                                                                        <a>Student<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a>Architect<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a>Distributor<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a>Contractor<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a>Company<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                      <li class="has-dropdown" style="color:black">

                                                            <a>COLLABORATE<i
                                                                        class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                            <!--====== Dropdown ======-->

                                                            <span class="js-menu-toggle"></span>
                                                            <ul style="width:170px">
                                                                  <li class="has-dropdown has-dropdown--ul-left-100">

                                                                        <a>IMPORT<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                        <a>EXPORT<i
                                                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                      </li>
                                                </ul>
                                                <!--====== End - List ======-->

                                                <!--====== End - Menu ======-->

                                                <!--====== End - Dropdown Main plugin ======-->


                                                <!--====== Dropdown Main plugin ======-->
                                                <!-- <div class="menu-init" id="navigation3">

                            <button
                                class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop"
                                type="button"></button>

                            <span class="total-item-round">2</span> -->

                                                <!--====== Menu ======-->
                                                <!-- <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                            </div> -->
                                                <!--====== End - Menu ======-->
                                                <!-- </div> -->
                                                <!--====== End - Dropdown Main plugin ======-->
                                          </div>
                                          <!--====== End - Secondary Nav ======-->
                                    </div>
                  </nav>
                  <!--====== End - Nav 2 ======-->
            </header>