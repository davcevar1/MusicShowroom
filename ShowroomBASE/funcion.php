<?php

session_start();



 if(!isset($_GET["siguienteArtista".$_SESSION["artistaA"]]) && !isset($_GET["regresarArtista".$_SESSION["artistaA"]])  ){
   $_SESSION["artistaA"]=0;
 }else if(isset($_GET["siguienteArtista".$_SESSION["artistaA"]])){
   $_SESSION["artistaA"] = $_SESSION["artistaA"]+1;
 }else if(isset($_GET["regresarArtista".$_SESSION["artistaA"]])){
   $_SESSION["artistaA"] = $_SESSION["artistaA"]-1;
 }

 if ($_SESSION["artistaA"]<0) {
   $_SESSION["artistaA"]=0;
 }

$funAr =$_SESSION["artistaA"];

echo $_SESSION["artistaA"];
?>
