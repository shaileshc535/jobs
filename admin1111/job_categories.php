<?php
session_start();
$category = '';
$msg = '';
// session_start();

// Warning: include(): Failed opening '../assets/_function.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\git_repo\admin\admin_job_portal\includes\_header.php on line 3


if (isset($_SESSION['upload'])) {
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
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
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">Add Categories</h3>
                    </div>
                    <div class="card">
                        <div>
                            <h5 class="card-header">Create Job Categories</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">New Category Name:</label>
                                    <input name="industry_type" type="text" class="form-control"
                                        placeholder="New Category Name" required>
                                </div>
                                <button id="payment-button" name="submit" type="submit" value="submit"
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
    </div>

    <?php
    if (isset($_POST['submit'])) {

        // get the data from the form
        $industry_type = $_POST['industry_type'];

        $check = mysqli_query($con, "SELECT * FROM job_industry_type WHERE industry_type='$industry_type'");

        if (mysqli_num_rows($check) > 0) {
            echo "Category Already Exist";
        } else {

            // sql query to save the data in database
            $sql = "INSERT INTO `job_industry_type` (`industry_type`) VALUES ('$industry_type')";

            // exicuting quary & saving data into database
            $res = mysqli_query($con, $sql);
            if ($res == TRUE) {
                // create session veriable to display message
                $_SESSION['add'] = '<div class="success">Category Added Succesfully.</div>';
                // redirect page to manage admin
                // header("location:" . $SITEURL . 'job_portal/job_portal_admin/manage_job_categories.php');
            } else {

                // create session veriable to display message
                // $_SESSION['add'] = '<div class="error">Category not Added Succesfully.</div>';
                // redirect page to manage admin
                header("location:http://materiallibrary.co.in/admin/job_categories.php");
            }
        }
    }
    ?>

    <?php
    include('includes/_footer.php');
    ?>