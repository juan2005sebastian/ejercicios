<?php
$number = 1;
$decimal = 2.12;
$name = "esto es una cade";
$isFalse = false;
$empty = null;

$number =(int)"1";

echo  gettype($empty);

echo "<br>" . gettype($number);
echo "<br>".gettype($decimal);
echo "<br>" .gettype($name);
echo "<br>" .gettype($isFalse);
echo "<br>" . gettype($empty);

