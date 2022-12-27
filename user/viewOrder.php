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
    <link rel="stylesheet" href="../css/styleViewOrder.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    <script src="js/viewOrder.js" defer="true"></script>


    <title>Ordine</title>
    <link rel="icon" href="../img/logo-128x107.png" type="image/png">
</head>
<body>
<nav>
  <input type="checkbox" id="checkbox1" />
  <label for="checkbox1">
  <ul class="menu demo">
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
                <h1></h1>
            </div>
            <div class="image">
                <img src="img/logo-1280x1071.png" alt="">
            </div>
        </div>



</div>
    
</body>
</html>