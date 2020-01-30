<?php
include 'connect.php';

$driver = $_POST['driver'];
$sql = "SELECT MAX(point)  FROM points WHERE driverUser = $driver";
return $sql;

?>