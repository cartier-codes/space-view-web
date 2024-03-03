
<?php

include '../templates/connectToDatabase.php';

// Create connection
$conn = connectToDB(); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM `planets` WHERE planet_id = '$id';";
$result = $conn->query($sql);

// Fetch all rows into an associative array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close connection
$conn->close();

echo json_encode($data);
}
?>
