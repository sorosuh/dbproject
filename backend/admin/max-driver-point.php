<?php
include 'connect.php';

$driver = $_POST['driver'];
$sql = "SELECT driverUser  FROM points WHERE driverUser = $driver AND MAX(point) ";
return $sql;

?>