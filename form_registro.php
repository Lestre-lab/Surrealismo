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
	
    <form action="registro.php" method="post" id="formcontacto">
        <h1 class="registro">Registrate</h1>
    	<label>Nombre
        	<input type="text" name="nombre" required />
        </label><br />
        <label>Email
        	<input type="email" name="email" required />
        </label><br />
        <label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        	<input type="submit" value="Registrarse"/>	
    
     <p>¿Ya tienes una cuenta? <a href="form_login.php">Logueate</a></p></form>
      <div id="area-imagen">
     <img src="img/ernstuno.png">
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