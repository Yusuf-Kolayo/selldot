<?php require 'partials/hd.php'; 

// var_dump($_GET);
$category_id = (int) $_GET['category_id'];


$sql = "SELECT * FROM categories WHERE id=?";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, 's', $category_id);
mysqli_stmt_execute($stmt);  
$rs = mysqli_stmt_get_result($stmt);
$n_row = mysqli_num_rows($rs);  

if ($n_row>0) {
      $row = mysqli_fetch_assoc($rs);

      $category_id = $row['id'];
      $name = $row['name'];
      $description = $row['description'];
      $parent_id   = $row['parent_id'];
      $position    = $row['position'];
      $status = $row['status'];
      $timestamp = $row['timestamp'];


      echo ' 
        <table class="pt-1 border-top table">
            <tr>
                <td>Name</td> <td>'.$name.'</td>
            </tr>
            <tr>
                <td>Description</td>  <td>'.$description.'</td>
            </tr>
        </table>
        
        <input name="category_id" type="hidden" value="'.$category_id.'" required>
        ';

 }
