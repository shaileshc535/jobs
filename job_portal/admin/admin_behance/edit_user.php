<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>
<?php
if (isset($_GET['e_id'])) {

    $id = $_GET['e_id'];
    $q = "select * from users where id='$id'";
    $run_q = mysqli_query($con, $q);
    $row_q = mysqli_fetch_array($run_q);

    $id = $row_q['id'];
    $f_name = $row_q['fname'];
    $l_name = $row_q['lname'];
    $u_email = $row_q['email'];
    $u_pass = $row_q['password'];
    $u_func = $row_q['func_area'];
    $u_mobile = $row_q['mobile'];
    $u_bio = $row_q['u_bio'];
    $u_address = $row_q['u_address'];
    $u_gender = $row_q['u_gender'];
    $u_img = $row_q['img_name'];

    $query1 = "select * from job_func_area where id='$u_func'";
    $r1 = mysqli_query($con, $query1);
    $row_q2 = mysqli_fetch_array($r1);
    $fun_name = $row_q2['functional_area'];
}
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>Add Profile</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="UserName">Enter First Name</label>
                        <input type="text" class="form-control" id="UserName" placeholder="<?php echo $f_name; ?>"
                            name="fname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="LastName">Enter Last Name</label>
                        <input type="text" class="form-control" id="LastName" placeholder="<?php echo $l_name; ?>"
                            name="lname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="<?php echo $u_email; ?>" name="email" required>
                </div>

                <div class="form-group">
                    <label for="UserId">User ID</label>
                    <input type="text" class="form-control" id="UserId" placeholder="<?php echo $id; ?>" name="u_id"
                        required>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="<?php echo $u_pass; ?>" name="pass" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="MobileNo">Mobile No.</label>
                        <input type="text" class="form-control" id="MobileNo" placeholder="<?php echo $u_mobile; ?>"
                            name="mobile" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gender" class="input__label">Gender</label>
                        <select id="gender" class="form-control input-style" name="gender" required>
                            <option selected><?php echo $u_gender; ?></option>
                            <option value="Male">Male</option>
                            <option value="FeMale">FeMale</option>
                            <option value="Other">Other</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="FunctionalArea" class="input__label">Functional Area</label>
                    <select id="FunctionalArea" class="form-control input-style" name="func" required>
                        <option selected><?php echo $fun_name; ?></option>
                        <?php
                        $query = "select * from job_func_area";
                        $r = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($r)) {

                            $func_name = $row['functional_area'];
                            $func_id = $row['id'];

                            echo "<option value='$func_id'>$func_name</option>";
                        }

                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Biography">Biography</label>
                    <input type="text" class="form-control" id="Biography" placeholder="<?php echo $u_bio; ?>"
                        name="bio" required>
                </div>

                <div class="form-group">
                    <label for="EnterAddress">Address</label>
                    <input type="text" class="form-control" id="EnterAddress" placeholder="<?php echo $u_address; ?>"
                        name="address" required>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="imgname">Image</label>
                        <input type="file" class="form-control" id="imgname" name="img_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <img src="../../job_portal/img/<?php echo $u_img; ?>" alt="" height=100 weidth=150>
                    </div>
                </div>




                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

        </div>








        <?php
        include('includes/_footer.php');
        ?>

        <?php
        if (isset($_POST['submit'])) {

            $u_id = $_POST['u_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $func = $_POST['func'];
            $mobile = $_POST['mobile'];
            $bio = $_POST['bio'];
            $address = $_POST['address'];
            $u_gender = $_POST['gender'];

            $img_name = $_FILES['img_name']['name'];
            $tmp_name = $_FILES['img_name']['tmp_name'];

            move_uploaded_file($tmp_name, "../../job_portal/img/$img_name");

            $u_edit = "update users set id='$u_id',fname='$fname',lname='$lname',email='$email',mobile='$mobile',password='$pass',img_name='$img_name',u_bio='$bio',func_area='$func',u_address='$address',u_gender='$u_gender' where id='$id'";

            $run = mysqli_query($con, $u_edit);
            if ($run) {
                echo "<script>window.open('manage_user_profile.php','_self')</script>";
            }
        }



        ?>