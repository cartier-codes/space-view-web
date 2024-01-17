<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ticket.css">
  <title>Backward Depth Effect</title>
</head>

<body>
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
      <img src="../img/barcode.png" alt="" class="barcode">
      <p id="warning">Please note that we are not liable for any damage caused by you or to you</p>
      <div id="side-ticket">
        <div id="row">
          <div class="departure">EAR</div>
          <img src="../img/black-plane.png" alt="" class="plane">
          <div class="destination">MER</div>
        </div>
      </div>
      <div class="columns">
        <div class="first-column">
          <h6>PASSENGER</h6>
          <div class="vertical"></div>
        </div>
      </div>

    </div>
    <div id="ticket-machine">
      <div id='processTicket'></div>
    </div>
  </div>
  <script src="../js/ticket.js"></script>
</body>

</html>