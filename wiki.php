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
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="wiki.php">Wikis</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <a href="themes.html"><h4>Themes</h4></a>
                <p>Click on "Themes" heading to find out how to change the theme based on the season.
                </p>
                <a href="themes.html">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <a href="products.html"><h4>Products</h4></a>
                <p>Click on "Products" heading to find out how to change the products based on the season.
                </p>
                <a href="products.html">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <a href="fonts.html"><h4>Fonts</h4></a>
                <p>Click on "Fonts" heading to find out how to change the font colors and size.
                </p>
                <a href="fonts.html">CONTINUE READING</a>
            </div>
            <h1>12/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <a href="text.html"><h4>Texts</h4></a>
                <p>Click on "Text" heading to find out how to changes the text.
                </p>
                <a href="text.html">CONTINUE READING</a>
            </div>
            <h1>16/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <a href="flowers.php"><h4>Flowers</h4></a>
                <p>Click on "Flowers" heading to find out how to care for flowers.
                </p>
                <a href="flowers.php">CONTINUE READING</a>
            </div>
            <h1>10/03</h1>
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