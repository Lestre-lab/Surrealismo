<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Surrealismo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
<header>
        <nav class="menuCSS3">
            <ul>
                <li>
                    <div id="logo">
                        <a href="index.php"><img src="img/logo.png" class="logo"></a>
                    </div>
                </li>
                <li><a href="historia.php">Caracteristicas</a>
                    <ul><label>
                        <li><a href="caracteristicas.php">Historia</a></li></label>
                        <li><a href="filosofia.php">Filosofía</a></li>
                        
                                <li><a href="tecnicas.php">Técnicas</a></li>
                                <li><a href="disciplinas.php">Disciplinas</a></li>

                            
                        </li>
                    </ul>
                </li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="artistas.php">Artistas</a>
                    <ul>
                        <li><a href="ernst.php">Max Ernst</a></li>
                        <li><a href="dali.php">Salvador Dalí</a></li>
                        <li><a href="magritte.php">René Magritte</a></li>
                        <li><a href="miro.php">Joan Miró</a></li>
                        <li><a href="chagall.php">Marc Chagall</a></li>
                        <li><a href="ray.php">Man Ray</a></li>
                    </ul>
                </li>
                <li><a href="curiosidades.php">Curiosidades</a> </li>
                <li><a href="contacto.php">Contacto</a>
                </li>
                <li> <a href="#">Usuario</a>
                    <ul>
                        <li><a href="form_registro.php">Registro</a>
                </li>
                <li><a href="form_login.php">Log-In</a>
                </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="container">
            <form class="searchbox" action="resultados_buscar.php" method="get">

                <input type="search" name="buscar" placeholder="Artista..."class="searchbox-input">
                
                <input type="submit" value="Buscar"  class="searchbox-submit">
            </form>
        </div>
    </header>

<section class="contacto">
<div id="formcontacto"> 
<?php
//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];

$conexion = mysqli_connect("localhost","root","", "contactos") or die('No se pudo conectar al servidor');


$consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

// $consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,localidad,comentario) VALUES ( '$nombre','$email','$localidad','$comentario')") or die(mysqli_error($conexion));
if ($consulta === true) {echo "La consulta se realizó exítosamente";}
else {echo "Hubo un error al ejecutar la consulta";}

?>
</div>
  <div class="area-imagen">
     <img src="img/magrittegolconda.jpg">
</div>
    
</section>
<footer class="footer">
    <div class="copyright">
      <p>Derechos Reservados &copy; 2023 - Surrealismo- Estremadoyro Lucia- Producción Digital III</p>
    </div>
    <div class="social-icono">
      <a href="#">@Surrealismo</a>
      <a href="#">surrealismo@gmail.com</a>
      <a href="#">_@Surrealismo</a>
    </div>
  </footer>
</body>
</html>