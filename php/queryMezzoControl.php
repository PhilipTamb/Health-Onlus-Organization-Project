
<?php
require 'connection_db.php';

if(isset( $_POST["id"]) && isset( $_POST["km"]) && isset( $_POST["n_cinghie_carrozzelle"]) ){

    
    $km  = mysqli_real_escape_string($conn,  $_POST["km"] );//  = mysqli_real_escape_string($conn, ); riceve in ingresso una stringa e effettua l 'enscape dei carattri evitando l'sqlinjection
    $autista = mysqli_real_escape_string($conn, $_POST["autista"]);     
    $soccorritori  = mysqli_real_escape_string($conn, $_POST["soccorritori"]);
    $n_cinghie_carrozzelle = mysqli_real_escape_string($conn, $_POST["n_cinghie_carrozzelle"]);
    $segnalazioni  = mysqli_real_escape_string($conn, $_POST["segnalazioni"]);
   
    $id = $_POST["id"];
    $autoradio = $_POST["autoradio"];
    $radio_144 = $_POST["radio_144"];
    $clacson = $_POST["clacson"];
    $sirena = $_POST["sirena"];
    $lampeggiatori = $_POST["lampeggiatori"];
    $telecamere_monitor = $_POST["telecamere_monitor"];
    $fari_abbaglianti = $_POST["fari_abbaglianti"];
    $fari_fendinebbia = $_POST["fari_fendinebbia"];
    $fari_anabbaglianti = $_POST["fari_anabbaglianti"];
    $luci_arresto = $_POST["luci_arresto"];
    $luci_vano_sanitario = $_POST["luci_vano_sanitario"];
    $luci_retromarcia = $_POST["luci_retromarcia"];
    $luci_carico = $_POST["luci_carico"];
    $luci_cruscotto = $_POST["luci_cruscotto"];
    $luci_direzione = $_POST["luci_direzione"];
    $luci_targa = $_POST["luci_targa"];
    $luci_posizione = $_POST["luci_posizione"];
    $luci_vano_guida = $_POST["luci_vano_guida"];
    $sollevatore_carrozzelle = $_POST["sollevatore_carrozzelle"];
    $ruota_scorta = $_POST["ruota_scorta"];
    $kit_scasso = $_POST["kit_scasso"];
    $triangolo = $_POST["triangolo"];
    $catene = $_POST["catene"];
    $libretto = $_POST["libretto"];
    $scheda_carburante = $_POST["scheda_carburante"];
    $tergicristalli = $_POST["tergicristalli"];
    $cric = $_POST["cric"];
    $chiave = $_POST["chiave"];
    $giubbino = $_POST["giubbino"];
    $estintori = $_POST["estintori"];
    $faro_portatile = $_POST["faro_portatile"];
    $tagliando_assicurativo = $_POST["tagliando_assicurativo"];
    $card_pin = $_POST["card_pin"];
    $gancio_traino = $_POST["gancio_traino"];
    $suoneria_retromarcia = $_POST["suoneria_retromarcia"];

    $query = " select * from mezzo where id_mezzo = '".$id."' ";
    $res = mysqli_query($conn,$query);

    $dataArray = mysqli_fetch_assoc($res);

    mysqli_free_result($res);

    print_r($dataArray['id_mezzo']);
    print_r($dataArray['sigla']);
    $id_mezzo = $dataArray['id_mezzo'];
    $sigla = $dataArray['sigla'];
    $targa = $dataArray['targa'];
    $modello = $dataArray['modello'];

    $query1 = "select curdate()";
    $query2 = "select curtime()";
    $result1 = mysqli_query($conn,$query1);
    $result2 = mysqli_query($conn,$query2);
    $curdateArray = mysqli_fetch_assoc( $result1);
    $curtimeArray = mysqli_fetch_assoc( $result2);

    mysqli_free_result($result1);
    mysqli_free_result($result2);

    print_r($curdate['curdate()']);
    print_r($curtime['curtime()']);
    $curdate = $curdateArray['curdate()'];
    $curtime = $curtimeArray['curtime()'];

    $query = " insert into controllo_meccanico (`id_mezzo`, `targa`, `sigla_mezzo`, `modello_mezzo`, `data_controllo`, `ora`, `km`, `autista`, `soccorritori`, `n_cinghie_carrozzelle`, `autoradio`, `radio_144`, `clacson`, `sirena`, `lampeggiatori`, `telecamere_monitor`, `fari_abbaglianti`, `fari_fendinebbia`, `fari_anabbaglianti`, `luci_arresto`, `luci_vano_sanitario`, `luci_retromarcia`, `luci_carico`, `luci_cruscotto`, `luci_direzione`, `luci_targa`, `luci_posizione`, `luci_vano_guida`, `sollevatore_carrozzelle`, `ruota_scorta`, `kit_scasso`, `triangolo`, `catene`, `libretto`, `scheda_carburante`, `tergicristalli`, `cric`, `chiave`, `giubbino`, `estintori`, `faro_portatile`, `tagliando_assicurativo`, `card_pin`, `gancio_traino`, `suoneria_retromarcia`, `segnalazioni`) values('".$id_mezzo."','".$targa."','".$sigla."','".$modello."','".$curdate."','".$curtime."','".$km."','".$autista."','".$soccorritori."','".$n_cinghie_carrozzelle."','".$autoradio."','".$radio_144."','".$clacson."','".$sirena."','".$lampeggiatori."','".$telecamere_monitor."','".$fari_abbaglianti."','".$fari_fendinebbia."','".$fari_anabbaglianti."','".$luci_arresto."','".$luci_vano_sanitario."','".$luci_retromarcia."','".$luci_carico."','".$luci_cruscotto."','".$luci_direzione."','".$luci_targa."','".$luci_posizione."','".$luci_vano_guida."','".$sollevatore_carrozzelle."','".$ruota_scorta."','".$kit_scasso."','".$triangolo."','".$catene."','".$libretto."','".$scheda_carburante."','".$tergicristalli."','".$cric."','".$chiave."','".$giubbino."','".$estintori."','".$faro_portatile."','".$tagliando_assicurativo."','".$card_pin."','".$gancio_traino."','".$suoneria_retromarcia."','".$segnalazioni."'       )  ";
    mysqli_query($conn,$query);
    
    
    
    mysqli_close($conn);

    header("Location:../mezzo.php?tittle=".$id); 
    exit;
}else{
    


    
}
    ?>