<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Material-Library:jobPortal</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <style type="text/css">
      .login-form {
            width: 340px;
            margin: 50px auto;
      }

      .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
      }

      .login-form h2 {
            margin: 0 0 15px;
      }

      .form-control,
      .btn {
            min-height: 38px;
            border-radius: 2px;
      }

      .btn {
            font-size: 15px;
            font-weight: bold;
      }
      </style>
</head>

<body>
      <div class="container p-4 my-4 col-sm-5 col-lg-5">
            <div class="row">
                  <div class="login-form col-md-12 p-4 ml-2 mr-2">
                        <form method="post">
                              <h2 class="text-center">Email Verification</h2>
                              <div class="form-group first_box">
                                    <input type="email" id="email" class="form-control"
                                          placeholder="Enter Email Address" required="required">
                                    <span id="email_error" class="field_error"></span>
                              </div>
                              <div class="form-group first_box">
                                    <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">Send
                                          OTP</button>
                              </div>

                              <div class="form-group second_box">
                                    <input type="text" id="otp" class="form-control" placeholder="OTP"
                                          required="required">
                                    <span id="otp_error" class="field_error"></span>
                              </div>
                              <div class="form-group second_box">
                                    <button type="button" class="btn btn-primary btn-block"
                                          onclick="submit_otp()">Submit
                                          OTP</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>

      <script>
      function send_otp() {
            var email = jQuery('#email').val();
            jQuery.ajax({
                  url: './include/send_otp.php',
                  type: 'post',
                  data: {
                        email: email
                  },
                  success: function(data) {
                        // alert(data.slice(-1));
                        if (data.slice(-1) == 0) {
                              jQuery(".second_box").show();
                              jQuery(".first_box").hide();
                        }
                        if (data.slice(-1) == 1) {
                              jQuery('#email_error').html('Please enter valid email');
                        }
                  }
            });
      }

      function submit_otp() {
            var otp = jQuery('#otp').val();
            jQuery.ajax({
                  url: './include/check_otp.php',
                  type: 'post',
                  data: 'otp=' + otp,
                  success: function(result) {
                        if (result == 'yes') {
                              window.location = 'http://materiallibrary.co.in/reset_password';
                        }
                        if (result == 'not_exist') {
                              jQuery('#otp_error').html('Please enter valid otp');
                        }
                  }
            });
      }
      </script>

      <style>
      .second_box {
            display: none;
      }

      .field_error {
            color: red;
      }
      </style>
</body>

</html>