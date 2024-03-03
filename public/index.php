<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Home</title>
    <link rel="shortcut icon" href="img/title-icon.png" type="image/x-icon">
</head>

<body>
    <?php include 'templates/nav.php' ?>
    <h1 class="bold-text mb-5" id='intro'></h1>
    <div class="row mb-4 mt-5 ms-1" id="img-grid-1">
        <div class="col-2">
            <img src="img/index/img-1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-2">
            <img src="img/index/img-2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-2"></div>
        <div class="col-2"><img src="img/index/img-3.jpg" alt="" class="img-fluid"></div>
        <div class="col-2"><img src="img/index/img-4.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="row me-1 mb-5" id="img-grid-2">
        <div class="col-4"></div>
        <div class="col-2"><img src="img/index/img-5.jpg" alt="" class="img-fluid"></div>
        <div class="col-2"><img src="img/index/img-6.jpg" alt="" class="img-fluid"></div>
        <div class="col-2"></div>
        <div class="col-2"><img src="img/index/img-7.jpg" alt="" class="img-fluid"></div>
    </div>
    <div data-aos="zoom-in-up" id="definition-wrapper" class="mb-5">
        <h1 id='definition' class="bold-text">the universe is all of space and time and their contents,</h1>
        <h1 class="bold-text ms-3">like a cosmic attic filled with stars and galaxies, and the occasional</h1>
        <h1 class="bold-text ms-3">lost sock from a rogue black hole.</h1>
    </div>
    <div class="row mt-5 justify-content-center">
        <h1 class="bold-text text-center">THE LATEST NEWS</h1>
    </div>
    <div class="container-fluid" data-aos="zoom-in">
        <div class="row ms-4 justify-content-md-evenly">
            <div class="col-md-3 col-12">
                <div class="news-card">
                </div>
            </div>
            <div class="col-md-3 col-12 align-self-md-end">
                <div class="news-card"></div>
            </div>
            <div class="col-md-3 col-12">
                <div class="news-card"></div>
            </div>
        </div>
        <div class="row mt-3 justify-content-evenly">
            <div class="col-md-3 col-12">
                <div class="news-card"></div>
            </div>
            <div class="col-md-3 col-12">
                <div class="news-card"></div>
            </div>
        </div>
    </div>
    <h3 class="astro-view">astro-view</h3>
    <h1 class="bold-text text-center">APOD</h1>
    <div class="container pt-4" id="apod-wrapper">
        <div class="row justify-content-center">
            <h1 class="text-center bold-text" id="apod-title"></h1>
        </div>
        <div class="row justify-content-center pb-3">
            <div class="col-4"><img src="" alt="" class="img-fluid" id="apod"></div>
            <div class="col-6 align-self-center"><p id="apod-description"></p></div>
        </div>
        <div class="row justify-content-center">
            <h1 class="text-center bold-text" id="apod-date"></h1>
        </div>
    </div>
    <script type='module' src='js/script.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>