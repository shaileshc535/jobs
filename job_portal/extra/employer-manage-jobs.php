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
                                <a href="#" class="employer-dashboard-thumb"><img
                                        src="extra-images/employer-dashboard-1.png" alt=""></a>
                                <figcaption>
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                        <input type="file" class="careerfy-upload" />
                                    </div>
                                    <h2>Graveholdings</h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                                        Profile</a></li>

                                <li class="active"><a href="employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li><a href="employer-dashboard-resumes.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

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
                                    <h2>Manage Jobs</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders"
                                            onblur="if(this.value == '') { this.value ='Search orders'; }"
                                            onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <!-- Manage Jobs -->
                                <div class="careerfy-managejobs-list-wrap">
                                    <div class="careerfy-managejobs-list">
                                        <!-- Manage Jobs Header -->
                                        <div class="careerfy-table-layer careerfy-managejobs-thead">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">Job Title</div>
                                                <div class="careerfy-table-cell">Applications</div>
                                                <div class="careerfy-table-cell">Featured</div>
                                                <div class="careerfy-table-cell">Status</div>
                                                <div class="careerfy-table-cell">Actions</div>
                                            </div>
                                        </div>

                                        <!-- Manage Jobs Body -->
                                        <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">
                                                    <h6><a href="#">Computer and Information Tech</a></h6>
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Created:
                                                            <span>Sep 14, 2017</span>
                                                        </li>

                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Expiry:
                                                            <span>Dec 9, 2017</span>
                                                        </li>

                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i>
                                                            Netherlands, Rotterdam</li>

                                                        <li><i
                                                                class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Web Developer</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="careerfy-table-cell"><a href="#"
                                                        class="careerfy-managejobs-appli">4 Application(s)</a></div>

                                                <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>

                                                <div class="careerfy-table-cell"><span
                                                        class="careerfy-managejobs-option">Pending</span></div>

                                                <div class="careerfy-table-cell">
                                                    <div class="careerfy-managejobs-links">
                                                        <a href="#" class="careerfy-icon careerfy-view"></a>
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">
                                                    <h6><a href="#">Praca przy produkcji</a></h6>
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Created:
                                                            <span>Sep 14, 2017</span>
                                                        </li>
                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Expiry:
                                                            <span>Dec 9, 2017</span>
                                                        </li>
                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i>
                                                            Netherlands, Rotterdam</li>
                                                        <li><i
                                                                class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#">Web Developer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="careerfy-table-cell"><a href="#"
                                                        class="careerfy-managejobs-appli">6 Application(s)</a></div>
                                                <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                <div class="careerfy-table-cell"><span
                                                        class="careerfy-managejobs-option active">Active</span></div>
                                                <div class="careerfy-table-cell">
                                                    <div class="careerfy-managejobs-links">
                                                        <a href="#" class="careerfy-icon careerfy-view"></a>
                                                        <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                        <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- Manage Jobs Body -->
                                    </div>
                                </div>
                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i
                                                        class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i
                                                        class="careerfy-icon careerfy-arrows4"></i></span></a></li>
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