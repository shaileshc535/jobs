<?php
include('include/header.php');
include('../admin/assets/_dbconnect.php');
if(isset($_POST['submit'])){
// $degree=$_POST['degree'];
// $sql=mysqli_query($con, "INSERT INTO `candidate_type`(`type`) VALUES ('$degree')");
    $profile_image = $_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $tempname = $_FILES['image']['tmp_name'];
    $randome=rand(0,100000); 
    $ext=pathinfo($profile_image, PATHINFO_EXTENSION);
    $rename='Upload'.date('Ymd').$randome;
    $newname=$rename.'.'.$ext;
    $folder=$_FILES['image']['name'];
    if(move_uploaded_file($tempname, $folder.$newname)){
        echo '<div class="alert alert-success" role="alert">
        wah bhai wah!
        </div>';
    }
    else{
        echo '<div class="alert alert-primary" role="alert">
        Inccorect E-mail or Password!
        </div>';
    }

}
?>


<div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">
                                        <div clss="container">
                                            <form method="POST">
                                            <input id="imageUpload" type="file"  class="careerfy-upload" name="image" value=" "/> 
                                                <button type="submit" name="submit">Submit</button>
                                            </form>

                                        </div>
                                    </li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
include('include/footer.php');


?>
