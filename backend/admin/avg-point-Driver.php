<?php

include 'connect.php';

$sql = "SELECT driverUser  FROM points GROUP BY driveruser HAVING AVG(point)> 4 FROM points";
return $sql;
?>