<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yumna's Journal | Online Flower Shop</title>
    <meta name="description" content="Yumna's Journal offers a beautiful collection of flowers with inspiring quotes. Find roses, tulips, sunflowers, and more with meaningful messages.">
    <meta name="keywords" content="flowers, online flower shop, roses, tulips, sunflowers, floral quotes, buy flowers online, Yumna's Journal">
    <meta name="author" content="Yumna's Journal">

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- Default stylesheet -->
<link id="theme-link" rel="stylesheet" href="style.css">
<script src="theme.js" defer></script>

</head>

<body>
        
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="wiki.php">Wikis</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <?php if (!isset($_SESSION['user_id'])): ?>
                    <li><a href="login.php">Login</a></li>
                <?php else: ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>

                <!-- ADMIN ONLY -->
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                    <li><a href="admin.php">System Admin</a></li>
                <?php endif; ?>

                <!-- CUSTOMER + ADMIN CART ACCESS -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li id="lg-bag">
                        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                    </li>
                <?php endif; ?>

                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='Product1.php?id=1';">
                <img src="images/products/f1.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product2.php?id=2';">
                <img src="images/products/f2.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product3.php?id=3';">
                <img src="images/products/f3.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product4.php?id=4';">
                <img src="images/products/f4.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product5.php?id=5';">
                <img src="images/products/f5.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product6.php?id=6';">
                <img src="images/products/f6.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product7.php?id=7';">
                <img src="images/products/f7.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product8.php?id=8';">
                <img src="images/products/f8.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product9.php?id=9';">
                <img src="images/products/n1.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product10.php?id=10';">
                <img src="images/products/n2.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product11.php?id=11';">
                <img src="images/products/n3.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product12.php?id=12';">
                <img src="images/products/n4.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product13.php?id=13';">
                <img src="images/products/n5.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product14.php?id=14';">
                <img src="images/products/n6.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product15.php?id=15';">
                <img src="images/products/n7.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product16.php?id=16';">
                <img src="images/products/n8.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product17.php?id=17';">
                <img src="images/products/z1.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Product18.php?id=18';">
                <img src="images/products/z2.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product19.php?id=19';">
                <img src="images/products/z3.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product20.php?id=20';">
                <img src="images/products/z4.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            





            <div class="pro" onclick="window.location.href='Product21.php?id=21';">
                <img src="images/products/z5.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Product22.php?id=22';">
                <img src="images/products/z6.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product23.php?id=23';">
                <img src="images/products/z7.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='Product24.php?id=24';">
                <img src="images/products/z8.jpg" alt="">
                <div class="des">
                    <span>Flowers</span>
                    <h5>Flowers in Boquet Arrangement</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
    <!--
        <a href="#">2</a>
        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
    -->
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="images/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Windsor, Ontario - 300 Ouellette Ave</p>
            <p><strong>Phone:</strong> +519-345-1394</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="images/pay/app.jpg" alt="">
                <img src="images/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateway</p>
            <img src="images/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>Created By Yumna Sumya | All Rights Reserved | &#169; 2025</p>
        </div>
    </footer>

    <!-- javascript script file link -->
    <script src="script.js"></script>
</body>

</html>