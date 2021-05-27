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
            <img class="image-feature" src="../img/products/product29.jpg" alt="A1-Tinker Bell Tee">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>A1-Tinker Bell Tee</h1>
            <h2 class='product-price'>Price: $45</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p> Never compromise on fun or Earth-friendly. Blend the best of Disney and adidas Originals when you wear this soft t-shirt. Peter Pan's sidekick, Tinker Bell, takes the place of Stan Smith in the front graphic to level up your look. Stay true to the spirit of Neverland in a tee that's made with the planet in mind.<br> This product is made with organic cotton and is part of our ambition to end plastic waste. It is also coloured using a more sustainable technology to cause less harm.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>A1-Tinker Bell Tee</h5>
                    <div class="img">
                        <a href="../store2/store2_p5.php">
                            <img src="../img/products/product29.jpg" alt="Tinker Bell Tee">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$45</div>
                    </div>
                </div>
                <div class="item">
                    <h5>A2-Mike Tee</h5>
                    <div class="img">
                        <a href="../store2/store2_p6.php">
                            <img src="../img/products/product30.jpg" alt="MIKE TEE">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$45</div>
                    </div>
                </div>
                <div class="item">
                    <h5>A3-ADILETTE COMFORT SLIDES</h5>
                    <div class="img">
                        <a href="../store2/store2_p7.php">
                            <img src="../img/products/product31.jpg" alt="ADILETTE COMFORT SLIDES">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$40</div>
                    </div>
                </div>
                <div class="item">
                    <h5>A4-ULTRABOOST DNA SHOES</h5>
                    <div class="img">
                        <a href="../store2/store2_p8.php">
                            <img src="../img/products/product32.jpg" alt="ULTRABOOST DNA SHOES">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$200</div>
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