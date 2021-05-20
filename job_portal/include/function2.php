<?php
include('../../admin/assets/_dbconnect.php');
?>
<ul class="careerfy-row">
    <?php 
        if(isset($_POST['action'])){

            $sql = "SELECT * FROM job_company where status= '1'";

            // if(isset($_GET['search'])){

            //     $search_query = $_GET['user_query'];
            //     $sql .=  "AND address like '%$search_query%' or city like '%$search_query%' or state like '%$search_query%'";
            // }

            if(isset($_POST['category'])){
                $category_filter = implode("','",$_POST['category']);
                $sql .= "AND job_func_area_id in ('".$category_filter."')";
            }

            if(isset($_POST['location'])){
                $location_filter = implode("','",$_POST['location']);
                $sql .= "AND state in ('".$location_filter."')";
            }
                                       
            $res = mysqli_query($con,$sql);
             
            if(mysqli_num_rows($res) == 0){
                echo "<h3>No Data Found</h3>";
                                            
                } else{
                    $count = mysqli_num_rows($res);

                    while ($row = mysqli_fetch_assoc($res)) {

                        $industry_type_id = $row['id'];
                        $company_id = $row['id'];
                        $query = "select * from job_industry_type where id='$industry_type_id'";
                        $run = mysqli_query($con, $query);
                        $row1 = mysqli_fetch_array($run);
                        $fun_name = $row1['id'];

                        $query1 = "select company from job_post where company='$company_id'";
                        $run1 = mysqli_query($con, $query1);
                        $count = mysqli_num_rows($run1);

                        if ($count == 0) {
                            continue;
                        }
                    ?>

                    <li class="careerfy-column-12">
                        <div class="careerfy-table-layer">
                            <div class="careerfy-table-row">
                                <div class="careerfy-table-cell al-left">
                                    <figure><a href="#"><img src="<?php $row['logo']; ?>" alt=""></a>
                                    </figure>
                                </div>
                                <div class="careerfy-table-cell al-left">
                                    <small><?php echo $fun_name; ?></small>
                                    <h2><a
                                            href="employer-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['company_name']; ?></a>
                                    </h2>
                                    <span><i
                                            class="fa fa-map-marker"></i><?php echo $row['address']; ?></span>
                                </div>
                                <div class="careerfy-table-cell">
                                    <label for="">team-size</label>
                                    <a href="#"
                                        class="careerfy-employer-thumblist-size"><?php echo $row['team_size']; ?></a>
                                </div>
                                <div class="careerfy-table-cell"> <a
                                        href="employer-detail.php?id=<?php echo $row['id']; ?>"
                                        class="careerfy-employer-list-btn"><?php echo $count; ?>
                                        Vacancies</a> </div>
                            </div>
                        </div>
                    </li>
<?php
                                            
        }    
    }         
}                           
?>
                                       
</ul>

