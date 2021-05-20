 <?php
  include('../../admin/assets/_dbconnect.php');
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
    $id=$_SESSION['loggedin'];
    $jid=$_SESSION['jid'];

  $limit_per_page = 8 ;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  $offset = ($page - 1) * $limit_per_page;

  $sql = "SELECT * FROM job_apply_job_post  WHERE company_id='$id' &&  job_post_id='$jid' && `status`='Resume Shortlisted' LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($con,$sql);

    $output= "";
    if(mysqli_num_rows($result) > 0){  
      while($fetch=mysqli_fetch_array($result)){
        $uid=$fetch['user_id'];
      
       $candi=mysqli_query($con, "SELECT * FROM job_seeker_details WHERE user_id='$uid'");

    $output .='<ul class="careerfy-row" >';
    $output.=" <li class='careerfy-column-12 job-list' id='candidate'>";  
    while($row=mysqli_fetch_array($candi)){                          
     $output.=" 
     <div class='careerfy-employer-resumes-wrap'>
       <figure>
         <a href='#' class='careerfy-resumes-thumb'><img src='profile_image/{$row['dp']}'></a>
         <figcaption'
           <h2>
             <a href='#'>{$row['fname']} {$row['lname']}</a>
 
             
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
   
       <ul class='careerfy-resumes-options'>
         <li>
         <a href='candidate-detail.php?u_id={$row['user_id']}'><i class='careerfy-icon careerfy-user-1'></i> View Profile</a>
         </li>
        
         <li>
           <a href='candidate_final.php?type=reject&u_id={$row['user_id']}&j_id=$jid'>Reject</a>
         </li>
       
         <li>
           <a href='candidate_final.php?type=hire&u_id={$row['user_id']}&j_id=$jid'>Hire</a>
         </li>
       </ul>
     </div>

    ";
       
    }
  }
  $output.="   </li>"; 
    $output .='</ul>';
    $output .='<br>';
  
    $sql_total = "SELECT * FROM job_apply_job_post WHERE company_id='$id'";
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
  
    }
    else{
      echo "<h2>No Record Found.</h2>";
    }
  }
?>