<?php
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
echo $userID;

?>