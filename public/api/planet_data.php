<?php
include '../templates/connectToDatabase.php';
// Create connection
$conn = connectToDB(); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!isset($_GET['offset'])){
    $sql = "SELECT * FROM `planets` ORDER BY `planet_id` ASC;";
    $result = $conn->query($sql);

    // Fetch all rows into an associative array
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Close connection
    $conn->close();

// Encode the entire result array as JSON
    echo json_encode($data);
}
?>
