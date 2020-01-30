<?php

include 'connect.php';

$driver = $_POST['driver'];
$sql = "SELECT restaurantUser FROM donatefood WHERE driverUser=$driver ORDER BY number ASC";

return $sql;
?>