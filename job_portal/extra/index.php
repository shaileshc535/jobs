<?php
include('include/header.php');
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
?>

<!--====== Main App ======-->
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


    <!--header close-->
    <div class="modal fade new-l" id="newsletter-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal--shadow">

                <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row u-s-m-x-0">
                        <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                            <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.php">

                                <img class="u-img-fluid u-d-block" src="images/newsletter/newsletter.jpg" alt=""></a>
                        </div>
                        <div class="col-lg-6 new-l__col-2">
                            <div class="new-l__section u-s-m-t-30">
                                <div class="u-s-m-b-8 new-l--center">
                                    <h3 class="new-l__h3">Newsletter</h3>
                                </div>
                                <div class="u-s-m-b-30 new-l--center">
                                    <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals, special
                                        sales and more.</p>
                                </div>
                                <form class="new-l__form">
                                    <div class="u-s-m-b-15">

                                        <input class="news-l__input" type="text" placeholder="E-mail Address">
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button>
                                    </div>
                                </form>
                                <div class="u-s-m-b-15 new-l--center">
                                    <p class="new-l__p2">By Signing up, you agree to receive Reshop
                                        offers,<br />promotions and other commercial messages. You may unsubscribe at
                                        any time.</p>
                                </div>
                                <div class="u-s-m-b-15 new-l--center">

                                    <a class="new-l__link" data-dismiss="modal">No Thanks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Newsletter Subscribe Modal ======-->

    <!-- Banner -->
    <div class="jobsearch-banner-seven">
        <span class="careerfy-light-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="careerfy-search-seven-wrap">
                    <div class="careerfy-adv-wrap">
                        <div class="container">
                            <div class="row">
                                <h2>Find local service professionals for whatever you need.</h2>
                                <p>Your Job Search Starts and ends With Us.</p>
                                <form class="careerfy-banner-search-seven" method="post" action="#">
                                    <ul>
                                        <li>
                                            <div class="careerfy-select-style">
                                                <select name="job_type">
                                                    <option value="">Job Title, Keywords, or Company</option>
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
                                            $allCountries = $common->getCountries($con);
                                            ?>

                                            <div class=" careerfy-select-style">
                                                <label for="country">Country</label>
                                                <select type="text" name="country" id="countryId" size="1"
                                                    class="form-control" onchange="getStatesByCountry();">

                                                    <?php
                                                    if ($allCountries->num_rows > 0) {
                                                        while ($country = $allCountries->fetch_object()) {
                                                            $countryId = $country->id;
                                                            $countryName = $country->name; ?>
                                                    <option value="<?php echo $countryId; ?>">
                                                        <?php echo $countryName; ?>
                                                    </option>
                                                    <?php }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>

                                        <li>
                                            <div class=" careerfy-select-style">
                                                <label for="state">State</label>
                                                <select class="form-control" size="1" name="state" id="stateId"
                                                    onchange="getCityByState();">
                                                    <option value="">State</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li>
                                            <div class=" careerfy-select-style">
                                                <label for="city">City</label>
                                                <select class="form-control" size="1" name="city" id="cityDiv">
                                                    <option value="">City</option>
                                                </select>
                                            </div>
                                        </li>


                                        <script>
                                        function getStatesByCountry() {
                                            var countryId = $("#countryId").val();
                                            $.post("backend/ajax.php", {
                                                getStatesByCountry: 'getStatesByCountry',
                                                countryId: countryId
                                            }, function(response) {
                                                // alert(response);
                                                var data = response.split('^');
                                                var stateData = data[1];
                                                $("#stateId").html(stateData);
                                            });
                                        }

                                        function getCityByState() {
                                            var stateId = $("#stateId").val();
                                            $.post("backend/ajax.php", {
                                                getCityByState: 'getCityByState',
                                                stateId: stateId
                                            }, function(response) {
                                                // alert(response);
                                                var data = response.split('^');
                                                var cityData = data[1];
                                                $("#cityDiv").html(cityData);
                                            });
                                        }
                                        </script>


                                        <li>
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
                                        </li>

                                        <li>
                                            <div class="careerfy-select-style">
                                                <a href="job-listings.php?id=" . $row['id'] . ""><i name="submit"
                                                        class="careerfy-icon careerfy-search"></i></a>
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
                                    <span style="color:#333333" class="word-counter">123,023</span>
                                    <small style="color:#333333">Jobs Added</small>
                                </li>
                                <li class="col-md-3">
                                    <i style="color:#ba4a70"
                                        class="careerfy-icon careerfy-office-building careerfy-color"></i>
                                    <span style="color:#333333" class="word-counter">187,432</span>
                                    <small style="color:#333333">Companies Registered</small>
                                </li>
                                <li class="col-md-3">
                                    <i style="color:#ba4a70"
                                        class="careerfy-icon careerfy-curriculum careerfy-color"></i>
                                    <span style="color:#333333" class="word-counter">140,312</span>
                                    <small style="color:#333333">Candidate Profiles</small>
                                </li>
                                <li class="col-md-3">
                                    <i style="color:#ba4a70" class="careerfy-icon careerfy-trophy careerfy-color"></i>
                                    <span style="color:#333333" class="word-counter">225</span>
                                    <small style="color:#333333">Awards Won</small>
                                </li>
                            </ul>
                        </div>
                        <div class="careerfy-testimonial-style4">
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
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Partner -->
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
        </div>
        <!-- Partner -->
    </div>
</div>
</div>

</div>
<!-- Main Section -->

</div>


<?PHP
include 'include/footer.php';
?>