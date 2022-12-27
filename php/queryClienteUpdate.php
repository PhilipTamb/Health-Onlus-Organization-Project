<?php 
require 'connection_db.php';

$id = mysqli_real_escape_string($conn,  $_POST["id"] );
$nome = mysqli_real_escape_string($conn, $_POST["nome"]);     
$tel  = mysqli_real_escape_string($conn, $_POST["tel"]);
$citta  = mysqli_real_escape_string($conn, $_POST["citta"]);
$indirizzo  = mysqli_real_escape_string($conn, $_POST["indirizzo"]);
$email  = mysqli_real_escape_string($conn, $_POST["email"]);

 
$query = " update clienti set nome = '".$nome."', tel = '".$tel."', citta = '".$citta."', indirizzo = '".$indirizzo."', email = '".$email."'  where (id_cliente ='".$id."')  ";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res); 

if( $row != 0 ){
  
}else{
    echo 'Non ci sono risultati';
}

mysqli_free_result($res);
mysqli_close($conn);

?>