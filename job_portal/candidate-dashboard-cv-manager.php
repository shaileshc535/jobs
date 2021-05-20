<?php
include 'include/header.php';
?>



<div id="app">
      <!-- <div class="fixed-list">
            <ul class="nav" id="init-scrollspy">
               <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                  <a href="#" class="nav-link" id="calculate"><i  class="fas fa-calculator" ></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Unit Converter">
                  <a class="nav-link"><i class="fas fa-drafting-compass"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Money Converter">
                  <a class="nav-link"><i class="fas fa-rupee-sign"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="AR / Coming Soon">
                  <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="VR / Coming Soon">
                  <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Vastu / Coming Soon">
                  <a class="nav-link"><i class="fas fa-star-of-david"></i></a>
               </li>
            </ul>
        </div> -->

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
                        <!-- <li><a href="http://materiallibrary.co.in/">Home</a></li> -->
                        <li><a href="#">Pages</a></li>
                        <li>Candidates</li>
                  </ul>
            </div>
      </div>
      <!-- SubHeader -->

      <!-- Main Content -->
      <div class="careerfy-main-content">

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                  <div class="container">
                        <div class="row">

                              <aside class="careerfy-column-3">
                                    <div class="careerfy-typo-wrap">
                                          <div class="careerfy-employer-dashboard-nav">
                                                <figure>
                                                      <a href="#" class="employer-dashboard-thumb"><img
                                                                  src="extra-images/candidate-dashboard-navthumb.jpg"
                                                                  alt=""></a>
                                                      <figcaption>
                                                            <div class="careerfy-fileUpload">
                                                                  <span><i class="careerfy-icon careerfy-add"></i>
                                                                        Upload Photo</span>
                                                                  <input type="file" class="careerfy-upload" />
                                                            </div>
                                                            <h2>Nora Tsunoda</h2>
                                                            <span class="careerfy-dashboard-subtitle">UI/UX
                                                                  Designer</span>
                                                      </figcaption>
                                                </figure>
                                                <ul>
                                                      <li><a href="candidate-dashboard-profile-seting"><i
                                                                        class="careerfy-icon careerfy-user"></i> My
                                                                  Profile</a></li>
                                                      <li><a href="candidate-dashboard-resume"><i
                                                                        class="careerfy-icon careerfy-resume"></i> My
                                                                  Resume</a></li>
                                                      <li><a href="candidate-dashboard-saved-jobs"><i
                                                                        class="careerfy-icon careerfy-heart"></i> Saved
                                                                  jobs</a></li>
                                                      <li><a href="candidate-dashboard-applied-jobs"><i
                                                                        class="careerfy-icon careerfy-briefcase-1"></i>
                                                                  Applied jobs</a></li>
                                                      <li class="active"><a href="candidate-dashboard-job-alert"><i
                                                                        class="careerfy-icon careerfy-alarm"></i> Job
                                                                  Alerts</a></li>
                                                      <li><a href="candidate-dashboard-cv-manager"><i
                                                                        class="careerfy-icon careerfy-id-card"></i> CV
                                                                  Manager</a></li>
                                                      <li><a href="candidate-dashboard-changed-password"><i
                                                                        class="careerfy-icon careerfy-multimedia"></i>
                                                                  Change Password</a></li>
                                                      <li><a href="signout.php"><i
                                                                        class="careerfy-icon careerfy-logout"></i>
                                                                  Logout</a></li>
                                                </ul>
                                          </div>
                                    </div>
                              </aside>
                              <div class="careerfy-column-9">
                                    <div class="careerfy-typo-wrap">
                                          <div class="careerfy-employer-box-section" id="ml-jobalert">
                                                <div class="careerfy-profile-title">
                                                      <h2>Job Alerts</h2>
                                                      <form class="careerfy-employer-search">
                                                            <input value="Search orders"
                                                                  onblur="if(this.value == '') { this.value ='Search orders'; }"
                                                                  onfocus="if(this.value =='Search orders') { this.value = ''; }"
                                                                  type="text">
                                                            <input value="" type="submit">
                                                            <i class="careerfy-icon careerfy-search"></i>
                                                      </form>
                                                </div>
                                                <div class="careerfy-job-alerts">
                                                      <div class="careerfy-job-alerts-wrap">
                                                            <table>
                                                                  <thead>
                                                                        <tr>
                                                                              <th>Position</th>
                                                                              <th>Criterias</th>
                                                                              <th>Created Date</th>
                                                                              <th></th>
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Finance Accountant</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Design Studio</span>
                                                                              </td>
                                                                              <td>Huma Resourses, Contract, Senior, Los
                                                                                    Angeles....(5)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Education & Coaches</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Human Resourses</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Web Developers</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Restaurant</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Mooring & Automotive</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                        <tr>
                                                                              <td>
                                                                                    <span>Charity & Voluntary</span>
                                                                              </td>
                                                                              <td>Accounting Assistant, Senior, San
                                                                                    Francisco....(10)</td>
                                                                              <td>September 28, 2017</td>
                                                                              <td>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-rubbish"></i></a>
                                                                                    <a href="#"
                                                                                          class="careerfy-savedjobs-links"><i
                                                                                                class="careerfy-icon careerfy-view"></i></a>
                                                                              </td>
                                                                        </tr>
                                                                  </tbody>
                                                            </table>
                                                      </div>
                                                </div>
                                                <!-- Pagination -->
                                                <div class="careerfy-pagination-blog">
                                                      <ul class="page-numbers">
                                                            <li><a class="prev page-numbers" href="#"><span><i
                                                                                    class="careerfy-icon careerfy-arrows4"></i></span></a>
                                                            </li>
                                                            <li><span class="page-numbers current">01</span></li>
                                                            <li><a class="page-numbers" href="#">02</a></li>
                                                            <li><a class="page-numbers" href="#">03</a></li>
                                                            <li><a class="page-numbers" href="#">04</a></li>
                                                            <li><a class="next page-numbers" href="#"><span><i
                                                                                    class="careerfy-icon careerfy-arrows4"></i></span></a>
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