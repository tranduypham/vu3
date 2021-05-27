<?php
include('../check_install.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <style>
        header{
            background-color: #e6dbbe;
        }
    </style>
</head>
<body>
    <!-- Header -->
<header class="clearfix">
      <div class="logo">
          <div class="hamburger"></div>
          <a href="../store/store_home.php"><img src="../img/store/store1.jpg" alt="logo-store1">
      </div>
      <nav class="">
          <ul>
              <li><a href="../store/store_home.php">Store Home</a></li>
              <li><a href="../index.php">Mall Home</a></li>
              <li><a href="../mall/about.php">About us</a></li>
              <li>
                    <a href="#">Products</a>
                    <ul>
                        <li><a href="../store/browse_time.php">Browse Products by Time Created</a></li>
                        <li><a href="../store/browse_Pcategory.php">Browse Products by Category</a></li>
                    </ul>
                </li>
              <li><a href="../mall/contact.php">Contact</a></li>
          </ul>
      </nav>
    </header>
    <!-- End of header -->

    <!-- Body -->
    <main>
        <div>
            <label for="list">Category</label>
            <select name="list" id="">
                <option value="0">Nike</option>
                <option value="1">Adidas</option>
                <option value="2">Puma</option>
                <option value="3">Uniqlo</option>
                <option value="4">Fila</option>
            </select>
        </div>
        <div class="new-product">
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
    <!-- End of body -->

    <!-- Footer -->
    <footer class="store2">
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