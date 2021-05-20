<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">All Category Section</h3>
                    </div>


                    <div class="card">
                        <div>
                            <h5 class="card-header">All Profession List</h5>
                        </div>
                        <div class="card-body">
                            <table id="product_table" class="table table-bordered table-striped table-hover"
                                style="width:100%; height:400px; color:#000;  text-align:center;">
                                <thead>
                                    <tr id="table_row" style="text-align:center; font-size:18px ">
                                        <th>S.No</th>
                                        <th>Profession ID</th>
                                        <th>Profession Name</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //query to get all products from database
                                    $sql = "SELECT * FROM profession";

                                    //execute query
                                    $res = mysqli_query($con, $sql);
                                    $sn = 0;
                                    while ($row = mysqli_fetch_array($res)) {
                                        $id = $row['pro_id'];
                                        $pro_name = $row['pro_name'];
                                        $sn = $sn + 1;

                                        echo "<tr style='text-align:center; font-size:16px;'>
                                                    <td>$sn</td>
                                                    <td>$id</td>
                                                    <td>$pro_name</td>
                                                    <td>
                                                        <a href='manage_category.php?p_id=$id'>
                                                            <i class='fa fa-trash-o'></i> Delete
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href='edit_pro.php?e_id=$id'>
                                                            <i class='fa fa-pencil'></i> Edit
                                                        </a>
                                                    </td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                                <div>
                                    <h5 class="card-header">All Degree List</h5>
                                </div>
                                <div class="card-body">
                                    <table id="product_table" class="table table-bordered table-striped table-hover"
                                        style="width:100%; height:400px; color:#000;  text-align:center;">
                                        <thead>
                                            <tr id="table_row" style="text-align:center; font-size:18px ">
                                                <th>S.No</th>
                                                <th>Degree Name</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //query to get all products from database
                                            $sql1 = "SELECT * FROM Degree";

                                            //execute query
                                            $res1 = mysqli_query($con, $sql1);
                                            $sn1 = 0;
                                            while ($row = mysqli_fetch_array($res1)) {
                                                $id = $row['deg_id'];
                                                $deg_name = $row['deg_name'];
                                                $sn1 = $sn1 + 1;

                                                echo "<tr style='text-align:center; font-size:16px;'>
                                                            <td>$sn1</td>
                                                            <td>$deg_name</td>
                                                            <td>
                                                                <a href='manage_category.php?d_id=$id'>
                                                                    <i class='fa fa-trash-o'></i> Delete
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href='edit_deg.php?e_d_id=$id'>
                                                                    <i class='fa fa-pencil'></i> Edit
                                                                </a>
                                                            </td>
                                            </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div>
                                    <h5 class="card-header">All Special Category List</h5>
                                </div>
                                <div class="card-body">
                                    <table id="product_table" class="table table-bordered table-striped table-hover"
                                        style="width:100%; height:400px; color:#000;  text-align:center;">
                                        <thead>
                                            <tr id="table_row" style="text-align:center; font-size:18px ">
                                                <th>S.No</th>
                                                <th>Special Category Name</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //query to get all products from database
                                            $sql2 = "SELECT * FROM sp_category";

                                            //execute query
                                            $res2 = mysqli_query($con, $sql2);
                                            $sn2 = 0;
                                            while ($row = mysqli_fetch_array($res2)) {
                                                $id = $row['sp_id'];
                                                $sp_name = $row['sp_name'];
                                                $sn2 = $sn2 + 1;

                                                echo "<tr style='text-align:center; font-size:16px;'>
                                                                    <td>$sn2</td>
                                                                    <td>$sp_name</td>
                                                                    <td>
                                                                        <a href='manage_category.php?sp_id=$id'>
                                                                            <i class='fa fa-trash-o'></i> Delete
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href='edit_sp.php?e_sp_id=$id'>
                                                                            <i class='fa fa-pencil'></i> Edit
                                                                        </a>
                                                                    </td>
                                                    </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>








            <?php
            include('includes/_footer.php');
            ?>

            <?php
            if (isset($_GET['p_id'])) {

                $p_id = $_GET['p_id'];
                $q = "delete from profession where pro_id='$p_id'";
                $run = mysqli_query($con, $q);
                if ($run) {
                    echo "<script>window.open('manage_category.php','_self')</script>";
                }
            }

            ?>


            <?php
            if (isset($_GET['d_id'])) {

                $d_id = $_GET['d_id'];
                $q1 = "delete from degree where deg_id='$d_id'";
                $run1 = mysqli_query($con, $q1);
                if ($run1) {
                    echo "<script>window.open('manage_category.php','_self')</script>";
                }
            }

            ?>


            <?php
            if (isset($_GET['sp_id'])) {

                $sp_id = $_GET['sp_id'];
                $q2 = "delete from sp_category where sp_id='$sp_id'";
                $run2 = mysqli_query($con, $q2);
                if ($run2) {
                    echo "<script>window.open('manage_category.php','_self')</script>";
                }
            }

            ?>