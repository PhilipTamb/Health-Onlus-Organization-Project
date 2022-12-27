<?php 
require 'connection_db.php';

$id = $_POST["id"];

$query = " select * from utente where id_utente ='".$id."'  ";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res); 

if( $row != 0 ){
   echo json_encode($row);
}else{
    echo 'Non ci sono risultati';
}

mysqli_free_result($res);
mysqli_close($conn);

?>