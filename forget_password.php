<?php  session_start();

    require_once 'connection.php';

    require 'functions.php';  $row = '';   $msg = '';


    require 'vendor/autoload.php';

    // Import the PHPMailer class
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

 


    if (isset($_POST['btn_submit'])) {  // if button is submitted

        $email  = $_POST['email'];

        if (strlen($email)>0) {
               
                  // check for the prescence of email in the DB
                  $sql = "SELECT * FROM users WHERE email=?";
                  $stmt = mysqli_prepare($connection, $sql);
                  mysqli_stmt_bind_param($stmt, 's', $email);
                  mysqli_stmt_execute($stmt);  
                  $result = mysqli_stmt_get_result($stmt);
                  $n_row = mysqli_num_rows($result);  

                  if ($n_row>0) {
                       $timestamp     = time();
                       $status        = 'sent';
                       $channel       = 'email';
                       $channel_value = $email;

                       // table : security_codes
                       $track_code=1;
                        while ($track_code<=1)
                        {
                            $code = intval(rand(100001,999999)); 

                            $strk = "select code from security_codes where code = '$code'";
                            $scb = mysqli_query($connection,$strk) or die ('couldnt search');
                            $nr = mysqli_num_rows($scb);
                        
                                if ($nr==0)                                          
                                { 
                                    $que = "insert into security_codes (channel, channel_value, code, status, timestamp)  values ('$channel','$channel_value','$code','$status','$timestamp')";
                                    $cmd = mysqli_query($connection,$que);
                                    $track_code++;
                                }                                        
                                                                                                                                        
                        }	

                  
                        
                        
                        $mail = new PHPMailer(true);
                        $mail->IsSMTP(); // telling the class to use SMTP
                        $mail->SMTPAuth = true; // enable SMTP authentication  
                        $mail->CharSet = 'utf-8';
                        //$mail->SMTPDebug = 2;
                        $mail->Host = "localhost"; // sets the SMTP server
                        $mail->Port = 25; // set the SMTP port for the GMAIL server
                        $mail->Username = "info@salehub.qatru.com"; // SMTP account username
                        $mail->Password = "n3JC!VWea2#1"; // SMTP account password
                        $mail->isHTML(true);
                        $mail->SetFrom('info@salehub.qatru.com', 'SaleHub');
                        $mail->AddReplyTo('info@salehub.qatru.com', 'SaleHub');
                        $mail->Subject = "Password Reset";
                        $mail->MsgHTML('<html><body><br> Your Password Reset Code is '.$code.'</body></html>');
                        $mail->AddAddress($email);
                        //$mail->AddAttachment(""); // attachment

                        if(!$mail->Send()) { 
                            $alert_type = 'alert-danger';
                            $msg = 'Could not send reset code to your email address. Please try again ...';
                        } else {
                            $_SESSION['code_sent_email'] = $email;
                            header("Location: verify_reset_code.php");
                        }
                    
                  
                  } else {
                    $alert_type = 'alert-danger';
                    $msg = 'Your email address does not match any of our records ...';
                  }
             
        } else {
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
                  <input type="email" class="form-control" name="email">
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