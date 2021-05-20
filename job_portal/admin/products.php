<?php
include('includes/_header.php');

$category = '';
$brand_name = '';
$msg = '';


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

$category_id = '';
$brand_id = '';
$name = '';
$mrp = '';
$price = '';
$qty = '';
$image = '';
$short_desc    = '';
$description    = '';
$meta_title    = '';
$meta_description    = '';
$meta_keyword = '';

$msg = '';
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from ecom_product where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $category_id = $row['category_id'];
        $name = $row['name'];
        $mrp = $row['mrp'];
        $price = $row['price'];
        $qty = $row['qty'];
        $short_desc = $row['short_desc'];
        $description = $row['description'];
        $meta_title = $row['meta_title'];
        $meta_desc = $row['meta_desc'];
        $meta_keyword = $row['meta_keyword'];
        $status = $row['status'];
    } else {
        header('location:products.php');
        die();
    }
}


if (isset($_POST['submit'])) {
    $category_id = get_safe_value($con, $_POST['category_id']);
    $brand_id = get_safe_value($con, $_POST['brand_id']);
    $name = get_safe_value($con, $_POST['name']);
    $mrp = get_safe_value($con, $_POST['mrp']);
    $price = get_safe_value($con, $_POST['price']);
    $qty = get_safe_value($con, $_POST['qty']);
    $short_desc = get_safe_value($con, $_POST['short_desc']);
    $description = get_safe_value($con, $_POST['description']);
    $meta_title = get_safe_value($con, $_POST['meta_title']);
    $meta_desc = get_safe_value($con, $_POST['meta_desc']);
    $meta_keyword = get_safe_value($con, $_POST['meta_keyword']);

    $res = mysqli_query($con, "select * from ecom_product where name='$name'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
            } else {
                $msg = "Product already exist";
            }
        } else {
            $msg = "Product already exist";
        }


        // Warning: Undefined array key "id" in C:\xampp\htdocs\ecommerce\admin\product.php on line 96
        if ($_GET['id'] == 0) {
            if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
                $msg = "Please select only png,jpg and jpeg image formate";
            }
        } else {
            if ($_FILES['image']['type'] != '') {
                if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
                    $msg = "Please select only png,jpg and jpeg image formate";
                }
            }
        }
    }

    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            if ($_FILES['image']['name'] != '') {
                $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], PRODUCT_IMAGE_SERVER_PATH . $image);
                $update_sql = "update ecom_product set category_id='$category_id', brand_id='$brand_id', name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id='$id'";
            } else {
                $update_sql = "update ecom_product set category_id='$category_id',brand_id='$brand_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'";
            }
            mysqli_query($con, $update_sql);
        } else {
            $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], PRODUCT_IMAGE_SERVER_PATH . $image);
            mysqli_query($con, "INSERT INTO `ecom_product` (`category_id`, `brand_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`) VALUES ('$category_id', '$brand_id', '$name', '$mrp', '$price', '$qty', '$image', '$short_desc', '$description', '$meta_title', '$meta_description', '$meta_keyword',)");
        }
        header('location:products.php');
        die();
    }
}

?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">Add Products</h3>
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
                            <h5 class="card-header">Add Product</h5>
                        </div>
                        <div class="card-body card-block">
                            <form method="post" enctype="multipart/form-data" action="product.php">
                                <div class="form-group">
                                    <div class="form-group" style="width:100%;">
                                        <table>
                                            <tr>
                                                <td>Parent Category Name</td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name="parent_name" id='categoryNameList'
                                                        placeholder="Parent Category Name" class="form-control" required
                                                        value="<?php echo $category ?>"></td>
                                            </tr>

                                            <tr>
                                                <td><input type='hidden' name="category_id" id='categoryIdList'
                                                        class="form-control" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="form-group" style="width:100%;">
                                        <table>
                                            <tr>
                                                <td>Brand Name</td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name="brand_name" id='brandNameList'
                                                        placeholder="Brand Name" class="form-control" required
                                                        value="<?php echo $brand_name ?>"></td>
                                            </tr>

                                            <tr>
                                                <td><input type='hidden' name="brand_id" id='brandIdList'
                                                        class="form-control" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">Product Name</label>
                                        <input type="text" name="name" placeholder="Enter product name"
                                            class="form-control" required value="<?php echo $name ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="mrp" class=" form-control-label">MRP</label>
                                        <input type="text" name="mrp" placeholder="Enter product mrp"
                                            class="form-control" required value="<?php echo $mrp ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class=" form-control-label">Price</label>
                                        <input type="text" name="price" placeholder="Enter product price"
                                            class="form-control" required value="<?php echo $price ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="qty" class=" form-control-label">Qty</label>
                                        <input type="text" name="qty" placeholder="Enter qty" class="form-control"
                                            required value="<?php echo $qty ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class=" form-control-label">Image</label>
                                        <input type="file" name="image" class="form-control"
                                            <?php echo  $image_required ?>>
                                    </div>

                                    <div class="form-group">
                                        <label for="short-desc" class=" form-control-label">Short
                                            Description</label>
                                        <textarea name="short_desc" placeholder="Enter product short description"
                                            class="form-control" required><?php echo $short_desc ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Description</label>
                                        <textarea name="description" placeholder="Enter product description"
                                            class="form-control" required><?php echo $description ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta-title" class=" form-control-label">Meta Title</label>
                                        <textarea name="meta_title" required placeholder="Enter product meta title"
                                            class="form-control"><?php echo $meta_title ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta-description" class=" form-control-label">Meta
                                            Description</label>
                                        <textarea name="meta_desc" placeholder="Enter product meta description"
                                            class="form-control"><?php echo $meta_description ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta-keyword" class=" form-control-label">Meta Keyword</label>
                                        <textarea name="meta_keyword" required placeholder="Enter product meta keyword"
                                            class="form-control"><?php echo $meta_keyword ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button id="payment-button" name="submit" type="submit"
                                            class="btn btn-lg btn-info btn-block">
                                            <span id="payment-button-amount">Submit</span>
                                        </button>
                                    </div>

                                    <div class="form-group">
                                        <div class="field_error"><?php echo $msg ?></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('includes/_footer.php');
        ?>
        <script src="assets\vendor\custom-js\search_category.js"></script>
        <script src="assets\vendor\custom-js\search_brand.js"></script>