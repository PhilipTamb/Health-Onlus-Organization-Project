<?php 

require 'connection_db.php';

$id = $_POST["id"];
$query = " select * from mezzo where id_mezzo = '".$id."' ";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);


echo json_encode($row);

mysqli_free_result($result);
mysqli_close($conn);
           
?>