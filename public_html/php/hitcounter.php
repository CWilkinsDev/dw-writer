<?php
//https://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/
session_start();
$counter_name = "./resources/hitcounter.txt";

if (!file_exists($counter_name)) {
  $counter_name = "../resources/hitcounter.txt";
}

// Read the current value of our counter file
$f = fopen($counter_name, "r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if (!isset($_SESSION['hasVisited'])) {
  $_SESSION['hasVisited'] = "yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);
}
