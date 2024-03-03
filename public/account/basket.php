<?php
// Assuming you have a MySQLi connection already established, replace "your_connection" with your actual connection variable.
include '../templates/connectToDatabase.php';
session_start();

$connection = connectToDB();
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Assuming you have a userId variable, replace "your_user_id" with your actual userId.
$userId = $_SESSION['user_id'];
// Query to retrieve basket_id for the given user
$basketQuery = "SELECT b.basket_id
                FROM basket b
                JOIN user u ON b.user_id = u.user_id
                WHERE u.user_id = ?";

// Prepare and bind the statement for the basket query
$stmtBasket = $connection->prepare($basketQuery);
$stmtBasket->bind_param("i", $userId);

// Execute the basket query
$stmtBasket->execute();

// Bind result variable for basket query
$stmtBasket->bind_result($basketId);

// Fetch the result
$stmtBasket->fetch();

// Check if a basket was found for the given user
if ($basketId) {
    // Close the statement for the basket query
    $stmtBasket->close();

    // Query to retrieve planet details using the retrieved basket_id
    $planetQuery = "SELECT bc.transaction_time, p.name, p.pricing, p.still_image
                    FROM basketcontent bc
                    JOIN planets p ON bc.planet_id = p.planet_id
                    WHERE bc.basket_id = ?";

    // Prepare and bind the statement for the planet query
    $stmtPlanet = $connection->prepare($planetQuery);
    $stmtPlanet->bind_param("i", $basketId);

    // Execute the planet query
    $stmtPlanet->execute();

    // Bind result variables for planet query
    $stmtPlanet->bind_result($time, $name, $pricing, $stillImg);

    $planets=[];
    // Fetch the results
    while ($stmtPlanet->fetch()) {
        // Process each row of the result
        $planets[] = json_encode(array('time' => $time, 'name' => $name, 'pricing' => $pricing, 'stillImg' => $stillImg));
    }
    foreach ($planets as $planet) {
        echo $planet . "<br>";
    }

    // Close the statement for the planet query
    $stmtPlanet->close();
} else {
    echo "No basket found for User ID $userId.";
}

// Close the connection
$connection->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/title-icon.png" type="image/x-icon">
</head>
<body>
</body>
</html>