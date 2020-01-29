<?php
include 'connect.php';

$resturant = $_POST['resturant'];
$sql = "SELECT resturantUser  FROM donatefood ORDER BY  ASC";
return $sql;

?>