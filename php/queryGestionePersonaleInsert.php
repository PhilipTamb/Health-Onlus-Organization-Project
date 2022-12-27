
<?php
require 'connection_db.php';

if(isset( $_POST["cognome"]) && isset( $_POST["nome"]) && isset( $_POST["tel"]) && isset( $_POST["user"]) && isset( $_POST["psw"]) && isset( $_POST["ruolo"])  ){

    
    $cognome  = mysqli_real_escape_string($conn,  $_POST["cognome"] );//  = mysqli_real_escape_string($conn, ); riceve in ingresso una stringa e effettua l 'enscape dei carattri evitando l'sqlinjection
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);     
    $tel  = mysqli_real_escape_string($conn, $_POST["tel"]);
    $citta_nascita = mysqli_real_escape_string($conn, $_POST["citta_nascita"]);
    $data_nascita = mysqli_real_escape_string($conn, $_POST["data_nascita"]);
    $citta_residenza  = mysqli_real_escape_string($conn, $_POST["citta_residenza"]);
    $indirizzo  = mysqli_real_escape_string($conn, $_POST["indirizzo"]);
    $email  = mysqli_real_escape_string($conn, $_POST["email"]);
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $psw  = mysqli_real_escape_string($conn, $_POST["psw"]);
    $ruolo  = mysqli_real_escape_string($conn, $_POST["ruolo"]);
    

    $query = " insert into utente(nome,cognome, data_nascita, citta_residenza, indirizzo, tel, ruolo, user, email, psw) values('".$nome."','".$cognome."','".$data_nascita."','".$citta_residenza."','".$indirizzo."','".$tel."','".$ruolo."','".$user."','".$email."','".$psw."')  ";
    $res = mysqli_query($conn,$query);

    mysqli_free_result($res);
    mysqli_close($conn);

    header("Location:../gestione_personale.php"); 
    exit;
}else{
    
}
    ?>