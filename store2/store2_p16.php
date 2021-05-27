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
            <img class="image-feature" src="../img/products/product40.jpg" alt="P4-RS-Fast Futurverse Men's Sneakers">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>P4-RS-Fast Futurverse Men's Sneakers</h1>
            <h2 class='product-price'>Price: $110</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>Enter the Futurverse. This techy, functional RS-Fast blends early 2000s influence with a futuristic aesthetic inspired by ultra modern Asian cities, featuring a reflective, iridescent color palette drawn from neon city lights.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>P1-Ultra Men's Running Jacket</h5>
                    <div class="img">
                        <a href="../store2/store2_p13.php">
                            <img src="../img/products/product37.jpg" alt="Ultra Men's Running Jacket">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$90</div>
                    </div>
                </div>
                <div class="item">
                    <h5>P2-Downtown Men's Graphic Hoodie</h5>
                    <div class="img">
                        <a href="../store2/store2_p14.php">
                            <img src="../img/products/product38.jpg" alt="Downtown Men's Graphic Hoodie">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$70</div>
                    </div>
                </div>
                <div class="item">
                    <h5>P3-RS-X Arcade Men's Sneakers</h5>
                    <div class="img">
                        <a href="../store2/store2_p15.php">
                            <img src="../img/products/product39.jpg" alt="RS-X Arcade Men's Sneakers">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$110</div>
                    </div>
                </div>
                <div class="item">
                    <h5>P4-RS-Fast Futurverse Men's Sneakers</h5>
                    <div class="img">
                        <a href="../store2/store2_p16.php">
                            <img src="../img/products/product40.jpg" alt="RS-Fast Futurverse Men's Sneakers">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$110</div>
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