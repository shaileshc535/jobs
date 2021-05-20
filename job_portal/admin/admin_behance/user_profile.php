<?php
include('includes/_header.php');
include('../assets/_dbconnect.php');
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <h1>Add Profile</h1>
            <form action="user_profile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="UserName">Enter First Name</label>
                        <input type="text" class="form-control" id="UserName" placeholder="Enter First Name"
                            name="fname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="LastName">Enter Last Name</label>
                        <input type="text" class="form-control" id="LastName" placeholder="Enter Last Name" name="lname"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="UserId">User ID</label>
                    <input type="text" class="form-control" id="UserId" placeholder="User Id" name="u_id" required>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="pass" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="MobileNo">Mobile No.</label>
                        <input type="text" class="form-control" id="MobileNo" placeholder="Mobile Number" name="mobile"
                            required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gender" class="input__label">Gender</label>
                        <select id="gender" class="form-control input-style" name="gender" required>
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="FeMale">FeMale</option>
                            <option value="Other">Other</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="FunctionalArea" class="input__label">Functional Area</label>
                    <select id="FunctionalArea" class="form-control input-style" name="func" required>
                        <option selected>Choose...</option>
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
                    <input type="text" class="form-control" id="Biography" placeholder="Enter Biography" name="bio"
                        required>
                </div>

                <div class="form-group">
                    <label for="EnterAddress">Address</label>
                    <input type="text" class="form-control" id="EnterAddress" placeholder="Enter Address" name="address"
                        required>
                </div>
                <div class="form-group" style="width:35%;">
                    <label for="imgname">Image</label>
                    <input type="file" class="form-control" id="imgname" name="img_name" required>
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
            $gender = $_POST['gender'];
            $address = $_POST['address'];

            $img_name = $_FILES['img_name']['name'];
            $tmp_name = $_FILES['img_name']['tmp_name'];

            move_uploaded_file($tmp_name, "../../job_portal/img/$img_name");

            $u_insert = "insert into users (id,fname,lname,email,mobile,password,img_name,u_bio,func_area,u_address,u_gender) values('$u_id','$fname','$lname','$email','$mobile','$pass','$img_name','$bio','$func','$address','$gender')";

            $run = mysqli_query($con, $u_insert);
            if ($run) {
                echo "<script>window.open('manage_user_profile.php','_self')</script>";
            }
        }



        ?>