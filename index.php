<?php 
//TODO: Hi! I'm autoloader, remember me? :D
include_once('classes/Holiday.php');
include_once('classes/Homework.php');

//$holiday = new Holiday("Brunch Elektronik","10/08/24", Type::CULTURE);
$homework = new Homework("Estructura de bases de dades - MongoDB","13/08/24",Sprint::DATABASE);
$holiday  = new Holiday("Escapada a Madrid","13/09/24",Type::VISIT);

var_dump($holiday);
var_dump($homework);
?>