<?php
    include "connect.php";

    $query= "SELECT * FROM charities";
    $search= $connect->prepare($query);
    $search->execute();
    $arr= $search->fetchAll(PDO::FETCH_ASSOC);

    return $arr;
    $json = json_encode($arr);
    return $json;

?>