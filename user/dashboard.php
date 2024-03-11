<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard</title>
    <link href="../bootstrap-5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/dashboard.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .fa-icons {
        margin-bottom: 4px
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>



    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
     <?php  require 'partials/header.php'; ?>
 

    <div class="container-fluid">
      <div class="row">


         <?php  require 'partials/side_nav.php';
         
               $brands = [ "Acura", "Alfa Romeo", "Alpina", "Arash", "Asquith", "Atlas Copco", "Audi", "Ausa", "Baojun", "Bentley", "BMW", "Bobcat", "Buck", "Carisson", "Case", "Caterpillar", "Changan", "Chery", "Chevrolet", "Citroen", "Clark", "Daewoo", "DAF", "Demag", "Dodge", "Doosan", "Dynapac", "ERF", "Ferrari", "Fiat", "Ford", "Foton", "Freightliner", "Gamin", "Geely", "GM", "GMC", "Grove", "GTA Motor", "Haima", "Hamm", "Hawker", "Hiab", "Hilux", "Holden", "Honda", "Hyundai", "IKCO", "Infiniti", "Infinix", "Ingersoll Rand", "Innoson", "International", "Intex", "Isuzu", "Iveco", "JAC", "Jaguar", "JCB", "JLG", "John Deere", "JVC", "Kia", "Kobelco", "Komatsu", "Kubota", "Lamborghini", "Land Rover", "Lexus", "Liebherr", "Mack", "Man", "Manitowoc", "Massey Ferguson", "Mazda", "Mercedes-Benz", "Merlo", "Mini", "Mitsubishi", "Moeller Marine Products", "Nissan", "O&K", "Opel", "Pasat", "Peugeot", "Ram", "Renault", "Roadtec", "Roewe", "Rosco", "Sany", "Scania", "Sea-Doo", "Sinotruck", "Sirus", "Skyjack", "suas", "Subaru", "Suzuki", "TATA", "Taylor Made Products", "Terex", "Toyota", "Vogele", "Volkswagen", "Volvo", "Wirtgen", "Yamaha", "Yeti", "Zoomlion", "Other Brands", "null", "AKG", "Amaz", "Anker", "Apple", "Ason", "Awei", "B&H", "Bang & Olufsen", "Baofeng", "Behringer", "Best Choice", "Binatone", "BOSE", "Canon", "Casio", "CAT", "Century", "Crown", "Deutz", "Djack", "D-Marc", "Doosan", "Edifier", "Elemax", "Elepaq", "Esodora", "FAW", "Focusrite", "Foton", "FPT", "Google", "Guang Dian", "H&H", "Haier Thermocool", "Haman", "Harman Kardon", "Himoinsa", "Hisense", "Hiview", "Honda", "Isuzu", "JBL", "JCB", "Jerry", "Jiepak", "JMG", "Juice", "KADA", "Kenwood", "Kipor", "KOHLER", "Konia", "Konka", "Korg", "Koss", "KRK", "Kubota", "Lenovo", "Leroy Somer", "LG", "Lontor", "Lovol", "Luitan", "Marcsonic", "M-Audio", "Maxi", "Microsoft", "Midea", "Mikano", "Mitsubishi", "Motorola", "Mouka", "Newcastle", "Nexus", "Niko", "Numark", "NUT", "Omron", "ORL", "OX", "Panasonic", "Perkins", "Philips", "Pioneer", "Polystar", "PreSonus", "ProTapper", "Pyramid", "Qasa", "Ratmax", "River", "Samson", "Samsung", "Saramonic", "Scanfrost", "Senci", "Sennheiser", "Senwei", "Sharp", "Shure", "Sonik", "Sony", "Sound Prince", "Soundking", "Stamford", "StarCH", "Sumec Firman", "Tiger", "Tigmax", "Timer", "UHF", "Vitafoam", "Volvo Penta", "Walton", "WFB", "Yamaha", "Yanman", "Zealot", "Zoom", "Other Brands", "Acer", "Aple", "Asus", "Avante", "AVIS", "Benq", "Casio", "Compaq", "Dell", "Epson", "Grundig", "Haier", "Hisense", "Hitachi", "HP", "IBM", "Infocus", "Intel", "JVC", "Lennox", "Lenovo", "LG", "Mac", "Medion", "Mitsubishi", "Niko", "Optoma", "Panasonic", "Philips", "Pioneer", "Polystar", "Samsung", "Sansui", "Sanyo", "Sceptre", "Seiki", "Sharp", "Skyrun", "Skyworth", "Sony", "SunbriteTV", "Supersonic", "TCL", "Toshiba", "Toshiba", "Universal", "ViewSonic", "Vivo", "VIZIO", "Other Brands", "Acer", "Afrione", "AGM", "Alcatel", "Allview", "Amazon", "Amgoo", "Amoi", "Anica", "Apple", "Archos", "Asus", "AT&T", "Benefon", "BenQ", "BenQ-Siemens", "Black Fox", "BlackBerry", "Blackview", "BLU", "Bluboo", "Bontel", "Bosch", "BQ", "Casio", "Casper", "Cat", "CCIT", "Condor", "Coolpad", "Cubot", "Dell", "Doogee", "Doopro", "Ekinox", "EL", "Elephone", "Emporia", "Energizer", "Ericsson", "Essential Products", "Fero", "Fly", "Freetel", "Fujitsu", "Gigabyte", "Gigaset", "Gionee", "GMango", "Google", "Goophone", "Gowin", "Gretel", "G-Tide", "Haier", "Hasee", "Hisense", "HomTom", "Hotwav", "HP", "HTC", "Huawei", "Icemobile", "i-mate", "i-mobile", "Imose", "Infinix", "InFocus", "InnJoo", "iNQ", "Intex", "Ipad", "Iphone", "iPRO", "Iridium", "Itel", "Ivvi", "Jiake", "Jiayu", "Jolla", "Karbonn", "Kazam", "Kenxinda", "Kgtel", "Kimfly", "Kingzone", "K-Mous", "Koobee", "K-Touch", "Kyocera", "Lava", "Leagoo", "LeEco", "Lenovo", "LG", "Lumigon", "Malata", "MANN", "Maxwest", "MeanIT", "Meizu", "M-Horse", "Micromax", "Microsoft", "Mione", "Mitac", "Mi-Tribe", "Mitsubishi", "Modu", "Motorola", "MTN", "MWg", "Nasco", "NEC", "Neon", "Neonode", "NIU", "Nokia", "Nomi", "Nomu", "O2", "Olla", "OnePlus", "Oppo", "Orange", "Oukitel", "Palm", "Panasonic", "Pano", "Pantech", "Parla", "Philips", "Plum", "Poptel", "Posh", "Prestigio", "Qmobile", "Qtek", "Ravoz", "Razer", "RCA", "Realme", "Safaricom", "Samsung", "Santin", "Sendo", "Sharp", "Siccoo", "Siemens", "Smart+", "Smartisan", "SmartOpus", "Snokor Rocket", "Soda", "Solo", "Sony", "Sony Ericsson", "Sowhat", "Spice", "SQ", "Sugar", "TCL", "Tecno", "Tel.Me.", "Telit", "Tesla", "THL", "Thuraya", "T-Mobile", "Toshiba", "Touching", "Trifone", "U mobile", "Uhans", "Uhappy", "Ulefone", "Umi", "Umidigi", "Unnecto", "Vernee", "Vertu", "Verykool", "Vivo", "VK Mobile", "Vkworld", "Vodafone", "Wiko", "Windows Phone", "Wintouch", "WND", "Wonder", "XCute", "Xerox", "Xiaomi", "XOLO", "X-Tigi", "Yezz", "Yota", "YU", "ZTE", "Other Brands" ];
              //  dump_var($brands);
              sort($brands);
              $brands = array_unique($brands);



              if (isset($_POST['btn_submit'])) { // if the button submits to server

                  $name = $_POST['name'];
                  $category = $_POST['category'];
                  $brand = $_POST['brand'];
                  $price = $_POST['price'];
                  $description = $_POST['description'];
                 
                  
                  if (
                    strlen($name)>0&&
                    strlen($category)>0&&
                    strlen($brand)>0&&
                    strlen($price)>0&&
                    strlen($description)>0
                  ) {
                     
                     
          
                                  $status = 'pending';
                                  $timestamp = time();
                                  // insert in the table
                                  $sql = "INSERT INTO ad_table (name,category,brand,price,description,status,timestamp) VALUES(?,?,?,?,?,?,?)";
                                  $stmt = mysqli_prepare($connection, $sql);
                                  mysqli_stmt_bind_param($stmt, 'sssssss', $name,$category,$brand,$price,$description,$status,$timestamp);
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








                   $sql = "SELECT * FROM ad_table";
                   $result = mysqli_query($connection, $sql);
                   $n_row  = mysqli_num_rows($result);  
 
                   if ($n_row>0) {
                      echo '<table class="table table-striped">
                              <tr>
                                  <th>Name</th>
                                  <th>Category</th>
                                  <th>Brand</th>
                                  <th>Description</th>
                                  <th>Price</th>
                                  <th>Status</th>
                                  <th>Date</th>
                              </tr>';
                      while ($row=mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $category = $row['category'];
                        $brand = $row['brand'];
                        $price = $row['price'];
                        $status = $row['status'];
                        $description = $row['description'];
                        $timestamp = $row['timestamp'];

                        echo '  <tr>
                                    <td>'.$name.'</td>
                                    <td>'.$category.'</td>
                                    <td>'.$brand.'</td>
                                    <td>'.$description.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$timestamp.'</td>
                                </tr>';
                      }
                      echo '</table>';
                   }
            ?>
 
         
         




  















          <!-- Modal -->
          <div class="modal fade" id="newAdModal" tabindex="-1" aria-labelledby="newAdModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
              <form class="mb-0" action="" method="post">
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
                            <input name="picture" type="file" class="form-control" >
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


<script src="../bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>


</body>
</html>
