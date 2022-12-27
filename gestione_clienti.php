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
    <link rel="stylesheet" href="css/styleGestioneClienti.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/gestioneClientiPrint.js" defer="true"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Dashboard</title>
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
          <h1>Gestione Clienti</h1>
      </div>
      <div class="image">
          <img src="img/logo-1280x1071.png" alt="">
      </div>
  </div>


  <div class="container-form">
      <form name='form'  method='post' action="php/queryGestioneClientiInsert.php">
          <!--CAMPI DATI PAZIENTE-->
          <div class="tittle-form">
          <h2>NUOVO CLIENTE</h2>
           </div>
          <div class="form-patient">
          <div class="leftSide">
                  <div class="p-form">
                      <p>Nome</p> 
                      <input class="inputForm" type="text" name="nome" placeholder="Nome" required> 
                  </div>
                  <div class="p-form">
                      <p>Telefono</p> 
                      <input class="inputForm" type="phone" name="tel" value="+39 ">
                  </div>
                  <div class="p-form">
                      <p>Email</p>
                      <input class="inputForm" type="email" name="email" placeholder="Email">
                  </div>
                  </div>
                  <div class="rightSide">
                        <div class="p-form">
                            <p>Città</p> 
                            <input class="inputForm" type="text" name="citta" placeholder="Città" required >
                        </div>
                        <div class="p-form">
                            <p>Indirizzo</p> 
                            <input class="inputForm" type="text" name="indirizzo" placeholder="Via/N°" required >
                        </div>
                        <div class="p-form">
                            <p></p> 
                            <input class="inputForm hidden" >
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