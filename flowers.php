<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Enable error reporting to help with debugging during development
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define an associative array where each city is a key and its flowers are the value
$cityFlowers = [
    "New York" => "Tulips, Cherry Blossoms",
    "London" => "Roses, Daffodils",
    "Tokyo" => "Cherry Blossoms (Sakura)",
    "Paris" => "Lavender, Camellias",
    "Moscow" => "Lilacs, Peonies",
    "Sydney" => "Waratah, Jacaranda",
    "Beijing" => "Lotus",
    "Mumbai" => "Hibiscus, Frangipani",
    "Sao Paulo" => "Orchids, Bromeliads",
    "Cairo" => "Jasmine, Bougainvillea"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding and page metadata -->
    <meta charset="UTF-8">
    <title>Yumna's Journal | Online Flower Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yumna's Journal offers a beautiful collection of flowers with inspiring quotes.">
    <!-- Link to external CSS file for styling -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header/navigation section with logo and navbar -->
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

    <!-- Page header/banner with title and description -->
    <section id="page-header" class="about-header">
        <h2>Flowers</h2>
        <p>Get to know more about us</p>
    </section>

    <!-- Section describing flowers in different cities -->
    <section id="about-head" class="section-p1">
        <img src="images/about/a6.jpg" alt=""> <!-- About image -->
        <div>
            <h2>About Flowers</h2>
            <p>
                <!-- Descriptive paragraph about various cities and their iconic flowers -->
                Flowers bloom in diverse urban environments across the world, each adapting to the unique climate and conditions of its city. 
                In <b>New York</b>, tulips and cherry blossoms thrive in parks like Central Park during spring. 
                <b>London</b> is known for its iconic roses and daffodils, flourishing in the city's mild, rainy climate. 
                In <b>Tokyo</b>, cherry blossoms (sakura) create breathtaking pink canopies each spring. 
                <b>Paris</b> is home to elegant lavender and camellias. 
                <b>Moscow's</b> harsh winters give way to lilacs and peonies. 
                <b>Sydney</b> shows off native waratah and jacaranda. 
                <b>Beijing</b> has stunning lotus flowers. 
                <b>Mumbai</b> boasts hibiscus and frangipani. 
                <b>Sao Paulo</b> grows orchids and bromeliads. 
                <b>Cairo</b> features jasmine and bougainvillea. 🌸
            </p>
            <abbr>Created with love by Yumna 💐</abbr> <!-- Creator credit -->
            <marquee bgcolor="#ccc" scrollamount="5">Hope you love our flowers!</marquee> <!-- Scrolling message -->
        </div>
    </section>

    <!-- Section displaying a table of cities and their flowers -->
    <section class="section-p1">
        <h2 style="text-align: center;">🌸 Cities and Their Signature Flowers</h2>
        <div style="overflow-x:auto;"> <!-- Makes table horizontally scrollable on small screens -->
            <table style="border-collapse: collapse; width: 80%; margin: 20px auto;">
                <caption style="font-size: 1.5em; margin-bottom: 10px;">Flower Cities</caption> <!-- Table caption -->
                <tr>
                    <!-- Table headers -->
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">City</th>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">Signature Flowers</th>
                </tr>
                <?php foreach ($cityFlowers as $city => $flowers): ?> <!-- Loop through each city and flowers pair -->
                    <tr>
                        <!-- Output city name and flower names, ensuring HTML is escaped for safety -->
                        <td style="border: 1px solid #ddd; padding: 10px;"><?php echo htmlspecialchars($city); ?></td>
                        <td style="border: 1px solid #ddd; padding: 10px;"><?php echo htmlspecialchars($flowers); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

    <!-- Section highlighting shop features -->
    <section id="feature" class="section-p1">
        <!-- Each box highlights a specific benefit -->
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

    <!-- Newsletter subscription section -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <!-- Email input field and sign-up button -->
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <!-- Footer section with contact info, links, and app install banners -->
    <footer class="section-p1">
        <!-- Column 1: Contact info and social media -->
        <div class="col">
            <img class="logo" src="images/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Windsor, Ontario - 300 Ouellette Ave</p>
            <p><strong>Phone:</strong> +519-345-1394</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <!-- Social media icons (Font Awesome) -->
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <!-- Column 2: About links -->
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <!-- Column 3: Account-related links -->
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
            <li><a class="active" href="wiki.php"></a></li> <!-- Active page -->
        </div>

        <!-- Column 4: App download and payment info -->
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

        <!-- Footer note with copyright -->
        <div class="copyright">
            <p>Created By Yumna Sumya | All Rights Reserved | &#169; 2025</p>
        </div>
    </footer>

    <!-- Link to external JavaScript file -->
    <script src="script.js"></script>
</body>

</html>