<?php  session_start();

    require_once 'connection.php';

    require 'functions.php';  $row = '';   $alertMsg = '';

    // redirect back to forget password, if the user email isn't present in session
    if (is_valid_email($_SESSION['code_sent_email'])==false) {
        header('location:forget_password.php'); exit();
    } else {
        $email = $_SESSION['code_sent_email'];
    }

    




   // Check if the form is submitted
if (isset($_POST['btn_submit'])) {  

    // Get the code input from the form
    $code = $_POST['code'];
    // Get the email stored in the session
    $email = $_SESSION['code_sent_email'];

    // Check if the email field is not empty
    if (strlen($email) > 0) { $initial_status = 'sent';

        // Check if the code and email combination exists in the security_codes table
        $sql = "SELECT * FROM security_codes WHERE code=? AND channel_value=? AND status=?";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $code, $email, $initial_status);
        mysqli_stmt_execute($stmt);  
        $result = mysqli_stmt_get_result($stmt);
        $n_row = mysqli_num_rows($result);  

        // If the code and email combination is found
        if ($n_row > 0) {
            // Get the timestamp of when the code was sent
            $row = mysqli_fetch_assoc($result);
            $timestamp = $row['timestamp'];
            // Calculate the number of seconds since the code was sent
            $secondsSinceCodeSent = time() - $timestamp;
            
            // If the code was sent within the last 10 minutes (600 seconds)
            if ($secondsSinceCodeSent <= 600) {
                // Mark the reset code as validated in the session
                $_SESSION['reset_code_validated'] = true;

                // update the secuity code to used in the database
                $new_status = 'used';
                $query = "UPDATE security_codes SET status=? WHERE channel_value=?";
                $stmt2 = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt2, 'ss', $new_status, $email);
                mysqli_stmt_execute($stmt2);


                // Redirect the user to the reset password page
                go_to('reset_password.php');
            } else {
                // If the code has expired, display an error message and redirect to the forget password page
                $alert_type = 'alert-danger';
                $alertMsg = 'password reset code has expired, try again';
                js_alert($alertMsg);
                go_to('forget_password.php');
            }
        } else {
            // If the code and email combination is not found, display an error message
            $alert_type = 'alert-danger';
            $alertMsg = 'password reset code entered was invalid, please try again ...';
            js_alert($alertMsg);
        }
             
    } else {
        // If the email field is empty, display an error message
        $alert_type = 'alert-danger';
        $alertMsg = 'Please fill in your email address fields';
        js_alert($alertMsg);
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
</head>
<body>


<?php require 'public_nav.php'; ?>
 

<div class="bg-light border px-5 py-3 text-center" >
        <h1 class="display-5 mt-0">Forget Password</h1>
        <p class="lead small">
            A reset code has been sent to your email address submit, kindly check your inbox/junk folders
        </p> 
</div>

<div class="row mt-5">
      <div class="col-md-5 mx-auto">
            <?php
               // if there is a message available
               if (strlen($alertMsg)>0) {
                  echo '<div class="alert '.$alert_type.' mb-2">'.$alertMsg.'</div>';
               }
            ?>
            <form action="" method="post">
 

                <div class="input-group mb-3">
                  <span class="input-group-text">Email</span>
                  <input type="email" class="form-control" name="email" value="<?=$email?>" required>
                </div>
               
                <div class="input-group mb-3">
                  <span class="input-group-text">Reset Code</span>
                  <input type="number" class="form-control" name="code" required>
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