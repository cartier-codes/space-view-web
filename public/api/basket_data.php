<?php

include '../templates/connectToDatabase.php';
session_start();
$userID = $_SESSION['user_id'];
$conn = connectToDB(); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT basket_id FROM `basket` WHERE user_id like '$userID';";
$result = $conn->query($sql)->fetch_assoc();
$basket_id = $result['basket_id'];
$sql2 = "SELECT * FROM `basketcontent` WHERE basket_id like $basket_id";
// Assuming $conn is a valid MySQLi connection
$result2 = $conn->query($sql2);
$count = 0;
if ($result2) {
    // Check if there is at least one row in the result set
    if ($result2->num_rows > 0) {
        // Loop through all rows in the result set
        while ($row = $result2->fetch_assoc()) {
           $count +=1;
        }
    }
} else {
    // Handle the case where the query failed
    echo "Query failed: " . $conn->error;
}

echo json_encode($count);