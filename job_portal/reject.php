<?php
include 'include/header.php';
?>

<style>
.event {
      height: 620px;
      width: 720px;
      border: 2px solid black;
      display: inline-block;
      margin-top: 40px;
      background-color: #f5f5f5f5;
      cursor: pointer;
}
</style>

<div id="app">
      <div class="fixed-list">
            <ul class="nav" id="init-scrollspy">
                  <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                        <a href="#" class="nav-link" id="calculate"><i class="fas fa-calculator"></i></a>
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
      </div>

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
                        <li><a href="http://materiallibrary.co.in/">Home</a></li>
                        <!-- <li><a href="#">Pages</a></li> -->
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
                                                      <li class="active"><a href="candidate-dashboard-resume"><i
                                                                        class="careerfy-icon careerfy-resume"></i> My
                                                                  Resume</a></li>
                                                      <li><a href="candidate-dashboard-saved-jobs"><i
                                                                        class="careerfy-icon careerfy-heart"></i> Saved
                                                                  jobs</a></li>
                                                      <li><a href="candidate-dashboard-applied-jobs"><i
                                                                        class="careerfy-icon careerfy-briefcase-1"></i>
                                                                  Applied jobs</a></li>
                                                      <li><a href="candidate-dashboard-job-alert"><i
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
                                          <form class="careerfy-candidate-dasboard">
                                                <div class="careerfy-employer-box-section">
                                                      <div class="careerfy-profile-title">
                                                            <h2>My Resume</h2>
                                                      </div>
                                                      <div class="careerfy-candidate-section">
                                                            <div class="careerfy-candidate-title">
                                                                  <h2><i class="careerfy-icon careerfy-resume-1"></i>
                                                                        Cover Letter</h2>
                                                            </div>
                                                            <div class="careerfy-candidate-dashboard-editor"><img
                                                                        src="extra-images/candidate-dashboard-editor.jpg"
                                                                        alt=""></div>

                                                            <div class="careerfy-candidate-resume-wrap ">
                                                                  <div class="careerfy-candidate-title">
                                                                        <h2>
                                                                              <i
                                                                                    class="careerfy-icon careerfy-mortarboard"></i>
                                                                              Education
                                                                              <a href="javascript:void(0)"
                                                                                    class="careerfy-resume-addbtn"><span
                                                                                          class="fa fa-plus"></span> Add
                                                                                    education</a>
                                                                        </h2>
                                                                  </div>

                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Title *</label>
                                                                                    <input value="Masters in Fine Arts"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>From Date *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select>
                                                                                                <option>10-05-2012
                                                                                                </option>
                                                                                                <option>10-05-2012
                                                                                                </option>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>To Date *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select>
                                                                                                <option>10-05-2014
                                                                                                </option>
                                                                                                <option>10-05-2014
                                                                                                </option>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Institute *</label>
                                                                                    <input value="Walters University"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <img src="extra-images/candidate-add-popup-textarea.png"
                                                                                          alt="">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <input type="submit"
                                                                                          value="Add education">
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                                  <div class="careerfy-resume-education">
                                                                        <ul class="careerfy-row">
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2002 -
                                                                                                      2004</small>
                                                                                                <h2><a href="#">Masters
                                                                                                            in Fine
                                                                                                            Arts</a>
                                                                                                </h2>
                                                                                                <span>Walters
                                                                                                      University</span>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class="event">1
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2012 -
                                                                                                      2015</small>
                                                                                                <h2><a href="#">Tommers
                                                                                                            College</a>
                                                                                                </h2>
                                                                                                <span>Bachlors in Fine
                                                                                                      Arts</span>
                                                                                          </div>
                                                                                          <div class="careerfy-resume-education-btn"
                                                                                                style="position:relative;">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class=" ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class="event"
                                                                                                      style="position:absolute; left:-700px; z-index:10;">
                                                                                                      2</div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2014 -
                                                                                                      2015</small>
                                                                                                <h2><a href="#">Diploma
                                                                                                            in Fine
                                                                                                            Arts</a>
                                                                                                </h2>
                                                                                                <span>Imperieal
                                                                                                      Institute of Art
                                                                                                      Direction</span>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class=" ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>3
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                            <div class="careerfy-candidate-resume-wrap">
                                                                  <div class="careerfy-candidate-title">
                                                                        <h2>
                                                                              <i
                                                                                    class="careerfy-icon careerfy-social-media"></i>
                                                                              Experience
                                                                              <a href="javascript:void(0)"
                                                                                    class="careerfy-resume-addbtn"><span
                                                                                          class="fa fa-plus"></span> Add
                                                                                    experince</a>
                                                                        </h2>
                                                                  </div>

                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Title *</label>
                                                                                    <input value="Masters in Fine Arts"
                                                                                          onblur="if(this.value == '') { this.value ='Masters in Fine Arts'; }"
                                                                                          onfocus="if(this.value =='Masters in Fine Arts') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-5">
                                                                                    <label>From Date *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select>
                                                                                                <option>10-05-2012
                                                                                                </option>
                                                                                                <option>10-05-2012
                                                                                                </option>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-5">
                                                                                    <label>To Date *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select>
                                                                                                <option>10-05-2014
                                                                                                </option>
                                                                                                <option>10-05-2014
                                                                                                </option>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-2">
                                                                                    <div class="careerfy-checkbox">
                                                                                          <input id="r8" name="rr"
                                                                                                type="checkbox">
                                                                                          <label
                                                                                                for="r8"><span></span>Present</label>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Company *</label>
                                                                                    <input value="Walters University"
                                                                                          onblur="if(this.value == '') { this.value ='Walters University'; }"
                                                                                          onfocus="if(this.value =='Walters University') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <img src="extra-images/candidate-add-popup-textarea.png"
                                                                                          alt="">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <input type="submit"
                                                                                          value="Add experince">
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                                  <div class="careerfy-resume-education">
                                                                        <ul class="careerfy-row">
                                                                              <div class='parent'>
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2010 -
                                                                                                      2012</small>
                                                                                                <h2><a href="#">Development
                                                                                                            Manager</a>
                                                                                                </h2>
                                                                                                <span>Atract
                                                                                                      Solutions</span>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>4
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2006 -
                                                                                                      2008</small>
                                                                                                <h2><a href="#">Senior
                                                                                                            PHP/Drupal
                                                                                                            developer</a>
                                                                                                </h2>
                                                                                                <span>Minor
                                                                                                      Solutions</span>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>5
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class='parent'>
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>2002 -
                                                                                                      2004</small>
                                                                                                <h2><a href="#">Self
                                                                                                            Employed
                                                                                                            Professional</a>
                                                                                                </h2>
                                                                                                <span> Abstraxct
                                                                                                      Max</span>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>6
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                            <div class="careerfy-candidate-resume-wrap">
                                                                  <div class="careerfy-candidate-title">
                                                                        <h2>
                                                                              <i
                                                                                    class="careerfy-icon careerfy-briefcase"></i>
                                                                              Portfolio
                                                                              <a href="#"
                                                                                    class="careerfy-resume-addbtn"><span
                                                                                          class="fa fa-plus"></span> Add
                                                                                    Portfolio</a>
                                                                        </h2>
                                                                  </div>

                                                                  <div class="careerfy-company-gallery">
                                                                        <ul class="careerfy-row">
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-1.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Peca8 World</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-2.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>City Light</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-3.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Spass Life</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-4.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Cass
                                                                                                      Rasioaror</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-5.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Miki Uni</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-6.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Manhattoon</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                              <li class="careerfy-column-3">
                                                                                    <figure>
                                                                                          <a href="#"><img
                                                                                                      src="extra-images/employer-company-photo-7.png"
                                                                                                      alt=""></a>
                                                                                          <figcaption>
                                                                                                <span>Aocan
                                                                                                      Active</span>
                                                                                                <div
                                                                                                      class="careerfy-company-links">
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-edit"></a>
                                                                                                      <a href="#"
                                                                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                                                                </div>
                                                                                          </figcaption>
                                                                                    </figure>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                            <div class="careerfy-candidate-resume-wrap">
                                                                  <div class="careerfy-candidate-title">
                                                                        <h2>
                                                                              <i
                                                                                    class="careerfy-icon careerfy-design-skills"></i>
                                                                              Skills
                                                                              <a href="javascript:void(0)"
                                                                                    class="careerfy-resume-addbtn"><span
                                                                                          class="fa fa-plus"></span> Add
                                                                                    Skills</a>
                                                                        </h2>
                                                                  </div>

                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Skill Heading *</label>
                                                                                    <input value="Web Development"
                                                                                          onblur="if(this.value == '') { this.value ='Web Development'; }"
                                                                                          onfocus="if(this.value =='Web Development') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Percentage *</label>
                                                                                    <input value="75%"
                                                                                          onblur="if(this.value == '') { this.value ='75%'; }"
                                                                                          onfocus="if(this.value =='75%') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <input type="submit"
                                                                                          value="Add Skills">
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                                  <div class="careerfy-add-skills">
                                                                        <ul class="careerfy-row">
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-add-skills-wrap">
                                                                                                <span>74</span>
                                                                                                <h2><a href="#">Social
                                                                                                            Media
                                                                                                            Marketing</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>7
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">

                                                                                          <div
                                                                                                class="careerfy-add-skills-wrap">
                                                                                                <span>67</span>
                                                                                                <h2><a href="#">Web
                                                                                                            Development</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>8
                                                                                                </div>
                                                                                          </div>

                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-add-skills-wrap">
                                                                                                <span>25</span>
                                                                                                <h2><a href="#">Search
                                                                                                            Engine
                                                                                                            Optimization</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>9
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-add-skills-wrap">
                                                                                                <span>20</span>
                                                                                                <h2><a href="#">User
                                                                                                            Experience
                                                                                                            Design</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>10
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                            <div class="careerfy-candidate-resume-wrap">
                                                                  <div class="careerfy-candidate-title">
                                                                        <h2>
                                                                              <i
                                                                                    class="careerfy-icon careerfy-trophy"></i>
                                                                              Honors & Awards
                                                                              <a href="#"
                                                                                    class="careerfy-resume-addbtn"><span
                                                                                          class="fa fa-plus"></span> Add
                                                                                    Award</a>
                                                                        </h2>
                                                                  </div>

                                                                  <div class="careerfy-add-popup">
                                                                        <ul
                                                                              class="careerfy-row careerfy-employer-profile-form">
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Award Title *</label>
                                                                                    <input value="Distinguished Service Award"
                                                                                          onblur="if(this.value == '') { this.value ='Distinguished Service Award'; }"
                                                                                          onfocus="if(this.value =='Distinguished Service Award') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>Year *</label>
                                                                                    <div
                                                                                          class="careerfy-profile-select">
                                                                                          <select>
                                                                                                <option>2012</option>
                                                                                                <option>2012</option>
                                                                                          </select>
                                                                                    </div>
                                                                              </li>
                                                                              <li class="careerfy-column-6">
                                                                                    <label>Company *</label>
                                                                                    <input value="Gldtech"
                                                                                          onblur="if(this.value == '') { this.value ='Gldtech'; }"
                                                                                          onfocus="if(this.value =='Gldtech') { this.value = ''; }"
                                                                                          type="text">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <label>Description *</label>
                                                                                    <img src="extra-images/candidate-add-popup-textarea.png"
                                                                                          alt="">
                                                                              </li>
                                                                              <li class="careerfy-column-12">
                                                                                    <input type="submit"
                                                                                          value="Add Award">
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                                  <div
                                                                        class="careerfy-resume-education careerfy-resume-awards">
                                                                        <ul class="careerfy-row">
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>1970</small>
                                                                                                <h2><a href="#">Distinguished
                                                                                                            Service
                                                                                                            Award</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>11
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>1979</small>
                                                                                                <h2><a href="#">Robin
                                                                                                            Milner Young
                                                                                                            Researcher
                                                                                                            Award</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>12
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>1985</small>
                                                                                                <h2><a href="#">Doctoral
                                                                                                            Dissertation
                                                                                                            Award</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class="ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>13
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                              <div class="parent">
                                                                                    <li class="careerfy-column-12">
                                                                                          <div
                                                                                                class="careerfy-resume-education-wrap">
                                                                                                <small>1990</small>
                                                                                                <h2><a href="#">Programming
                                                                                                            Languages
                                                                                                            Achievement</a>
                                                                                                </h2>
                                                                                          </div>
                                                                                          <div
                                                                                                class="careerfy-resume-education-btn">
                                                                                                <a href="javascript:void(0)"
                                                                                                      class=" ready careerfy-icon careerfy-edit"></a>
                                                                                                <a href="#"
                                                                                                      class="careerfy-icon careerfy-rubbish"></a>
                                                                                                <div class='steady'>14
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                              </div>
                                                                        </ul>
                                                                  </div>
                                                            </div>

                                                      </div>
                                                </div>
                                                <input type="submit" class="careerfy-employer-profile-submit"
                                                      value="Update Resume">
                                          </form>
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->

      <script>
      $('.event').fadeOut();

      $('.ready').on('click', function() {
            $(this).parents('.parent').find('.event').slideToggle("slow", function() {
                  return false;
            });
      })
      </script>

      <!-- Footer -->
      <?php
      include 'include/footer.php';
      ?>