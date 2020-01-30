<?php

include 'connect.php';

$date=date(yy/mm/dd);
$user = "SELECT name  FROM driver WHERE changeNumber in (SELECT MAX(changeNumber)  FROM driver WHERE date=$date)";
return $sql;
?>