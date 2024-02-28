<?php
// Replace with your actual database credentials
include 'config/credentials.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input (make sure to validate and sanitize)
    $username = $_POST['signup-username'];
    $password = $_POST['signup-password'];

    // Hash the password (use a strong hashing algorithm like bcrypt)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // SQL statement with placeholders for the prepared statement
    $sql = "INSERT INTO user (username, password) VALUES (?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the placeholders
        $stmt->bind_param("ss", $username, $hashedPassword);

        // Execute the prepared statement
        $stmt->execute();

        // Check for successful insertion
        if ($stmt->affected_rows > 0) {
            // User registered successfully, get the user ID
            $userId = $stmt->insert_id;

            // Start the session
            session_start();

            // Save the user's ID in the session
            $_SESSION['user_id'] = $userId;
            // Redirect the user to the desired page (e.g., planets.php)
            header("Location: planets.php");
            exit();
        } else {
            echo "Error: Unable to register user.";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare the statement.";
    }

    // Close the database connection
    $conn->close();
}
?>
