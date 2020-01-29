<?php
include 'connect.php';


$sql1 = "SELECT user  FROM charities WHERE min(personNumber) ";  //ordered by person

$sql2 = "SELECT user  FROM charityneed WHERE max(number) "; //ordered by need

$sql3 = "SELECT charityUser  FROM charity-restaurant WHERE max(restaurantUser) "; //orderd by number of resturant

return ["1"=>$sql1 ,"2"=>$sql2 , "3"=>$sql3];

?>