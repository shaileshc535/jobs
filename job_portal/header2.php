<?php
include('include/header.php');
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
?>
<!-- Banner -->

<div class="jobsearch-banner-seven">
      <span class="careerfy-light-transparent"></span>
      <div class="container">
            <div class="row" style="margin-right:40px;margin-left:0px">
                  <div class="careerfy-search-seven-wrap">
                        <div class="careerfy-adv-wrap">
                              <div class="container">
                                    <div class="row">
                                          <h2>Find local service professionals for whatever you need.</h2>
                                          <p>Your Job Search Starts and ends With Us.</p>
                                          <form class="careerfy-banner-search-seven" method="post" action="#">
                                                <ul>
                                                      <li>
                                                            <div class="search_bar">
                                                                  <select name="job_type"
                                                                        style="height:45px; border-radius:20px; border:1px solid orangered;">
                                                                        <option value="">Job Title, Keywords, or Company
                                                                        </option>
                                                                        <?php
                                                                        $query = mysqli_query($con, "SELECT * FROM  job_post");
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                        ?>
                                                                        <option value="<?php echo $row['id']; ?>">
                                                                              <?php echo $row['jobtitle']; ?>
                                                                        </option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                            </div>
                                                      </li>

                                                      <li>
                                                            <?php
                                                            include_once "./backend/Common.php";
                                                            $common = new Common();
                                                            $allStates = $common->getState($con);
                                                            ?>

                                                            <div class=" search_bar">
                                                                  <select
                                                                        style="height:40px; border-radius:20px; border:1px solid orangered;"
                                                                        type="text" name="state" id="stateId"
                                                                        class="form-control"
                                                                        onchange="getCityByState();">

                                                                        <?php
                                                                        if ($allStates->num_rows > 0) {
                                                                              while ($state = $allStates->fetch_object()) {
                                                                                    $stateId = $state->id;
                                                                                    $stateName = $state->name;
                                                                        ?>
                                                                        <option value="<?php echo $stateId; ?>">
                                                                              <?php echo $stateName; ?>
                                                                        </option>
                                                                        <?php }
                                                                        }
                                                                        ?>

                                                                  </select>
                                                            </div>
                                                      </li>

                                                      <li>
                                                            <div class=" search_bar">
                                                                  <select
                                                                        style="height:40px; border-radius:20px; border:1px solid orangered;"
                                                                        class="form-control" name="city" id="cityDiv">
                                                                        <option value="">City</option>
                                                                  </select>
                                                            </div>
                                                      </li>

                                                      <script>
                                                      function getCityByState() {
                                                            let stateId = $("#stateId").val();
                                                            $.post("backend/ajax.php", {
                                                                  getCityByState: 'getCityByState',
                                                                  stateId: stateId
                                                            }, function(response) {
                                                                  // alert(response);
                                                                  let data = response.split('^');
                                                                  let cityData = data[1];
                                                                  $("#cityDiv").html(cityData);
                                                            });
                                                      }
                                                      </script>

                                                      <!-- <li>
                                            <div class="careerfy-select-style">
                                                <select name="industry_type">
                                                    <option value="">Select Job Category Name</option>
                                                    <?php
                                                      $query = mysqli_query($con, "SELECT * FROM job_industry_type");
                                                      while ($row = mysqli_fetch_array($query)) {
                                                      ?>
                                                    <option value="<?php echo $row['id']; ?>">
                                                        <?php echo $row['industry_type']; ?>
                                                    </option>
                                                    <?php
                                                      }
                                                      ?>
                                                </select>
                                            </div>
                                        </li> -->

                                                      <li>
                                                            <div class=" search_bar">
                                                                  <a href="job-listings.php?id=" . $row['id']
                                                                        . "><i name=" submit"
                                                                        class="careerfy-icon careerfy-search "></i></a>
                                                            </div>
                                                      </li>

                                                </ul>
                                          </form>

                                          <?php
                                          if (isset($_POST['submit'])) {
                                                $job_type = $_POST['job_type'];
                                                $country = $_POST['country'];
                                                $state = $_POST['state'];
                                                $city = $_POST['city'];
                                                $industry_type = $_POST['industry_type'];
                                          }

                                          ?>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- Banner -->

<!-- Main Section -->

