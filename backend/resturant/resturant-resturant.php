<?php
include 'connect.php';

$resturant = $_POST['resturant'];
$charity = "SELECT charityUser FROM charity-restaurant WHERE restaurantUser=$resturant";
$resturant_charity = "SELECT restaurantUser FROM charity-restaurant WHERE charityUser=$charity";
return $resturant_charity;
?>