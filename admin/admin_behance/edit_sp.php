<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>
<?php
if (isset($_GET['e_sp_id'])) {

    $id = $_GET['e_sp_id'];
    $sql = "SELECT * FROM sp_category where sp_id='$id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

    $pro_id = $row['pro_id'];
    $sp_name = $row['sp_name'];
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
                    <label for="professionname">Special Category Name</label>
                    <input type="text" class="form-control" id="professionname" name="sp_name"
                        value="<?php echo $sp_name; ?> ">
                </div>

                <button type="submit" class="btn btn-primary" name="sp_submit">Submit</button>
            </form>
        </div>
        </form>

        <?php
        include('includes/_footer.php');
        ?>

        <?php
        if (isset($_POST['sp_submit'])) {

            $pr_id = $_POST['pr_id'];
            $s_name = $_POST['sp_name'];
            $q = "update sp_category set pro_id='$pr_id',sp_name='$s_name' where sp_id='$id'";
            $run = mysqli_query($con, $q);

            if ($run) {
                echo "<script>window.open('manage_category.php','_self')</script>";
            }
        }

        ?>