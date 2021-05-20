<?php


include('include/header.php');
include('../admin/assets/_dbconnect.php');

// $id = $_GET['id'];
// $country = $_GET['country'];
// $jobtitle = $_GET['jobtitle'];
// $category = $_GET['category'];
$query = mysqli_query($con, "SELECT * FROM job_post ");
$path = "../admin/admin_job_portal/imgs/.";

// $array = mysqli_fetch_assoc($query);
$keyword = "";
if (isset($_GET['value'])) {
      $keyword = $_GET['value'];
}

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
      <div class="careerfy-subheader">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="careerfy-page-title">
                                    <h1>Jobs For Good Programmers</h1>
                                    <p>Yes! You make or may not find the right job for you, but that’s ok.</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- SubHeader -->

      <!-- Main Content -->
      <div class="careerfy-main-content">

            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-subheader-form-full">
                  <div class="container">

                  </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="careerfy-main-section">
                  <div class="container">
                        <div class="row">

                              <aside class="careerfy-column-3 careerfy-typo-wrap">
                                    <div class="careerfy-typo-wrap">
                                          <form class="careerfy-search-filter">
                                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                                      <h2><a href="#" class="careerfy-click-btn">Vacancy Type</a></h2>
                                                      <div class="careerfy-checkbox-toggle">
                                                            <ul class="careerfy-checkbox">


                                                                  <li>
                                                                        <input type="checkbox"
                                                                              class="common_selector vacancy" id="v12"
                                                                              name="rr" value="Full Time" />
                                                                        <label for="v12"><span></span>Full Time</label>

                                                                  </li>
                                                                  <li>
                                                                        <input type="checkbox"
                                                                              class="common_selector vacancy" id="v13"
                                                                              name="rr" value="Internship" />
                                                                        <label for="v13"><span></span>Internship</label>

                                                                  </li>

                                                                  <li>
                                                                        <input type="checkbox"
                                                                              class="common_selector vacancy" id="v15"
                                                                              name="rr" value="Temporary" />
                                                                        <label for="v15"><span></span>Part Time</label>

                                                                  </li>

                                                            </ul>
                                                      </div>
                                                </div>

                                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                                      <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                                      <div class="careerfy-checkbox-toggle">
                                                            <ul class="careerfy-checkbox expandible">
                                                                  <?php $sql = mysqli_query($con, "SELECT * FROM job_industry_type ");

                                                                  while ($result = mysqli_fetch_array($sql)) {

                                                                  ?>
                                                                  <li class="">
                                                                        <input type="checkbox"
                                                                              class="common_selector category"
                                                                              id="r<?php echo $result['id']; ?>"
                                                                              name="rr"
                                                                              value="<?php echo $result['industry_type']; ?>" />
                                                                        <label
                                                                              for="r<?php echo $result['id']; ?>"><span></span><?php echo $result['industry_type']; ?></label>

                                                                  </li>
                                                                  <?php
                                                                  }
                                                                  ?>

                                                            </ul>

                                                      </div>
                                                </div>
                                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                                      <h2><a href="#" class="careerfy-click-btn">Location</a></h2>
                                                      <div class="careerfy-checkbox-toggle">
                                                            <ul class="careerfy-checkbox expandible">

                                                                  <?php $sql_query = mysqli_query($con, "SELECT * FROM states ");

                                                                  while ($results = mysqli_fetch_array($sql_query)) {

                                                                  ?>
                                                                  <li>
                                                                        <input type="checkbox"
                                                                              class="common_selector location"
                                                                              id="s<?php echo $results['id']  ?>"
                                                                              name="r"
                                                                              value="<?php echo $results['name'] ?>" />
                                                                        <label
                                                                              for="s<?php echo $results['id']  ?>"><span></span><?php echo $results['name']; ?></label>

                                                                  </li>
                                                                  <?php
                                                                  }
                                                                  ?>

                                                      </div>
                                                </div>



                                          </form>
                                    </div>
                              </aside>
                              <div class="careerfy-column-9 careerfy-typo-wrap">
                                    <div class="careerfy-typo-wrap">
                                          <!-- FilterAble -->
                                          <div class="careerfy-filterable">
                                                <?php if ($keyword != "") {
                                                      echo "<p style='font-size:2rem;'><b>Showing results of <u style='color:#ff4500'>{$keyword}</u></p></b>";
                                                }
                                                ?>
                                                <!-- <ul>
                                                      <li>
                                                            <i class="careerfy-icon careerfy-sort"></i>
                                                            <div class="careerfy-filterable-select">
                                                                  <select>
                                                                        <option>Sort</option>
                                                                        <option>Sort</option>
                                                                        <option>Sort</option>
                                                                  </select>
                                                            </div>
                                                      </li>

                                                </ul> -->
                                          </div>
                                          <!-- FilterAble -->
                                          <!-- JobGrid -->

                                          <div class="careerfy-job careerfy-joblisting-classic filter_data">

                                                <!-- ================================================================================ -->

                                          </div>

                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
            <!-- Main Section -->

      </div>
      <!-- Main Content -->
      <script>
      $(document).ready(function() {

            filter_data();

            function filter_data(page_no) {
                  $('.filter_data').html('<div></div>');
                  // var page_no = page ;
                  var keyword = "<?php echo $keyword; ?>";
                  var action = 'fetch_data';
                  var vacancy = get_filter('vacancy');
                  var category = get_filter('category');
                  var location = get_filter('location');
                  $.ajax({
                        url: "include/function.php",
                        method: "POST",
                        data: {
                              keyword: keyword,
                              action: action,
                              page_no: page_no,
                              vacancy: vacancy,
                              category: category,
                              location: location
                        },
                        success: function(data) {
                              $('.filter_data').html(data);
                        }
                  });
            }

            function get_filter(class_name) {
                  var filter = [];
                  $('.' + class_name + ':checked').each(function() {
                        filter.push($(this).val());
                  });
                  return filter;
            }

            $('.common_selector').click(function() {
                  filter_data();
            });

            $(document).on("click", "#pagination a", function(e) {
                  e.preventDefault();
                  var page_id = $(this).attr("id");

                  filter_data(page_id);
            })
      });
      </script>
      <!-- Footer -->

      <script>
      $('ul.expandible').each(function() {
            var $ul = $(this),
                  $lis = $ul.find('li:gt(4)'),
                  isExpanded = $ul.hasClass('expanded');
            $lis[isExpanded ? 'show' : 'hide']();

            if ($lis.length > 0) {
                  $ul
                        .append($('<span class="showmore" style="cursor:pointer;"><li class="expand">' + (
                                    isExpanded ? 'Show Less' : 'Show More') + '</li></span>')
                              .click(function(event) {
                                    var isExpanded = $ul.hasClass('expanded');
                                    event.preventDefault();
                                    $(this).html(isExpanded ? 'Show More' : 'Show Less');
                                    $ul.toggleClass('expanded');
                                    $lis.toggle();
                              }));
            }
      });
      </script>

      <?php
      include 'include/footer.php';
      ?>