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
    <link rel="stylesheet" href="css/styleGestioneMezzi.css">
    <link rel="stylesheet" href="css/styleCroceFreccia.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/gestioneMezziPrint.js" defer="true"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Mezzi</title>
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
                <h1>Gestione Mezzi</h1>
            </div>
            <div class="image">
                <img src="img/logo-1280x1071.png" alt="">
            </div>


</div>




        <div class="container-form">
            <form name='form'  method='post' action="php/queryGestioneMezziInsert.php">
                <!--CAMPI DATI PAZIENTE-->
                <div class="tittle-form">
                <h2>ISERISCI UN NUOVO MEZZO</h2>
                </div>
                <div class="form-patient">
                <div class="leftSide">
                        <div class="p-form" >
                            <p>Modello</p> 
                            <input class="inputForm" type="text" name="modello" placeholder="Modello" required> 
                        </div>
                        <div class="p-form">
                            <p>Sigla</p> 
                            <input class="inputForm" type="text" name="sigla" placeholder="Sigla" required> 
                        </div>
                        </div>
                        <div class="rightSide">
                        <div class="p-form">
                            <p>Targa</p>
                            <input class="inputForm" type="text" name="targa" placeholder="Targa" required>
                        </div>
                        <div class="p-form">
                            <p>Cilindrata</p> 
                            <input class="inputForm" type="text" name="cilindrata" placeholder="Cilindrata" required> 
                        </div>
                        </div>
                    </div>
                <div class="div-submit">
                    <button id="submit" class="button" type="submit">Invia</button>
                </div>
                
            </form>
        </div>
        <div class="containerPrint"> </div>
    </div>
  </div>

      </div>
</body>
</html>