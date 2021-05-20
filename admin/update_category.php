<?php
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
                            <h5 class="card-header">Update Category Details</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            //check wether the id is set or not
                            if (isset($_GET['id'])) {
                                // get the id & all othr details
                                $id = $_GET['id'];
                                //create sql query
                                $sql = "SELECT * FROM ecom_categories WHERE id=$id";

                                //execute the query
                                $res = mysqli_query($con, $sql);

                                //count the roe to check wether id is valid or not
                                $count = mysqli_num_rows($res);

                                if ($count == 1) {
                                    //get all the data
                                    $row = mysqli_fetch_assoc($res);
                                    $id = $row['id'];
                                    $category = $row['category'];
                                    $parent_id = $row['parent_id'];
                                    $parent_category = $row['parent_category'];
                                } else {
                                    //redirect to manage_brand with message
                                    $_SESSION['no-category-found'] = "<div class='error'>Category Not Found.</div>";
                                    header('location:' . $SITEURL . 'admin/manage_category.php');
                                }
                            } else {
                                //redirect to manage_category page
                                // header('location:' . $SITEURL . 'admin/manage_category.php');
                            }

                            ?>
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td>Parent Category Name</td>
                                        </tr>
                                        <tr>
                                            <td><input type='text' name="category_name" id='categoryNameList'
                                                    class="form-control" value="<?php echo $parent_category; ?>"></td>
                                        </tr>

                                        <tr>
                                            <td>Parent Category Id</td>
                                        </tr>

                                        <tr>
                                            <td><input type='number' name="category_id" id='categoryIdList'
                                                    class="form-control" value="<?php echo $parent_id; ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Category Name:</label>
                                    <input id="brand_name" name="category" type="text" class="form-control"
                                        placeholder="New Category Name" value="<?php echo $category; ?>" required>
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
            // $category = $_POST['category_name'];
            $parent_id = $_POST['category_id'];
            $category = $_POST['category'];

            $check = mysqli_query($con, "SELECT * FROM ecom_categories WHERE category='$category' AND parent_id='$parent_id'");

            if (mysqli_num_rows($check) > 0) {
                echo "Category Already Exist";
            } else {

                // sql query to save the data in database
                $sql2 = "UPDATE ecom_categories SET category='$category', parent_id='$parent_id' WHERE id='$id'";

                $res2 = mysqli_query($con, $sql2);
                if ($res2 == TRUE) {
                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="success">Category Updated Succesfully.</div>';
                    // redirect page to manage admin
                    // header('location:admin/manage_brand.php');
                } else {

                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="error">Category Did not Update.</div>';
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