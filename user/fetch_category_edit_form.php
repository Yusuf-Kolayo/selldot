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

      $categoryID = $row['id'];
      $name = $row['name'];
      $description = $row['description'];
      $parent_id   = $row['parent_id'];
      $position    = $row['position'];
      $status = $row['status'];
      $timestamp = $row['timestamp'];


       // fetch all the main categories
        $cat_rows=[];
        $query = "SELECT id,name FROM categories WHERE parent_id='0'";
        $result = mysqli_query($connection, $query);        
        if (mysqli_num_rows($result)>0) { 
            while ($cat_row = mysqli_fetch_assoc($result)) {
                $cat_rows[] = $cat_row;
            }
        }
        // var_dump($cat_rows);


        echo '  <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" value="'.$name.'" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" class="form-control" rows="3">'.$description.'</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Parent</label>
                    <select name="parent_id" id="" class="form-select">
                           <option value="0">NONE</option>';
                           
                            foreach ($cat_rows as $key => $row) {
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                            }
                              
                  echo '</select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Position</label>
                    <input name="position" value="'.$position.'" type="number" class="form-control" required>
                    <input name="category_id" type="hidden" value="'.$category_id.'" required>
                </div>';

 }

