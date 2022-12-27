<?php 
require 'php/connection_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/styleCommonPages.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <script src="js/loginControl.js" defer="true"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Login</title>
    <link rel="icon" href="img/logo-128x107.png" type="image/png">
</head>
<body>


<div class="pageContainer">

<div class="boardContainer" id="boardContainer">
      <div class="title">
          <h1>Accedi</h1>
      </div>
      <div class="image" id="image">
          <img src="img/logo-1280x1071.png" alt="">
      </div>
  </div>


  <div class="container-form">
      <form name='form'  method='post' action="php/queryLogin.php"> 
          <!--CAMPI DATI PAZIENTE-->
          <div class="tittle-form">
          <h2>INSERISCI LE TUE CREDENZIALI</h2>
           </div>
          <div class="form-patient">
          <div class="leftSide">
                  <div class="p-form">
                      <p>Nome Utente</p> 
                      <input class="inputForm" type="text" name="user" onfocus="this.value=''" placeholder="USERNAME" required> 
                  </div>
                  <div class="p-form">
                      <p>Password</p>
                      <input class="inputForm" type="password" onfocus="this.value=''" name="psw" placeholder="PASSWORD">
                  </div>
                  </div>

                  </div>
                  <div class="div-submit">
              <button id="submit" class="button" type="submit">Invia</button>
          </div>
              

      </form>
  </div>

  
</div>
    
</body>
</html>
