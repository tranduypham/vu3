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
            <img class="image-feature" src="../img/products/product34.jpg" alt="U2-Pile Lined Sweat Long Sleeve Full-Zip Hoodie">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>U2-Pile Lined Sweat Long Sleeve Full-Zip Hoodie</h1>
            <h2 class='product-price'>Price: $50</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>- A sleek silhouette that does not look bulky.<br>- Unlined sleeves so it is easy to move the arms.<br>- The pocket lining is made of raised tricot, which warms your hards from the moment they’re in the pockets.<br>- Streamlined entire look by using three-needle stitching for the seams.<br>- Improved, sharper-looking hood.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>U1-MEN Pile Lined Sweat Pants</h5>
                    <div class="img">
                        <a href="../store2/store2_p9.php">
                            <img src="../img/products/product33.jpg" alt="MEN Pile Lined Sweat Pants">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$45</div>
                    </div>
                </div>
                <div class="item">
                    <h5>U2-Pile Lined Sweat Long Sleeve Full-Zip Hoodie</h5>
                    <div class="img">
                        <a href="../store2/store2_p10.php">
                            <img src="../img/products/product34.jpg" alt="Pile Lined Sweat Long Sleeve Full-Zip Hoodie">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$50</div>
                    </div>
                </div>
                <div class="item">
                    <h5>U3-MEN Ultra Light Down Vest</h5>
                    <div class="img">
                        <a href="../store2/store2_p11.php">
                            <img src="../img/products/product35.jpg" alt="MEN Ultra Light Down Vest">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$55</div>
                    </div>
                </div>
                <div class="item">
                    <h5>U4-Fleece Long Sleeve Full-Zip Jacket</h5>
                    <div class="img">
                        <a href="../store2/store2_p12.php">
                            <img src="../img/products/product36.jpg" alt="Fleece Long Sleeve Full-Zip Jacket">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$55</div>
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