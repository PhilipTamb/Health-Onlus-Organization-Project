<?php
require 'php/connection_db.php';
session_start(); 

if ( !isset($_SESSION["user"]) || $_SESSION["ruolo"]!= 'Centralinista' ){
  header("Location: login.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/styleCommonPages.css">
    <link rel="stylesheet" href="css/styleMezzo.css">
    <link rel="stylesheet" href="css/menu.css">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    <script src="js/viewControlsMezzo.js" defer="true"></script> 
    <script src="js/viewMezzo.js" defer="true"></script>



    <title>Ordine</title>
    <link rel="icon" href="img/logo-128x107.png" type="image/png">
</head>
<body>
<nav>
  <input type="checkbox" id="checkbox1" />
  <label for="checkbox1">
<ul class="menu demo">
<li><a href="dashboard.php">ORDINI</a></li>
  <li><a href="modulo_ordine.php">CENTRALINO</a></li>  
  <li><a href="gestione_clienti.php">CLIENTI</a></li>  
  <li><a href="gestione_personale.php">PERSONALE</a></li>  
  <li><a href="gestione_mezzi.php">MEZZI</a></li>
  <li><a href="php/queryLogout.php">ESCI</a></li>
</ul>
  <span class="toggle">☰</span>
  </label>
</nav>

        <div class="pageContainer">

        <div class="boardContainer">
            <div class="title">
                <h1> </h1>
            </div>
            <div class="image">
                <img src="img/logo-1280x1071.png" alt="">
            </div>
        </div>

        <div class="containerUpper"> </div>

        <div class="containerModify"></div>


         <!--FORM-->
    <div class="container-form">
      <form name='form'  method='post' action="php/queryMezzoControl.php">
          <div class="form-patient">
                  <div class="p-form">
                      <p>Chilometri</p> 
                      <input class="inputForm" type="text" name="km" placeholder="Chilimetri (Km)"> 
                  </div>
                  <div class="p-form">
                      <p>Autista</p> 
                      <input class="inputForm" type="text" name="autista" placeholder="Autista"> 
                  </div>
                  <div class="p-form">
                      <p>Soccorritori</p> 
                      <input class="inputForm" type="textarea" name="soccorritori" placeholder="Soccorritori"> 
                  </div>
                  <div class="p-form">
                      <p>Cinghie carrozzelle</p> 
                      <input class="inputForm" type="text" name="n_cinghie_carrozzelle" placeholder="Numero Cinghie"> 
                  </div>
                  <div class="divisor"></div>
                  <div class="p-form">
                            <p>Autoradio</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="autoradio" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Radio 144</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="radio_144" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Clacson</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="clacson" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Sirena</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="sirena" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Lampeggiatori</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="lampeggiatori" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Telecamere e Monitor</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="telecamere_monitor" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Fari Abbaglianti</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="fari_abbaglianti" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Fari Fendinebbia</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="fari_fendinebbia" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Fari Anabbaglianti</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="fari_anabbaglianti" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci d'Arresto</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_arresto" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci Vano Sanitario</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_vano_sanitario" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci Retromarcia</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_retromarcia" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci di Carico</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_carico" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci Cruscotto</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_cruscotto" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci di Direzione</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_direzione" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci Targa</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_targa" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci di Posizione</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_posizione" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Luci Vano Guida</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="luci_vano_guida" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Sollevatore per Carrozzelle</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="sollevatore_carrozzelle" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Ruota di Scorta</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="ruota_scorta" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Kit Scasso</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="kit_scasso" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Triangolo</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="triangolo" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Catene</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="catene" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Libretto</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="libretto" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Scheda Carburante</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="scheda_carburante" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Tergicristalli</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="tergicristalli" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Cric</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="cric" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Chiave</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="chiave" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Giubbino di Emergenza</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="giubbino" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Estintori</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="estintori" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Faro Portatile</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="faro_portatile" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Tagliando Assicurativo</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="tagliando_assicurativo" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Card e codice pin</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="card_pin" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Gancio di Traino</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="gancio_traino" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p>Suoneria Retromarcia</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="suoneria_retromarcia" value="1"> <span class="checkmark"></span>
                </div>
                <div class="p-form">
                            <p></p>
                          <div class="inputForm"></div>
                </div>
                <div class="divisor"></div>
                <div class="p-form" id="segnalazioni" >
                      <p>Segnalazioni</p> 
                      <input class="inputForm" type="textarea" name="segnalazioni" placeholder="Segnalazioni"> 
                </div>

                  <div class="div-submit">
              <button id="submit" class="button" type="submit">Invia</button>
          </div>

      </form>
  </div>

</div>


    

  <div class="containerDown"> </div>




    
</body>
</html>