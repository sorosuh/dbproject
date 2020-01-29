<?php
    include "connect.php";

    $query= "SELECT * FROM questions";
    $search= $connect->prepare($query);
    $search->execute();
    $arr= $search->fetchAll(PDO::FETCH_ASSOC);

    return $arr;

?>