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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="/space-view/public/css/nav.css" media="all">
  <link rel="stylesheet" href="/space-view/public/css/account.css" media="all">
</head>
<body><?php include '../templates/nav.php' ?>
<div class="container">
<img id="profile" src="" alt="">
<h2 id="username"></h2>
<h2 id="level"></h2>
</div>
<script src="/space-view/public/js/account.js"></script></body>
</html>
