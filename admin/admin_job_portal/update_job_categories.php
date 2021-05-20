<?php
$category = '';
$msg = '';
session_start();
if (isset($_SESSION['no-category-found'])) {
    echo $_SESSION['no-category-found'];
    unset($_SESSION['no-category-found']);
}
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}

include('includes/_header.php');
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <label>
                            <?php
                            if ($msg != '') {
                                echo $msg;
                            }
                            ?>
                        </label>
                        <div>
                            <h5 class="card-header">Update Job Categories</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            //check wether the id is set or not
                            if (isset($_GET['id'])) {
                                // get the id & all othr details
                                $id = $_GET['id'];
                                //create sql query
                                $sql = "SELECT * FROM job_industry_type WHERE id=$id";

                                //execute the query
                                $res = mysqli_query($con, $sql);

                                //count the roe to check wether id is valid or not
                                $count = mysqli_num_rows($res);

                                if ($count == 1) {
                                    //get all the data
                                    $row = mysqli_fetch_assoc($res);
                                    $id = $row['id'];
                                    $industry_type = $row['industry_type'];
                                } else {
                                    //redirect to manage_brand with message
                                    $_SESSION['no-category-found'] = "<div class='error'>Job Category Not Found.</div>";
                                    header('location:' . $SITEURL . 'admin/manage_category.php');
                                }
                            }
                            ?>
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Job Category Name:</label>
                                    <input name="industry_type" type="text" class="form-control"
                                        value="<?php echo $industry_type; ?>" required>
                                </div>
                                <button name="submit" type="submit" value="submit"
                                    class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Submit</span>
                                </button>
                                <div class="field_error"><?php echo $msg ?></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {

            // get the data from the form
            $industry_type = $_POST['industry_type'];

            $check = mysqli_query($con, "SELECT * FROM job_industry_type WHERE industry_type='$industry_type'");

            if (mysqli_num_rows($check) > 0) {
                echo "Job Category Already Exist";
            } else {

                // sql query to save the data in database
                $sql2 = "UPDATE job_industry_type SET industry_type='$industry_type' WHERE id='$id'";

                $res2 = mysqli_query($con, $sql2);
                if ($res2 == TRUE) {
                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="success">Job Category Updated Succesfully.</div>';
                    // redirect page to manage admin
                    // header('location:admin/manage_brand.php');
                } else {

                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="error">Job Category Did not Update.</div>';
                    // redirect page to manage admin
                    header("location" . $SITEURL . 'job_portal/job_portal_admin/update_job_categories.php');
                }
            }
        }
        ?>

        <?php
        include('includes/_footer.php');
        ?>