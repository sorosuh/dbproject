<?php

$date =  date("Y/m/d");
$avg = "SELECT AVG(point) FROM points";
$driver = "SELECT driverUser FROM points WHERE point > $avg AND data=$date";
$result = "SELECT restaurantUser,charityUser,driverUser FROM donatefood WHERE date=$date AND driverUser=$deriver";

return $result;
?>