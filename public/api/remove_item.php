<?php
session_start();
$userID = $_SESSION['user_id'];

include '../templates/connectToDatabase.php';
$conn = connectToDB();

// Remove item from basket using transaction_id
if(isset($_GET['transaction_id'])){
    $transaction_id = $conn->real_escape_string($_GET['transaction_id']);
    $sql = "DELETE FROM basketcontent WHERE transaction_id = ? AND basket_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $transaction_id, $userID);
    $stmt->execute();
    $response = array('success' => true, 'message' => 'Item removed from basket');
    echo json_encode($response);
    $stmt->close();
    $conn->close();
}else{
    $response = array('success' => false, 'message' => "Could not remove item from basket");
    echo json_encode($response);
    $stmt->close();
    $conn->close();
}
?>