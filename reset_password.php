<?php  session_start();

    require_once 'connection.php';

    require 'functions.php';  $row = '';   $alertMsg = '';

    // redirect back to forget password, if the user email, code_sent isn't present in session
    if (is_valid_email($_SESSION['code_sent_email'])==false || $_SESSION['reset_code_validated']==NULL || $_SESSION['reset_code_validated']==false) {
        header('location:forget_password.php'); exit();
    } else {
        $email = $_SESSION['code_sent_email'];
    }

    




// Check if the form is submitted
if (isset($_POST['btn_submit'])) {  

    // Get the form data
    $email      = $_POST['email'];
    $password1  = $_POST['password1'];
    $password2  = $_POST['password2'];

    // Check if all the required fields are filled
    if (strlen($email) > 0 && strlen($password1) > 0 && strlen($password2) > 0) {

        // Check if the email in the session is valid or if it's not null or false
        if (is_valid_email($_SESSION['code_sent_email']) || $_SESSION['code_sent_email'] != NULL || $_SESSION['code_sent_email'] != false) {
 
            // Check if the two passwords match
            if ($password1 == $password2) {

                // Hash the password using the default hashing algorithm
                $hashed_password = password_hash($password2, PASSWORD_DEFAULT);

                // Update the password in the database
                $query = "UPDATE users SET password=? WHERE email=?";
                $stmt2 = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt2, 'ss', $hashed_password, $email);
                mysqli_stmt_execute($stmt2);

                // Check the number of affected rows
                $row = mysqli_affected_rows($connection);   
                if ($row > 0) { 
                    
                    // If the update was successful, destroy all those values in session
                    session_destroy();
                    
                    // And display a success message and redirect to the login page
                    $msg = "Password update was successful \nnow log in to continue into your profile ...";
                    js_alert($msg);
                    go_to('login.php');
                } else if ($row == 0) {
                    // If the update failed, display an error message
                    $alert_type = 'alert-danger';
                    $msg = 'something went wrong, please try again';
                    js_alert($msg);
                }

            } else {
                // If the passwords don't match, display an error message
                $alert_type = 'alert-danger';
                $msg = 'your passwords are not matching';
            }

        } else {
            // If the email in the session is not valid, display an error message and redirect to the forgot password page
            $alert_type = 'alert-danger';
            $alertMsg = 'Something went wrong, please try again';
            js_alert($alertMsg);
            go_to('forget_password.php');
        }
             
    } else {
        // If any of the required fields are missing, display an error message
        $alert_type = 'alert-danger';
        $alertMsg     = 'Please fill in all the required fields below';
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
        <h1 class="display-5 mt-0">Reset Password</h1>
        <p class="small">
            <b>Now reset a your password below</b>
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
                  <span class="input-group-text">New Password</span>
                  <input type="password" class="form-control" name="password1" required>
                </div>
                
                <div class="input-group mb-3">
                  <span class="input-group-text">Repeat Password</span>
                  <input type="password" class="form-control" name="password2" required>
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