<?php
// require('assets/_functions.php');
// require('assets/_dbconnect.php');
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

<!-- ===========================start add category=============================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">Add Categories</h3>
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
                            <h5 class="card-header">Add Category</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td>Parent Category Name</td>
                                        </tr>
                                        <tr>
                                            <td><input type='text' name="parent_name" id='categoryNameList'
                                                    class="form-control" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>Parent Category Id</td>
                                        </tr>

                                        <tr>
                                            <td><input type='number' name="parent_id" id='categoryIdList'
                                                    class="form-control" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">New Category Name:</label>
                                    <input id="category_name" name="category" type="text" class="form-control"
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

        <?php
        if (isset($_POST['submit'])) {

            // get the data from the form 
            $parent_id = $_POST['parent_id'];
            $parent_category = $_POST['parent_name'];
            $category = $_POST['category'];

            $check = mysqli_query($con, "SELECT * FROM ecom_categories WHERE category='$category' AND parent_id='$parent_id'");

            if (mysqli_num_rows($check) > 0) {
                echo "Category Already Exist";
            } else {

                // sql query to save the data in database
                $sql = "INSERT INTO `ecom_categories` (`category`, `parent_id`, `parent_category`) VALUES ('$category', '$parent_id', '$parent_category')";

                // exicuting quary & saving data into database
                $res = mysqli_query($con, $sql);
                if ($res == TRUE) {
                    // create session veriable to display message
                    $_SESSION['add'] = '<div class="success">Category Added Succesfully.</div>';
                    // redirect page to manage admin
                    // header("location:" . $SITEURL . 'admin/manage_categories.php');
                } else {
                    header("location" . $SITEURL . 'admin/manage_categories.php');
                }
            }
        }
        ?>

        <?php
        include('includes/_footer.php');
        ?>
        <script>
        $(function() {
            $("#categoryNameList").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "category_search.php",
                        type: "post",
                        dataType: "json",
                        data: {
                            search: request.term,
                        },
                        success: function(data) {
                            response(data);
                        },
                    });
                },
                select: function(event, ui) {
                    $("#categoryNameList").val(ui.item.label); // display the selected text
                    $("#categoryIdList").val(ui.item.value); // save selected id to input
                    return false;
                },
                focus: function(event, ui) {
                    $("#categoryNameList").val(ui.item.label);
                    $("#categoryIdList").val(ui.item.value);
                    return false;
                },
            });
        });

        function split(val) {
            return val.split(/,\s*/);
        }

        function extractLast(term) {
            return split(term).pop();
        }
        </script>