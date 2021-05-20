<?php
include 'include/header.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';
?>
<!-- Header -->

<!-- Main Content -->
<div class="careerfy-main-content">

      <!-- Main Section -->
      <div class="careerfy-main-section careerfy-top-full">
            <div class="container">
                  <div class="row">

                        <aside class="careerfy-column-3">
                              <div class="careerfy-typo-wrap">
                                    <form class="careerfy-search-filter">
                                          <div class="careerfy-search-filter-wrap careerfy-without-toggle">
                                                <h2><a href="#">Top Employer</a></h2>

                                                <div class="careerfy-search-box row">
                                                      <form action="include/function2.php" class="navbar-form"
                                                            method="get">
                                                            <div class="input-group">
                                                                  <div class="col-md-10">
                                                                        <input type="text" name="user_query"
                                                                              placeholder="Enter Location"
                                                                              class="form-control" required>
                                                                  </div>
                                                                  <div class="col-md-2"
                                                                        style="border:2px solid #f0f0f0;">
                                                                        <button type="submit" value="Search"
                                                                              name="search" class="btn btn-primary">
                                                                              <i class="fa fa-search"
                                                                                    style="color:#00FFFF;"></i>
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </form>
                                                </div>

                                          </div>

                                          <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                                <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                                <div class="careerfy-checkbox-toggle">
                                                      <ul class="careerfy-checkbox expandible">
                                                            <?php

                                        $sql6 = "SELECT * FROM job_func_area limit 10";
                                        $res6 = mysqli_query($con, $sql6);
                                        while ($row6 = mysqli_fetch_assoc($res6)) {
                                            $functional_area = $row6['functional_area'];
                                            $id = $row6['id'];
                                        ?>
                                                            <li class="">
                                                                  <input type="checkbox"
                                                                        class="common_selector category"
                                                                        id="r<?php echo $id; ?>" name="rr"
                                                                        value="<?php echo $id; ?>" />
                                                                  <label
                                                                        for="r<?php echo $id; ?>"><span></span><?php echo $functional_area; ?></label>

                                                            </li>
                                                            <?php } ?>

                                                      </ul>

                                                </div>
                                          </div>
                                          <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                                <h2><a href="#" class="careerfy-click-btn">location</a></h2>
                                                <div class="careerfy-checkbox-toggle">
                                                      <ul class="careerfy-checkbox">
                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s1"
                                                                        name="r" value="Delhi" />
                                                                  <label for="s1"><span></span>Delhi</label>
                                                            </li>

                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s2"
                                                                        name="r" value="Mumbai" />
                                                                  <label for="s2"><span></span>Mumbai</label>
                                                            </li>

                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s3"
                                                                        name="r" value="Gurgaon" />
                                                                  <label for="s3"><span></span>Gurgaon</label>
                                                            </li>

                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s4"
                                                                        name="r" value="Lucknow" />
                                                                  <label for="s4"><span></span>Lucknow</label>
                                                            </li>

                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s5"
                                                                        name="r" value="Kanpur" />
                                                                  <label for="s5"><span></span>Kanpur</label>

                                                            </li>

                                                            <li>
                                                                  <input type="checkbox"
                                                                        class="common_selector location" id="s6"
                                                                        name="r" value="Pune" />
                                                                  <label for="s6"><span></span>Pune</label>

                                                            </li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </aside>

                        <div class="careerfy-column-9">
                              <div id="results" class="careerfy-typo-wrap">
                                    <!-- FilterAble -->
                                    <div class="careerfy-filterable">
                                          <?php
                            $sql1 = "SELECT * FROM job_company";
                            $res1 = mysqli_query($con, $sql1);
                            $result = 0;
                            while ($row3 = mysqli_fetch_array($res1)) {

                                $company_id1 = $row3['id'];
                                $query3 = "select company from job_post where company='$company_id1'";
                                $run3 = mysqli_query($con, $query3);
                                $count1 = mysqli_num_rows($run3);
                                if ($count1 > 0)
                                    $result = $result + 1;
                            }
                            ?>
                                          <h2>Showing 0-12 of <?php echo $result ?> results</h2>
                                          <ul>
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
                                                <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a>
                                                </li>
                                                <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a>
                                                </li>
                                          </ul>
                                    </div>
                                    <!-- FilterAble -->
                                    <div class="careerfy-employer careerfy-employer-list filter_data">
                                          <!-- ======================================================================= -->
                                    </div>

                                    <!-- Pagination -->
                                    <div class="careerfy-pagination-blog">
                                          <ul class="page-numbers">
                                                <!-- <?php
                                        $per_page = 20;

                                        if (isset($_GET['search'])) {

                                            $search_query = $_GET['user_query'];
                                            $query5 =  "select * from  job_company where address like '%$search_query%' or city like '%$search_query%' or state like '%$search_query%'";
                                        } else {
                                            $query5 = "select * from  job_company";
                                        }
                                        $result5 = mysqli_query($con, $query5);
                                        $total_record = mysqli_num_rows($result5);
                                        $total_pages = ceil($total_record / $per_page);

                                        echo "
                                                <li><a href='employer-list.php?page=1'>" . ' ' . "</a></li>";

                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            echo "
                                                    <li><a href='employer-list.php?page=" . $i . "'>" . $i . "</a></li>";
                                        }

                                        echo "
                                                    <li><a href='employer-list.php?page=$total_pages'>" . ' ' . "</a></li>";


                                        ?> -->
                                          </ul>
                                    </div>
                              </div>
                        </div>

                        <script>
                        $(document).ready(function() {
                              LoadData(0);
                        });

                        function LoadData(pagenum) {
                              $.post('employer-list.php?p=' = pagenum, function(response) {
                                    $('#results').php(response);
                              });
                        }
                        </script>

                  </div>
            </div>
      </div>
      <!-- Main Section -->

</div>
<!-- Main Content -->
<script>
$(document).ready(function() {

      filter_data();

      function filter_data() {
            $('.filter_data').html('<div></div>');
            var action = 'fetch_data';
            var category = get_filter('category');
            var location = get_filter('location');
            $.ajax({
                  url: "include/function2.php",
                  method: "POST",
                  data: {
                        action: action,
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


});
</script>
<!-- Footer -->
<?php
include 'include/footer.php';
?>