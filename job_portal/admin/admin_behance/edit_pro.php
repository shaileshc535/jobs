<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>
<?php
if (isset($_GET['e_id'])) {

    $id = $_GET['e_id'];
    $sql = "SELECT * FROM profession where pro_id='$id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

    $pro_name = $row['pro_name'];
}
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <form action="" method="post">
                <div class="form-group">
                    <label for="professionid">Profession ID</label>
                    <input type="text" class="form-control" id="professionid" name="pr_id" value="<?php echo $id; ?> ">
                </div>
                <div class="form-group">
                    <label for="professionname">Profession Name</label>
                    <input type="text" class="form-control" id="professionname" name="pr_name"
                        value="<?php echo $pro_name; ?> ">
                </div>

                <button type="submit" class="btn btn-primary" name="p_submit">Submit</button>
            </form>
        </div>
        </form>

        <?php
        include('includes/_footer.php');
        ?>

        <?php
        if (isset($_POST['p_submit'])) {

            $pr_id = $_POST['pr_id'];
            $pr_name = $_POST['pr_name'];
            $q = "update profession set pro_id='$pr_id',pro_name='$pr_name' where pro_id='$id'";
            $run = mysqli_query($con, $q);

            if ($run) {
                echo "<script>window.open('manage_category.php','_self')</script>";
            }
        }

        ?>