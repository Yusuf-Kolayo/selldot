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

<?php require 'header.php' ?>

<div class="bg-light border p-4 text-center" >  
        <p class="display-6">search results for <ins><b><q><?=$_GET['search_key']?></q></b></ins></p> 
</div>



<div class="row mt-4">
<?php

 
   $searchKey = '%'.$_GET['search_key'].'%';

   
$sql = "SELECT * FROM ad_table WHERE name LIKE ?";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, 's', $searchKey);
mysqli_stmt_execute($stmt);  
$rs = mysqli_stmt_get_result($stmt);
$n_row = mysqli_num_rows($rs);  

if ($n_row>0) {


   while ($row=mysqli_fetch_assoc($rs)) {
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
} else {
    echo '<p class="h6 text-center">No record found ...</p>';
}


?> 
</div>



</body>
</html>