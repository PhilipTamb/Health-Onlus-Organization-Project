
<?php
require 'connection_db.php';

if(isset( $_POST["cognome"]) && isset( $_POST["indirizzo"]) && isset( $_POST["citta"]) && isset( $_POST["tel"]) &&  isset( $_POST["cliente"]) && isset( $_POST["mezzo"]) && isset( $_POST["richiedente"]) &&  isset( $_POST["tipo_richiesta"]) && isset( $_POST["data_esecuzione"]) && isset( $_POST["luogo_servizio"]) ){

    
    $cognome  = mysqli_real_escape_string($conn,  $_POST["cognome"] );//  = mysqli_real_escape_string($conn, ); riceve in ingresso una stringa e effettua l 'enscape dei carattri evitando l'sqlinjection
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);     
    $tel  = mysqli_real_escape_string($conn, $_POST["tel"]);
    $affetto  = mysqli_real_escape_string($conn, $_POST["affetto"]);
    $peso  = mysqli_real_escape_string($conn, $_POST["peso"]);
    $indirizzo  = mysqli_real_escape_string($conn, $_POST["indirizzo"]);
    $citta  = mysqli_real_escape_string($conn, $_POST["citta"]);
    $mezzo  = mysqli_real_escape_string($conn, $_POST["mezzo"]);
    $ora_esecuzione  = mysqli_real_escape_string($conn, $_POST["ora_esecuzione"]);
    $casa = mysqli_real_escape_string($conn, $_POST["casa"]);
    $cliente = mysqli_real_escape_string($conn, $_POST["cliente"]);
    $richiedente = mysqli_real_escape_string($conn, $_POST["richiedente"]);
    $tipo_richiesta = mysqli_real_escape_string($conn, $_POST["tipo_richiesta"]);
    $data_esecuzione = mysqli_real_escape_string($conn, $_POST["data_esecuzione"]);
    $note = mysqli_real_escape_string($conn, $_POST["note"]);
    $luogo_servizio = mysqli_real_escape_string($conn, $_POST["luogo_servizio"]);
  

    $query1 = "select curdate()";
    $query2 = "select curtime()";
    $result1 = mysqli_query($conn,$query1);
    $result2 = mysqli_query($conn,$query2);
    $data_creazione = $result1->fetch_array(MYSQLI_NUM);
    $ora_creazione = $result2->fetch_array(MYSQLI_NUM);
    

    $query = " insert into ordine ( cognome, nome, indirizzo, citta, tel, data_creazione, ora_creazione, affetto, peso, mezzo, ora_esecuzione, casa,cliente, richiedente, tipo_richiesta, data_esecuzione, note, luogo_servizio) values ('".$cognome."', '".$nome."', '".$indirizzo."', '".$citta."', '".$tel."','".$data_creazione[0]."','".$ora_creazione[0]."','".$affetto."','".$peso."','".$mezzo."','".$ora_esecuzione."','".$casa."','".$cliente ."','".$richiedente ."','".$tipo_richiesta."','".$data_esecuzione ."','".$note."','".$luogo_servizio."')";
    $res = mysqli_query($conn,$query);

    mysqli_free_result($result1);
    mysqli_free_result($result2);
    mysqli_close($conn);

    header("Location:../dashboard.php"); 
    exit;
}else{
    
}
    ?>