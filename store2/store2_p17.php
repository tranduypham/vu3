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
            <img class="image-feature" src="../img/products/product41.jpg" alt="PF1-MEN’S SHORT">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>F1-MEN’S SHORT</h1>
            <h2 class='product-price'>Price: $140</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-Men’s shorts<br>-Regular fit + length<br>-Miami Open 2021 Range<br>-Performance range<br>-Elastic waistband<br>-Front pleating<br>-Side pockets<br>-Contrast paneling<br>-Contrast stripe to side seams<br>-FILA badge logo to lower left leg</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>F1-MEN’S SHORT</h5>
                    <div class="img">
                        <a href="../store2/store2_p17.php">
                            <img src="../img/products/product41.jpg" alt="MEN’S SHORT">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$140</div>
                    </div>
                </div>
                <div class="item">
                    <h5>F2-UNISEX DALLAS QTR ZIP</h5>
                    <div class="img">
                        <a href="../store2/store2_p18.php">
                            <img src="../img/products/product42.jpg" alt="UNISEX DALLAS QTR ZIP">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$140</div>
                    </div>
                </div>
                <div class="item">
                    <h5>F3-UNISEX DALLAS CREW</h5>
                    <div class="img">
                        <a href="../store2/store2_p19.php">
                            <img src="../img/products/product43.jpg" alt="UNISEX DALLAS CREW">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$110</div>
                    </div>
                </div>
                <div class="item">
                    <h5>F4-FILA MERCURY JACKET</h5>
                    <div class="img">
                        <a href="../store2/store2_p20.php">
                            <img src="../img/products/product44.jpg" alt="FILA MERCURY JACKET">
                        </a>
                        </div>
                    <div class="content">
                        <div class="price">$100</div>
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