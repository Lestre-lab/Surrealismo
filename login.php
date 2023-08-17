<!doctype html>
<html>
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
    <br>

    <section class="contacto">
<?php
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT nombre, email, usuario FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado = mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
		echo "Hola ".$respuesta['nombre']." <br />";
		echo "¡Bienvenido a Surrealismo! Gracias por ingresar.<br>
		Enterate de las últimas novedades.
		<br><br><br><br><br><br><a class=opcion-button href=index.php>Ver más</a><br>";	

} else {
	echo "<b>No es un usuario registrado.<br>Hubo un error, vuelva a intentar
	<br><b<br><br><br><br><br><b<br><br><br><br><br><b<br><br><br><br><a class=opcion-button href=form_login.php>Log-In</a>  <a class=opcion-button href=form_registro.php>Registrarse</a><br>
	";
}


?>
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