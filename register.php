<?php

    require 'functions.php';  $row = '';   $msg = '';


    if (isset($_POST['btn_submit'])) {  // if button is submitted
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email  = $_POST['email'];
        $phone  = $_POST['phone'];
        $gender = $_POST['gender'];
        $password  = $_POST['password'];
        $confirm_password  = $_POST['confirm_password'];

        if (
          strlen($first_name)>0&&
          strlen($last_name)>0&&
          strlen($gender)>0&&
          strlen($email)>0&&
          strlen($phone)>0&&
          strlen($password)>0&&
          strlen($confirm_password)>0
        ) {
                // chceck if the passwords maches
                if ($password===$confirm_password) {
                  // create a connection string
                  $connection = mysqli_connect('localhost','root','','selldot',3306);

                  // check for the prescence of email in the DB
                  $sql = "SELECT id FROM users WHERE email=?";
                  $stmt = mysqli_prepare($connection, $sql);
                  mysqli_stmt_bind_param($stmt, 's', $email);
                  mysqli_stmt_execute($stmt);  
                  $rs = mysqli_stmt_get_result($stmt);
                  $n_row = mysqli_num_rows($rs);  

                  if ($n_row==0) {
                        // insert in the table
                        $sql = "INSERT INTO users (first_name,last_name,email,phone,gender,password) VALUES(?,?,?,?,?,?)";
                        $stmt = mysqli_prepare($connection, $sql);
                        mysqli_stmt_bind_param($stmt, 'ssssss', $first_name,$last_name,$email,$phone,$gender,$password);
                        mysqli_stmt_execute($stmt);
                        $row = mysqli_stmt_affected_rows($stmt);

                        // check for number of rows inserted
                        $row = mysqli_affected_rows($connection);   
                        if ($row>0) {
                          $alert_type = 'alert-success';
                          $msg = 'registration was successful';
                        } else if ($row==0) {
                          $alert_type = 'alert-danger';
                          $msg = 'something went wrong';
                        }
                  } else {
                    $alert_type = 'alert-danger';
                    $msg = 'Email address already exist, pls  log in if you already have an account';
                  }
              } else {
                  $alert_type = 'alert-danger';
                  $msg = 'Yours passwords does not match!';
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
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.min.css">
    <script src="bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    <title>SellDot</title>
    <style>
         .card-img-top {
             height: 300px
         }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SellDot</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 

<div class="bg-light border p-5 text-center" style="height:200px">
        <h1 class="display-1 mt-0">Register</h1>
        <p class="lead">Fill in the fields below with the accurate information</p> 
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
                  <span class="input-group-text">Firstname</span>
                  <input type="text" class="form-control" name="first_name">
                </div>


                <div class="input-group mb-3">
                  <span class="input-group-text">Lastname</span>
                  <input type="text" class="form-control" name="last_name">
                </div>

          
                <div class="input-group mb-3">
                  <span class="input-group-text">Gender</span>
                  <select name="gender" class="form-select" id="">
                         <option value="male">Male</option>
                         <option value="female">Female</option>
                    </select>
                </div>


                <div class="input-group mb-3">
                  <span class="input-group-text">Email</span>
                  <input type="email" class="form-control" name="email">
                </div>
 

                <div class="input-group mb-3">
                  <span class="input-group-text">Phone Number</span>
                  <input type="tel" class="form-control" name="phone">
                </div>


                <div class="input-group mb-3">
                  <span class="input-group-text">Password</span>
                  <input type="password" class="form-control" name="password">
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">Confirm Password</span>
                  <input type="password" class="form-control" name="confirm_password">
                </div>
 
                
               
                <div class="row">
                    <div class="col-6">
                        <button type="reset" class="btn btn-primary">Clear</button>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>




                <br><br>

                <p class="text-center">
                <small>
                    If you have an account... <a href="login.php">login here</a>
                </small>
                </p>
            </form>
      </div>
</div>

 

</body>
</html>