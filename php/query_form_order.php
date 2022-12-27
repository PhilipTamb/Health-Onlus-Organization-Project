<?php 
require 'connection_db.php';

$query = "select max(id_ordine) from ordine";
$query1 = "select curdate()";
$query2 = "select curtime()";
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);
$result2 = mysqli_query($conn,$query2);


$ris = $result->fetch_array(MYSQLI_NUM);
$date = $result1->fetch_array(MYSQLI_NUM);
$time = $result2->fetch_array(MYSQLI_NUM);

mysqli_free_result($result);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);
?>