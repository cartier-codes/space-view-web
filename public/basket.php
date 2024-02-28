<?php
include 'config/credentials.php';
session_start();
if(!isset($_SESSION['user_id'])){
  echo '<script>
            setTimeout(function() {
                window.location.href = "login.php"; // Replace with the actual URL of your login page
            }, 3000); // 3000 milliseconds = 3 seconds
        </script>';
}else{
    $userID = $_SESSION['user_id'];
}
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `basketcontent` WHERE basket_id IN (SELECT basket_id FROM `basket` WHERE user_id = ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    
    // Fetch the result set
    $result = $stmt->get_result();

    // Fetch all rows
    $basketContents = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($basketContents);

    // Close the statement
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>