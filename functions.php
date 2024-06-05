<?php

require 'vendor/autoload.php';

// Import the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function dump_var($var) {
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}



function getUserImgName ($connection, $user_id) : string {
       
    $sql = "SELECT img_name FROM users WHERE user_id=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 's', $user_id);
    mysqli_stmt_execute($stmt);  
    $rs = mysqli_stmt_get_result($stmt);
    $n_row = mysqli_num_rows($rs);  

    if ($n_row>0) {
        $row = mysqli_fetch_assoc($rs);
        
        $img_name  = $row['img_name'];
        if (($img_name!=null)&&is_writable('users_dp/'.$img_name)) {
            $imgUrl  = 'users_dp/'.$img_name;
        } else {
            $imgUrl = '../assets/images/user-dummy.webp';
        }

        return $imgUrl;
    } else {
        return '../assets/images/user-dummy.webp';
    }

}


/** check for email validity */
function is_valid_email($email) :bool {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


/** alert a message */
function js_alert($msg) :void {
    echo '<script> alert("'.$msg.'") </script>';
}


/** Switch current page to another */
function go_to($location) :void {
  echo '
    <script>
        window.location.href = "'.$location.'";
    </script>';     
}


function send_mail ($email, $subject, $body, $from='info@salehub.qatru.com') : bool {
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
    $mail->SetFrom($from, 'SaleHub');
    $mail->AddReplyTo($from, 'SaleHub');
    $mail->Subject = $subject;
    // $mail->MsgHTML('<html><body><br> Your Password Reset Code is '.$code.'</body></html>');
    $mail->MsgHTML($body);
    $mail->AddAddress($email);
    //$mail->AddAttachment(""); // attachment

    if(!$mail->Send()) { 
        return false;
    } else {
        return true;
    }
}


function generate_security_code($connection) : int {
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
                 $track_code++;
             }                                        

     }
     return $code;
}