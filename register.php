<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$dbname = "sumya_c3077";
$username = "sumya_c3077";
$password = "63jNSBGPAUbpT6hPMDPq";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$message = "";

// REGISTER LOGIC
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $role = "customer"; // default role

    // check if user already exists
    $check = $pdo->prepare("SELECT * FROM user_data WHERE email = ?");
    $check->execute([$email]);

    if ($check->rowCount() > 0) {
        $message = "User already exists. Please login.";
    } else {
        // insert new user
        $stmt = $pdo->prepare("INSERT INTO user_data (email, password, role) VALUES (?, ?, ?)");
        $stmt->execute([$email, $pass, $role]);

        $message = "Account created successfully! You can now login.";
    }
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">


    <!-- Default stylesheet -->
<link id="theme-link" rel="stylesheet" href="style.css">
<script src="theme.js" defer></script>

<!--CSS-->
<style>
.status-box {
    padding: 10px;
    border-radius: 8px;
    background: #cdc3d3;
}
</style>

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

        <!-- Website login using php -->
    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
        <p>Login or register to start getting deals!</p>
    </section>

    
    <section class="section-p1">
    <h2>Create Account</h2>

    <form method="POST" action="">
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        <button type="submit" name="register" class="normal">Register</button>
    </form>

    <p style="color:green;"><?php echo $message; ?></p>

    <p>Already have an account? <a href="login.php">Login</a></p>
</section>

<section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
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