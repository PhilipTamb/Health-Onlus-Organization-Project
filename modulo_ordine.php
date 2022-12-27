<?php 
//connesione al server
require 'php/connection_db.php';
require 'php/query_form_order.php';

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
    <link rel="stylesheet" href="css/styleModuloOrdine.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/moduloOrdinePrintClienti.js" defer="true"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <title>Centralino</title>
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
    <!--VERSIONE DESKTOP-->
    <div class="pageContainer">

        <div class="boardContainer">
            <div class="title">
                <h1>ORDINE DI SERVIZIO N° <?php echo  $ris[0]+1 ?></h1>
            </div>
            <div class="image">
                <img src="img/logo-1280x1071.png" alt="">
            </div>
        </div>
        <!--CONTENUTO DELLA PAGINA-->
        <div class="container-form">
            <form name='form'  method='post' action="php/send_order.php">
                <!--CAMPI DATI PAZIENTE-->
                <div class="tittle-form">
                <h2>Nuovo Ordine</h2>
                </div>

                <div class="form-patient">
                    <div class="leftSide">
                        <div class="p-form">
                            <p>Cognome</p> 
                            <input class="inputForm" type="text" name="cognome" placeholder="Cognome" required > 
                        </div>
                        <div class="p-form">
                            <p>Nome</p> 
                            <input class="inputForm" type="text" name="nome" placeholder="Nome" required > 
                        </div>
                        <div class="p-form">
                            <p>Indirizzo</p> 
                            <input class="inputForm" type="text" name="indirizzo" placeholder="Via/N°" required >
                        </div>
                        <div class="p-form">
                            <p>Telefono</p> 
                            <input class="inputForm" type="phone" name="tel" value="+39 " required >
                        </div>
                        <div class="p-form">
                            <p>Peso</p> 
                            <input class="inputForm" type="text" name="peso" placeholder="Peso (Kg)">
                        </div>
                    </div>
                    <div class="rightSide">
                        <div class="p-form">
                            <p>Città</p>
                            <input class="inputForm" type="text" name="citta" placeholder="Città" required >
                        </div>
                        <div class="p-form">
                            <p>Pedara, lì</p>
                            <input id="inputFormData" type="date" value="<?php echo $date[0]; ?>" name="data_creazione" pattern="\d{4}-\d{2}-\{d2}" min="2020-01-01"  required>    
                        </div>
                        <div class="p-form">
                            <p>Ricezione</p>
                            <!--Da levare-->
                            <input class="inputForm" type="text" name="" value="<?php echo $time[0]; ?>" required >
                        </div>
                        <div class="p-form">
                            <p>Affetto da</p>
                            <input class="inputForm" type="textarea" name="affetto">
                        </div>
                        <div class="p-form">
                            <p>Cliente</p>
                            <select class="inputForm" name="cliente" id="routine"> 
                                <option value="" disabled selected>--Tipologia cliente--</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container-div-space">
                    <div class="div-space"></div>
                </div> 
                <!--CAMPI DATI MEZZI-->
                <div class="form-means">
                    <div class="leftSide">
                        <div class="p-form">
                            <p>Mezzo richiesto</p>
                            <select class="inputForm" name="mezzo" id=""> 
                                <option value="" disabled selected>--Seleziona il mezzo--</option>
                                <option value="Ambulanza">Ambulanza</option> 
                                <option value="Auto">Auto</option> 
                                <option value="Automediche">Automediche</option>
                                <option value="Mezzo Disabili">Mezzo Disabili</option> 
                                <option value="Pulmino">Pulmino</option> 
                            </select>
                        </div>
                        <div class="p-form">
                            <p>Richiesto da</p>
                            <input class="inputForm" type="text" name="richiedente" placeholder="Richiedente" >
                        </div>
                        <div class="p-form">
                            <p>Data</p>
                            <input class="inputForm" type="date" name="data_esecuzione" pattern="\d{4}-\d{2}-\{d2}" placeholder="gg/mm/aaaa" required>
                        </div>
                        <div class="p-form">
                            <p>Alle ore</p>
                            <input class="inputForm" type="time" name="ora_esecuzione" required>
                        </div>
                        
                    </div>
                    <div class="rightSide">
                        <div class="p-form">
                            <p>Tipo di richiesta</p>
                            <select class="inputForm" name="tipo_richiesta" id=""> 
                                <option value="" disabled selected>--Tipologia della richiesta--</option>
                                <option value="Soccorso">Soccorso</option> 
                                <option value="Trasporto">Trasporto</option> 
                                <option value="Manifestazione">Manifestazione</option> 
                                <option value="Protezione Civile">Protezione Civile</option> 
                                <option value="Servizi Sociali">Servizi Sociali</option> 
                                <option value="Servizio Interno">Servizio Interno</option>
                             </select>
                        </div>
                        <div class="p-form">
                            <p>Luogo servizio</p>
                            <input class="inputForm" type="text" name="luogo_servizio" placeholder="Luogo">
                        </div>
                        <div class="p-form">
                            <p>A casa del paziente</p>
                            <input class="inputForm" class="checkbox" type="checkbox" name="casa" value="1"> <span class="checkmark"></span>
                        </div>
                        <div class="p-form">
                            <p>Note</p>
                            <input class="inputForm" type="textarea" name="note" placeholder="Note">
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