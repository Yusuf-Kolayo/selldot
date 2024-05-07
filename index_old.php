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
  
<?php   require 'header.php';   ?>

<div class="bg-light border p-5 text-center" style="height:400px">
        <h1 class="display-1 pt-3">Wellcome To SellDot!</h1>
        <p class="lead">A convenient marketplace for buyers and sellers</p> 
        <p class="mb-0 border-top w-75 mx-auto pt-5">
             <a href="login.php" class="btn btn-lg btn-outline-dark w-25">Login</a>
             <a href="register.php" class="btn btn-lg btn-dark w-25">Register</a>
        </p>
</div>



<div class="row mt-4">
<?php 

$sql = "SELECT * FROM ad_table WHERE status='active'";
$result = mysqli_query($connection, $sql);
$n_row  = mysqli_num_rows($result);  

if ($n_row>0) {

   while ($row=mysqli_fetch_assoc($result)) {
     $name = $row['name'];
     $category = $row['category'];
     $brand = $row['brand'];
     $price = $row['price'];
     $status = $row['status'];
     $description = $row['description'];
     $timestamp = $row['timestamp'];
     $img_name  = $row['img_name'];

     if (strlen($description)>300) {
        $description = substr($description, 0,220).' ...';
     }  
   
     echo '<div class="col-md-3">
              <div class="card">
                    <img src="user/ad_pictures/'.$img_name.'" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="mb-1">'.$name.'</h4>
                        <p class="mb-0">
                          <small>
                             Price: &#8358;'.$price.' <br> '.$description.'<br>
                          </small>
                        </p>
                    </div>
              </div>
          </div>';
   }
}


?> 
</div>



</body>
</html>