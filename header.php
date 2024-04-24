<style>
    .categories {
        padding-top: 8px;
    }
</style>
<?php
// create a connection string
$connection = mysqli_connect('localhost','root','','selldot',3306);

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">SellDot</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>


              <div class="dropdown categories">
                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Categories</span>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="product_category.php?category=electronics">Electronics</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=phones and accessories">Phones and acessories</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Food & Beverages">Food & Beverages</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Clothing">Clothing</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Furnitures">Furnitures</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Health and lifestyle">Health and lifestyle</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Cars & spare parts">Cars & spare parts</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Laptops & accessories">Laptops & accessories</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Property">Property</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Wristwatches">Wristwatches</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Toys">Toys</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Refrigerators">Refrigerators</a></li>
                  <li><a class="dropdown-item" href="product_category.php?category=Generators">Generators</a></li>
                </ul>
              </div>
    


 
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="get" action="search_results.php">
        <input class="form-control me-2" type="search" name="search_key" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>