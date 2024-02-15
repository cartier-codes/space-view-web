<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "astro-view-db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `planets` ORDER BY `planet_id` ASC;";
$result = $conn->query($sql)->fetch_assoc();

// Close connection
$conn->close();

echo json_encode($result)




?>
