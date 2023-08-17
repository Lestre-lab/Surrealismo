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
	  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<img src="img/fondoocho.png"></a>
      	</div>     
  </div></div>

</section>
	<section>
		<scroll-conteiner>
		 <div class="container-historia">
    <div class="seccion">
    <h2 class="seccion-titulo">Historia</h2>
      <img class="seccion-imagen" src="img/manif.jpg" alt="Imagen 1">
      <div class="seccion-texto">
      	<p>Orígenes</p>
      	<p><i>Surrealisme</i></p>
        <p>Después de la primera guerra mundial, El surrealismo emerge con una gran
influencia por parte del Dadaísmo, se ubica como una vanguardia
oficialmente con la publicación del Manifiesto del surrealismo de André
Breton en Francia 1924 (históricamente fue mencionado en el epílogo de Las
Tetas Tiresias de Guillaume Apollinaire pero no fue resolutivo en su creación
oficial) estableciéndose como un movimiento intelectual y político que
presentaba profundo interés en la psique humana, elementos oníricos e
influencia de La interpretación de los sueños de Freud (1915)- que pretende
el rechazo del razonamiento lógico, enfocado en una realidad solo existente
en la mente del artista. Pretende que el mayor exponente creativo es la
desinhibición de todo pensamiento racional y transformar el concepto de
realidad.</p>
      </div>
      <a class="opcion-button" href="caracteristicas.php">Ver más</a>
        </div>
    </div>

    <div class="container-historia">
    <div class="seccion">
      <h2 class="seccion-titulo">Filosofía</h2>
      
      <div class="seccion-texto">
      	<p>Motivación</p>
      	<p><i>Onírico</i></p>
        <p>El surrealismo comprende a la mezcla
de la realidad con lo onírico como una
realidad superior al encontrarse con el
automatismo psíquico, renuncia a
cualquier pensamiento racional y a
ejercerlos para la resolución de la vida.</p>
<p>
      </div> <a class="opcion-button" href="filosofia.php">Ver más</a>
        </div>
    </div>

    <div class="seccion">
    	
      <div class="grid-container-historia">
        <div class="opcion">
        	 <h3 class="seccion-titulo">Dsiciplinas</h3>
          <img class="opcion-imagen" src="img/lagrimasray.jpg" alt="Imagen 2">
          <p class="opcion-texto">Literatura</p>
          <p>Artes Plásticas</p>
          <p>Fotografía</p>
          <p>Cine</p>
          <a class="opcion-button" href="disciplinas.php">Ver más</a>
        </div>

        <div class="opcion blanco">
          <h3 class="seccion-titulo">Técnicas</h3>
          <img class="opcion-imagen" src="img/frottageernst.jpg" alt="Imagen 3">
          <p class="opcion-texto">
          	Frottage
          </p>
          <p>Grattage</p>
          <p>Collage</p>
          <p>Aerografía</p>
          <a class="opcion-button" href="tecnicas.php">Ver más</a>
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