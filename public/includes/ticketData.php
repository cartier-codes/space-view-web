<?php

function seatNumber(){
    $number = rand(1, 1000);
    $seat = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $seatIndex = [$seat[rand(0,25)],$seat[rand(0,25)]];
    $seatNumber = join('', $seatIndex) . "$number";
    return $seatNumber;
    
}

function gate(){
    $first = rand(1,10);
    $second = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'][rand(0,25)];
    $gate = "$first" . "$second";
    return $gate;
}

function spaceCraft(){
    $number = rand(1, 1000);
    $craft = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $spaceCraft = join('', [$craft[rand(0,25)],$craft[rand(0,25)], $craft[rand(0,25)]]) . "$number";
    return $spaceCraft;
}
$seatNumber = seatNumber();
$gate = gate();
$spaceCraft = spaceCraft();

$ticketData = array(
    "Mars"=>array("Seat Number"=> $seatNumber, "Distance" => "356,000,000 KM", "Gravity"=>"3.71 m/s ^2", "Gate" => $gate, "spaceCraft"=> $spaceCraft),
    "Mercury"=>array("Seat Number"=> $seatNumber, "Distance" => "160,000,000 ,KM", "Gravity"=>"3.71 m/s ^2", "Gate" => $gate, "spaceCraft" => $spaceCraft), "Venus"=>array("Seat Number"=> $seatNumber, "Distance" => "40,000,000 KM", "Gravity"=>"8.87 m/s ^2", "Gate" => $gate, "spaceCraft" => $spaceCraft ),
    "Neptune"=>array("Seat Number"=> $seatNumber, "Distance" => "4,560,000,000 KM", "Gravity"=>"11.15 m/s ^2", "Gate" => $gate, "spaceCraft => $spaceCraft"),
    "Saturn"=>array("Seat Number"=> $seatNumber, "Distance" => "1,560,000,000 KM", "Gravity"=>"10.45 m/s ^2", "Gate" => $gate, "spaceCraft" => $spaceCraft),
    "Uranus"=>array("Seat Number"=> $seatNumber, "Distance" => "2,856,000,000 KM", "Gravity"=>"8.87 m/s ^2", "Gate" => $gate, "spaceCraft"=> $spaceCraft),
    "Jupiter"=>array("Seat Number"=> $seatNumber, "Distance" => "700,000,000 KM", "Gravity"=>"24.79 m/s ^2", "Gate" => $gate, "spaceCraft" => $spaceCraft),
);

?>