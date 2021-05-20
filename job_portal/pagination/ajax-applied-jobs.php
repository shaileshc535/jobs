<?php

  include('../admin/assets/_dbconnect.php');
  ob_start();
session_start();
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
  $limit_per_page = 8;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  $offset = ($page - 1) * $limit_per_page;
  $output =" ";
  
  $output .='<div>';
  $sql = "SELECT * FROM job_apply_job_post WHERE `user_id`='$id' LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

   
    

    if(mysqli_num_rows($result) > 0){  
       
        while($row = mysqli_fetch_array($result))
            {
                $arr = $row['job_post_id'];
                    $query =mysqli_query($con,"SELECT * FROM job_post WHERE id ='$arr' "); 
                        while($row1=mysqli_fetch_array($query)){
                            
          $output .="<tr>
                                        
        <td>
        <a href='#' class='careerfy-savedjobs-thumb'><img src='extra-images/candidate-saved-jobs-thumb.png' alt=''></a>
        <h2><a href='job-detail-two.php?jid={$row1['id']}&status=applied'>{$row1['jobtitle']}</a></h2>
        </td>
        <td><span>{$row1['company']}</span></td>
                                        
        <td>{$row1['openings']}</td>
        <td>
           
            <a href='#'class='careerfy-savedjobs-links'>{$row['status']}</a>
                        </td>
                    </tr>";
                                            
                }
    }
    }
    $output .='</div> <br>';
  
    $sql_total = "SELECT job_post_id FROM job_apply_job_post WHERE `user_id`='$id'";
    $records = mysqli_query($con,$sql_total) or die("Query Unsuccessful.");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record/$limit_per_page);

    $output .='<div class="careerfy-pagination-blog" id="pagination">';
    $output .=' <ul class="page-numbers">';
    // $output .='<li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>';
    // $output .='<li><span class="page-numbers current ">1</span></li>';
    


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

    ?>