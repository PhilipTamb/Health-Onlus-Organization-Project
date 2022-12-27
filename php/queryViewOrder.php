<?php 

require 'connection_db.php';

$order = $_POST['id'];
$query = " select * from ordine where id_ordine = '".$order."' ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if( $row != 0 ){
   echo json_encode($row);
}else{
    echo 'Non ci sono risultati';
}

mysqli_free_result($result);
mysqli_close($conn);
           
?>