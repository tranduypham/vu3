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
            <img class="image-feature" src="../img/products/product7.jpg" alt="PS4 Pro 1TB Black">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>PS4 Pro 1TB Black</h1>
            <h2 class='product-price'>Price: $400</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-PlayStation 4 Pro - the super charged PS4 - take play to the next level with PS4 Pro: See every detail explode into life with 4K gaming and entertainment, experience faster, smoother frame rates and more powerful gaming performance and enjoy richer, more vibrant colours with HDR technology<br>-4K gaming and entertainment - games and movies shine with amazing 4K clarity<br>-Graphics become sharper and more realistic, skin tones become warmer and more lifelike, while textures and environments burst into life like never before<br>-High dynamic range - With an HDR enabled TV, compatible PS4 games display an intensely vibrant range of colours, closer to the full spectrum that the human eye can see<br>-Enhanced games - PS4 Pro games burst into life with intensely sharp graphics, stunningly vibrant colours, textures and environments and smoother, more stable performance<br>-Every PS4 game is playable on PS4 Pro at a minimum of 1080p, while others get a boost to enhance their graphics to incredible 4K. No matter what TV you play on, all PS4 games benefit from enhanced graphics and smoother, faster, more detailed action<br>-The best in 4K entertainment - stream the biggest movies, hottest TV shows and latest videos in 4K resolution from Netflix, YouTube and a host of entertainment apps coming soon - all with auto-upscaling for the sharpest picture possible</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>PS5-Standard Edition</h5>
                    <div class="img">
                        <a href="../store/store1_p1.php">
                        <img src="../img/products/product1.jpg" alt="PS5-Standard Edition">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$500</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS5-Digital Edition</h5>
                    <div class="img">
                        <a href="../store/store1_p2.php">
                        <img src="../img/products/product5.jpg" alt="PS5-Digital Edition">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$400</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS4 Pro 1TB Black</h5>
                    <div class="img">
                        <a href="../store/store1_p3.php">
                        <img src="../img/products/product7.jpg" alt="PS4 Pro 1TB Black">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$400</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS4 Slim 1TB</h5>
                    <div class="img">
                        <a href="../store/store1_p4.php">
                        <img src="../img/products/product9.jpg" alt="PS4 Slim 1TB">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$350</div>
                        <div class="store"><a href="#">store 1</a> </div>
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