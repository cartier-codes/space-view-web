<?php
if(!$_SESSION['user_id'])
  echo '<script>
            setTimeout(function() { window.location.href = "/space-view/public/account/login.php"; // replace with the actual url of your login page
            }, 4000); // 3000 milliseconds = 3 seconds
          </script>';
?>

<main>
  <h1>MY BASKET</h1>
  <div class="headers">
    <h3>PRODUCT</h3>
    <h3>DESCRIPTION</h3>
    <h3>PRICE</h3>
    <h3>TOTAL</h3>
  </div>
  <div class="container">
    <div class="parent-container">
    </div>
    <div class="parent-container" id="totalContainer">
      <h3 class="total">20000</h3>
      <a class="checkout" href="">CHECKOUT</a>
    </div>
  </div>
</main>
