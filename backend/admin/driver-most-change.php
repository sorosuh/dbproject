<?php

include 'connect.php';

$sql = "SELECT user  FROM driver WHERE MAX(changeNumber)";
return $sql;
?>