<?php require 'partials/hd.php'; 

if (isset($_POST['btn_category_submit'])) {
     $name        = $_POST['name'];
     $description = $_POST['description'];
     $position    = $_POST['position'];
     $parent_id   = $_POST['parent_id'];
     $status      = 'active';   $timestamp   = time();  

     $sql = "INSERT INTO categories (name,description,parent_id,position,status,timestamp) VALUES(?,?,?,?,?,?)";
     $stmt = mysqli_prepare($connection, $sql);
     mysqli_stmt_bind_param($stmt, 'ssssss', $name,$description,$parent_id,$position,$status,$timestamp);
     mysqli_stmt_execute($stmt);
     $row = mysqli_stmt_affected_rows($stmt);

     // check for number of rows inserted
     $row = mysqli_affected_rows($connection);   
     if ($row>0) {
       $alert_type = 'alert-success';
       $msg = 'Category saved successfully';
     } else if ($row==0) {
       $alert_type = 'alert-danger';
       $msg = 'something went wrong';
     }
}

?>
<?php require 'partials/header.php'; ?>
    
<?php  require 'partials/top_nav.php'; ?>
 

    <div class="container-fluid">
      <div class="row">


         <?php  require 'partials/side_nav.php';   ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <button type="button" data-bs-toggle="modal" data-bs-target="#newCategoryModal" class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1">
                 <i class="bi bi-plus-circle fa-icons"></i> New Category
              </button>
            </div>
          </div> 






          <div class="view-box">
          <?php
                  // if there is a message available
                  if (strlen($msg)>0) {
                      echo '<div class="alert '.$alert_type.' mb-2">'.$msg.'</div>';
                  }




                
                  $sql = "SELECT * FROM categories";
                   $result = mysqli_query($connection, $sql);
                   $n_row  = (int) mysqli_num_rows($result);  
 
                   if ($n_row>0) {
                      echo '<table class="table table-striped table-bordered" style="width:1100px">
                              <tr>
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Parent</th>
                                  <th>Status</th>
                                <th>position</th>
                                <th>Date</th>
                                  <th></th>
                                  <th></th>
                              </tr>';
                      while ($row=mysqli_fetch_assoc($result)) {
                                $itemID = $row['id'];
                                $item_name = $row['name'];
                                $description = $row['description'];
                                $parent_id   = $row['parent_id'];
                                $position    = $row['position'];
                                $status = $row['status'];
                                $timestamp = $row['timestamp'];
                          echo '<tr>
                                    <td>'. $item_name.'</td>
                                    <td>'. $description.'</td>
                                    <td>'. $parent_id.'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$position .'</td>
                                    <td>'.date('d-M-Y', $timestamp).'</td>';
                               echo '
                                    <td><button ad-item-id="'.$itemID.'" data-bs-toggle="modal" data-bs-target="#editAdModal" class="btn btn-success no-wrap edit-btn"><i class="fas fa-edit"></i> Edit</button></td>
                                    
                                    <td><button ad-item-id="'.$itemID.'" data-bs-toggle="modal" data-bs-target="#deleteAdModal" class="btn btn-danger no-wrap delete-btn"><i class="fas fa-trash"></i> Delete</button></td>
                                </tr>';
                      }
                      echo '</table>';
                   } else {
                    echo '<p class="text-center mt-5">No records found!</p>';
                   }



            ?>
          </div>
         


 
          
 




        <!-- New Ad Item Modal -->
        <div class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form class="mb-0" action="" method="post">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="newCategoryModalLabel">New Ad</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Parent</label>
                            <select name="parent_id" id="" class="form-select">
                                 <option value="0">NONE</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Position</label>
                            <input name="position" type="number" class="form-control" required>
                        </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="btn_category_submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>







          </div>
        </main>



      </div>
    </div>


   <?php  require 'partials/footer.php';  ?>