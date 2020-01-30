<?php
include 'connect.php';


$sql1 = "SELECT user  FROM charities WHERE personNumber IN(SELECT min(personNumber) FROM  charities)";  

$sql2 = "SELECT user  FROM charityneed WHERE number IN(SELECT max(number) FROM charityneed)";  

$sql3 = "SELECT charityUser  FROM charity-restaurant WHERE restaurantUser IN(SELECT max(restaurantUser) FROM charity-restaurant) "; 

return ["personNumber"=>$sql1 ,"need"=>$sql2 , "resturant"=>$sql3];

?>