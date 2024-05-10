<?php 

include '../templates/connectToDatabase.php';
if(session_status() === PHP_SESSION_NONE){
session_start();
}
if(!isset($_SESSION['user_id'])){
  echo '<script>
            setTimeout(function() {
                window.location.href = "login.php"; // Replace with the actual URL of your login page
            }, 3000); // 3000 milliseconds = 3 seconds
        </script>';
}else{
    $userID = $_SESSION['user_id'];
}

$connection = connectToDB();
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$userQuery = "SELECT u.username, u.level, u.profile_picture, u.tours_completed  FROM user u WHERE u.user_id = ?";
$stmtUser = $connection->prepare($userQuery);
$stmtUser->bind_param("i", $userID);
$stmtUser->execute();
$stmtUser->bind_result($username, $level, $picture, $tours_completed);
$stmtUser->fetch();
$data = array('username'=> $username,'level'=> $level,'picture'=> $picture, 'tours_completed'=> $tours_completed); 
if(isset($_GET['api'])){
  echo json_encode($data);
}
else{
  return $data;
}
?>
