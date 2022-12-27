<?php 

require 'connection_db.php';
session_start();       //SESSION START

  if(isset( $_POST["user"]) && isset( $_POST["psw"])){

    $user  = mysqli_real_escape_string($conn, $_POST["user"]);
    $psw = mysqli_real_escape_string($conn, $password = $_POST["psw"]);

    $user  = mysqli_real_escape_string($conn, $_POST["user"]);
    $psw = mysqli_real_escape_string($conn, $password = $_POST["psw"]);


           $query = "select * from utente where user='".$user."' and psw='".$psw."'  ";
           $res = mysqli_query($conn,$query);
           $row = mysqli_fetch_assoc($res);
           
           if ( mysqli_num_rows($res)!= 0){
            $_SESSION["user"] = $_POST["user"]; 
            $_SESSION["ruolo"] = $row["ruolo"];
            
                if( $row["ruolo"]=="Centralinista" || $row["ruolo"]=="Superuser"  ){
                    header("Location:../dashboard.php"); 
                }else{
                    header("Location:../user/dashboard.php"); 
                }

            
        }else{
          header("Location:../login.php?a=".$user);
        }  

           
           mysqli_free_result($res);
           mysqli_close($conn);
       }
?>