
<?php
require 'connection_db.php';

if(isset( $_POST["modello"]) && isset( $_POST["sigla"]) && isset( $_POST["targa"]) && isset( $_POST["cilindrata"]) ){

    
    $modello  = mysqli_real_escape_string($conn,  $_POST["modello"] );//  = mysqli_real_escape_string($conn, ); riceve in ingresso una stringa e effettua l 'enscape dei carattri evitando l'sqlinjection
    $sigla = mysqli_real_escape_string($conn, $_POST["sigla"]);     
    $targa  = mysqli_real_escape_string($conn, $_POST["targa"]);
    $cilindrata = mysqli_real_escape_string($conn, $_POST["cilindrata"]);
    

    $query = " insert into mezzo (sigla,targa,modello,cilindrata) values('".$sigla."','".$targa."','".$modello."','".$cilindrata."'  )  ";
    $res = mysqli_query($conn,$query);

    mysqli_free_result($res);
    mysqli_close($conn);

    header("Location:../gestione_mezzi.php"); 
    exit;
}else{
    
}
    ?>