<?php
include('include/header.php');
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
$query=mysqli_query($con, "SELECT * FROM job_seeker_details");

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
        </div>
   -->
      
        <!-- Header -->
        
        <!-- SubHeader -->
        
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-top-full">
                <div class="container">
                    <div class="row">

                        <aside class="careerfy-column-3">
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-search-filter" method="POST">
                                  
                                    <!-- <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Skill</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r17" name="rr" />
                                                    <label for="r17"><span></span>Accountancy</label>
                                                    <small>10</small>
                                                </li>
                                               
                                            </ul>
                                            <a href="#" class="careerfy-seemore">+see more</a>
                                        </div>
                                    </div> -->
                                    
                                    <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Location</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox expandible">

                                            <?php $sql_query = mysqli_query($con,"SELECT * FROM states ");
                                                  
                                                  while($results = mysqli_fetch_array($sql_query)) {
                                               
                                             ?>
                                                <li>
                                                    <input type="checkbox" class="common_selector location"  id="s<?php echo $results['id']  ?>" name="r" value="<?php echo $results['name'] ?>"/>
                                                    <label for="s<?php echo $results['id']  ?>"><span></span><?php echo $results['name']; ?></label>
                                                  
                                                </li>
                                                <?php 
                                        }                                         
                                        ?>
                                                <!-- <li>
                                                    <input type="checkbox" class="common_selector location" id="18" name="r" value="Mumbai"/>
                                                    <label for="18"><span></span>Mumbai</label>
                                                    
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="common_selector location" id="19" name="r" value="Gurgaon"/>
                                                    <label for="19"><span></span>Gurgaon</label>
                                                    
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="common_selector location" id="20" name="r" value="Lucknow"/>
                                                    <label for="20"><span></span>Lucknow</label>
                                                    
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="common_selector location" id="21" name="r" value="Kanpur"/>
                                                    <label for="21"><span></span>Kanpur</label>
                                                    
                                                </li> -->
                                            </div>
                                     </div>
                                    <!-- <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Skill Set</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r11" name="rr" />
                                                    <label for="r11"><span></span>HTML</label>
                                                    <small>13</small>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </aside>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap" >
                                <!-- FilterAble -->
                                <div class="careerfy-filterable">
                                    <h2>Showing 0-12 of 37 results</h2>
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
                                       <!-- <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a></li>
                                        <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li>-->
                                    </ul>
                                </div>
                                <!-- Candidate Listings -->
                                
                                <div class="careerfy-candidate careerfy-candidate-default filter_data " id="table-data">
                                    
                                </div>

                                <!-- Pagination -->
                            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->
           
        </div>
        <!-- Main Content -->

      
           <!-- Main Content -->
    <script>
    $(document).ready(function(){

        filter_data();

        function filter_data()
        {
            $('.filter_data').html('<div></div>');
            var action = 'fetch_data';
            var vacancy = get_filter('vacancy');
            var category = get_filter('skill');
            var location = get_filter('location');
            $.ajax({
                url:"candidate_filter.php",
                method:"POST",
                data:{action:action,vacancy:vacancy,category:category,location:location},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function(){
            filter_data();
        });


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
                .append($('<span class="showmore" style="cursor:pointer;"><li class="expand">' + (isExpanded ? 'Show Less' : 'Show More') + '</li></span>')
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
        <!-- Footer -->
    
  <script type="text/javascript">
  $(document).ready(function() {
    function loadTable(page){
      $.ajax({
        url: "ajax-pagination.php",
        type: "POST",
        data: {page_no :page },
        success: function(data) {
          $("#table-data").html(data)
        }
      });
    }
    loadTable();

    //Pagination Code
    $(document).on("click","#pagination a",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");

      loadTable(page_id);
    })
  });
</script>
        <?php
        include'include/footer.php';
        ?>