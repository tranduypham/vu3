<?php
include('../check_install.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <script src="../JavaScript/getdata.js"></script>

</head>
  <body>
        <!-- Header -->
    <header class="clearfix">
        
        <div class="logo">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <a href="../index.php"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <nav class="">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../mall/about.php">About us</a></li>
                <li><a href="../mall/fees.php">Fees</a></li>
                <li><a href="../account/myaccount.php">My Account</a></li>
                <li>
                    <a href="#">Browse</a>
                    <ul>
                        <li><a href="../mall/browse_name.php">Browse Stores by Name</a></li>
                        <li><a href="../mall/browse_catagory.php">Browse Stores by Category</a></li>
                    </ul>
                </li>
                <li><a href="../mall/faq.php">FAQs</a></li>
                <li><a href="../mall/contact.php">Contact</a></li>
                 <li><a href="../account/login.php">Login</a></li>
                <li><a href="../account/register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- End of header -->

    <!-- Main Body-->
    <main>
      <div class="product-page">
          <div class ="product-page-img">
            <img class="image-feature" src="../img/products/product11.jpg" alt="Nintendo Switch Mario Edition">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>Nintendo Switch Mario Edition</h1>
            <h2 class='product-price'>Price: $450</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>This Nintendo Switch system takes inspiration from Mario, with a bold red design on the Nintendo Switch Console, Joy-Con controllers, and the Nintendo Switch dock.<br>A solid blue design is featured on both the Joy-Con grip and Joy-Con wrist straps.<br>As a bonus, this Nintendo Switch bundle includes a Mario red & blue Edition carrying case adorned with Super Mario iconography.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>Nintendo Switch V2</h5>
                    <div class="img">
                        <a href="../store/store1_p5.php">
                            <img src="../img/products/product10.jpg" alt="Nintendo Switch V2">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$400</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Nintendo Switch Mario Edition</h5>
                    <div class="img">
                        <a href="../store/store1_p6.php">
                            <img src="../img/products/product11.jpg" alt="Nintendo Switch Mario Edition">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$450</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Nintendo Switch Animal Crossing</h5>
                    <div class="img">
                        <a href="../store/store1_p7.php">
                            <img src="../img/products/product13.jpg" alt="Nintendo Switch Animal Crossing">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$450</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Nintendo Switch Lite</h5>
                    <div class="img">
                        <a href="../store/store1_p8.php">
                            <img src="../img/products/product12.jpg" alt="Nintendo Switch Lite">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$250</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="clearfix">
        <nav>
            <ul>
                <li><a href="../mall/copyright.php">Copyright</a> </li>
                <li><a href="../mall/termofservice.php">Term of service</a> </li>
                <li><a href="../mall/privatepolicy.php">Private Policy</a> </li>
            </ul>
        </nav>
    </footer>
    <!-- End of footer
  </body>
</html>