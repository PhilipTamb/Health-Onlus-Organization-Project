
<?php
require 'connection_db.php';

if(isset( $_POST["nome"]) && isset( $_POST["citta"]) && isset( $_POST["indirizzo"]) ){

    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);     
    $tel  = mysqli_real_escape_string($conn, $_POST["tel"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $citta = mysqli_real_escape_string($conn, $_POST["citta"]);
    $indirizzo = mysqli_real_escape_string($conn, $_POST["indirizzo"]);
    

    $query = " insert into clienti( nome, tel, email, indirizzo, citta) values('".$nome."','".$tel."','".$email."','".$indirizzo."','".$citta."'  )  ";
    $res = mysqli_query($conn,$query);

    mysqli_free_result($res);
    mysqli_close($conn);

    header("Location:../gestione_clienti.php"); 
    exit;
}else{
    
}
    ?>