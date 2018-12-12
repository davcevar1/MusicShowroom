<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
include 'funcion.php';
include 'db.php';

     ?>
    <meta charset=" iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music Showroom</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  <!--  <link href ="css/back1.css" rel="stylesheet">-->
  </head>
  <body>
<!--
    <div class="bgImage"></div>
<svg class="blobCont">
		<image xlink:href="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-0.3.5&s=e20bc3d490c974d9ea190e05c47962f5&auto=format&fit=crop&w=634&q=80" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
			<mask id="mask" x="0" y="0">
				<g style="filter: url(#gooey)">
          <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
					<circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
          <circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>
					<circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>
          <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
					<circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
          <circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>
					<circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>
					<circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>
				</g>
			</mask>
			<filter id="gooey" height="130%">
				<feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
    	</filter>
	</svg>
-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
		  <img class="mr-3" width="50" height="50" src="images/isotipo.png" alt="Generic placeholder image" href="#">
		  <strong>MUSIC SHOWROOM</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
          </li><!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Género</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Rock</a>
              <a class="dropdown-item" href="#">Pop</a>
				<a class="dropdown-item" href="#">Jazz</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ver más ...</a>
            </div>
          </li>
        -->
        </ul>
      </div>
    </nav>

    <br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
			  <img width="400" height="300" src="images/logo1.png" alt="Generic placeholder image">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-2">
        <div class="row">
          <div class="col-md-4 col-12">
            <ul class="list-unstyled">
              <li class="media">
                <div class="media-body">

<form method="get">
					<p><img class="mr-3" width="35" height="35" src="images/flechaUp.png" alt="Generic placeholder image" href="<?php echo $_SESSION["artistaA"]; ?>"><input class="btn btn-primary btn-lg"  type="submit" name="regresarArtista<?php echo $_SESSION["artistaA"]; ?>" value="Regresar Artista"/></p>
					<p><img class="mr-3" width="35" height="35" src="images/flechaDown.png" alt="Generic placeholder image" href="<?php echo $_SESSION["artistaA"]; ?>"><input class="btn btn-primary btn-lg"  type="submit" name="siguienteArtista<?php echo $_SESSION["artistaA"]; ?>" value="Siguiente Artista"/></p>
</form>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-12">
            <ul class="list-unstyled">
              <li class="media">
              <div class="media-body">
           <center><img class="mr-3" width="100" height="100" style="border-radius:2em; " src="<?php echo $imgA ?>" alt="Generic placeholder image" /></center> <br>
             <h5 class="mt-0 mb-1 text-center"><?php echo $NombreArt; ?></h5><br>

					<h4 class="mt-0 mb-1 text-center"> <?php echo $nombCan;?></h4>
          <h6 class="mt-0 mb-1 text-center">2018</h6>
          <div class="media-body"><br>
              <audio src="./Canciones/<?php echo $urlCancion;?>" controls="controls" type="audio/mpeg" preload="preload">
            </audio>
            <br>
<!--
					<a class="btn btn-primary btn-sm" href="#" role="button">Regresar canción</a>
          <a class="btn btn-primary btn-sm" href="#" role="button">Siguiente canción</a>
-->
					</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-12">
            <!--
            <img class="mr-3" width="200" height="200" src="https://scontent.fuio13-1.fna.fbcdn.net/v/t1.0-9/15541367_10154325793047144_2716394921083984054_n.jpg?_nc_cat=102&_nc_ht=scontent.fuio13-1.fna&oh=29c80430a4bc8b44bf1a748536886925&oe=5CA3C7B0" alt="Imagen de la derech not encontrada">
-->
<br>
           <h5 class="mt-0 mb-1">Más info del artista</h5>

                   <p><?php echo $infArtista ?>
                      </p>

           <h5><a href="<?php echo $soundA ?>"><img alt="Siguenos en Facebook" src="https://vignette.wikia.nocookie.net/lyricwiki/images/c/cf/Soundcloud.png/revision/latest?cb=20120116213549" width=48 height=48  /> </a></h5>

             <h5><a href="<?php echo $fbArt ?>"><img alt="Siguenos en SoundCloud" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=48 height=48  /> </a></h5>

         </div>

        </div>

		  <div class="row">
			  <div class="col-md-4 col-12">

			  </div>
			 <div class="col-md-4 col-12">
				<ul class="list-unstyled">
				  <li class="media">
				<!--	<div class="media-body"><br>
						<a class="btn btn-primary btn-sm" href="#" role="button">Regresar canción</a>
            <a class="btn btn-primary btn-sm" href="#" role="button">Siguiente canción</a>

					</div>-->
				  </li>
				</ul>
          	</div>

		  </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>
