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
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
    <div data-aos="zoom-in-up" id="definition-wrapper">
        <h1 id='definition'>the universe is all of space and time and their contents,</h1>
        <h1 class="bold-text ms-2">like a cosmic attic filled with stars and galaxies, and the occasional</h1>
        <h1 class="bold-text ms-2">lost sock from a rogue black hole.</h1>
    </div>
    <div class="container" id='space-definition-wrapper'>
        <div class="row mt-5" id="space-definition">
            <div class="col-3 custom-column">
                <p data-aos="fade-down-right">If the universe is everything in existence, the space is the empty void between everything. Outer space is the region outside of planet's atmosphere, and for Earth's inhabitants it starts 62 miles above sea level.</p>
                <p data-aos="fade-up-right">The line separating the atmosphere and outer space is the Karman Line. "Outer space" and the "universe" are usually used synonymously; however outer space refers only to the area between planets, while universe encompasses everything.</p>
                <p data-aos="fade-up">What is space? Where does it come from? Is there a creator? These are the questions that have plagued Man for hundreds of years, even before early astronomers in Ancient Babylonia up until now. The Babylonians used clay tablets, and these primitive diaries kept the night-by-night records of temple astronomers.</p>
            </div>
            <div class="col-3 custom-column">
                <p data-aos="fade-down-left">Over time, Babylonian astronomers could predict the behaviour of the moon and other planets and by 300BCE planetary behaviours were already foreseen. Likewise, Indian astronomy started in third millenium BCE, which was believed to create calendars. Chinese astronomy started around the sixth century BCE, in which they could accurately predict eclipses.</p>
                <p data-aos='fade-up-right'>For more history, including the pioneers: <a href="" id="historylink">History ></a></p>
            </div>
            <div class="col-3 custom-column" data-aos="fade-down-left">
                <h1 class="bold-text" id="pioneers">Pioneers:</h1>
                <ul>
                    <li>Ptholemy</li>
                    <li>Aristarchus of Samos</li>
                    <li>Erastothenes</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" data-aos="zoom-in">
        <div class="row mt-5" id="interview">
            <div class="row">
                <div class="col-1">
                    <h6>You:</h6>
                </div>
                <div class="col-3">
                    <h6>What is the big bang, and how did it start?</h6>
                </div>
                <div class="col-5"></div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h6>Astronomer:</h6>
                </div>
                <div class="col-6 ms-5">
                    <p>The Big Bang is a theory that the universe began at a single point, infinitely hot and full of energy. Then, it exploded; suddenly expanding the universe at the speed of light. This lasted about 10^-32 seconds, and then cosmic inflation came to a standstill. The standstill meant that a flood of matter and radiation began populating the unviverse with the stuff we know about today: particles, atoms, and the building blocks for stars and galaxies. How it started? That is a question no scientist has a definite answer to.</p>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row mt-3">
                <div class="col-1">
                    <h6>You:</h6>
                </div>
                <div class="col-3">
                    <h6>What are stars made of?</h6>
                </div>
                <div class="col-5"></div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h6>Astronomer:</h6>
                </div>
                <div class="col-6 ms-5">
                    <p>Stars are giant balls of hot gas, mostly hydrogen and helium.</p>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <h3 class="astro-view">astro-view</h3>
    <div class="row mt-5" id="card-wrapper">
        <div class="col-3">
            <div id="card">
                <h4>For more information about the science behind space:</h4>
                <ul>
                    <li><a href="">Planets ></a></li>
                    <li><a href="">Science ></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" data-aos="zoom-in">
        <div class="row ms-4  mt-5 justify-content-evenly">
            <div class="col-3">
                <div class="news-card">
                </div>
            </div>
            <div class="col-3 align-self-end">
                <div class="news-card"></div>
            </div>
            <div class="col-3">
                <div class="news-card"></div>
            </div>
        </div>
        <div class="row mt-3 justify-content-evenly">
            <div class="col-3">
                <div class="news-card"></div>
            </div>
            <div class="col-3">
                <div class="news-card"></div>
            </div>
        </div>
        <div class="row mt-3 mb-4 justify-content-center">
            <div class="col-3">
                <div class="card-space">
                    <h3>For more news on space, space news and launches, check out:</h3>
                    <a href="" class="bold-text">News ></a>
                </div>
            </div>
        </div>
    </div>
    <h3 class="astro-view">astro-view</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="bold-text text-center">Launches</h1>
                <h1 class="bold-text text-center">Use your left and right arrow keys < > </h1>
            </div>
        </div>
        <div class="slide-wrap " data-aos="zoom-in">
            <div class="slideshow">
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2></h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2>Mixed Content</h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2>Mixed Content</h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2>Mixed Content</h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p></p>
                        <h3></h3>
                    </div>
                </div>
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2>Mixed Content</h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row justify-content"></div>
        </div>
    </footer>
    </div>
    <script type='module' src='js/script.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>