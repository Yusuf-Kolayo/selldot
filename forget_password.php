<?php  session_start();

    require_once 'connection.php';

    require 'functions.php';  $row = '';   $msg = '';

 

    // Check if the form is submitted
    if (isset($_POST['btn_submit'])) {  

        // Get the email input from the form
        $email = $_POST['email'];

        // Check if the email field is not empty
        if (strlen($email) > 0) {
                
            // Check if the email exists in the database
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);  
            $result = mysqli_stmt_get_result($stmt);
            $n_row = mysqli_num_rows($result);  

            // If the email exists in the database
            if ($n_row > 0) {
                $channel = 'email';         $status = 'sent';
                $channel_value = $email;    $timestamp = time();

                // Generate a security code
                $code = generate_security_code($connection);
                
                $que = "insert into security_codes (channel, channel_value, code, status, timestamp)  values ('$channel','$channel_value','$code','$status','$timestamp')";
                $cmd = mysqli_query($connection,$que);
                
                // Send an email with the security code
                // $result = send_mail($email, $subject = 'Password Reset', $body = '<html><body><br> Your Password Reset Code is ' . $code . '</body></html>');
                
                // If the email was sent successfully
                if ($result = true) {
                    // Store the email in the session
                    $_SESSION['code_sent_email'] = $email;
                    // Redirect the user to the verify reset code page
                    header("Location: verify_reset_code.php");
                } else {
                    // If the email failed to send, display an error message
                    $alert_type = 'alert-danger';
                    $msg = 'Something went wrong please try again';
                    js_alert($msg);
                }
                        
            } else {
                // If the email does not exist in the database, display an error message
                $alert_type = 'alert-danger';
                $msg = 'Your email address does not match any of our records ...';
            }
                
        } else {
            // If the email field is empty, display an error message
            $alert_type = 'alert-danger';
            $msg     = 'Please fill in your email address fields';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.3.1/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    <title>SellDot</title>
    <style>
         .card-img-top {
             height: 300px
         }
    </style>
</head>
<body>


<?php require 'public_nav.php'; ?>
 

<div class="bg-light border px-5 py-3 text-center" >
        <h1 class="display-5 mt-0">Forget Password</h1>
        <p class="lead small">please enter your e-mail address below correctly</p> 
</div>

<div class="row mt-5">
      <div class="col-md-5 mx-auto">
            <?php
               // if there is a message available
               if (strlen($msg)>0) {
                  echo '<div class="alert '.$alert_type.' mb-2">'.$msg.'</div>';
               }
            ?>
            <form action="" method="post">
 

                <div class="input-group mb-3">
                  <span class="input-group-text">Email</span>
                  <input type="email" class="form-control" name="email" required>
                </div>
               
                <div class="row">
                    <div class="col-6">
                        <button type="reset" class="btn btn-primary">Clear</button>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

             
            </form>
      </div>
</div>
 

</body>
</html>