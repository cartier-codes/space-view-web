<?php

function seatNumber(){
    $number = rand(1, 1000);
    $seat = ['A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $seatIndex = [$seat[rand(0,25)],$seat[rand(0,25)]];
    $seatNumber = join('', $seatIndex) . "$number";
    return $seatNumber;
    
}

function gate(){
    $first = rand(1,10);
    $second = ['A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'][rand(0,25)];
    $gate = "$first" . "$second";
    return $gate;
}

$seatNumber = seatNumber();
$gate = gate();

$ticketData = array(
    "Mars"=>array("Destination" => "Mars", "Seat Number"=> $seatNumber, "Distance" => "225,000,000 KM", "Gravity"=>"3.71 m/s ^2", "Gate" => $gate ),
    "Mars"=>array("Destination" => "Mars"),
    "Mars"=>array("Destination" => "Mars"),
    "Mars"=>array("Destination" => "Mars"),
    "Mars"=>array("Destination" => "Mars"),
    "Mars"=>array("Destination" => "Mars"),
);

?>