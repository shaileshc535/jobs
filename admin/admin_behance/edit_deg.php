<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>
<?php
if (isset($_GET['e_d_id'])) {

    $id = $_GET['e_d_id'];
    $sql = "SELECT * FROM degree where deg_id='$id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

    $pro_id = $row['pro_id'];
    $deg_name = $row['deg_name'];
}
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <form action="" method="post">
                <div class="form-group">
                    <label for="professionid">Profession ID</label>
                    <input type="text" class="form-control" id="professionid" name="pr_id"
                        value="<?php echo $pro_id; ?> ">
                </div>
                <div class="form-group">
                    <label for="professionname">Degree Name</label>
                    <input type="text" class="form-control" id="professionname" name="d_name"
                        value="<?php echo $deg_name; ?> ">
                </div>

                <button type="submit" class="btn btn-primary" name="d_submit">Submit</button>
            </form>
        </div>
        </form>

        <?php
        include('includes/_footer.php');
        ?>

        <?php
        if (isset($_POST['d_submit'])) {

            $pr_id = $_POST['pr_id'];
            $deg_name = $_POST['d_name'];
            $q = "update degree set pro_id='$pr_id',deg_name='$deg_name' where deg_id='$id'";
            $run = mysqli_query($con, $q);
            
            if ($run) {
                echo "<script>window.open('manage_category.php','_self')</script>";
            }
        }

        ?>