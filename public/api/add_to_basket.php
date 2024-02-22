<?php

include '../config/credentials.php';
session_start();
$userID = $_SESSION['user_id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['name'])){  // Use isset to check if 'name' is set
    $name = $conn->real_escape_string($_GET['name']);  // Use real_escape_string to prevent SQL injection
    $sql = "SELECT basket_id FROM basket WHERE user_id = $userID;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $basket_id = $row['basket_id'];

        $sql2 = "SELECT planet_id FROM `planets` WHERE name = 'earth';";  // Removed unnecessary escaping
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $planet_id = $row2['planet_id'];

            $sql3 = "INSERT INTO basketcontent (basket_id, planet_id) VALUES ('$basket_id', '$planet_id')";

            if ($conn->query($sql3) === TRUE) {
                $response = 'yes';
            } else {
                $response = 'no';
            }
        } else {
            $response = 'no';
        }
    } else {
        $response = 'no';
    }

    echo json_encode($response);
} else {
    echo json_encode('no');  // Return 'no' if 'name' is not set
}

$conn->close();
?>
