<?php
include('includes/_header.php');
session_start();
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}

//check wether the id is set or not
if (isset($_GET['id'])) {
      // get the id & all othr details
      $id = $_GET['id'];
      
      $sql = " SELECT * FROM metatag where id=$id";

      //execute query
      $res = mysqli_query($con, $sql);

      //count rows
      $count = mysqli_num_rows($res);
                                      
      if ($count == 1) {
            //get all the data
            $row = mysqli_fetch_assoc($res);
            $id = $row['id'];
            $meta_url = $row['meta_url'];
            $meta_title = $row['meta_title'];
            $meta_keywords = $row['meta_keywords'];
            $meta_description = $row['meta_description'];

            $sql2 = "SELECT page_name FROM meta_pages WHERE id='$meta_url'";
            $res2 = mysqli_query($con, $sql2);
            $row2 = mysqli_num_rows($res2);
            $data2 = mysqli_fetch_assoc($res2);

            $page_name = $data2['page_name'];
            }
            else
            {
            //redirect to manage_metatag with message
            echo '<script>
                  alert("Meta Tag Details Not Found.);
                  window.location="http://materiallibrary.co.in/admin/manage_metatag.php";
             </script>';
            }
      }
?>

<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="section-block" id="basicform">
                                    <h3 class="section-title text-center">Edit/Update MetaTag</h3>
                              </div>
                              <div class="card">
                                    <div>
                                          <h5 class="card-header">Edit/Update Metatags</h5>
                                    </div>
                                    <div class="card-body">
                                          <form action="#" method="POST">
                                                <div class="form-group">
                                                      <label class="col-form-label">Page</label>
                                                      <select name="meta_url" class="form-control" size="1" required>
                                                            <option value=""><?php echo $page_name; ?></option>
                                                            <?php
                                                            include_once('./assets/_dbconnect.php');
                                                            $menulist = "SELECT * FROM meta_pages WHERE page_status='Enable'";
                                                            $menures = mysqli_query($con, $menulist);
                                                            while($menudata = mysqli_fetch_assoc($menures))
                                                            {
                                                            ?>
                                                            <option value="<?php echo $menudata['id'];?>">
                                                                  <?php echo $menudata['page_name'];?></option>
                                                            <?php
                                                            }
                                                      ?>
                                                      </select>
                                                </div>

                                                <div class="form-group">
                                                      <label for="inputText3" class="col-form-label">Meta Title:</label>
                                                      <input name="meta_title" type="text" class="form-control"
                                                            placeholder="Meta Tag Name"
                                                            value="<?php echo $meta_title; ?>" required>
                                                </div>

                                                <div class="form-group">
                                                      <label for="inputText3" class="col-form-label">Meta
                                                            Key-Words:</label>
                                                      <textarea name="meta_keywords" type="text" class="form-control"
                                                            placeholder="Meta Tag Keywords"
                                                            required><?php echo $meta_keywords; ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                      <label for="inputText3" class="col-form-label">Meta
                                                            Description:</label>
                                                      <textarea name="meta_description" type="text" class="form-control"
                                                            placeholder="Meta Tag Description"
                                                            required><?php echo $meta_description; ?></textarea>
                                                </div>

                                                <button id="payment-button" name="submit" type="submit" value="submit"
                                                      class="btn btn-lg btn-info btn-block">
                                                      <span id="payment-button-amount">Submit</span>
                                                </button>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <?php
            
            if (isset($_POST['submit'])) {

                  // get the data from the form
                  $meta_url = $_POST['meta_url'];
                  $meta_title = $_POST['meta_title'];
                  $meta_keywords = addslashes($_POST['meta_keywords']);
                  $meta_description = addslashes($_POST['meta_description']);

                    // sql query to save the data in database
                  $sql3 = "UPDATE metatag SET meta_url='$meta_url', meta_title='$meta_title', meta_keywords='$meta_keywords', meta_description='$meta_description' WHERE id='$id'";

                  $res3 = mysqli_query($con, $sql3);
                  if ($res3 == TRUE) {
                        // create session veriable to display message
                        // $_SESSION['add'] = '<div class="success">Job Category Updated Succesfully.</div>';
                        // redirect page to manage metatags
                        // header('location:manage_metatag.php');
                        echo "<script>window.location.href = ('http://materiallibrary.co.in/admin/manage_metatag.php');</script>";

                  } else {

                        // create session veriable to display message
                        $_SESSION['add'] = '<div class="error">Job Category Did not Update.</div>';
                        // redirect page to manage admin
                        header("location:http://materiallibrary.co.in/admin/update_job_categories.php');
                  }
            }

            ?>

            <?php
        include('includes/_footer.php');
        ?>