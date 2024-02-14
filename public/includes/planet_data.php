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

if(isset($_GET['id'])){
    $planetID = $_GET['id'];
    $sql = "SELECT *  FROM `planets` WHERE `planet_id` = '$planetID'";
    $result = $conn->query($sql)->fetch_assoc();

    

}
// Close connection
$conn->close();

echo json_encode($result)




?>
