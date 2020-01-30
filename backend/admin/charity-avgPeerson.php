<?php
    include 'connect.php';

    $region = $_POST['region'];
    
    $avg="SELECT AVG(personNumber) FROM  charitis WHERE  regionID=$region ";
    return $avg;

?>