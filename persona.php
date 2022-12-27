<?php
require 'php/connection_db.php';
session_start(); 

if ( !isset($_SESSION["user"]) || $_SESSION["ruolo"]!= 'Centralinista' ){
  header("Location: login.php");
  exit;
}

// $id = $_GET["id"];

// $query = " select * from utente where id_utente ='".$id."'  ";
// $res = mysqli_query($conn,$query);
// $row = mysqli_fetch_assoc($res);

// echo $row["user"]; 
// mysqli_free_result($res);
// mysqli_close($conn);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/styleCommonPages.css">
    <link rel="stylesheet" href="css/styleGestionePersonale.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/personaValuePrint.js" defer="true"></script>
    <!-- <script src="js/gestionePersonalePrint.js" defer="true"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title> </title>
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
                
            </div>
            <div class="image">
                <img src="img/logo-1280x1071.png" alt="">
            </div>
        </div>


        <div class="container-form">
            <form name='form'  method='post' action="">
                <!--CAMPI DATI PAZIENTE-->
                <div class="tittle-form">
                <h2>Modifica le informazioni</h2>
                </div>
                <input class="hidden" type="text" name="id"  > 
                <div class="form-patient">
                    <div class="leftSide">
                        <div class="p-form">
                            <p>Cognome</p> 
                            <input class="inputForm" type="text" name="cognome" placeholder="" > 
                        </div>
                        <div class="p-form">
                            <p>Nome</p> 
                            <input class="inputForm" type="text" name="nome" placeholder="" required > 
                        </div>
                        <div class="p-form">
                            <p>Telefono</p> 
                            <input class="inputForm" type="phone" name="tel" value="" required >
                        </div>
                        <div class="p-form">
                            <p>Città di nascita</p>
                            <input class="inputForm" type="text" name="citta_nascita" placeholder=""  >
                        </div>
                        <div class="p-form">
                            <p>Data di nascita</p>
                            <input id="inputFormData" type="date" value="" name="data_nascita" pattern=" " >    
                        </div>
                        <div class="p-form">
                            <p>Comune di residenza</p> 
                            <input class="inputForm" type="text" name="citta_residenza" placeholder=" "  > 
                        </div>

                    </div>
                    <div class="rightSide">
                    <div class="p-form">
                            <p>Indirizzo</p> 
                            <input class="inputForm" type="text" name="indirizzo" placeholder="" >
                        </div>
                    <div class="p-form">
                            <p>Email</p> 
                            <input class="inputForm" type="email" name="email" placeholder=" "  > 
                         </div>
                         <div class="p-form">
                            <p>Nome utente</p> 
                            <input class="inputForm" type="text" name="user" placeholder="  " > 
                        </div>

                        <div class="p-form">
                            <p>Ruolo</p>
                            <select class="inputForm" name="ruolo" id="ruolo"> 
                            <option > </option>
                            <option value="Barelliere">Barelliere</option>
                            <option value="Autista">Autista</option>
                            <option value="Centralinista">Centralinista</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="div-submit">
                    <button id="submit" class="button" type="submit">Invia</button>
                </div>
                
            </form>
        </div>
        </div>
        <div class="containerPrint"> </div>

  </div>

    
</body>
</html>