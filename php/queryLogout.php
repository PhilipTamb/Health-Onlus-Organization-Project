<?php 

require 'connection_db.php';

session_start();       //SESSION START
session_destroy();
header("Location: ../login.php"); 
exit;
?>

