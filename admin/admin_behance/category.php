<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>Categories</h1>
        </div>

        <div class="container">
            <div class="row">
                <!-- ========================FORM FOR  PROFESSION===========================-->
                <div class="col-md-4">
                    <h3>For Profession</h3>
                    <form action="category.php" method="post">
                        <div class="form-group">
                            <label for="professionid">Profession ID</label>
                            <input type="text" class="form-control" id="professionid" placeholder="Enter Professsion ID"
                                name="pr_id">
                        </div>
                        <div class="form-group">
                            <label for="professionname">Profession Name</label>
                            <input type="text" class="form-control" id="professionname" placeholder="Profession Name"
                                name="pr_name">
                        </div>

                        <button type="submit" class="btn btn-primary" name="p_submit">Submit</button>
                    </form>
                </div>

                <!-- ========================FORM FOR  DEGREE===========================-->
                <div class="col-md-4">
                    <h3>For Degree</h3>
                    <form action="category.php" method="post">
                        <div class="form-group">
                            <label for="pdegreeid">Profession ID</label>
                            <input type="text" class="form-control" id="pdegreeid" placeholder="Enter Profession ID"
                                name="pr_d_id">
                        </div>
                        <div class="form-group">
                            <label for="degreename">Profession Name</label>
                            <input type="text" class="form-control" id="degreename" placeholder="Degree Name"
                                name="deg_name">
                        </div>

                        <button type="submit" class="btn btn-primary" name="d_submit">Submit</button>
                    </form>
                </div>


                <!-- ========================FORM FOR  SPECIAL CATEGORY===========================-->
                <div class="col-md-4">
                    <h3>For Special Category</h3>
                    <form action="category.php" method="post">
                        <div class="form-group">
                            <label for="pspecialid">Profession ID</label>
                            <input type="text" class="form-control" id="pspecialid" placeholder="Enter Profession ID"
                                name="pr_s_id">
                        </div>
                        <div class="form-group">
                            <label for="specialname">Special Category Name</label>
                            <input type="text" class="form-control" id="specialname" placeholder="Profession Name"
                                name="sp_name">
                        </div>

                        <button type="submit" class="btn btn-primary" name="s_submit">Submit</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- ========================FORM FOR  ===========================-->
                <div class="col-md-4">
                    <h3>For Degree</h3>
                    <form action="category.php" method="post">
                        <div class="form-group">
                            <label for="pdegreeid">Profession ID</label>
                            <input type="text" class="form-control" id="pdegreeid" placeholder="Enter Profession ID"
                                name="pr_d_id">
                        </div>
                        <div class="form-group">
                            <label for="degreename">Profession Name</label>
                            <input type="text" class="form-control" id="degreename" placeholder="Degree Name"
                                name="deg_name">
                        </div>

                        <button type="submit" class="btn btn-primary" name="d_submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include('includes/_footer.php');
        ?>
    </div>

    <?php
    if (isset($_POST['p_submit'])) {

        $id = $_POST['pr_id'];
        $pr_name = $_POST['pr_name'];

        $query = "insert into profession (pro_id,pro_name) values('$id','$pr_name')";
        $run = mysqli_query($con, $query);
        if ($run) {
            echo "<script>alert('Successfull Updated')</script>";
            // echo "<script>window.open('manage_category.php','_self')</script>";
        }
    }

    if (isset($_POST['d_submit'])) {

        $id1 = $_POST['pr_d_id'];
        $deg_name = $_POST['deg_name'];

        $query = "insert into degree (pro_id,deg_name) values('$id1','$deg_name')";
        $run = mysqli_query($con, $query);

        if ($run) {
            echo "<script>alert('Successfull Updated')</script>";
            // echo "<script>window.open('manage_category.php','_self')</script>";
        }
    }


    if (isset($_POST['s_submit'])) {

        $id = $_POST['pr_s_id'];
        $sp_name = $_POST['sp_name'];

        $query = "insert into sp_category (pro_id,sp_name) values('$id','$sp_name')";
        $run = mysqli_query($con, $query);

        // if ($run) {
        //     echo "<script>alert('Successfull Updated')</script>";
        //     echo "<script>window.open('manage_category.php','_self')</script>";
        // }
    }

    ?>