<?php

session_start();
include '../templates/connectToDatabase.php';
$conn = connectToDB();

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['signin-username'];
    $user_password = $_POST['signin-password'];

    $stmt = $conn->prepare("SELECT user_id, password FROM user WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    
    // Bind the results
    $stmt->bind_result($result_user_id, $hashed_password);
    $stmt->fetch();
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();

    if ($result_user_id) {
        // Now you have $hashed_password, and you can use password_verify() to check the entered password
        $entered_password = $_POST['signin-password'];

        if (password_verify($entered_password, $hashed_password)) {
            $_SESSION['user_id'] = $result_user_id;
            $response = array('success' => true, 'message' => 'Login successful');
        } else {
            // Passwords do not match, authentication failed
            $response = array('success' => false, 'message' => 'Incorrect password');
            // Handle accordingly (e.g., show an error message)
        }
    } else {
        // No user found with the given user_id
        // Handle accordingly (e.g., show an error message)
        $response = array('success' => false, 'message' => 'User not found');
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
}
