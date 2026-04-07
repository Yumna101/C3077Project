<?php

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

// SELECT all flowers
$stmt = $pdo->prepare("SELECT * FROM flower_data");
$stmt->execute();

// Fetch all rows
$flowers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>