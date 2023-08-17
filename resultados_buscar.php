<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Surrealismo</title>
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
<p>
<?php
	include('conexion.php');

	// TODO: Crear variable $buscar
	$buscar = $_GET['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";
	

	// TODO: Crear consulta por nombre y apellido
	$consulta = mysqli_query($conexion,"SELECT nombre, apellido, nacimiento, fallecimiento, pais, descripcion, foto FROM `artistas` WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' OR nacimiento LIKE '%$buscar%' OR fallecimiento LIKE '%$buscar%' OR pais LIKE '%$buscar%';");
?></p>

<article style="width:80%;margin:0 auto;padding:10px; ">
	<p><b><i>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p></b></i>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p class="resultados_b">
    <?php	
			echo $resultados['nombre'] . "<br>";
			echo $resultados['apellido'] . "<br>";
			echo $resultados['nacimiento'] . "<br>";
			echo $resultados['fallecimiento'] . "<br>";
			echo $resultados['descripcion'] . "<br>";
			echo "<img src='img/".$resultados['foto']."'>";
	?>
    </p><br>
    <a class="opcion-button" href="artistas.php">Ver más</a><br><br>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
<br>
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