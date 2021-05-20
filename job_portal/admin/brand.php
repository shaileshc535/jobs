<?php
$brand = '';
$category = '';
$msg = '';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:' . $SITEURL . 'admin/sign_in.php');
    exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}

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
                        <h3 class="section-title text-center">Add New Brands</h3>
                    </div>
                    <div class="card">
                        <label>
                            <?php
                            if ($msg != '') {
                                echo $msg;
                            }
                            ?>
                        </label>
                        <div>
                            <h5 class="card-header">Add Brand</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td> Category Name</td>
                                        </tr>
                                        <tr>
                                            <td><input type='text' name="parent_name" id='categoryNameList'
                                                    class="form-control" required value="<?php echo $category ?>"></td>
                                        </tr>

                                        <tr>
                                            <td><input type='hidden' name="parent_id" id='categoryIdList'
                                                    class="form-control" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Brand Name:</label>
                                    <input id="brand_name" name="brand" type="text" class="form-control"
                                        placeholder="New Brand Name" required>
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

        <?php
        if (isset($_POST['submit'])) {

            // get the data from the form 
            $parent_name = $_POST['parent_name'];
            $parent_id = $_POST['parent_id'];
            $brand = $_POST['brand'];

            $check = mysqli_query($con, "SELECT * FROM ecom_brand WHERE brand_name='$brand' AND category_id='$parent_id'");

            if (mysqli_num_rows($check) > 0) {
                echo "Brand Already Exist";
            } else {

                // sql query to save the data in database
                $sql = "INSERT INTO `ecom_brand` (`category_id`, `category_name`, `brand_name`) VALUES ('$parent_id', '$parent_name', '$brand')";

                // exicuting quary & saving data into database
                $res = mysqli_query($con, $sql);
                if ($res == TRUE) {
                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="success">Brand Added Succesfully.</div>';
                    // redirect page to manage admin
                    // header("location:" . $SITEURL . 'admin/manage_brand.php');
                } else {

                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="error">Brand Did not Add.</div>';
                    // redirect page to manage admin
                    header("location" . $SITEURL . 'admin/brand.php');
                }
            }
        }
        ?>


        <?php
        include('includes/_footer.php');
        ?>
        <script src="assets\vendor\custom-js\seach_category.js"></script>