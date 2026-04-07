<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    echo "<script>
        alert('You must login first!');
        window.location.href='login.php';
    </script>";
    exit();
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
                        <a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a>
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

    <section id="page-header" class="about-header">
        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70%!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fas fa-times-circle" style="color:black"></i></a></td>
                    <td><img src="images/products/f1.jpg" alt=""></td>
                    <td>Flowers</td>
                    <td>$20</td>
                    <td><input type="number" value="1"></td>
                    <td>$20</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fas fa-times-circle" style="color:black"></i></a></td>
                    <td><img src="images/products/f2.jpg" alt=""></td>
                    <td>Flowers</td>
                    <td>$20</td>
                    <td><input type="number" value="1"></td>
                    <td>$20</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fas fa-times-circle" style="color:black"></i></a></td>
                    <td><img src="images/products/f3.jpg" alt=""></td>
                    <td>Flowers</td>
                    <td>$20</td>
                    <td><input type="number" value="1"></td>
                    <td>$20</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div class="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div class="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 60</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 60</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
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