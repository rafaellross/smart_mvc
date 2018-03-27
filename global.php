<?php

$Days = array();

$Monday = new stdClass();
$Monday->description = "Monday";
$Monday->short = "mon";
$Monday->number = 1;
array_push($Days, $Monday);

$Tuesday = new stdClass();
$Tuesday->description = "Tuesday";
$Tuesday->short = "tue";
$Tuesday->number = 2;
array_push($Days, $Tuesday);

$Wednesday = new stdClass();
$Wednesday->description = "Wednesday";
$Wednesday->short = "wed";
$Wednesday->number = 3;
array_push($Days, $Wednesday);

$Thursday = new stdClass();
$Thursday->description = "Thursday";
$Thursday->short = "thu";
$Thursday->number = 4;
array_push($Days, $Thursday);

$Friday = new stdClass();
$Friday->description = "Friday";
$Friday->short = "fri";
$Friday->number = 5;
array_push($Days, $Friday);

$Saturday = new stdClass();
$Saturday->description = "Saturday";
$Saturday->short = "sat";
$Saturday->number = 6;
array_push($Days, $Saturday);

//define('Days', $Days);