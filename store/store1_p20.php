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
            <img class="image-feature" src="../img/products/product25.jpg" alt="Pokemon Sword Switch">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>Pokemon Sword Switch</h1>
            <h2 class='product-price'>Price: $60</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-New entries in the main series of Pokémon RPGs arrive on Nintendo Switch simultaneously in late 2019<br>-The Pokémon Sword and Pokémon Shield games take place in the newly discovered Galar Region<br>-Galar is an expansive region with diverse environments - an idyllic countryside, contemporary cities, thick forest and craggy, snow-covered mountains<br>-Fans will have the opportunity to visit Gyms in the Galar region in their quest to become Champion<br>-Newly discovered partner Pokémon join in this new iteration of the games - Grookey, Scorbunny and Sobble</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <div class="item">
                    <h5>Monster Hunter Rise Switch</h5>
                    <div class="img">
                        <a href="../store/store1_p17.php">
                            <img src="../img/products/product22.jpg" alt="Monster Hunter Rise Switch">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Super Mario Odyssey Switch</h5>
                    <div class="img">
                        <a href="../store/store1_p18.php">
                            <img src="../img/products/product23.jpg" alt="Super Mario Odyssey Switch">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Zelda Breath of the Wild Switch</h5>
                    <div class="img">
                        <a href="../store/store1_p19.php">
                            <img src="../img/products/product24.jpg" alt="Zelda Breath of the Wild Switch">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Pokemon Sword Switch</h5>
                    <div class="img">
                        <a href="../store/store1_p20.php">
                            <img src="../img/products/product25.jpg" alt="Pokemon Sword Switch">
                        </a>
                        </div>
                    <div class="content">
                        <div class="price">$60</div>
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