<?php 
require 'connection_db.php';

$id = mysqli_real_escape_string($conn,  $_POST["id"] );
$cognome  = mysqli_real_escape_string($conn,  $_POST["cognome"] );//  = mysqli_real_escape_string($conn, ); riceve in ingresso una stringa e effettua l 'enscape dei carattri evitando l'sqlinjection
$nome = mysqli_real_escape_string($conn, $_POST["nome"]);     
$tel  = mysqli_real_escape_string($conn, $_POST["tel"]);
$citta_nascita = mysqli_real_escape_string($conn, $_POST["citta_nascita"]);
$data_nascita = mysqli_real_escape_string($conn, $_POST["data_nascita"]);
$citta_residenza  = mysqli_real_escape_string($conn, $_POST["citta_residenza"]);
$indirizzo  = mysqli_real_escape_string($conn, $_POST["indirizzo"]);
$email  = mysqli_real_escape_string($conn, $_POST["email"]);
$user = mysqli_real_escape_string($conn, $_POST["user"]);
$ruolo  = mysqli_real_escape_string($conn, $_POST["ruolo"]);
 
$query = " update utente set cognome = '".$cognome."', nome = '".$nome."', tel = '".$tel."', citta_nascita = '".$citta_nascita."', data_nascita = '".$data_nascita."', citta_residenza = '".$citta_residenza."', indirizzo = '".$indirizzo."', email = '".$email."', user = '".$user."', ruolo = '".$ruolo."'   where (id_utente ='".$id."')  ";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res); 

if( $row != 0 ){
  
}else{
    echo 'Non ci sono risultati';
}

mysqli_free_result($res);
mysqli_close($conn);

?>