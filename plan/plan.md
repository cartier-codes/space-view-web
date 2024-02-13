what is space-view?
space view will be a space themed app based around the planets, famous stars, the history of astronomy, and nasa, and the science behind space, space news etc


Ticket Animation is Done
Index is doneish
    Debating on footer


Planet section is next

Connect planet and ticket system once done


Launch is annoying to add: if want back:
    html:
       <div class="container">
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
                        <h2></h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
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
                        <h2></h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p></p>
                        <h3></h3>
                    </div>
                </div>
                <div class="slide-entry">
                    <div class="slide-content">
                        <h2></h2>
                        <img style="float:right" src="" alt="">
                        <h4 class="mb-3"></h4>
                        <p class="text"></p>
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    css:

.slide-wrap h2 {
  font-weight:700;
  font-size:22px;
  margin-bottom:15px;
}

.slide-wrap p {
  font-size:1.1em;
  line-height:1.3em;
}

.slide-wrap {
  position: relative;
    max-width:1000px;
  margin: 0 auto;
  transition:300ms;
}

.slideshow {
  position: relative;
  z-index: 10;
}

.slide-entry {
  position: absolute;
  top: 0;
  left: 0;
right: 0;
  margin:0 auto;
  text-align: center;
  z-index: 20;
  opacity: 0;
  visibility: hidden;
  padding: 20px 5%;
  transition:300ms;
&.active {
    opacity: 1;
    visibility: visible;
  }
}


.slide-nav {
  display: flex;
  justify-content: space-between;
  align-items:center;
  position: absolute;
  left: 0;
  bottom: 0;
  top: 50%;
  transform: translateY(-60%);
  width: 100%;
  list-style: none;
  padding: 0;
  z-index: 0;
  li {
    cursor: pointer;
    color:#ccc;
    font-size:25px;
  }
}

#prev-slide {
  margin-left:-20px;
}

#next-slide {
  margin-right:-20px;
}

/* Responsive Video Embeds
========================================================= */
.embed-container {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  max-width: 100%;
  height: auto;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slide-wrap h2 {
  font-weight:700;
  font-size:22px;
  margin-bottom:15px;
}

.slide-wrap p {
  font-size:1.1em;
  line-height:1.3em;
}

.slide-wrap {
  position: relative;
    max-width:1000px;
  margin: 0 auto;
  transition:300ms;
  color: #323232;
}

.slideshow {
  position: relative;
  z-index: 10;
}

.slide-entry {
  position: absolute;
  top: 0;
  left: 0;
right: 0;
  margin:0 auto;
  text-align: center;
  z-index: 20;
  opacity: 0;
  visibility: hidden;
  padding: 20px 5%;
  transition:300ms;
&.active {
    opacity: 1;
    visibility: visible;
  }
}

.embed-container {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  max-width: 100%;
  height: auto;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.slide-content img{
    width: 450px;
    height: 250px;
}
.slide-content p{
  max-width: 445px;
  font-size: 14px;
  font-family: space-mono;}























 