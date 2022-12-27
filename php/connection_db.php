<?php 
//connesione al server
$servername = "localhost";
$username = "root";
$psw = "";
$db = "misericordia";
$conn = mysqli_connect($servername,$username,$psw,$db) or die ("Errore: ".mysqli_connect_error());
$q = mysqli_query($conn, "set character set utf8");
?>