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
            <img class="image-feature" src="../img/products/product20.jpg" alt="Assassin's Creed Valhalla PS5">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'>Assassin's Creed Valhalla PS5</h1>
            <h2 class='product-price'>Price: $60</h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-You are Eivor, a fierce Viking warrior raised on tales of battle and glory. Explore a dynamic and beautiful open world set against the brutal backdrop of England’s Dark Ages.<br>-Advanced RPG mechanics allow you to shape the growth of your character and influence the world around you.<br>-Dual-wield powerful weapons such as axes, swords, and even shields to relive the ruthless fighting style of the Viking warriors.<br>-Launch massive assaults against Saxon troops and fortresses throughout England<br>-Sail from the harsh and mysterious shores of Norway to the beautiful but forbidding kingdoms of England and beyonda dark Age open world - sail from the harsh and mysterious shores of Norway to the beautiful but forbidding kingdoms of England and beyondlead epic raids - launch massive assaults against Saxon troops and fortresses throughout Englandgrow your settlement - construct and upgrade buildings that allow for deep customization, including a barracks, Blacksmith, tattoo parlor, and moremercenary Vikings - Create and customize a unique Viking Raider within your Clan and share it online with friends to use during their own raids</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                    <div class="item">
                    <h5>Outriders PS5</h5>
                    <div class="img">
                        <a href="../store/store1_p13.php">
                            <img src="../img/products/product18.jpg" alt="Outriders PS5">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Marvel's Avengers PS5</h5>
                    <div class="img">
                        <a href="../store/store1_p14.php">
                            <img src="../img/products/product19.jpg" alt="Marvel's Avengers PS5">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Assassin's Creed Valhalla PS5</h5>
                    <div class="img">
                        <a href="../store/store1_p15.php">
                            <img src="../img/products/product20.jpg" alt="Assassin's Creed Valhalla PS5">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$60</div>
                    </div>
                </div>
                <div class="item">
                    <h5>Demon Souls PS5</h5>
                    <div class="img">
                        <a href="../store/store1_p16.php">
                            <img src="../img/products/product21.jpg" alt="Demon Souls PS5">
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