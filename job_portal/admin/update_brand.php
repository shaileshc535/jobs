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

if (isset($_SESSION['no-brand-found'])) {
    echo $_SESSION['no-brand-found'];
    unset($_SESSION['no-brand-found']);
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
                            <h5 class="card-header">Update Brand Details</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            //check wether the id is set or not
                            if (isset($_GET['id'])) {
                                // get the id & all othr details
                                $id = $_GET['id'];
                                //create sql query
                                $sql = "SELECT * FROM ecom_brand WHERE id=$id";

                                //execute the query
                                $res = mysqli_query($con, $sql);

                                //count the roe to check wether id is valid or not
                                $count = mysqli_num_rows($res);

                                if ($count == 1) {
                                    //get all the data
                                    $row = mysqli_fetch_assoc($res);
                                    $category_id = $row['category_id'];
                                    $category_name = $row['category_name'];
                                    $brand_name = $row['brand_name'];
                                    $status = $row['status'];
                                } else {
                                    //redirect to manage_brand with message
                                    $_SESSION['no-brand-found'] = "<div class='error'>Category Not Found.</div>";
                                    header('location:' . $SITEURL . 'admin/manage_brand.php');
                                }
                            } else {
                                //redirect to manage_category page
                                header('location:' . $SITEURL . 'admin/manage_brand.php');
                            }

                            ?>
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td> Category Name</td>
                                        </tr>
                                        <tr>
                                            <td><input type='text' name="parent_name" id='categoryNameList'
                                                    class="form-control" value="<?php echo $category_name; ?>"></td>
                                        </tr>

                                        <tr>
                                            <td><input type='hidden' name="parent_id" id='categoryIdList'
                                                    class="form-control" value="<?php echo $category_id; ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Brand Name:</label>
                                    <input id="brand_name" name="brand" type="text" class="form-control"
                                        placeholder="New Brand Name" value="<?php echo $brand_name; ?>" required>
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
                $sql2 = "UPDATE ecom_brand SET category_id='$parent_id', category_name='$parent_name', brand_name='$brand' WHERE id='$id'";

                $res2 = mysqli_query($con, $sql2);
                if ($res2 == TRUE) {
                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="success">Brand Updated Succesfully.</div>';
                    // redirect page to manage admin
                    // header('location:admin/manage_brand.php');
                } else {

                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="error">Brand Did not Update.</div>';
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