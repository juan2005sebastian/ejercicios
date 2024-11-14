<?php
$beers = [
  "Carolus",
  "london Porter",
  "Delirium Red",
  "Corona"
];

array_push($beers, "Karmeliten");
$beer = array_pop($beers);
echo count($beers);
print_r($beer);
echo $beer;
if (in_array("Corona", $beers)) {
    echo "Corona";
}