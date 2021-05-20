 <?php
  include('../../admin/assets/_dbconnect.php');
  $limit_per_page = 8;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  $offset = ($page - 1) * $limit_per_page;

  $sql = "SELECT * FROM  job_company LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

    $output= "";
    if(mysqli_num_rows($result) > 0){  
    $output .='<ul class="careerfy-row" >';
      
    while($row=mysqli_fetch_assoc($result)){                          
     $output.="<li class='careerfy-column-12 job-list' id='candidate' >
     <div class='careerfy-candidate-default-wrap'>
     <figure><a href='candidate-detail.php'><img src='{$row["dp"]}' alt=''></a></figure>
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
    $output .='</ul>';
  
    $sql_total = "SELECT * FROM job_seeker_details";
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
    else{
      echo "<h2>No Record Found.</h2>";
    }
?>