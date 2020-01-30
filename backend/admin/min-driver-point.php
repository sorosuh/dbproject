<?php
include 'connect.php';

$driver = $_POST['driver'];
$sql = "SELECT MIN(point)  FROM points WHERE driverUser = $driver";
return $sql;

?>