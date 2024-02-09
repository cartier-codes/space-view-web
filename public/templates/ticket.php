<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ticket.css">
  <title>Backward Depth Effect</title>
</head>

<body>
  <a href="../index.php">HOME</a>
  <div class="container">
    <div id="backward-effect">
      <button id="trigger-button">Trigger</button>
      <div id="titles">
        <ul>
          <h6 class="passenger" id="passengerTitle">
            PASSENGER
          </h6>
          <h6>FLIGHT</h6>
          <h6>GATE</h6>
          <h6 id="seatData">SEAT</h6>
        </ul>
        <div class="horizontal"></div>
      </div>
      <div id="titleData">
        <ul>
          <h6 class="passenger">
            JOHN DOE
          </h6>
          <div class="divide"></div>
          <h6>SC5735</h6>
          <div class="divide"></div>
          <h6>7B</h6>
          <div class="divide"></div>
          <h6>A12</h6>
        </ul>
      </div>
      <div class="row">
        <div class="departure">EAR</div>
        <img src="../img/black-plane.png" alt="" class="plane">
        <div class="destination">MER</div>
      </div>
      <img src="../img/barcode-14628.png" alt="" class="barcode">
      <p id="warning">Please note that we are not liable for any damage caused by you or to you</p>
      <div id="side-ticket-title">
        <div class="side-ticket-title-container">
          <div id="short-departure">EAR</div>
          <img src="../img/black-plane.png" alt="" id="short-plane">
          <div id="short-destination">MER</div>
        </div>
      </div>
      <div id="side-ticket-main">
        <div id="side-ticket-passenger">
          <div class="text">PASSENGER</div>
        </div>
        <div class="side-ticket-divide" id="side-ticket-divide1">
        </div>
        <div id="side-ticket-passenger-data" class="text">
          John Doe.
        </div>
        <div id="side-ticket-flight-titles">
          <ul>
            <li class="text">Seat</li>
            <li class="text">Gate</li>
            <li class="text">Flight</li>
          </ul>
        </div>
        <div class="side-ticket-divide" id="side-ticket-divide2"></div>
        <div id="side-ticket-flight-data">
          <ul>
            <li class="text" id="top-data">SC5735</li>
            <li class="text" id="middle-data">7B</li>
            <li class="text">A12</li>
          </ul>
          <div id="divider-wrapper">
            <div class="data-divider"></div>
            <div class="data-divider"></div>
          </div>

        </div>
        <img src="../img/barcode-14628.png" alt="" id="side-ticket-barcode">
      </div>
    </div>
    <div id="ticket-machine">
      <div id='processTicket'></div>
    </div>
  </div>
  <script type='module' src="../js/ticket.js"></script>
</body>

</html>