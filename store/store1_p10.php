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
            <img class="image-feature" src="../img/products/product15.jpg" alt="Xbox Series S">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>Xbox Series S</h1>
            <h2 class='product-price'>Price: $300</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-Access your favorite entertainment through apps like YouTube, Netflix, and more<br>-Enjoy over 100 games right out of the box with a 1 month Xbox Game Pass trial<br>-Watch 4K Blu-ray movies and stream 4K video on Netflix, Amazon, Hulu, Microsoft Movies & TV, and more<br>-Play with friends and family near and far—sitting together on the sofa or around the world on Xbox Live, the fastest, most reliable gaming network<br>-Xbox 1 games and accessories work together</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>Xbox Series X</h5>
                    <div class="img">
                        <a href="../store/store1_p9.php">
                            <img src="../img/products/product14.jpg" alt="Xbox Series X">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$500</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Xbox Series S</h5>
                    <div class="img">
                        <a href="../store/store1_p10.php">
                            <img src="../img/products/product15.jpg" alt="Xbox Series S">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$300</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Xbox One 1TB</h5>
                    <div class="img">
                        <a href="../store/store1_p11.php">
                            <img src="../img/products/product16.jpg" alt="Xbox One">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$200</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Xbox 360 Holiday Bundle</h5>
                    <div class="img">
                        <a href="../store/store1_p12.php">
                            <img src="../img/products/product17.jpg" alt="Xbox 360 Holiday Bundle">
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