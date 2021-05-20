 <?php
  include('../../admin/assets/_dbconnect.php');
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
    $id=$_SESSION['loggedin'];
  $limit_per_page = 8;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }
  $offset = ($page - 1) * $limit_per_page;

  $sql = "SELECT * FROM  job_post WHERE company_id='$id'   LIMIT {$offset},{$limit_per_page}";
 
  $result = mysqli_query($con,$sql) ;

    $output= "";
    
    if(mysqli_num_rows($result) > 0){  
       $output .='<ul class="careerfy-row" >';
    $output.="<div class='careerfy-managejobs-list'>
    <!-- Manage Jobs Header -->
    <div class='careerfy-table-layer careerfy-managejobs-thead'>
        <div class='careerfy-table-row'>
            <div class='careerfy-table-cell '>Job Title</div>
            <div class='careerfy-table-cell ' >Aplications</div>
            <div class='careerfy-table-cell '>Status</div>
            <div class='careerfy-table-cell '>Actions</div>
        </div>
    </div>"; 
      while($row=mysqli_fetch_array($result) ){
       $jid=$row['id'];
       $count=0;
        $sql2 ="SELECT * FROM  job_apply_job_post WHERE company_id='$id' && `job_post_id`='$jid'";
        if($res2=mysqli_query($con, $sql2)){
          $count=mysqli_num_rows($res2);
        }
        
        

    //    $candi=mysqli_query($con, "SELECT * FROM job_post WHERE ");

   
    // while($row=mysqli_fetch_assoc($candi)){ 
                              
    

   

    $output.=" <div class='careerfy-table-layer careerfy-managejobs-tbody'>
         <div class='careerfy-table-row'>
             <div class='careerfy-table-cell '>
                 <h6><a href='#'>{$row['jobtitle']}</a></h6>
                 <ul>
                     <li><i class='careerfy-icon careerfy-calendar'></i> Expiry:
                         <span>Dec 9, 2017</span>
                     </li>
                 </ul>
             </div>

             
            
              ";
if( $row['verify']=='Declined'){
  $output.="
  <div class='disable careerfy-table-cell '><a href='job-detail-two.php?id={$row['id']}'
  class='careerfy-managejobs-appli'> View Applications({$count})
  </a></div>
  <div class='disable careerfy-table-cell '><a href='#'
  class='careerfy-managejobs-appli'>{$row['verify']}
  </a></div>
  
      <div class=' careerfy-table-cell '>
                 <div class='careerfy-managejobs-links'>
                     
                     <a  href='?id={$row['id']}'
                         class='disable careerfy-icon '><i class='far fa-eye' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:#999999'></i></a>
                     <a  href='updateemployer-dashboard-newjob.php?id={$row['id']}'
                         class='disable careerfy-icon careerfy-edit' data-tooltip='tooltip' data-placement='left'
                         title='Edit'></a>
                     <a href='del-employer-jobs.php?type=delete&id={$row['id']}'
                         class=' disable careerfy-icon '><i class='far fa-times-circle' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:#999999'></i></a>
                     
                 </div>
            
             </div>
         </div>
     </div>";

}
elseif($row['verify']=='Closed'){
  $output.="
  <div class='disable careerfy-table-cell '><a href='job-detail-two.php?id={$row['id']}'
  class='careerfy-managejobs-appli'> View Applications({$count})
  </a></div>
  <div class='disable careerfy-table-cell '><a href='#'
  class='careerfy-managejobs-appli'>{$row['verify']}
  </a></div>
  
      <div class=' careerfy-table-cell '>
                 <div class='careerfy-managejobs-links'>
                     
                     <a  href='?id={$row['id']}'
                         class=' careerfy-icon '><i class='far fa-eye' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:#999999'></i></a>
                     <a  href='updateemployer-dashboard-newjob.php?id={$row['id']}'
                         class='disable careerfy-icon careerfy-edit' data-tooltip='tooltip' data-placement='left'
                         title='Edit'></a>
                     <a href='del-employer-jobs.php?type=delete&id={$row['id']}'
                         class=' disable careerfy-icon '><i class='far fa-times-circle' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:#999999'></i></a>
                     
                 </div>
            
             </div>
         </div>
     </div>";

}
elseif($row['verify']=='Active'){
  $output.="
  <div class=' careerfy-table-cell '><a href='employer-dashboard-applied-candidate.php?id={$row['id']}'
  class='careerfy-managejobs-appli'>View Applications({$count})
  </a></div>
  <div class='careerfy-table-cell '><a href='#'
  class='careerfy-managejobs-appli'>{$row['verify']}
  </a></div>
  
      <div class=' careerfy-table-cell '>
                 <div class='careerfy-managejobs-links'>
                 <a  href='employer-job-detail.php?id={$row['id']}'
                         class=' careerfy-icon '><i class='far fa-eye' data-tooltip='tooltip' data-placement='left'
                         title='View Job' style='color:#999999'></i></a>
                     
                     <a  href='updateemployer-dashboard-newjob.php?id={$row['id']}'
                         class='disable careerfy-icon careerfy-edit' data-tooltip='tooltip' data-placement='left'
                         title='Edit'></a>
                     <a href='del-employer-jobs.php?type=delete&id={$row['id']}'
                         class='careerfy-icon '><i class='far fa-times-circle' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:red'></i></a>
                     
                 </div>
            
             </div>
         </div>
     </div>";

}else{
             $output.="
             <div class='disable careerfy-table-cell '><a href='job-detail-two.php?id={$row['id']}'
                     class='careerfy-managejobs-appli'>View Applications({$count})
                    </a></div>
            
             <div class='careerfy-table-cell '><a href='#'
             class='careerfy-managejobs-appli'>{$row['verify']}
             </a></div>
             <div class='careerfy-table-cell '>
                 <div class='careerfy-managejobs-links'>
                    <a  href='employer-job-detail.php?id={$row['id']}?id={$row['id']}'
                    class=' careerfy-icon '><i class='far fa-eye' data-tooltip='tooltip' data-placement='left'
                    title='View Job' style='color:#999999'></i></a>
                     <a href='updateemployer-dashboard-newjob.php?id={$row['id']}'
                         class='careerfy-icon careerfy-edit' data-tooltip='tooltip' data-placement='left'
                         title='Edit' style='color:#999999'></a>
                     <a href='del-employer-jobs.php?type=delete&id={$row['id']}'
                         class='careerfy-icon '><i class='far fa-times-circle' data-tooltip='tooltip' data-placement='left'
                         title='Close' style='color:red'></i></a>
                     
                 </div>
            
             </div>
         </div>
     </div>";
} 
   
  }
$output.= "</div>
    ";
  
    $output .='</ul>';
  
    $sql_total = "SELECT * FROM job_post WHERE company_id='$id'";
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
  // echo $c_id;
  }
    else{
      echo "<h2>No Record Found.</h2>";
    }
  
  
?>
<style>
.disable{
    pointer-events: none; cursor: not-allowed; opacity: 0.5;
}
</style>
