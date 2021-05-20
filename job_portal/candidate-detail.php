<?php
ob_start();
include('../admin/assets/_dbconnect.php');
?>
<ul class="careerfy-row" >
    <?php
    if (isset($_POST['action'])) {

        $query = "";

        if (isset($_POST['vacancy'])) {
            $vacancy_filter = implode("','", $_POST['vacancy']);
            $query .= "AND jobtype in ('" . $vacancy_filter . "')";
        }

        if (isset($_POST['skill'])) {
            $category_filter = implode("','", $_POST['category']);
            $query = "SELECT user_id FROM job_category WHERE skill='" . $category_filter . "'";
        }

        if (isset($_POST['location'])) {
            $location_filter = implode("','", $_POST['location']);
            echo $location_filter;
            $query= " SELECT * FROM job_seeker_details WHERE active=0 AND state in ('" . $location_filter . "')";
        }

        $run = mysqli_query($con, $query);
        // $result = mysqli_fetch_array($run);
        $count = mysqli_num_rows($run);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($run)) {
    

              echo "<li class='careerfy-column-12 job-list' id='candidate' >
              <div class='careerfy-candidate-default-wrap'>
              <figure><a href='candidate-detail'><img src='{$row["dp"]}' alt=''></a></figure>
              <div class='careerfy-candidate-default-text'>
              <div class='careerfy-candidate-default-left'>
              <h2><a href='candidate-detail.php?id={$row["user_id"]}'>{$row["fname"]} {$row["lname"]}</a> <i class='careerfy-icon careerfy-check-mark'></i></h2>
                  <ul>
                      <li>{$row["key_skill"]}<a href='candidate-detail.php?id={$row["user_id"]}' class='careerfy-candidate-default-studio'></a></li>
                      <li><i class='fa fa-map-marker'></i>{$row["city"]} {$row["state"]}</li>
                      <li><i class='careerfy-icon careerfy-envelope'></i> <a href='candidate-detail.php?id={$row["user_id"]}'>{$row["email_id"]}</a></li>
                  </ul>
              </div>
              <a href='candidate-detail.php?id={$row['user_id']}' class='careerfy-candidate-default-btn'><i class='careerfy-icon careerfy-add-list'></i> Shortlist</a>
          </div>
              </div>
             </li>
             ";

  
            }
        } else {
            echo "<h3>No Data Found</h3>";
        }
    }
    ?>
<!-- <script type="text/javascript">
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
  }); -->
<!-- </script> -->
</ul>