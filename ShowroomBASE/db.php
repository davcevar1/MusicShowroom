<?php

$username = 'root';
$pasword = '';

$pdo = new PDO ('mysql:host=localhost; dbname = Musica; charset = utf8',$username, $pasword);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

try {
//echo 'todo bien';
}
catch (PDOException $e){
  echo $e->getMessage();
}

$sqlR = 'SELECT * FROM Musica.Artista;';
$sqlM = 'SELECT * FROM Musica.Cancion;';
$result = $pdo->query($sqlR);
$result2 = $pdo ->query($sqlM);

while($row = $result->fetch()){
  $idArtista[] = $row['idArtista'];
   $nombreArtista[] = $row['NombreArtista'];
  $infArtista[] = $row['infArt'];
  $soundA[] = $row['Cloud'];
  $fbArt[] = $row ['Fb'];
  $imgA[] = $row ['ImagenAr'];
 }


while($row = $result2->fetch()){
  $idArtistaCancion[] = $row['idArtista'];
  $idCancion[] = $row['idCan'];
  $nombreCancion[] = $row['NombreCancion'];
  $urlCancion[] = $row['urlCancion'];



}
// $cancionActualAritista[];
// for ($i=0; $i < ; $i++) {
//   if($idArtistaCancion[i]==$idArtista[$_SESSION["artistaA"]]){
//     $cancionActualAritista[i]=$nombreCancion[i];
//   }
// }


$infArtista  = $infArtista [$_SESSION["artistaA"]];
$urlCancion = $urlCancion [$_SESSION["artistaA"]];
$NombreArt = $nombreArtista [$_SESSION["artistaA"]];
$idArt = $idArtista[$_SESSION["artistaA"]];
$nombCan = $nombreCancion[$_SESSION["artistaA"]];
$soundA = $soundA[$_SESSION["artistaA"]];
$fbArt = $fbArt[$_SESSION["artistaA"]];
$imgA = $imgA [$_SESSION["artistaA"]];

 ?>
