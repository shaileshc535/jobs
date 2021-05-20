<?php
include('../admin/assets/_dbconnect.php');
session_start();
if (isset($_SESSION['loggedin'])) {
      $uid = $_SESSION['loggedin'];

      $limit_per_page = 8;

      $page = "";
      if (isset($_POST["page_no"])) {
            $page = $_POST["page_no"];
      } else {
            $page = 1;
      }
      $offset = ($page - 1) * $limit_per_page;
      //

      // 
      $sql = "SELECT id_jobpost FROM job_shortlist WHERE `user_id`='$uid' LIMIT {$offset},{$limit_per_page} ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");
      $output = " ";
      $output .= "<div>";

      // 

      if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {
                  $arr = $row['id_jobpost'];
                  $query = mysqli_query($con, "SELECT * FROM job_post WHERE id ='$arr' ");

                  while ($row1 = mysqli_fetch_array($query)) {

                        $output .= '<tr>';
                        $output .= "
                                                            
                            <td>
                            <a href='#' class='careerfy-savedjobs-thumb'><img src='extra-images/candidate-saved-jobs-thumb.png' alt=''></a>
                            <h2><a href='#'>{$row1['jobtitle']}</a></h2>
                            </td>
                            <td><span>{$row1['company']}</span></td>
                                                            
                            <td>{$row1['openings']}</td>
                            <td>
                                <a href='del_saved_jobs.php?type=delete&id={$row1['id']}' class='careerfy-savedjobs-links'><i class='careerfy-icon careerfy-rubbish'></i></a>
                                <a href='job-detail-two.php?jid={$row1['id']}'class='careerfy-savedjobs-links'><i class='careerfy-icon careerfy-view'></i></a>
                            </td>
                        ";

                        $output .= '</tr>';
                  }
            }

            $output .= '</div> <br>';

            $sql_total = "SELECT id_jobpost FROM job_shortlist WHERE `user_id`='$uid'";
            $records = mysqli_query($con, $sql_total) or die("Query Unsuccessful.");
            $total_record = mysqli_num_rows($records);
            $total_pages = ceil($total_record / $limit_per_page);

            $output .= '<div class="careerfy-pagination-blog" id="pagination">';
            $output .= ' <ul class="page-numbers">';
            // $output .='<li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>';
            // $output .='<li><span class="page-numbers current ">1</span></li>';

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
      } else {
            echo 'NO SAVED JOBS';
      }
} else {
      header('location:http://materiallibrary.co.in/signin');
      exit;
}