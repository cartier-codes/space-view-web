<?php
function connectToDB() {
    include '../config/credentials.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}
?>