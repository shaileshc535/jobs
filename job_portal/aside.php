<?php

$query = mysqli_query($con, "SELECT * FROM job_seeker_details WHERE `user_id` ='$id'");
$num = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);
if (isset($_POST['upload'])) {
      $profile_image = $_FILES['profile_image']['name'];
      $file_type = $_FILES['profile_image']['type'];
      $tempname = $_FILES['profile_image']['tmp_name'];
      $randome = rand(0, 100000);
      $ext = pathinfo($profile_image, PATHINFO_EXTENSION);
      $rename = 'Upload' . date('Ymd') . $randome;
      $newname = $rename . '.' . $ext;
      $folder = "profile_image/candidate/images/" . $_FILES['profile_image']['name'];

      if (move_uploaded_file($tempname, $folder . $newname)) {
            $dp = $folder . $newname;
            $update = "UPDATE job_seeker_details SET `dp`='$dp' WHERE `user_id`='$id'";
            mysqli_query($con, $update);
            header('location:candidate-dashboard-profile-seting');
      }
}

?>
<aside class="careerfy-column-3">
      <div class="careerfy-typo-wrap">
            <div class="careerfy-employer-dashboard-nav">
                  <figure>
                        <?php if ($res['dp'] != NULL) { ?>
                        <a class="employer-dashboard-thumb"><img id="profileImage" src="<?php echo $res['dp']; ?> "
                                    alt=""></a>
                        <?php } else {
                        ?>
                        <a class="employer-dashboard-thumb"><img id="profileImage"
                                    src="profile_image/candidate_images/default.jpg " alt=""></a>
                        <?php }

                        ?>
                        <figcaption>
                              <div class="careerfy-fileUpload">

                                    <div class="careerfy-fileUpload">
                                          <form method="POST" enctype="multipart/form-data">
                                                <!-- <span><i  class="careerfy-icon careerfy-add"></i> Upload Photo</span> -->
                                                <input id="imageUpload" type="file" method="POST"
                                                      class="careerfy-upload" name="profile_image" />
                                                <span><i class="careerfy-icon careerfy-add"></i> Save</span>
                                                <input id="imageUpload" type="submit" method="POST"
                                                      class="careerfy-upload" name="upload" />
                                          </form>
                                    </div>

                              </div>
                              <h2><?php echo $res['fname'] . ' ' . $res['lname'] ?></h2>
                              <span class="careerfy-dashboard-subtitle"><?php echo $res['profession']; ?></span>
                        </figcaption>
                  </figure>
                  <ul>
                        <li class="active"><a href="candidate-dashboard-profile-seting"><i
                                          class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                        <?php if ($res['status'] == 0) { ?>
                        <li><a href="candidate-dashboard-resume"><i class="careerfy-icon careerfy-resume"></i> My
                                    Resume</a></li>
                        <li><a href="candidate-dashboard-saved-jobs"><i class="careerfy-icon careerfy-heart"></i> Saved
                                    jobs</a></li>
                        <li><a href="candidate-dashboard-applied-jobs"><i class="careerfy-icon careerfy-heart"></i>
                                    Applied jobs</a></li>

                        <li><a href="candidate-dashboard-changed-password"><i
                                          class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                        <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                        <?php } else { ?>
                        <li class="disable"><a href="#"><i class=" careerfy-icon careerfy-resume"></i> My
                                    Resume</a></li>
                        <li class="disable"><a href="#"><i class=" careerfy-icon careerfy-heart"></i> Saved
                                    jobs</a></li>
                        <li class="disable"><a href="#"><i class=" careerfy-icon careerfy-heart"></i>
                                    Applied jobs</a></li>

                        <li><a href="candidate-dashboard-changed-password"><i
                                          class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                        <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                        <?php } ?>
                  </ul>
            </div>
      </div>
</aside>
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
<style>
.disable {
      pointer-events: none;
      cursor: not-allowed;
      opacity: 0.5;
}
</style>