<?php  session_start();

    require 'connection.php';

    require 'functions.php';  $row = '';   $msg = '';


    if (isset($_POST['btn_submit'])) {  // if button is submitted

        $email  = $_POST['email'];
        $password  = $_POST['password'];

        if ( strlen($email)>0&& strlen($password)>0 ) {
             
          
                  // create a connection string
                

                  // check for the prescence of email in the DB
                  $sql = "SELECT * FROM users WHERE email=?";
                  $stmt = mysqli_prepare($connection, $sql);
                  mysqli_stmt_bind_param($stmt, 's', $email);
                  mysqli_stmt_execute($stmt);  
                  $result = mysqli_stmt_get_result($stmt);
                  $n_row = mysqli_num_rows($result);  

                  if ($n_row>0) {
                    $row = mysqli_fetch_array($result);
                    $old_password_hash = $row['password'];

                    if (password_verify($password, $old_password_hash)) {
                        
                          // register user in session
                          $_SESSION['log_status'] = true;

                          foreach ($row as $key => $value) {
                              $_SESSION[$key] = $value;
                          }
                        
                          header('location:user/dashboard.php');
                    } else {
                          $alert_type = 'alert-danger';
                          $msg = 'Login credentials invalid!';
                    }  
                  
                  } else {
                    $alert_type = 'alert-danger';
                    $msg = 'Login credentials invalid!';
                  }
             
        } else {
           $alert_type = 'alert-danger';
           $msg     = 'Please fill all the required fields';
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
        <h1 class="display-1 mt-0">Login</h1>
        <p class="lead">Fill in the fields below with the accurate information</p> 
        <p class="text-center">
                  <small>
                    If you don't own an account... <a href="register.php">register here</a>
                  </small>
       </p>
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
                  <input type="email" class="form-control" name="email">
                </div>
  
                <div class="input-group mb-3">
                  <span class="input-group-text">Password</span>
                  <input type="password" class="form-control" name="password">
                </div>
 
               
                <div class="row">
                    <div class="col-6">
                        <button type="reset" class="btn btn-primary">Clear</button>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="btn_submit" class="btn btn-primary">Log In</button>
                    </div>
                </div>

                <br>

                <p class="text-center">
                  <small>
                   .. forget password ? <a href="forget_password.php">click here</a>
                  </small>
                </p>
            </form>
      </div>
</div>
 

</body>
</html>