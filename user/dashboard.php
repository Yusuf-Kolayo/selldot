<?php require 'partials/header.php'; ?>
    
<?php  require 'partials/top_nav.php'; ?>
 

    <div class="container-fluid">
      <div class="row">


         <?php  require 'partials/side_nav.php';
         
               $brands = [ "Acura", "Alfa Romeo", "Alpina", "Arash", "Asquith", "Atlas Copco", "Audi", "Ausa", "Baojun", "Bentley", "BMW", "Bobcat", "Buck", "Carisson", "Case", "Caterpillar", "Changan", "Chery", "Chevrolet", "Citroen", "Clark", "Daewoo", "DAF", "Demag", "Dodge", "Doosan", "Dynapac", "ERF", "Ferrari", "Fiat", "Ford", "Foton", "Freightliner", "Gamin", "Geely", "GM", "GMC", "Grove", "GTA Motor", "Haima", "Hamm", "Hawker", "Hiab", "Hilux", "Holden", "Honda", "Hyundai", "IKCO", "Infiniti", "Infinix", "Ingersoll Rand", "Innoson", "International", "Intex", "Isuzu", "Iveco", "JAC", "Jaguar", "JCB", "JLG", "John Deere", "JVC", "Kia", "Kobelco", "Komatsu", "Kubota", "Lamborghini", "Land Rover", "Lexus", "Liebherr", "Mack", "Man", "Manitowoc", "Massey Ferguson", "Mazda", "Mercedes-Benz", "Merlo", "Mini", "Mitsubishi", "Moeller Marine Products", "Nissan", "O&K", "Opel", "Pasat", "Peugeot", "Ram", "Renault", "Roadtec", "Roewe", "Rosco", "Sany", "Scania", "Sea-Doo", "Sinotruck", "Sirus", "Skyjack", "suas", "Subaru", "Suzuki", "TATA", "Taylor Made Products", "Terex", "Toyota", "Vogele", "Volkswagen", "Volvo", "Wirtgen", "Yamaha", "Yeti", "Zoomlion", "Other Brands", "null", "AKG", "Amaz", "Anker", "Apple", "Ason", "Awei", "B&H", "Bang & Olufsen", "Baofeng", "Behringer", "Best Choice", "Binatone", "BOSE", "Canon", "Casio", "CAT", "Century", "Crown", "Deutz", "Djack", "D-Marc", "Doosan", "Edifier", "Elemax", "Elepaq", "Esodora", "FAW", "Focusrite", "Foton", "FPT", "Google", "Guang Dian", "H&H", "Haier Thermocool", "Haman", "Harman Kardon", "Himoinsa", "Hisense", "Hiview", "Honda", "Isuzu", "JBL", "JCB", "Jerry", "Jiepak", "JMG", "Juice", "KADA", "Kenwood", "Kipor", "KOHLER", "Konia", "Konka", "Korg", "Koss", "KRK", "Kubota", "Lenovo", "Leroy Somer", "LG", "Lontor", "Lovol", "Luitan", "Marcsonic", "M-Audio", "Maxi", "Microsoft", "Midea", "Mikano", "Mitsubishi", "Motorola", "Mouka", "Newcastle", "Nexus", "Niko", "Numark", "NUT", "Omron", "ORL", "OX", "Panasonic", "Perkins", "Philips", "Pioneer", "Polystar", "PreSonus", "ProTapper", "Pyramid", "Qasa", "Ratmax", "River", "Samson", "Samsung", "Saramonic", "Scanfrost", "Senci", "Sennheiser", "Senwei", "Sharp", "Shure", "Sonik", "Sony", "Sound Prince", "Soundking", "Stamford", "StarCH", "Sumec Firman", "Tiger", "Tigmax", "Timer", "UHF", "Vitafoam", "Volvo Penta", "Walton", "WFB", "Yamaha", "Yanman", "Zealot", "Zoom", "Other Brands", "Acer", "Aple", "Asus", "Avante", "AVIS", "Benq", "Casio", "Compaq", "Dell", "Epson", "Grundig", "Haier", "Hisense", "Hitachi", "HP", "IBM", "Infocus", "Intel", "JVC", "Lennox", "Lenovo", "LG", "Mac", "Medion", "Mitsubishi", "Niko", "Optoma", "Panasonic", "Philips", "Pioneer", "Polystar", "Samsung", "Sansui", "Sanyo", "Sceptre", "Seiki", "Sharp", "Skyrun", "Skyworth", "Sony", "SunbriteTV", "Supersonic", "TCL", "Toshiba", "Toshiba", "Universal", "ViewSonic", "Vivo", "VIZIO", "Other Brands", "Acer", "Afrione", "AGM", "Alcatel", "Allview", "Amazon", "Amgoo", "Amoi", "Anica", "Apple", "Archos", "Asus", "AT&T", "Benefon", "BenQ", "BenQ-Siemens", "Black Fox", "BlackBerry", "Blackview", "BLU", "Bluboo", "Bontel", "Bosch", "BQ", "Casio", "Casper", "Cat", "CCIT", "Condor", "Coolpad", "Cubot", "Dell", "Doogee", "Doopro", "Ekinox", "EL", "Elephone", "Emporia", "Energizer", "Ericsson", "Essential Products", "Fero", "Fly", "Freetel", "Fujitsu", "Gigabyte", "Gigaset", "Gionee", "GMango", "Google", "Goophone", "Gowin", "Gretel", "G-Tide", "Haier", "Hasee", "Hisense", "HomTom", "Hotwav", "HP", "HTC", "Huawei", "Icemobile", "i-mate", "i-mobile", "Imose", "Infinix", "InFocus", "InnJoo", "iNQ", "Intex", "Ipad", "Iphone", "iPRO", "Iridium", "Itel", "Ivvi", "Jiake", "Jiayu", "Jolla", "Karbonn", "Kazam", "Kenxinda", "Kgtel", "Kimfly", "Kingzone", "K-Mous", "Koobee", "K-Touch", "Kyocera", "Lava", "Leagoo", "LeEco", "Lenovo", "LG", "Lumigon", "Malata", "MANN", "Maxwest", "MeanIT", "Meizu", "M-Horse", "Micromax", "Microsoft", "Mione", "Mitac", "Mi-Tribe", "Mitsubishi", "Modu", "Motorola", "MTN", "MWg", "Nasco", "NEC", "Neon", "Neonode", "NIU", "Nokia", "Nomi", "Nomu", "O2", "Olla", "OnePlus", "Oppo", "Orange", "Oukitel", "Palm", "Panasonic", "Pano", "Pantech", "Parla", "Philips", "Plum", "Poptel", "Posh", "Prestigio", "Qmobile", "Qtek", "Ravoz", "Razer", "RCA", "Realme", "Safaricom", "Samsung", "Santin", "Sendo", "Sharp", "Siccoo", "Siemens", "Smart+", "Smartisan", "SmartOpus", "Snokor Rocket", "Soda", "Solo", "Sony", "Sony Ericsson", "Sowhat", "Spice", "SQ", "Sugar", "TCL", "Tecno", "Tel.Me.", "Telit", "Tesla", "THL", "Thuraya", "T-Mobile", "Toshiba", "Touching", "Trifone", "U mobile", "Uhans", "Uhappy", "Ulefone", "Umi", "Umidigi", "Unnecto", "Vernee", "Vertu", "Verykool", "Vivo", "VK Mobile", "Vkworld", "Vodafone", "Wiko", "Windows Phone", "Wintouch", "WND", "Wonder", "XCute", "Xerox", "Xiaomi", "XOLO", "X-Tigi", "Yezz", "Yota", "YU", "ZTE", "Other Brands" ];
              //  dump_var($brands);
              sort($brands);
              $brands = array_unique($brands);



              if (isset($_POST['btn_submit'])) { // if the button submits to server

                  $item_name = $_POST['name'];
                  $category = $_POST['category'];
                  $brand = $_POST['brand'];
                  $price = $_POST['price'];
                  $description = $_POST['description'];

                  
                            if (
              strlen($item_name)>0&&
              strlen($category)>0&&
              strlen($brand)>0&&
              strlen($price)>0&&
              strlen($description)>0
            ) {

                          // fetch details of the picture
                          $img_name = $_FILES['picture']['name'];
                          $type = $_FILES['picture']['type'];
                          $size = $_FILES['picture']['size'];
                          $tmp_name = $_FILES['picture']['tmp_name'];

                          $timestamp = time();
                          $new_img_name = $logged_user_id.'_'.$timestamp.'_'.$img_name;

                          // an array of alllowed file-types
                          $allowedPicTypes = [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/webp'
                          ];

                          // checking for the right filetype
                          if (in_array($type, $allowedPicTypes)) {
                              
                            // checking for the right filesize
                            if ($size<=2000000) {

                                $result =  move_uploaded_file($tmp_name, 'ad_pictures/'.$new_img_name);
                                if ($result==true) { // if picture upload successfull


                                      $status = 'pending'; 
                                      // insert in the table
                                      $sql = "INSERT INTO ad_table (user_id,name,category,brand,price,description,status,img_name,timestamp) VALUES(?,?,?,?,?,?,?,?,?)";
                                      $stmt = mysqli_prepare($connection, $sql);
                                      mysqli_stmt_bind_param($stmt, 'sssssssss', $logged_user_id,$item_name,$category,$brand,$price,$description,$status,$new_img_name,$timestamp);
                                      mysqli_stmt_execute($stmt);
                                      $row = mysqli_stmt_affected_rows($stmt);
              
                                      // check for number of rows inserted
                                      $row = mysqli_affected_rows($connection);   
                                      if ($row>0) {
                                        $alert_type = 'alert-success';
                                        $msg = 'Ad was posted successfully';
                                      } else if ($row==0) {
                                        $alert_type = 'alert-danger';
                                        $msg = 'something went wrong';
                                      }


                                } else {
                                  $alert_type = 'alert-danger';
                                  $msg = 'Error: Picture Upload Failed'; 
                                }

                            } else {
                              $alert_type = 'alert-danger';
                              $msg = 'Error: Invalid Filesize (only <= 2MB Allowed)'; 
                            }

                          } else {
                            $alert_type = 'alert-danger';
                            $msg = 'Error: Invalid Picture Type';
                          }

                 
                  
                    } else {
                     $alert_type = 'alert-danger';
                     $msg     = 'Please fill all the required fields';
                  }
           

              }
         ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <button type="button" data-bs-toggle="modal" data-bs-target="#newAdModal" class="btn btn-sm btn-outline-secondary d-flex align-items-center gap-1">
                 <i class="bi bi-plus-circle fa-icons"></i> New Ad
              </button>
            </div>
          </div> 



            <?php
                  // if there is a message available
                  if (strlen($msg)>0) {
                      echo '<div class="alert '.$alert_type.' mb-2">'.$msg.'</div>';
                  }




                  if ($logged_user_type=='admin') {
                    $sql = "SELECT * FROM ad_table";
                  } else {
                    $sql = "SELECT * FROM ad_table WHERE user_id='$logged_user_id'";
                  }
                   
                   $result = mysqli_query($connection, $sql);
                   $n_row  = (int) mysqli_num_rows($result);  
 
                   if ($n_row>0) {
                      echo '<table class="table table-striped">
                              <tr>
                                  <th>Image</th>
                                  <th>Name</th>
                                  <th>Category</th>
                                  <th>Brand</th>
                                  <th>Description</th>
                                  <th>Price</th>
                                  <th>Status</th>
                                  <th>Date</th>
                              </tr>';
                      while ($row=mysqli_fetch_assoc($result)) {
                                $item_name = $row['name'];
                                $category = $row['category'];
                                $brand = $row['brand'];
                                $price = $row['price'];
                                $status = $row['status'];
                                $description = $row['description'];
                                $timestamp = $row['timestamp'];
                                $img_name  = $row['img_name'];
                                $imgUrl  = 'ad_pictures/'.$img_name;

                          echo '<tr>
                                    <td><img src="'.$imgUrl.'" class="rounded" width="100" /></td>
                                    <td>'.$item_name.'</td>
                                    <td>'.$category.'</td>
                                    <td>'.$brand.'</td>
                                    <td>'.$description.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$timestamp.'</td>
                                </tr>';
                      }
                      echo '</table>';
                   } else {
                    echo '<p class="text-center mt-5">No records found!</p>';
                   }


            ?>
         
         


 
 




          <!-- Modal -->
          <div class="modal fade" id="newAdModal" tabindex="-1" aria-labelledby="newAdModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form class="mb-0" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="newAdModalLabel">New Ad</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     
                        <div class="mb-3">
                          <label for="" class="form-label">Categories</label>
                          <select name="category" class="form-select" required>
                              <option value="Electronics">Electronics</option>
                              <option value="Phones and acessories">Phones and acessories</option>
                              <option value="Food & Beverages">Food & Beverages</option>
                              <option value="Clothing">Clothing</option>
                              <option value="Furnitures">Furnitures</option>
                              <option value="Health and lifestyle">Health and lifestyle</option>
                              <option value="Footwears">Footwears</option>
                              <option value="Cars & spare parts">Cars & spare parts</option>
                              <option value="Laptops & accessories">Laptops & accessories</option>
                              <option value="Building materials">Building materials</option>
                              <option value="Property">Property => Land, homes</option>
                              <option value="Wristwatches">Wristwatches</option>
                              <option value="Toys">Toys</option>
                              <option value="Refrigerators">Refrigerators</option>
                              <option value="Generators">Generators</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Brand</label>
                            <select name="brand" id="" class="form-select" required>
                                <?php
                                    foreach ($brands as $brand) {
                                        echo '<option value="'.$brand.'">'.$brand.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Picture</label>
                            <input name="picture" type="file" class="form-control" required>
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