<!DOCTYPE html>
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
	.
	
	<section>
    <div class="seccion">
    	 <h2 class="seccion-titulo">Disciplinas</h2>
      <div class="grid-container-historia">
        <div class="opcion">
          <h3 class="opcion-titulo">Artes Plásticas</h3>
          <img class="opcion-imagen" src="img/arti.jpg" alt="Imagen 2">
          <p class="opcion-texto">Siendo los artistas mas conocidos
Salvador Dalí, Max Ernst, Joan Miró
Remedios Vargas y Leonora
Carrington. Presentaron su interés por
el uso de distintos materiales y
técnicas como detonador creativo,
varias de sus obras generan un
abanico desde pinturas, ilustraciones
y esculturas.
Principalmente se rescata el uso de
materiales clásicos como oleos con
tabla y lienzo u otras técnicas
novedosas como Collages e
incrustaciones con cerámicos y
metales.</p>
          <a class="opcion-button" href="https://www.youtube.com/watch?v=26ZfDxEWpu8">Ver video</a>
        </div>
        <div class="opcion blanco">
          <h3 class="opcion-titulo">Literatura</h3>
          <img class="opcion-imagen" src="img/lit.jpeg" alt="Imagen 3">
          <p class="opcion-texto">La literatura surrealista busca la renovación de la
composición textual usando de referencia técnicas
como el cadáver exquisito.
En la literatura, busca que el lector asocie palabras e
ideas aparentemente inconexas hasta encontrar un
sentido, ya sea consciente o inconscientemente.
Entre las obras mas conocidas están Antología del
humor negro (1940) donde reúne escritos de distintos
autores surrealistas y Nadja (1928) ambas de André
Breton.</p>
          <a class="opcion-button" href="https://www.youtube.com/watch?v=F6b51o81Pts">Ver video</a>
        </div>
      </div>
    </div>

   <div class="grid-container-historia">
        <div class="opcion">
          <h3 class="opcion-titulo">Fotografía</h3>
          <img class="opcion-imagen" src="img/lagrimasray.jpg" alt="Imagen 2">
          <p class="opcion-texto">En si durante el inicio del siglo la fotografía
comenzaba a verse como una disciplina artística
no únicamente de presentación pero de creación.
Los mayores exponentes fueron Man Ray, Paul
Nougé, Philippe Halsman y László Moholy-Nagy.
Dentro de las técnicas de fotografía y fotomontaje
se destaca el uso de rayogramas; composiciones
abstractas donde situaba objetos por contacto en
papel sensible a la luz, y sus solarizaciones;
imágenes sobre un material sensible a la luz que
invierten su tono de un modo total o parcial.</p>
          <a class="opcion-button" href="https://www.youtube.com/watch?v=fkd3AOynpEc">Ver video</a>
        </div>
        <div class="opcion blanco">
          <h3 class="opcion-titulo">Cine</h3>
          <img class="opcion-imagen" src="img/perro.jpg" alt="Imagen 3">
          <p class="opcion-texto">El cine surrealista utiliza imágenes inconexas,
elementos sin relación alguna y montajes que
desafiaban la realidad haciendo referencia a
información albergada en el subconsciente. Los
principales exponentes son el director Luis
Buñuel con Un Chien Andalou (1929), The
Seashell and the Clergyman (1928), dirigida por
Germaine Dulac y títulos como Eraserhead
(1977) de Lynch y Paprika (2006) de Satoshi
Kon</p>
          <a class="opcion-button" href="https://www.youtube.com/watch?v=eNXASG9fC_c">Ver video</a>
        </div>
      </div>
    </div>
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