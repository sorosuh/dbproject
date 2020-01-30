<?php
include 'connect.php';

$resturant = $_POST['resturant'];
$sql = "SELECT charityUser FROM  donatefood WHERE IN( SELECT MIN(NUMBER) FROM donatefood WHERE restaurantUser=$resturant)";
return $sql;
?>