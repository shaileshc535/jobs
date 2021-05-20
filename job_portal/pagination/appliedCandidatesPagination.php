<?php
  include('../../admin/assets/_dbconnect.php');
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
    $id=$_SESSION['loggedin'];
    # code...
  }
  $limit_per_page = 8;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  $offset = ($page - 1) * $limit_per_page;
 $jid=$_SESSION['jid'];
  // <span class='careerfy-resumes-subtitle'>{$row['post']} at <a href='#'>{$row['company_name']}</a></span>
  $q_applicant = "select * from job_apply_job_post where job_post_id='$jid'  LIMIT {$offset},{$limit_per_page}";
  $r_applicant = mysqli_query($con, $q_applicant);
  $output= " ";
  $output.="<div>";
    if(mysqli_num_rows( $r_applicant)>0) {
    
     while ($row_a = mysqli_fetch_array($r_applicant)) {

        $a_id = $row_a['user_id'];
        $j_id=$row_a['job_post_id'];
        $query = "select * from  job_seeker_details where user_id='$a_id'";
        $run = mysqli_query($con, $query);
      
          $output .='
<ul class="careerfy-row">
  '; while($row=mysqli_fetch_assoc($run)){ 
    $output.="
  <li class='careerfy-column-12 job-list' id='candidate'>
    <div class='careerfy-employer-resumes-wrap'>
      <figure>
        <a href='#' class='careerfy-resumes-thumb'><img src='profile_image/{$row['dp']}'></a>
        <figcaption'
          <h2>
            <a href='#'>{$row['fname']} {$row['lname']}</a>

            <h3><a href='candidate-detail.php?u_id={$row['user_id']}' class='careerfy-resumes-download'>VIEW PROFILE</a></h3>
          </h2>
          
          <ul>
            <li>
              <span>Location:</span>
              {$row['city']}, {$row['state']}, {$row['pincode']}
            </li>
            <li>
              <span>Current Salary:</span>
              {$row['salary']}/<small>p.a minimum</small>
            </li>
          </ul>
        </figcaption>
      </figure>
      <ul class='careerfy-resumes-options'>";

        
        if($row_a['status']=='Applied'){
          
          $output.="
          <li>
          <a href='reject.php?type=review&u_id={$row['user_id']}&j_id=$j_id'><i class='careerfy-icon careerfy-user-1'></i>Review</a>
          </li>
          <li>
          <a href='reject.php?type=reject&u_id={$row['user_id']}&j_id=$j_id'>Reject</a>
        </li>
        <li>
          <a href='employer-dashboard-resumes.php?type=shortlist&u_id={$row['user_id']}&j_id=$j_id'>Shortlist</a>
        </li>";
        }
        elseif($row_a['status']=='Under Review' )
        {
          $output.="
          <li>
          <a href='reject.php?type=review&u_id={$row['user_id']}&j_id=$j_id'><i class='careerfy-icon careerfy-user-1'></i>Under Review</a>
          </li>
          <li>
          <a href='reject.php?type=reject&u_id={$row['user_id']}&j_id=$j_id'>Reject</a>
        </li>
        <li>
          <a href='employer-dashboard-resumes.php?type=shortlist&u_id={$row['user_id']}&j_id=$j_id'>Shortlist</a></li>";
        }
        elseif($row_a['status']=='Resume Shortlisted' )
        {
          $output.="
          <li>
          <a href='reject.php?type=review&u_id={$row['user_id']}&j_id=$j_id'><i class='careerfy-icon careerfy-user-1'></i>Under Review</a>
          </li>
          <li>
          <a href='reject.php?type=reject&u_id={$row['user_id']}&j_id=$j_id'>Reject</a>
        </li>
        <li>
          <a href='#'>Shortlisted</a></li>";
        }
        elseif($row_a['status']=='Hired' )
        {
          $output.="
     
        <li>
          <a href='#'>Hired</a></li>";
        }
        
        else{
          $output.="
          <li>
          <a href='#'><i class='careerfy-icon careerfy-user-1'></i>Can't Review</a>
          </li>
          <li>
          <a href='#'>NOT SELECTED</a>
        </li>
        <li>
         ";
        }
      
        $output.="
        </li>
      </ul>
    </div>
  </li>
  "; } $output .='
</ul>
';
  }
$output .="</div> <br>";

  $sql_total = "SELECT user_id FROM job_apply_job_post WHERE company_id='$id'";
  $records = mysqli_query($con,$sql_total) or die("Query Unsuccessful.");
  $total_record = mysqli_num_rows($records);
  $total_pages = ceil($total_record/$limit_per_page);

  $output .='<div class="careerfy-pagination-blog" id="pagination">';
  $output .=' <ul class="page-numbers">';
  
  


  for($i=1; $i <= $total_pages; $i++){
      if($i == $page){
        $class_name = "active";
      }else{
        $class_name = "";
      }
      $output .= "
      
  
      <li><a class='page-numbers  {$class_name}'   id='{$i}' href='#'>{$i}</a></li>";
    }
     $output .='</ul>';
    $output .='</div>';
echo $output; 

} else{ echo "
<h2>No Record Found.</h2>


" ; }
    
?>
 <!-- <a href='reject.php?type=delete&u_id={$row['user_id']}&j_id=$j_id'>Delete</a> -->