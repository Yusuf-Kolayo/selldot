<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
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

   // create a connection string
   $connection = mysqli_connect('localhost','root','','selldot',3306);

$sql = "SELECT * FROM ad_table";
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

   
     echo '<div class="col-md-3">
              <div class="card">
                    <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/99/9923821/1.jpg?6560" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="mb-1">'.$name.'</h4>
                        <p class="mb-0">
                          <small>
                             Price: &#8358;;'.$price.' <br> '.$description.'<br>
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