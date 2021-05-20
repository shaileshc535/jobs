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
    <div class="careerfy-main-section careerfy-dashboard-fulltwo">
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
                                <li><a href="#employer-manage-jobs.php"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <li><a href="employer-dashboard-resumes.php"><i class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>
                                <!-- <li class="active"><a href="employer-dashboard-packages.php"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i>
                                        Post a New Job</a></li>
                                <!-- <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li> -->
                                <li><a href="#"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                <li><a href="index-2.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
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
                                    <h2>Packages</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <!-- Transactions -->
                                <div class="careerfy-employer-packages-wrap">
                                    <div class="careerfy-employer-packages">
                                        <div class="careerfy-table-layer careerfy-packages-thead">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">Order ID</div>
                                                <div class="careerfy-table-cell">Package</div>
                                                <div class="careerfy-table-cell">Total Jobs/CVs</div>
                                                <div class="careerfy-table-cell">Used</div>
                                                <div class="careerfy-table-cell">Remaining</div>
                                                <div class="careerfy-table-cell">Job Duration</div>
                                                <div class="careerfy-table-cell">Satus</div>
                                            </div>
                                        </div>
                                        <div class="careerfy-table-layer careerfy-packages-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">#2348</div>
                                                <div class="careerfy-table-cell"><span>Advanced</span></div>
                                                <div class="careerfy-table-cell">125</div>
                                                <div class="careerfy-table-cell">5</div>
                                                <div class="careerfy-table-cell">10</div>
                                                <div class="careerfy-table-cell">30 days</div>
                                                <div class="careerfy-table-cell"><i class="fa fa-circle"></i> Active
                                                </div>
                                            </div>
                                        </div>
                                        <div class="careerfy-table-layer careerfy-packages-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">#2336</div>
                                                <div class="careerfy-table-cell"><span>Premium</span></div>
                                                <div class="careerfy-table-cell">200</div>
                                                <div class="careerfy-table-cell">1</div>
                                                <div class="careerfy-table-cell">5</div>
                                                <div class="careerfy-table-cell">30 days</div>
                                                <div class="careerfy-table-cell"><i class="fa fa-circle careerfy-packages-pending"></i> Expired
                                                </div>
                                            </div>
                                        </div>
                                        <div class="careerfy-table-layer careerfy-packages-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">#2348</div>
                                                <div class="careerfy-table-cell"><span>Free</span></div>
                                                <div class="careerfy-table-cell">90</div>
                                                <div class="careerfy-table-cell">0</div>
                                                <div class="careerfy-table-cell">0</div>
                                                <div class="careerfy-table-cell">15 days</div>
                                                <div class="careerfy-table-cell"><i class="fa fa-circle careerfy-packages-pending"></i> active</div>
                                            </div>
                                        </div>
                                        <div class="careerfy-table-layer careerfy-packages-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">#2336</div>
                                                <div class="careerfy-table-cell"><span>Simple</span></div>
                                                <div class="careerfy-table-cell">10</div>
                                                <div class="careerfy-table-cell">0</div>
                                                <div class="careerfy-table-cell">2</div>
                                                <div class="careerfy-table-cell">15 days</div>
                                                <div class="careerfy-table-cell"><i class="fa fa-circle careerfy-packages-pending"></i> active</div>
                                            </div>
                                        </div>
                                    </div>
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