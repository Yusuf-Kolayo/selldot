<?php
  session_start();

  // var_dump($_SESSION); die();


  // checks if the users is already loggwed in or not 
  // to decide if to throw out to login page or not
  if ($_SESSION['log_status']!=true) {
      header('location:../login.php');
  }


  // responds to log out button
  if (isset($_POST['btn_log_out'])) {  
      // deletes all session data 
      session_destroy(); 
      // redirect to login page
      header('location:../login.php');
  }


 

  if (isset($_POST['btn_update_profile'])) {  // if button is submitted
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name']; 
    $phone  = $_POST['phone'];   
    $gender = $_POST['gender'];

    if (
      strlen($first_name)>0&&
      strlen($last_name)>0&&
      strlen($gender)>0&&
      strlen($phone)>0
    ) {
     
              // create a connection string
              $connection = mysqli_connect('localhost','root','','selldot',3306);
              
              $user_id = $_SESSION['user_id'];
            
                    // insert in the table
                    $sql = "UPDATE users SET first_name=?, last_name=?, gender=?, phone=? WHERE user_id=?";
                    $stmt = mysqli_prepare($connection, $sql);
                    mysqli_stmt_bind_param($stmt, 'sssss', $first_name,$last_name,$gender,$phone,$user_id);
                    mysqli_stmt_execute($stmt);
                    $row = mysqli_stmt_affected_rows($stmt);

                    // check for number of rows inserted
                    $row = mysqli_affected_rows($connection);   
                    if ($row>0) {


                        // re-update the user data currently in the session
                        $sql2 = "SELECT * FROM users WHERE user_id=?";
                        $stmt2 = mysqli_prepare($connection, $sql2);
                        mysqli_stmt_bind_param($stmt2, 's', $user_id);
                        mysqli_stmt_execute($stmt2);  
                        $rs2 = mysqli_stmt_get_result($stmt2);
                        $n_row2 = mysqli_num_rows($rs2);  
                        if ($n_row2>0) {
                                $row2 = mysqli_fetch_assoc($rs2);
                                foreach ($row2 as $key => $value) {
                                   $_SESSION[$key] = $value;
                                }
                        } 

                      $alert_type = 'alert-success';
                      $msg = 'profile update was successful';
                    } else if ($row==0) {
                      $alert_type = 'alert-danger';
                      $msg = 'something went wrong';
                    }
         
      
    } else {
       $alert_type = 'alert-danger';
       $msg     = 'Please fill all the required fields';
    }
     
     echo '<script>alert("'.$msg.'")</script>';
}





  // if all is well --> proceed to fetch the useer data from session
  $log_status = $_SESSION['log_status'];
  $logged_user_first_name = $_SESSION['first_name']; 
  $logged_user_last_name = $_SESSION['last_name']; 
  $logged_user_id = $_SESSION['user_id']; 
  $logged_user_email = $_SESSION['email']; 
  $logged_user_gender = $_SESSION['gender']; 
  $logged_user_phone = $_SESSION['phone']; 
  $logged_user_type = $_SESSION['user_type']; 


  // create a connection string
  $connection = mysqli_connect('localhost','root','','selldot',3306);




?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
     <script>
         if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
         }
     </script>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard</title>
    <link href="../assets/bootstrap-5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fontawesome-free-6.5.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/dashboard.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .fa-icons {
        margin-bottom: 4px
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

  </head>
  <body>



    

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
