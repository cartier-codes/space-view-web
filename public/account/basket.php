<?php
session_start();
if(!$_SESSION['user_id'])
  echo '<script>
            setTimeout(function() {
                window.location.href = "/space-view/public/account/login.php"; // replace with the actual url of your login page
            }, 4000); // 3000 milliseconds = 3 seconds
          </script>';
$user = $_SESSION['user_id'];
$url="http://localhost:8080/space-view/public/api/access_basket.php?user_id=$user&length=True";
$response = file_get_contents($url);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/title-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/basket.css">
</head>
<body>
<?php include '../templates/nav.php';
if($response == 0){
  include '../templates/empty_basket.php';
}
else{
  include '../templates/non-empty-basket.php';
}
?>

<script src="../js/basket.js"></script>
</body>
</html>
