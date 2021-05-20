<?php
$query5 = mysqli_query($con, "SELECT * FROM job_company WHERE `user_id` ='$id'");
$num5 = mysqli_num_rows($query5);
$res5 = mysqli_fetch_array($query5);
if (isset($_POST['upload'])) {
      $profile_image = $_FILES['profile_image']['name'];
      $file_type = $_FILES['profile_image']['type'];
      $tempname = $_FILES['profile_image']['tmp_name'];
      $randome = rand(0, 100000);
      $ext = pathinfo($profile_image, PATHINFO_EXTENSION);
      $rename = 'Upload' . date('Ymd') . $randome;
      $newname = $rename . '.' . $ext;
      $folder = "profile_image/employer_logo/" . $_FILES['profile_image']['name'];

      if (move_uploaded_file($tempname, $folder . $newname)) {
            $dp = $folder . $newname;
            $update = "UPDATE job_company SET `logo`='$dp' WHERE `user_id`='$id'";
            mysqli_query($con, $update);
            header('location:http://materiallibrary.co.in/employer-dashboard.php');
      }
}
?>

<aside class="careerfy-column-3">
      <div class="careerfy-typo-wrap">
            <div class="careerfy-employer-dashboard-nav">
                  <figure>
                        <?php if ($res5['logo'] != NULL) { ?>
                        <a class="employer-dashboard-thumb"><img id="profileImage" src="<?php echo $res5['logo']; ?> "
                                    alt=""></a>
                        <?php } else {
                        ?>
                        <a class="employer-dashboard-thumb"><img id="profileImage"
                                    src="profile_image\employer_logo\default.jpg " alt=""></a>
                        <?php }

                        ?>
                        <figcaption>
                              <div class="careerfy-fileUpload">

                                    <div class="careerfy-fileUpload">
                                          <form method="POST" enctype="multipart/form-data">
                                                <!-- <span><i  class="careerfy-icon careerfy-add"></i> Upload Photo</span> -->
                                                <input id="imageUpload" type="file" method="POST"
                                                      class="careerfy-upload" name="profile_image">
                                                <span><i class="careerfy-icon careerfy-add"></i> Save</span>
                                                <input id="imageUpload" type="submit" method="POST"
                                                      class="careerfy-upload" name="upload">
                                          </form>
                                    </div>

                              </div>
                              <h2><?php echo $res5['company_name'] ?></h2>
                        </figcaption>


                        <script>
                        $("#profileImage").click(function(e) {
                              $("#imageUpload").click();
                        });

                        function fasterPreview(uploader) {
                              if (uploader.files && uploader.files[0]) {
                                    $('#profileImage').attr('src',
                                          window.URL.createObjectURL(uploader.files[0]));
                              }
                        }

                        $("#imageUpload").change(function() {
                              fasterPreview(this);
                        });
                        </script>
                  </figure>
                  <ul>
                        <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                                    Profile</a></li>
                        <?php
                        if ($res5['status'] == 1) {

                        ?>
                        <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-briefcase"></i> Manage
                                    Jobs</a></li>



                        <li><a href="employer-dashboard-newjob"><i class="careerfy-icon careerfy-add"></i>
                                    Post a New Job</a></li>

                        <?php } else {

                        ?>
                        <li class="disable"><a href="#"><i class="careerfy-icon careerfy-add"></i>
                                    Post a New Job</a></li>

                        <?php
                        }
                        ?>
                        <li><a href="employer-dashboard-changed-password.php?id=<?php echo $id; ?>"><i
                                          class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                        </li>

                        <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i>
                                    Logout</a></li>

                  </ul>
            </div>
      </div>
</aside>

<style>
.disable {
      pointer-events: none;
      cursor: not-allowed;
      opacity: 0.5;
}
</style>