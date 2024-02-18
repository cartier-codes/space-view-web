<?php
include 'config/credentials.php';

session_start();
$userID = $_SESSION['user_id'];

if(isset($userID)){
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
}
else{
    header('Location: login.php');
}

?>