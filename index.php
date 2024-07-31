<?php 
//TODO: Hi! I'm autoloader, remember me? :D
include_once('classes/Holiday.php');
include_once('classes/Homework.php');
include_once('classes/Activities.php');

//$holiday = new Holiday("Brunch Elektronik","10/08/24", Type::CULTURE);
$homework = new Homework("Estructura de bases de dades - MongoDB","13/08/24",Sprint::DATABASE);
$holiday  = new Holiday("Escapada a Madrid","13/09/24",Type::VISIT);
$holiday2  = new Holiday("Escapada a Málaga","20/09/24",Type::VISIT);

$activities = new Activities();
#$activities->addActivity($homework);
#$activities->addActivity($homework);
$activities->addActivity($holiday);
$activities->addActivity($holiday2);

$activities->doHolidayPlan();
$activities->cancelHolidayPlan();

$activities->doHolidayPlan();
?>