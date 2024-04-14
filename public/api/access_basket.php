<?php
// Assuming you have a MySQLi connection already established, replace "your_connection" with your actual connection variable.

include '../templates/connectToDatabase.php';
session_start();

$connection = connectToDB();
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_SESSION['user_id'])){
$userId = $_SESSION['user_id'];
}
else if(isset($_GET['user_id'])){
  $userId = $_GET['user_id'];
}
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
    $planetQuery = "SELECT bc.transaction_time, bc.rating, p.name, p.pricing, p.still_image
                    FROM basketcontent bc
                    JOIN planets p ON bc.planet_id = p.planet_id
                    WHERE bc.basket_id = ?";

    // Prepare and bind the statement for the planet query
    $stmtPlanet = $connection->prepare($planetQuery);
    $stmtPlanet->bind_param("i", $basketId);
    // Execute the planet query
    $stmtPlanet->execute();
    $stmtPlanet->bind_result($time, $rating,$name, $pricing, $stillImg);
    $planets=[];
    // Fetch the results
    while ($stmtPlanet->fetch()) {
        // Process each row of the result
        $planets[] = json_encode(array('time' => $time,'rating' => $rating, 'name' => $name, 'pricing' => $pricing, 'stillImg' => $stillImg));
    }
    if(count($planets) == 0){
      echo 0;
    }else{
      if(isset($_GET['length'])){
        echo sizeof($planets);
      }else{
      echo json_encode($planets);
      }
    }
    // Close the statement for the planet query
    $stmtPlanet->close();
} else {
    echo json_encode(array('error'=> true, 'description' => 'Basket not found for current user')); 
}

// Close the connection
$connection->close();
?>

