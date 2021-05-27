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
            <img class="image-feature" src="../img/products/product27.jpg" alt="N3-Nike Air Zoom Tempo">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>N3-Nike Air Zoom Tempo</h1>
            <h2 class='product-price'>Price: $300</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>The Nike Air Zoom Tempo NEXT% mixes durability with a design that helps push you towards your personal best. The result is a shoe built like a racer, but made for your everyday training routine.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>N1-Nike Sportwear</h5>
                    <div class="img">
                        <a href="../store2/store2_p1.php">
                            <img src="../img/products/product2.jpg" alt="Nike Sportwear">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$50</div>
                    </div>
                </div>
                <div class="item">
                    <h5>N2-Nike Sleeveless Top</h5>
                    <div class="img">
                        <a href="../store2/store2_p2.php">
                        <img src="../img/products/product26.jpg" alt="Nike Sleeveless Top">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$50</div>
                    </div>
                </div>
                <div class="item">
                    <h5>N3-Nike Air Zoom Tempo</h5>
                    <div class="img">
                        <a href="../store2/store2_p3.php">
                            <img src="../img/products/product27.jpg" alt="Nike Air Zoom Tempo">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$300</div>
                    </div>
                </div>
                <div class="item">
                    <h5>N4-Nike Air Zoom Vomero</h5>
                    <div class="img">
                        <a href="../store2/store2_p4.php">
                            <img src="../img/products/product28.jpg" alt="Air Zoom Vomero">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$350</div>
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