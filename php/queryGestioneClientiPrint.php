<?php 
require 'connection_db.php';


$query = " select * from clienti";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

$data[] = $row;

if( $row != 0 ){
   echo json_encode($row);
}else{
    echo 'Non ci sono risultati';
}

mysqli_free_result($result);
mysqli_close($conn);

?>