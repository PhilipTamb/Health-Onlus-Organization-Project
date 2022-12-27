<?php 
require 'connection_db.php';

$id = $_POST["id"];
$object = $_POST["object"];

echo $id;
echo $object;

if( $object == 'ordine'){
    $query = " delete from ordine  where id_ordine = '".$id."' ";
}
if( $object == 'utente'){
    $query = " delete from utente where id_utente = '".$id."' ";
}
if( $object == 'mezzo'){
    $query = " delete from mezzo where id_mezzo = '".$id."' ";
}
if( $object == 'cliente'){
    $query = " delete from cliente where id_cliente = '".$id."' ";
}

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);

exit;
           
?>