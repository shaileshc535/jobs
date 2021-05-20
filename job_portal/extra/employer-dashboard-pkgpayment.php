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
            <li>Companies</li>
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
                                    <h2>Post a New Job</h2>
                                </div>
                                <!-- New Job -->
                                <nav class="careerfy-employer-jobnav">
                                    <ul>
                                        <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-briefcase-1"></i> <span>Job
                                                    Detail</span></a></li>
                                        <li class="active"><a href="employer-dashboard-pkgpayment.php"><i class="careerfy-icon careerfy-credit-card"></i> <span>Package &
                                                    Payments</span></a></li>
                                        <li><a href="employer-dashboard-confitmation.php"><i class="careerfy-icon careerfy-checked"></i>
                                                <span>Confirmation</span></a></li>
                                    </ul>
                                </nav>
                                <!-- PayMent Package -->
                                <div class="careerfy-employer-payments">
                                    <h2>Your packages</h2>
                                    <div class="careerfy-employer-payments-wrap">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Title</th>
                                                    <th>Jobs Remaning</th>
                                                    <th>Features Remaning</th>
                                                    <th>Renew Remaning</th>
                                                    <th>Job Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="careerfy-payments-checkbox">
                                                            <input id="p1" name="rr" type="checkbox">
                                                            <label for="p1"><span></span></label>
                                                        </div>
                                                    </td>
                                                    <td><span>Premium</span></td>
                                                    <td>125</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>30 days</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="careerfy-payments-checkbox">
                                                            <input id="p2" name="rr" type="checkbox">
                                                            <label for="p2"><span></span></label>
                                                        </div>
                                                    </td>
                                                    <td><span>Advanced</span></td>
                                                    <td>200</td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>30 days</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="careerfy-employer-payments">
                                    <h2>Select Package</h2>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Jobs Posting</th>
                                                <th>Feature Jobs</th>
                                                <th>Renew Jobs</th>
                                                <th>Job Duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="careerfy-payments-checkbox">
                                                        <input id="p3" name="rr" type="checkbox">
                                                        <label for="p3"><span></span></label>
                                                    </div>
                                                </td>
                                                <td><span>Premium</span></td>
                                                <td>$10</td>
                                                <td>10</td>
                                                <td>5</td>
                                                <td>2</td>
                                                <td>30 days</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="careerfy-payments-checkbox">
                                                        <input id="p4" name="rr" type="checkbox">
                                                        <label for="p4"><span></span></label>
                                                    </div>
                                                </td>
                                                <td><span>Advanced</span></td>
                                                <td>$20</td>
                                                <td>2</td>
                                                <td>10</td>
                                                <td>6</td>
                                                <td>30 days</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="careerfy-payments-checkbox">
                                                        <input id="p5" name="rr" type="checkbox">
                                                        <label for="p5"><span></span></label>
                                                    </div>
                                                </td>
                                                <td><span>Simple</span></td>
                                                <td>$5</td>
                                                <td>5</td>
                                                <td>2</td>
                                                <td>10</td>
                                                <td>15 days</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="careerfy-employer-payments">
                                    <h2>Payment method</h2>
                                    <div class="careerfy-payment-method-wrap">
                                        <a href="#"><img src="images/payment-method-card-1.jpg" alt=""></a>
                                        <a href="#"><img src="images/payment-method-card-2.jpg" alt=""></a>
                                        <a href="#"><img src="images/payment-method-card-3.jpg" alt=""></a>
                                        <a href="#"><img src="images/payment-method-card-4.jpg" alt=""></a>
                                        <i class="careerfy-icon careerfy-checked"></i>
                                    </div>
                                    <div class="careerfy-payment-method-wrap careerfy-light">
                                        <a href="#"><img src="extra-images/payment-method-card-5.jpg" alt=""></a>
                                        <i class="careerfy-icon careerfy-checked"></i>
                                    </div>
                                </div>
                                <ul class="careerfy-row careerfy-employer-profile-form">
                                    <li class="careerfy-column-6">
                                        <label>Card Number</label>
                                        <input value="1234 4567 7891 1234" onblur="if(this.value == '') { this.value ='1234 4567 7891 1234'; }" onfocus="if(this.value =='1234 4567 7891 1234') { this.value = ''; }" type="text">
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Expiration Date</label>
                                        <input value="09/18" onblur="if(this.value == '') { this.value ='09/18'; }" onfocus="if(this.value =='09/18') { this.value = ''; }" type="text">
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Card Holder’s Name</label>
                                        <input value="Victoria Kolomie" onblur="if(this.value == '') { this.value ='Victoria Kolomie'; }" onfocus="if(this.value =='Victoria Kolomie') { this.value = ''; }" type="text">
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>CVV</label>
                                        <input value="CVV" onblur="if(this.value == '') { this.value ='CVV'; }" onfocus="if(this.value =='CVV') { this.value = ''; }" type="text">
                                    </li>
                                </ul>
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