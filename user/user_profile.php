<?php



require 'partials/header.php'; ?>
    
<?php  require 'partials/top_nav.php'; ?>
 

    <div class="container-fluid">
      <div class="row">


         <?php  require 'partials/side_nav.php';  ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User Profile</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
       
              <button type="button" data-bs-toggle="modal" data-bs-target="#newAdModal" class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1">
                 <i class="bi bi-plus-circle fa-key"></i> Change Password
              </button>
            </div>
          </div> 



          <?php
               // if there is a message available
               if (strlen($msg)>0) {
                  echo '<div class="alert '.$alert_type.' mb-2">'.$msg.'</div>';
               } 
               
            ?> 




         <div class="row">
              <div class="col-md-3">
                     <div class="p-1 rounded mb-2">
                          <img src="../assets/images/user-dummy.webp" class="w-100" alt="">
                     </div>
                     <button class="btn btn-primary w-100">update picture</button>
              </div>
              <div class="col-md-9 p-1">
                     <table class="table table-hover ">
                          <tr>
                              <td><label for="">Fullname</label></td>  
                              <td><?php echo "$logged_user_first_name $logged_user_last_name"?></td>
                          </tr>

                          <tr>
                              <td><label for="">Email</label></td>  
                              <td><?php echo $logged_user_email?></td>
                          </tr>

                          <tr>
                              <td><label for="">Gender</label></td>  
                              <td><?php echo $logged_user_gender?></td>
                          </tr>

                          <tr>
                              <td><label for="">Phone</label></td>  
                              <td><?php echo $logged_user_phone?></td>
                          </tr>  
                          <tr>
                              <td colspan="2">
                                <button data-bs-toggle="modal" data-bs-target="#update_profile_modal" class="btn btn-success float-end">update profile</button>
                              </td>
                          </tr>
                     </table>
              </div>
         </div>











         
              <!-- Modal -->
            <div class="modal fade" id="update_profile_modal" tabindex="-1" aria-labelledby="newAdModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form class="mb-0" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="newAdModalLabel">Update Profile</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 

                        <div class="input-group mb-3">
                        <span class="input-group-text">Firstname</span>
                        <input type="text" class="form-control" value="<?=$logged_user_first_name?>" name="first_name">
                        </div>


                        <div class="input-group mb-3">
                        <span class="input-group-text">Lastname</span>
                        <input type="text" class="form-control" value="<?=$logged_user_last_name?>" name="last_name">
                        </div>


                        <div class="input-group mb-3">
                        <span class="input-group-text">Gender</span>
                        <select name="gender" class="form-select" id="">
                                <option value="<?=$logged_user_gender?>"><?=$logged_user_gender?></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
 

                        <div class="input-group mb-3">
                        <span class="input-group-text">Phone </span>
                        <input type="tel" class="form-control" value="<?=$logged_user_phone?>" name="phone">
                        </div>
                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="btn_update_profile" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>




  







              <!-- Modal -->
          <div class="modal fade" id="newAdModal" tabindex="-1" aria-labelledby="newAdModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form class="mb-0" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="newAdModalLabel">Update Password</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 
                        <div class="mb-3">
                            <label for="" class="form-label">Old Password</label>
                            <input name="" type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">New Password</label>
                            <input name="" type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Repeat New Password</label>
                            <input name="" type="password" class="form-control" required>
                        </div> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
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