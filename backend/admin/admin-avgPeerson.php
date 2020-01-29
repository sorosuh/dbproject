<?php
    include 'connect.php';

    $charity = $_POST['charity'];
    $region = $_POST['region'];


    $sql="SELECT AVG(personNumber)FROM  $charity WHERE regionID=$region ";
    return $sql;

?>