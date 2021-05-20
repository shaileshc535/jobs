<?php
ob_start();
session_start();
include('../../admin/assets/_dbconnect.php');

$path = "../../admin/admin_job_portal/imgs/.";
?>
<ul class="careerfy-row">
      <?php
      $limit_per_page = 8;

      $page = "";
      $keyword = "";
      // if(isset($_POST["keyword"])){

      //   $keyword =$_POST["keyword"];
      // }
      if (isset($_POST["page_no"])) {
            $page = $_POST["page_no"];
      } else {
            $page = 1;
      }
      $offset = ($page - 1) * $limit_per_page;
      if (isset($_POST['action'])) {
            if (isset($_POST["keyword"])) {
                  $keyword = $_POST["keyword"];
                  $query = "SELECT * FROM job_post where ( `jobtitle` like '%$keyword%' or `description` like '%$keyword%' or `job_type`  like '%$keyword%' or `city`  like '%$keyword%' or `state`  like '%$keyword%' or `job_category`  like '%$keyword%' or `skill`  like '%$keyword%' ) AND verify = 'Active'  ";
            } else {
                  $query = "SELECT * FROM job_post where  verify = 'Active'  ";
            }
            // $query .=" ";
            if (isset($_POST['vacancy'])) {
                  $vacancy_filter = implode("','", $_POST['vacancy']);
                  $query .= "AND job_type in ('" . $vacancy_filter . "') ";
            }

            if (isset($_POST['category'])) {
                  $category_filter = implode("','", $_POST['category']);
                  $query .= "AND job_category in ('" . $category_filter . "') ";
            }

            if (isset($_POST['location'])) {
                  $location_filter = implode("','", $_POST['location']);
                  $query .= "AND state in ('" . $location_filter . "') ";
            }

            $query .= " ORDER BY createdat DESC ";
            $query .= " LIMIT {$offset},{$limit_per_page} ";
            $run = mysqli_query($con, $query);



            if ($count = mysqli_num_rows($run)) {

                  if ($count > 0) {
                        while ($row = mysqli_fetch_array($run)) {
                              $jid = $row['id'];

      ?>

      <li class="careerfy-column-12">
            <div class="careerfy-joblisting-classic-wrap">
                  <figure><a href="#"><img src="<?php echo $path . $row['image'] ?>" alt=""></a></figure>
                  <div class="careerfy-joblisting-text">
                        <div class="careerfy-list-option">
                              <!-- Need Senior Rolling Stock Technician -->
                              <h2><a href="job-detail-two.php?jid=<?php echo $row['id'] ?>"><?php echo $row['jobtitle'] ?></a>
                                    <span>Featured</span></h2>
                              <ul>
                                    <li><a href="#">@<?php echo $row['company']; ?></a></li>
                                    <li><i class="careerfy-icon careerfy-maps-and-flags"></i><?php echo $row['state'] . "," . $row['city']; ?>
                                    </li>
                                    <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                          <?php echo $row['jobheading']; ?></li>
                              </ul>
                        </div>
                        <?php
                                                if (isset($_SESSION['loggedin'])) {
                                                      $uid = $_SESSION['loggedin'];

                                                      $select = mysqli_query($con, "SELECT status FROM job_apply_job_post WHERE `user_id`='$uid' && `job_post_id`='$jid'");
                                                      $num = mysqli_num_rows($select);
                                                      if ($num > 0) {
                                                ?>
                        <div class="careerfy-job-userlist">

                              <a href="job-detail-two.php?jid=<?php echo $row['id'] ?>"
                                    class="careerfy-option-btn">Applied</a>


                        </div>
                        <?php } else { ?>


                        <div class="careerfy-job-userlist">

                              <a href="job-detail-two.php?jid=<?php echo $row['id'] ?>" class="careerfy-option-btn">View
                                    Details</a>


                              <?php }
                                                } else { ?>


                              <div class="careerfy-job-userlist">

                                    <a href="job-detail-two.php?jid=<?php echo $row['id'] ?>"
                                          class="careerfy-option-btn">View Details</a>



                              </div>
                              <?php } ?>


                        </div>
      </li>

      <?php
                        }
                        $output = ' ';
                        $sql_total = "SELECT * FROM job_post where verify = 'Active' ";
                        if (isset($_POST['vacancy'])) {
                              $vacancy_filter = implode("','", $_POST['vacancy']);
                              $sql_total .= "AND job_type in ('" . $vacancy_filter . "') ";
                        }

                        if (isset($_POST['category'])) {
                              $category_filter = implode("','", $_POST['category']);
                              $sql_total .= "AND job_category in ('" . $category_filter . "') ";
                        }

                        if (isset($_POST['location'])) {
                              $location_filter = implode("','", $_POST['location']);
                              $sql_total .= "AND state in ('" . $location_filter . "') ";
                        }
                        $records = mysqli_query($con, $sql_total) or die("Query Unsuccessful.");
                        $total_record = mysqli_num_rows($records);
                        $total_pages = ceil($total_record / $limit_per_page);

                        $output .= '<div class="careerfy-pagination-blog" id="pagination">';
                        $output .= ' <ul class="page-numbers">';


                        for ($i = 1; $i <= $total_pages; $i++) {
                              if ($i == $page) {
                                    $class_name = "active";
                              } else {
                                    $class_name = "";
                              }

                              $output .= "
      
      
      <li><a class='page-numbers  {$class_name}'   id='{$i}' href='#'>{$i}</a></li>";
                        }
                        $output .= '</ul>';
                        $output .= '</div>';
                        echo $output;
                  }
            } else {
                  echo "<h3>No Data Found</h3>";
            }
      }
      ?>

</ul>