<?php

include 'connect.php';

$sql = "SELECT user FROM drivers WHERE status=1";   //1 => available
return $sql;
?>