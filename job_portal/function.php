<!Doctype php>
<php lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Library</title>
    
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
    <link href="css/homepage-five.css" rel="stylesheet">
    <link href="css/job-detail-two.css" rel="stylesheet">
    

    <!-- blank css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="vcss/vendor.css">
    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="vcss/utility.css">
    <!--====== App ======-->
    <link rel="stylesheet" href="vcss/app.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="vcss/osahan.min.css" rel="stylesheet">
  


   
  
</head>

<body>
    
    <!-- Wrapper -->
    <div class="jobsearch-wrapper">


<!--Header-->
<header class="header--style-2">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav-wrapper">
        <div class="container">

            <!--====== Primary Nav ======-->
            <div class="primary-nav">

                <!--====== Main Logo ======-->

                <a class="main-logo" href="index.php">

                    <img src="images/logo/logo-2.png" alt=""></a>
                <!--====== End - Main Logo ======-->


                <!--====== Search Form ======-->
                <form class="main-form">

                    <label for="main-search"></label>

                    <input class="input-text input-text--border-radius input-text--style-2" type="text" id="main-search" placeholder="Search">

                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                <!--====== End - Search Form ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation">

                    <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                <a><i class="far fa-user-circle"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li>

                                        <a href="candidate-dashboard-profile-seting.php"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                            <span >Account</span></a></li>
                                    <li>

                                        <a href="signup.php"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                            <span>Signup</span></a></li>
                                    <li>

                                        <a href="signin.php"><i class="fas fa-lock u-s-m-r-6"></i>

                                            <span>Signin</span></a></li>
                                    <li>

                                        <a href="signup.php"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                            <span>Signout</span></a></li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                <a><i class="fas fa-user-cog"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a class="u-c-brand">ENGLISH</a></li>
                                            <li>

                                                <a>ARABIC</a></li>
                                            <li>

                                                <a>FRANCAIS</a></li>
                                            <li>

                                                <a>ESPANOL</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:225px">
                                            <li>

                                                <a class="u-c-brand">$ - US DOLLAR</a></li>
                                            <li>

                                                <a>£ - BRITISH POUND STERLING</a></li>
                                            <li>

                                                <a>€ - EURO</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                            <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
               
                </div>

            </div>

        </div>
    </nav>



    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper"style="padding:0px;top-margin:60px;">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav"style="margin-bottom: 40px;">

                <!--====== Dropdown Main plugin ======-->
                <!--====== End - Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation1" style="margin-left:50px;">

                    <!-- <button class="btn btn--icon toggle-mega-text toggle-button" type="button">CATEGORIES</button> -->


                </div>


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2" >

                    <button class="btn btn--icon toggle-button toggle-button--white fas fa-cog" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-white" style="margin-left: 125px;">
                            <li class="has-dropdown" style="color:black">

                                <a>WHO YOU ARE?<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:170px">
                                    <li class="has-dropdown has-dropdown--ul-left-100"style="color:black">

                                        <a>Student<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <a>Architect<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <a>Distributor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <a>Brand<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <a>Contractor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                        <a>Individual<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                       
                                    </li>
                                </ul>
                            </li>
                            
                            <li>

                                <a href="shop-side-version-2.php">SHOP</a><span class="js-menu-toggle"></span>
                                
                            </li>
                            <!-- <li>

                                <a href="index-six.php">JOBS</a></li>
                                
                            <li> -->
                                <li class="has-dropdown"style="color:black">

                                    <a>JOBS<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:170px">
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a href="job-listings.php">Job Listing<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a href="employer-list.php">Employer<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a href="candidate-listings.php">Candidates<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>SignIn/SignUp<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>PostJob<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                           
                                        </li>
                                    </ul>
                                </li>
                                <li>

                                <a href="#">PORTFOLIO</a></li>

                            <li>

                                <a href="#">E-LEARNING</a></li>
                                <li class="has-dropdown"style="color:black">

                                    <a>CONSULT<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:170px">
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Student<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>Architect<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>Distributor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>Contractor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>Company<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                           
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"style="color:black">

                                    <a>COLLABORATE<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:170px">
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>IMPORT<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                            <a>EXPORT<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                           
                                        </li>
                                    </ul>
                                </li>
                            </li>   
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation3">

                    <button class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop" type="button"></button>

                    <span class="total-item-round">2</span>

                   
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>

