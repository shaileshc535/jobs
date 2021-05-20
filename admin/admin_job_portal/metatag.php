<?php
include('includes/_header.php');
?>
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="section-block" id="basicform">
                                    <h3 class="section-title text-center">Add MetaTag</h3>
                              </div>
                              <div class="card">
                                    <div>
                                          <h5 class="card-header">Create Metatags</h5>
                                    </div>
                                    <div class="card-body">
                                          <form action="#" method="POST">
                                                <div class="form-group">
                                                      <label class="col-form-label">Page</label>
                                                      <select name="meta_url" class="form-control" size="1" required>
                                                            <option value="">Select Page</option>
                                                            <?php
                                                            include_once('../assets/_dbconnect.php');
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
                                                            placeholder="Meta Tag Name" required>
                                                </div>

                                                <div class="form-group">
                                                      <label for="inputText3" class="col-form-label">Meta
                                                            Key-Words:</label>
                                                      <textarea name="meta_keywords" type="text" class="form-control"
                                                            placeholder="Meta Tag Keywords" required></textarea>
                                                </div>

                                                <div class="form-group">
                                                      <label for="inputText3" class="col-form-label">Meta
                                                            Description:</label>
                                                      <textarea name="meta_description" type="text" class="form-control"
                                                            placeholder="Meta Tag Description" required></textarea>
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
    if(isset($_POST['submit'])) {
          include_once('../assets/_dbconnect.php');

        // get the data from the form
        $meta_url = $_POST['meta_url'];
        $meta_title = $_POST['meta_title'];
        $meta_keywords = addslashes($_POST['meta_keywords']);
        $meta_description = addslashes($_POST['meta_description']);

        if($meta_url != '')
        {
             $sql = "INSERT INTO `metatag`(`meta_url`, `meta_title`, `meta_keywords`, `meta_description`) VALUES ('$meta_url','$meta_title','$meta_keywords','$meta_description')";

             $res = mysqli_query($con, $sql);

             echo '<script>
                  alert("Meta Tag Added Successfully.);
                  window.location="manage_metatag.php";
             </script>';

        }else{
              echo "Failed to add Meta tag";
        }
    }
    ?>


            <?php
        include('includes/_footer.php');
        ?>