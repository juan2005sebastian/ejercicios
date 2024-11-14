<?php
$beers = [
    [
        "name" => "Erdiner",
        "alcohol" => 8.5,
        "country" => "alemania"

    ],
    [
        "name" => "Erdiner 2",
        "alcohol" => 8.5,
        "country" => "alemania"
    ]

];
// echo $beers[1]["name"];

foreach ($beers as $beer) {
    foreach ($beer as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
}