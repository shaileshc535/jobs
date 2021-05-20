<?php
session_start();
// include_once('./assets/_dbconnect.php');
// include_once('./assets/_functions.php');
include('includes/_header.php');
if(isset($_SESSION['loggedin']) == true){
?>
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Material Library Job Portal</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/_footer.php');
}
else{
    header('location:http://materiallibrary.co.in/admin/sign_in.php');
}
?>