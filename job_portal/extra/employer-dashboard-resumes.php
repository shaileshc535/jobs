<?php
include 'include/header.php';
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
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
                            <figure>
                                <a href="#" class="employer-dashboard-thumb"><img src="extra-images/employer-dashboard-1.png" alt=""></a>
                                <figcaption>
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                        <input type="file" class="careerfy-upload" />
                                    </div>
                                    <h2>Graveholdings</h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i>
                                        Company Profile</a></li>

                                <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li class="active"><a href="employer-dashboard-resumes.php"><i class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

                                <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i>
                                        Post a New Job</a></li>

                                <li><a href="#"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                                </li>

                                <li><a href="index-2.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <!-- <li><a href="employer-dashboard-packages.php"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                <!-- <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-alarm"></i> Job
                                        Alerts</a></li> -->
                            </ul>
                        </div>
                    </div>
                </aside>

                <div class="careerfy-column-9">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dasboard">
                            <div class="careerfy-employer-box-section">
                                <!-- Profile Title -->
                                <div class="careerfy-profile-title">
                                    <h2>Shortlisted Resumes</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <!-- Resumes -->
                                <div class="careerfy-employer-resumes">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-6">
                                            <div class="careerfy-employer-resumes-wrap">
                                                <figure>
                                                    <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                    <figcaption>
                                                        <h2><a href="#">Samantha Cindy</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i>
                                                                Download CV</a></h2>
                                                        <span class="careerfy-resumes-subtitle">Web Developer at <a href="#">Vivatam</a></span>
                                                        <ul>
                                                            <li>
                                                                <span>Location:</span>
                                                                Netherlands, Rotterdam
                                                            </li>
                                                            <li>
                                                                <span>Current Salary:</span>
                                                                $1900/<small>p.a minimum</small>
                                                            </li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <ul class="careerfy-resumes-options">
                                                    <li><a href="#"><i class="careerfy-icon careerfy-mail"></i>
                                                            Message</a></li>
                                                    <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View
                                                            Profile</a></li>
                                                    <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i>
                                                            LinkedIn</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                        <!-- <li class="careerfy-column-6">
                                            <div class="careerfy-employer-resumes-wrap">
                                                <figure>
                                                    <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                    <figcaption>
                                                        <h2><a href="#">Kyl San Antonio</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i>
                                                                Download CV</a></h2>
                                                        <span class="careerfy-resumes-subtitle">Charity & Voluntary at
                                                            <a href="#">Unodoncity</a></span>
                                                        <ul>
                                                            <li>
                                                                <span>Location:</span>
                                                                Netherlands, Rotterdam
                                                            </li>
                                                            <li>
                                                                <span>Current Salary:</span>
                                                                $2000/<small>p.a minimum</small>
                                                            </li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <ul class="careerfy-resumes-options">
                                                    <li><a href="#"><i class="careerfy-icon careerfy-mail"></i>
                                                            Message</a></li>
                                                    <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View
                                                            Profile</a></li>
                                                    <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i>
                                                            LinkedIn</a></li>
                                                </ul>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    </ul>
                                </div>
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

<!-- Footer -->
<?php
include 'include/footer.php';
?>