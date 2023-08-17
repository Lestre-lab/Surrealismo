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
	  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<img src="img/fondocuatro.png"></a>
      	</div>
  </div>
<br>
<br>
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

	<section>
		 <div class="grid-container">
    <div class="profile">
      <a href="dali.php"><img src="img/daliuno.png" alt="imagen 1"></a>
      <h2>Salvador Dalí</h2>
      <p>
					Dalí Salvador Felipe Jacinto Dalí es el artista más famoso del surrealismo, reconocido no solo por sus cuadros, pero su excéntrica personalidad, conducta antisocial y capacidad interdisciplinaria y creación el método paranoico-critico. Nació en España, Figueras el 11 de mayo de 1904. De parte de una familia acomodada, culta y con inclinaciones religiosas.</p>
    </div>
    <div class="profile">
      <a href="miro.php"><img src="img/mirouno.png" alt="imagen 2"></a>
      <h2>Joan Miró</h2>
      <p>
					Joan Miró i Ferrà nació en Barcelona, España, el 1893. Fue un Muralista, pintor y escultor considerado uno de los pioneros de Surrealismo. Su trabajo se destaca por el uso de los colores primarios y característico lenguaje gráfico bajo la influencia que obtuvo por parte de otras vanguardias como Fauvismo, Cubismo y Expresionismo. Miró trabajó en el subconsciente y el automatismo mental con estrecha relación a la infancia, así como desarrolló una escritura ideográfica</p>
    </div>
    <div class="profile">
      	<a href="ernst.php"><img src="img/ernst.png" alt="imagen 3"></a>
     		 <h2>Max Ernst</h2>
     		 <p>Maximilian Maria Ernst nacido en Bruhl, Alemania, el 1891 y nacionalizado Francés, es uno de los principales artistas de vanguardias como el expresionismo, Dadaísmo y pionero del Surrealismo, así como uno de los artistas alemanes más influyentes del arte contemporáneo debido al abanico de técnicas que empleaba en su obra.
     		 Su periodo en el Dada dura entre 10920- 1921 junto a Bretón, Tzara y Luise Ernst.
     		 	Max Ersnt desarrolla la técnica Frottagge y utiliza el Collage, el 1922 se mudó a Paris y el 1924 se vio interesado en el surrealismo; sin embargo, él creó su propio idioma visual sobre el surrealismo.
					</p>
    </div>
  </div>
   <div class="grid-container">
    <div class="profile">
      <a href="magritte.php"><img src="img/magritteuno.png" alt="imagen 1"></a>
      <h2>René Magritte</h2>
      <p>
					René François Ghislain Magritte nació en
Bélgica en 1898. Se graduó como artista
de la Académie Royale des Beaux-Arts en
Bruselas, y en 1920 es cuando publica su
primera exposición en el centro de arte
de Bruselas. Su fama nace en la creación
de obras basadas en el uso de elementos
cotidianos y cambiar la percepción de los
elementos del espectador y su entorno.
Magritte experimentaba mucho con la
ilusión de la realidad y lo mágico de lo
cotidiano. Desde un inicio tuvo una gran
influencia por parte de Giorgio de Chirico
(1888-1978) y la pintura metafísica de
Hironymus Bosch (1450-1510) que
caracterizo el lenguaje poético de sus
obras.</p>
    </div>
    <div class="profile">
      <a href="chagall.php"><img src="img/chagall.jpg" alt="imagen 1"></a>
      <h2>Marc Chagall</h2>
      <p>
				Marc Chagall fue un artista Bielorruso Nacido en 1887, resalta el uso de elementos ficticios, colores, el folclore ruso con el mundo onírico y
la infancia, exactamente el inconsciente
durante el momento que él consideró el más
feliz.
Despreciaba el realismo en el arte porque creía
que el artista tiene como responsabilidad
especial el mirar más allá de lo superficial y
traer a la humanidad un mensaje de amor y
esperanza. Sus cuadros estaban llenos de
amantes apasionados, animales y simbología
cristiana y judía y con colores vivos.</p>
    </div>
    <div class="profile">
      <a href="ray.php"><img src="img/ray.jpeg" alt="imagen 1"></a>
      <h2>Man Ray</h2>
      <p>
					Man Ray, fue un famoso fotógrafo y artista plástico Americano nacido 27
de agosto de 1890 en Filadelfia, Pennsylvania. Era hijo de inmigrantes
judíos rusos. Razón por la que uso el seudónimo para Emmanuel
Radnitzky, su nombre original que utilizo hasta 1910 en trabajos de la
secundaria.
Comenzó a pintar desde los siete y toda su vida presento un profundo
interés por las artes, desde el 1908 hasta el 1912 estudió en distintas
academias de arte como la academia nacional de diseño y el Art Students
League, pero rechazaba la parte técnica de su enseñanza, razón por la
cual fue criticado ante la falta de base teórica pictórica en el futuro.</p>
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