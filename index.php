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
	<br>
	<section>
	  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<a href="ernst.php"><img src="img/fondouno.png"></a>
      	</div>
      <div class="swiper-slide"><a href="magritte.php"><img src="img/fondotres.png">
      </a></div>
      <div class="swiper-slide"><a href="dali.php"><img src="img/fondodos.png"></a></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 5000,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</section>
<article class="inicio">
	<div class="historia">
			<h1>Historia</h1>
			<p>Después de la primera guerra mundial, El surrealismo emerge con una gran
			influencia por parte del Dadaísmo, se ubica como una vanguardia
			oficialmente con la publicación del Manifiesto del surrealismo de André
			Breton en Francia 1924 (históricamente fue mencionado en el epílogo de Las
			Tetas Tiresias de Guillaume Apollinaire pero no fue resolutivo en su creación
			oficial)</p><a class="opcion-button" href="caracteristicas.php">Ver más</a>
        </div></div>
		<img class="imghistoria" src="img/manif.jpg">
</article>


	<section>
		 <div class="grid-container-incio">
    <div class="image-container-inicio">
      <img src="img/cuadrouno.png" alt="Imagen 1">
      <div class="image-overlay">
      	<a href="galeria.php"><p>Ver galería</p></a>
      </div>
    </div>
    <div class="image-container-inicio">
      <img src="img/cuadrodos.png" alt="Imagen 2">
      <div class="image-overlay">
      <a href="galeria.php"><p>Ver galería</p></a>
      </div>
    </div>
    <div class="image-container-inicio">
      <img src="img/persistenciadali.jpg" alt="Imagen 3">
      <div class="image-overlay">
      	<a href="galeria.php"><p>Ver galería</p></a>
      </div>
    </div>
  </div>
	</section>
	<br><br><br>
	<section>
		 <div class="grid-container">
    <div class="profile">
      <img src="img/daliuno.png" alt="imagen 1">
      <h2>Salvador Dalí</h2>
      <p>
					Dalí Salvador Felipe Jacinto Dalí es el artista más famoso del surrealismo, reconocido no solo por sus cuadros, pero su excéntrica personalidad, conducta antisocial y capacidad interdisciplinaria y creación el método paranoico-critico. Nació en España, Figueras el 11 de mayo de 1904. De parte de una familia acomodada, culta y con inclinaciones religiosas.</p>
    </div>
    <div class="profile">
      <img src="img/mirouno.png" alt="imagen 2">
      <h2>Joan Miró</h2>
      <p>
					Joan Miró i Ferrà nació en Barcelona, España, el 1893. Fue un Muralista, pintor y escultor considerado uno de los pioneros de Surrealismo. Su trabajo se destaca por el uso de los colores primarios y característico lenguaje gráfico bajo la influencia que obtuvo por parte de otras vanguardias como Fauvismo, Cubismo y Expresionismo. Miró trabajó en el subconsciente y el automatismo mental con estrecha relación a la infancia.</p>
					<a class="opcion-button" href="artistas.php">Ver más</a>
    </div>
    <div class="profile">
      		<img src="img/ernst.png" alt="imagen 3">
     		 <h2>Max Ernst</h2>
     		 <p>Maximilian Maria Ernst nacido en Bruhl, Alemania, el 1891 y nacionalizado Francés, es uno de los principales artistas de vanguardias como el expresionismo, Dadaísmo y pionero del Surrealismo, así como uno de los artistas alemanes más influyentes del arte contemporáneo debido al abanico de técnicas que empleaba en su obra.
     		 Su periodo en el Dada dura entre 10920- 1921 junto a Bretón, Tzara y Luise Ernst.
     		 	Max Ersnt desarrolla la técnica Frottagge y utiliza el Collage, el 1922 se mudó a Paris y el 1924 se vio interesado en el surrealismo; sin embargo, él creó su propio idioma visual sobre el surrealismo.
					</p>
    </div>
  </div>
  <p>
        </div></p>
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