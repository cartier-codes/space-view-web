<?php

include '../config/credentials.php';
session_start();
$userID = $_SESSION['user_id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['name'])){  
    $name = $conn->real_escape_string($_GET['name']);
    $sql = "SELECT basket_id FROM basket WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $basket_id = $row['basket_id'];

        $sql2 = "SELECT planet_id FROM `planets` WHERE name = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("s", $name);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $planet_id = $row2['planet_id'];
            $sql3 = "INSERT INTO basketcontent (basket_id, planet_id) VALUES (?, ?)";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bind_param("ii", $basket_id, $planet_id);
            if ($stmt3->execute()) {
                $response = array('success' => true, 'message' => 'Tour added to basket');
            } else {
                $response = array('success' => false, 'message' => "Could not add tour to basket");
            }
        } else {
            $response = array('success' => false, 'message' => "Could not add tour to basket");
        }
    } else {
        $response = array('success' => false, 'message' => "Could not add tour to basket");
    }

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => "Could not add tour to basket");
    echo json_encode($response);
}

$stmt->close();
$stmt2->close();
$stmt3->close();
$conn->close();
?>