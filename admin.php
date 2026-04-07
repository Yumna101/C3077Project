<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pdo_status = false;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=sumya_c3077", "sumya_c3077", "63jNSBGPAUbpT6hPMDPq");
    $pdo_status = true;
} catch (PDOException $e) {
    $pdo_status = false;
}

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    echo "<script>
        alert('Access denied! Admins only.');
        window.location.href='index.php';
    </script>";
    exit();
}

// Function to display status
function checkStatus($condition){
    return $condition ? "Online" : "Offline";
}

// Disable user
if (isset($_GET['disable'])) {
    $id = $_GET['disable'];
    $stmt = $pdo->prepare("UPDATE user_data SET disabled = 1 WHERE id = ?");
    $stmt->execute([$id]);
}

// Enable user
if (isset($_GET['enable'])) {
    $id = $_GET['enable'];
    $stmt = $pdo->prepare("UPDATE user_data SET disabled = 0 WHERE id = ?");
    $stmt->execute([$id]);
}

//insert new product data into phpMyAdmin table for products called flower_data
if (isset($_POST['add'])) {
    $product_no = intval($_POST['product_no']);
    $flower_type = $_POST['flower_type'];
    $color = $_POST['color'];

    $stmt = $pdo->prepare("INSERT INTO flower_data (product_no, flower_type, color) VALUES (?, ?, ?)");
    $stmt->execute([$product_no, $flower_type, $color]);
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
                    <li><a class="active" href="admin.php">System Admin</a></li>
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

    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Get to know more about us</p>
    </section>

    <div class="status-box">
        <strong>Current date and time:</strong>
       <?php echo "<strong>Last Checked:</strong> " . date("Y-m-d H:i:s"); ?>
    </div>

    <div class="status-box">
        <strong>Server Status:</strong>
        <?php echo checkStatus(true); ?>
    </div>

    <div class="status-box">
        <strong>Session/Login System:</strong>
        <?php echo checkStatus(session_status() === PHP_SESSION_ACTIVE); ?>
    </div>

    <div class="status-box">
        <strong>Main Page (index.php):</strong>
        <?php echo checkStatus(file_exists("index.php")); ?>
    </div>

    <div class="status-box">
        <strong>Images Folder:</strong>
        <?php echo checkStatus(is_dir("images")); ?>
    </div>

    <div class="status-box">
        <strong>JavaScript File:</strong>
        <?php echo checkStatus(file_exists("script.js")); ?>
    </div>

    <div class="status-box">
        <strong>CSS File:</strong>
        <?php echo checkStatus(file_exists("style.css")); ?>
    </div>

    <div class="status-box">
        <strong>Database Status:</strong>
        <?php echo checkStatus($pdo_status); ?>
    </div>
<!-- END Status-->

<!--Theme Switching-->

    <section id="about-head" class="section-p1">
        <img src="images/about/a2.jpg" alt="">
        <div>
            <h2>Themes</h2>
            <p> We different themes for every season: Winter, Spring/Summer, and Fall! You can change the themese by 
                simply clicking on the the one that you want from belowe. For example, when you click on Winter you the webpage will change to winter theme 
                with winter special pictures and products. Furthermore, the webpage theme automatically changes based on the date and time of when the new season
                starts. Below you can see the time zone for the major cities and the change of the theme is world wide based on the local time in that area! 🌸✨
            </p>
            <abbr title="">Create stunning website for a cute little flowers shop.
            </abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Hope you love our flowers!
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
      <label for="theme-selector">Choose a Theme:</label>
      <select id="theme-selector">
          <option value="style.css">Spring/Summer - Regular</option>
          <option value="fall.css">Fall</option>
          <option value="winter.css">Winter</option>
      </select>
    </section>
  

    <!--Edit data reocords-->
    <h2>Edit Products</h2>

    <form method="POST">
        <input type="number" name="product_no" placeholder="Product No" required>
        <input type="text" name="flower_type" placeholder="Flower Type" required>
        <input type="text" name="color" placeholder="Color" required>
        <button type="submit" name="add">Add</button>
    </form>

    
<!--MANAGE users-->
<h2>Manage Users</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Email</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$stmt = $pdo->query("SELECT * FROM user_data");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['role']."</td>";

    if ($row['disabled'] == 1) {
        echo "<td>Disabled</td>";
        echo "<td><a href='admin.php?enable=".$row['id']."'>Enable</a></td>";
    } else {
        echo "<td>Active</td>";
        echo "<td><a href='admin.php?disable=".$row['id']."'>Disable</a></td>";
    }

    echo "</tr>";
}
?>
</table>



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