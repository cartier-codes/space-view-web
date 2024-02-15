

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
</head>
<body>
    <?php include 'templates/nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-4 ps-4 pt-4 custom-column">
                <h1 class="ms-4" id="title">visit <span id="planet">earth:</span></h1>
                <p class="ms-4 pt-3" id="title-description">The Earth tour features historical reenactments, futuristic cityscapes, and global weather control</p>
                <h1 id="price" class="ms-4"></h1>
                <button id="buyNow"class="ms-4 mt-4 bold-text">Buy Now <span id="buyArrow" class="bold-text">></span></button><br>
            </div>
            <div class="col-4 custom-column align-items-end justify-content-center">
                <img id="planet-img" src="" alt="" class="img-fluid">
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
                        <h4 class="feature-title">Build your </h4>
                        <p></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script type="module" src="js/planets.js"></script>
    <script>AOS.init()</script>
</body>
</html>