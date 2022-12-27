<?php
require '../php/connection_db.php';
session_start(); 

if ( !isset($_SESSION["user"]) || $_SESSION["ruolo"] == "Centralinista"){
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

    <link rel="stylesheet" href="../css/styleCommonPages.css">
    <link rel="stylesheet" href="../css/styleGestioneMezzi.css">
    <link rel="stylesheet" href="../css/styleCroceFreccia.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="js/gestioneMezziPrint.js" defer="true"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Mezzi</title>
    <link rel="icon" href="../img/logo-128x107.png" type="image/png">
</head>
<body>


<nav>
  <input type="checkbox" id="checkbox1" />
  <label for="checkbox1">
  <ul class="menu demo">
  <p class="welcome"> Benvenuto </p>
  <p class="user"> <?php echo $_SESSION["user"]; ?> </p>
  <li><a href="dashboard.php">ORDINI</a></li>
  <li><a href="gestione_clienti.php">CLIENTI</a></li>  
  <li><a href="gestione_mezzi.php">MEZZI</a></li>
  <li><a href="../php/queryLogout.php">ESCI</a></li>
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
                <img src="../img/logo-1280x1071.png" alt="">
            </div>


</div>

        <div class="containerPrint"> </div>
    </div>
  </div>

      </div>
</body>
</html>