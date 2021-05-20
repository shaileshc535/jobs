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
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                                        Profile</a></li>

                                <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li><a href="employer-dashboard-resumes.php"><i class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

                                <li class="active"><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>

                                <li><a href="#"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                                </li>
                                <li><a href="index-2.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <!-- <li><a href="employer-dashboard-packages.php"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                <!-- <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li> -->
                            </ul>
                        </div>
                    </div>
                </aside>

                <div class="careerfy-column-9">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dasboard">
                            <form>
                                <div class="careerfy-employer-box-section">
                                    <!-- Profile Title -->
                                    <div class="careerfy-profile-title">
                                        <h2>Post a New Job</h2>
                                    </div>
                                    <!-- New Job -->
                                    <nav class="careerfy-employer-jobnav">
                                        <ul>
                                            <li class="active"><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-briefcase-1"></i> <span>Job
                                                        Detail</span></a></li>
                                            <!-- <li><a href="employer-dashboard-pkgpayment.php"><i class="careerfy-icon careerfy-credit-card"></i> <span>Package & Payments</span></a></li>-->
                                            <li><a href="employer-dashboard-confitmation.php"><i class="careerfy-icon careerfy-checked"></i>
                                                    <span>Confirmation</span></a></li>
                                        </ul>
                                    </nav>

                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Job Title *</label>
                                            <input value="Enter Tutle" onblur="if(this.value == '') { this.value ='Enter Tutle'; }" onfocus="if(this.value =='Enter Tutle') { this.value = ''; }" type="text">
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Deadline Submission *</label>
                                            <input value="Enter Deadline Submission" onblur="if(this.value == '') { this.value ='Enter Deadline Submission'; }" onfocus="if(this.value =='Enter Deadline Submission') { this.value = ''; }" type="text">
                                        </li>

                                        <li class="careerfy-column-12">
                                            <label>Description *</label>
                                            <textarea></textarea>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Email Address</label>
                                            <input type="email">
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Username</label>
                                            <input type="text">
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Job Category *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Select a Category</option>
                                                    <option>Select a Category</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Job Type *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Select a Type</option>
                                                    <option>Select a Type</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Job Level *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Select a Level</option>
                                                    <option>Select a Level</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Gender *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Please Select</option>
                                                    <option>Please Select</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Salary From</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Enter Salary From</option>
                                                    <option>Enter Salary From</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Salary To</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Enter Salary To</option>
                                                    <option>Enter Salary To</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Experience</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>US Dollar</option>
                                                    <option>US Dollar</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Industry</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Please Select</option>
                                                    <option>Please Select</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Qualification</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Please Select</option>
                                                    <option>Please Select</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Application Deadline Date</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>Please Select</option>
                                                    <option>Please Select</option>
                                                </select>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title">
                                        <h2>Address / Location</h2>
                                    </div>
                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Country *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>United Kingdom</option>
                                                    <option>United Kingdom</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Region *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>London</option>
                                                    <option>London</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>City / Town *</label>
                                            <div class="careerfy-profile-select">
                                                <select>
                                                    <option>London</option>
                                                    <option>London</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="careerfy-column-6">
                                            <label>Postcode *</label>
                                            <input type="text">
                                        </li>

                                        <li class="careerfy-column-10">
                                            <label>Full Address *</label>
                                            <input type="text">
                                        </li>
                                    </ul>
                                </div>
                                <input type="submit" class="careerfy-employer-profile-submit" value="Post Job">
                            </form>
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