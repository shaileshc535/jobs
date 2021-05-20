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
     $output.="<li class='careerfy-column-12 job-list' id='employerList' >
      <div class='careerfy-table-layer'>
        <div class='careerfy-table-row'>
            <div class='careerfy-table-cell al-left'>
                <figure><a href="#"><img src="<?php $row['logo']; ?>" alt=""></a>
 </figure>
 </div>
 <div class="careerfy-table-cell al-left">
         <small><?php echo $fun_name; ?></small>
         <h2><a href="employer-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['company_name']; ?></a>
         </h2>
         <span><i class="fa fa-map-marker"></i><?php echo $row['address']; ?></span>
 </div>
 <div class="careerfy-table-cell">
         <label for="">team-size</label>
         <a href="#" class="careerfy-employer-thumblist-size"><?php echo $row['team_size']; ?></a>
 </div>
 <div class="careerfy-table-cell">
         <a href="employer-detail.php?id=<?php echo $row['id']; ?>"
                 class="careerfy-employer-list-btn"><?php echo $count; ?>Vacancies</a>
 </div>
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
                 // $output .='<li><a class="prev page-numbers" href="#"><span><i
                                                 class="careerfy-icon careerfy-arrows4"></i></span></a></li>';
                 // $output .='<li><span class="page-numbers current ">1</span></li>';

                 for($i=1; $i <= $total_pages; $i++){ if($i==$page){ $class_name="active" ; }else{ $class_name="" ; }
                         $output .="
      
  
      <li><a class='page-numbers  {$class_name}'   id='{$i}' href='#'>{$i}</a></li>' ; } $output .='</ul>' ; $output
                         .='</div>' ; echo $output; } else{ echo '<h2>No Record Found.</h2>' ; } ?>