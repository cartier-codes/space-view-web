<?php session_start();

if(!isset($_SESSION['user_id'])){
  echo '<script>
            setTimeout(function() {
                window.location.href = "account/login.php"; // Replace with the actual URL of your login page
            }, 3000); // 3000 milliseconds = 3 seconds
          </script>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link rel="stylesheet" href="css/planets.css">
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="shortcut icon" href="img/title-icon.png" type="image/x-icon">
</head>
<body>
    <?php include 'templates/nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-4 ps-4 pt-4 custom-column">
                <h1 class="ms-4" id="title">visit <span id="planet">earth:</span></h1>
                 <p class="ms-4 pt-3" id="title-description">The Earth tour features historical reenactments, futuristic cityscapes, and global weather control</p>
                <h1 id="price" class="ms-4">$10000</h1>
                <button id="buyNow" class="ms-4 pt-2 ps-5 pe-5 pb-2">Buy</button>
            </div>
            <div class="col-4 custom-column align-items-end justify-content-center">
                <img  src="img/planets/Rotating_earth_animated_transparent.gif" alt="" class="img-fluid planet-img" >
            </div>
            <div class="col-4 pt-4 ps-3 custom-column">
                <ul id="feature-container">
                    <li>
                        <img src="img/planets/hourglass.png" alt="" id="hourglass" class="features">
                        <h4 class="feature-title">Timelapse of historical events</h4>
                        <p class="pt-2 feature-description">Replay the events on Earth from the big bang to ChatGPT</p>
                    </li>
                    <li>
                        <img src="img/planets/weather.png" alt="" class="features" id="weather">
                        <h4 class="feature-title">Global weather control simulation</h4>
                        <p class="feature-description">Control parameters and see your impact</p>
                    </li>
                    <li>
                        <img src="img/planets/city.png" alt="" class="features">
                        <h4 class="feature-title">Build your own futuristic city</h4>
                        <p class="feature-description">Actualise your dreams with astro-view</p>
                    </li>
                </ul>
            </div>
        </div>
        <div id="otherPlanets" class="mb-3">
           <div class="planet ms-5">
                <img src="img/planets/earth-still.png" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
           <div class="planet ms-5">
                <img src="" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
           <div class="planet ms-5">
                <img src="" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
            </div>
            <button id="more" class="ms-3"><span id="more-text">...</span></button>
        </div>
        <div id="otherPlanets2" class="mt-3">
           <div class="planet ms-5 me-4">
                <img src="img/planets/earth-still.png" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
           <div class="planet ms-5 me-4">
                <img src="" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
           <div class="planet ms-5 me-4 mb-4">
                <img src="" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
            </div>
        </div>
        <div id="otherPlanets3" class="mt-3">
           <div class="planet ms-5">
                <img src="img/planets/earth-still.png" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
           <div class="planet ms-5">
                <img src="" alt="" class="ms-5 planet-image">
                <div class="rating"><h6>3</h6><img src="img/planets/star.png" alt=""></div>
                <h3 class="mt-3 ms-5 planet-card-title" id="planet-title"></h3>
                <a href="" class="planet-card-link">Add to order +</a>
           </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script type="module" src="js/planets.js"></script>
    <script>AOS.init()</script>
</body>
</html>