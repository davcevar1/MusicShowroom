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
$result = $pdo->query($sqlR);

while($row = $result->fetch()){
  $nombreArtista[] = $row['NombreArtista'];

}
$nArtista = 0;
foreach ( $nombreArtista as $artista ) {
  //echo "<br>".$nombreArtista[$nArtista];
  $n = $nombreArtista[$nArtista];
  $nArtista = $nArtista+=1 ;

}
 ?>
