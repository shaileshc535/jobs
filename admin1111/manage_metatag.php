<?php
include('includes/_header.php');
include('./assets/_functions.php');

if (isset($_GET['type']) && $_GET['type'] != '') {
      $type = get_safe_value($con, $_GET['type']);
      if ($type == 'delete') {
            $id = get_safe_value($con, $_GET['id']);
            $delete_sql = "delete from metatag where id='$id'";
            mysqli_query($con, $delete_sql);
      }
}
?>
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="section-block" id="basicform">
                                    <h3 class="section-title text-center">Meta Tags Details Section</h3>
                              </div>

                              <div class="card">
                                    <div>
                                          <h5 class="card-header">Meta Tags Details</h5>
                                    </div>

                                    <div class="card-body">
                                          <table id="job_category_table"
                                                class="table table-bordered table-striped table-hover"
                                                style="width:100%; height:400px; color:#000;  text-align:center;">

                                                <thead>
                                                      <tr class="table_row" style="text-align:center; font-size:18px ">
                                                            <th>S.No</th>
                                                            <th>Page Title</th>
                                                            <th>Meta URL</th>
                                                            <th>Meta Key-Words</th>
                                                            <th>Meta Description</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>

                                                <tbody>
                                                      <?php

                                                      $sql = " SELECT * FROM metatag";

                                                      //execute query
                                                      $res = mysqli_query($con, $sql);

                                                      //count rows
                                                      $row = mysqli_num_rows($res);

                                                      //create serial number verable
                                                      $sn = 1;

                                                      if ($row > 0) {
                                                            //we have data in database
                                                            //get the data & display
                                                            while ($data = mysqli_fetch_assoc($res)) {
                                                                  $id = $data['id'];
                                                                  $meta_url = $data['meta_url'];
                                                                  $meta_title = $data['meta_title'];
                                                                  $meta_keywords = $data['meta_keywords'];
                                                                  $meta_description = $data['meta_description'];

                                                                  $sql2 = "SELECT page_url FROM meta_pages WHERE id='$meta_url'";
                                                                  $res2 = mysqli_query($con, $sql2);
                                                                  $row2 = mysqli_num_rows($res2);
                                                                  $data2 = mysqli_fetch_assoc($res2);

                                                                  $page_url = $data2['page_url'];
                                                      ?>

                                                      <tr style="text-align:center; font-size:16px; ">
                                                            <td><?php echo $sn++; ?></td>
                                                            <td><?php echo $meta_title; ?></td>
                                                            <td><?php echo $page_url; ?></td>
                                                            <td><?php echo $meta_keywords; ?></td>
                                                            <td><?php echo $meta_description; ?></td>
                                                            <td>
                                                                  <?php
                                                                              echo "<span class='badge btn btn-lg btn-success badge-edit'><a href='update_metatags.php?id=" . $data['id'] . "'>Edit</a></span>&nbsp;";

                                                                              echo "<span class='badge btn btn-lg btn-danger badge-delete'><a href='?type=delete&id=" . $data['id'] . "'>Delete</a></span>";
                                                                              ?>
                                                            </td>
                                                      </tr>
                                                      <?php
                                                            }
                                                      }
                                                      ?>
                                                </tbody>



                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>


            <script>
            $(document).ready(function() {
                  $('#employer_table').DataTable();

            });
            </script>
            <?php
            include('includes/_footer.php');
            ?>