<div class="jobsearch-main-section careerfy-candidate-view4-full">

      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <div class="careerfy-fancy-title careerfy-fancy-title-four">
                              <h2>FEATURED JOBS</h2>
                              <p>Bark is the easy way to find local service professionals and get free quotes fast</p>
                        </div>
                        <div class="careerfy-candidate careerfy-candidate-view4">
                              <ul class="row">
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#"> CIVIL ENGINEER </a> </h2>
                                                <p> L&T </p>
                                                <span>NEW DELHI</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#">Architect</a> </h2>
                                                <p>ARCHOME</p>
                                                <span>NOIDA</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#">INTERIOR DESIGNER</a> </h2>
                                                <p>STUDIO MATERIUM</p>
                                                <span>GURGAON/span>
                                                      <ul class="careerfy-candidate-view4-social">
                                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                            <li><a href="#"><i
                                                                              class="careerfy-icon careerfy-briefcase"></i></a>
                                                            </li>
                                                            <li><a href="#"><i
                                                                              class="careerfy-icon careerfy-technology"></i></a>
                                                            </li>
                                                      </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#">GRAPHIC DESIGNING</a> </h2>
                                                <p>MIND DIGITAL</p>
                                                <span>NEW DELHI</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#"> URBAN DESIGNING</a> </h2>
                                                <p>GREEN SPACE ALLIENCE</p>
                                                <span>DELHI</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#">LANDSCAPE DESIGN </a> </h2>
                                                <p>GREEN STAR LANDSCAPE</p>
                                                <span>NOIDA</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#"> FASHION DESIGNING </a> </h2>
                                                <p>SABWASHACHI </p>
                                                <span>GURUGRAM</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                                    <li class="col-md-3">
                                          <div class="careerfy-candidate-view4-wrap">
                                                <figure>
                                                      <a href="#" class="careerfy-candidate-view4-thumb"><img
                                                                  src="profile_image/employer_logo/default.jpg"
                                                                  alt=""></a>
                                                </figure>
                                                <h2> <a href="#"> MEP </a> </h2>
                                                <p>UNIQUE ENGINEERS</p>
                                                <span>DELHI</span>
                                                <ul class="careerfy-candidate-view4-social">
                                                      <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-briefcase"></i></a>
                                                      </li>
                                                      <li><a href="#"><i
                                                                        class="careerfy-icon careerfy-technology"></i></a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </li>
                              </ul>
                        </div>
                        <div class="careerfy-more-view4-btn"><a href="job-listings">View More Jobs</a></div>
                  </div>
            </div>
      </div>
</div>

</div>
<!-- Main Content -->
<div class="jobsearch-main-content">
      <div class="jobsearch-main-section careerfy-testimonial-style4-full">

            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="careerfy-counter careerfy-counter-styletwo">
                                    <ul class="row">
                                          <li class="col-md-3">
                                                <i style="color:#ba4a70"
                                                      class="careerfy-icon careerfy-briefcase-time careerfy-color"></i>
                                                <span style="color:#333333" class="word-counter" data-count="12302">0</span>
                                                <small style="color:#333333">Jobs Added</small>
                                          </li>
                                          <li class="col-md-3">
                                                <i style="color:#ba4a70"
                                                      class="careerfy-icon careerfy-office-building careerfy-color"></i>
                                                <span style="color:#333333" class="word-counter" data-count="18743" >0</span>
                                                <small style="color:#333333">Companies Registered</small>
                                          </li>
                                          <li class="col-md-3">
                                                <i style="color:#ba4a70"
                                                      class="careerfy-icon careerfy-curriculum careerfy-color"></i>
                                                <span style="color:#333333" class="word-counter" data-count="14031">0</span>
                                                <small style="color:#333333">Candidate Profiles</small>
                                          </li>
                                          <li class="col-md-3">
                                                <i style="color:#ba4a70"
                                                      class="careerfy-icon careerfy-trophy careerfy-color"></i>
                                                <span style="color:#333333" class="word-counter" data-count="125">0</span>
                                                <small style="color:#333333">Awards Won</small>
                                          </li>
                                    </ul>
                              </div>
                              <!-- <div class="careerfy-testimonial-style4">
                            <div class="careerfy-testimonial-style4-layer">
                                <img src="../../../careerfy.net/homejob/wp-content/uploads/testimonial-user.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.</p>
                                <span>Alard Ko <small>@Developer</small> </span>
                            </div>
                            <div class="careerfy-testimonial-style4-layer">
                                <img src="../../../careerfy.net/homejob/wp-content/uploads/testimonial-user.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.</p>
                                <span>Alard Ko <small>@Developer</small> </span>
                            </div>
                            <div class="careerfy-testimonial-style4-layer">
                                <img src="../../../careerfy.net/homejob/wp-content/uploads/testimonial-user.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.</p>
                                <span>Alard Ko <small>@Developer</small> </span>
                            </div>
                        </div> -->

                        </div>
                  </div>
            </div>

      </div>

      <!-- Partner
        <div class="careerfy-partner-style3-wrap careerfy-partner-style3-space">
            <div class="careerfy-partner-style3">
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-1.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-2.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-3.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-4.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-5.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-6.png" alt="">
                </div>
                <div class="careerfy-partner-style3-layer"><img src="extra-images/partner-style2-logo-6.png" alt="">
                </div>
            </div>
        </div> -->
      <!-- Partner -->
</div>
</div>


<!-- Main Section -->




<?PHP
include 'include/footer.php';
?>