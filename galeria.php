<html>
      <head>
    	<title>Adopta</title>
      <link rel="shortcut icon" href="images/favicon.ico" />
       <link rel="stylesheet" type="text/css" href="styles/styles.css">
       <link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">


       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
       	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
       	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    <!--Menu Responsive-->
    <div class="hamburger">
    	<div class="_layer -top"></div>
    	<div class="_layer -mid"></div>
    	<div class="_layer -bottom"></div>
    </div>
    <nav class="menuppal">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Galeria</a></li>
          <li><a href="mejorvida.php">Una Mejor Vida</a></li>
          <li><a href="login.php">Inicia Sesión</a></li>
        </ul>
      </nav>
    <!--MenuResponsive-->










  <div class="Menu">
  <a href="index.php">
    <main class='container'>
      <button class='myButt two'>
        Inicio
      </button>
    </main>
  </a>


  <a href="galeria.php">
        <main class='container'>
        	<button class='myButt five'>
        	<div class='layer'>ADOPTA!</div>
        		Galeria
        	</button>
        </main>
  </a>

  <a href="mejorvida.php">
        <main class='container'>
        	<button class='myButt two'>
        		Una Mejor vida
        	</button>
        </main>
  </a>

  <a href="login.php">
        <main class='container'>
        	<button class='myButt two'>
        	Inicia Sesion
        	</button>
        </main>
  </a>
  </div>



    <!--Nuevo -->
    <div class="contenidoGaleria">
      <li class="items">
        <?php

/*
                   require_once 'credentials.php'; //ya sabemos que es esto :)
                 $conn = new mysqli($hn, $un, $pw, $db);
                 if ($conn->connect_error){//revisamos errores
                   die($conn->connect_error);}
           	     $_query = "SELECT * FROM mascotas ORDER BY idMascota";//query de SQL
          	     $result = $conn->query($_query); //objeto nuevo
                   if (!$result){//revisamos errores
            	      die($conn->error);
                   }

                   $rows = $result->num_rows; //checamos los rows de informacion
                   for ($j = 0 ; $j < $rows ; ++$j){//un loop, lo recuerdas?
            	     $result->data_seek($j);//buscamos la informacion del renglon seleccionando
            	     $row = $result->fetch_array(MYSQLI_ASSOC);//regresa la información foramateada
          		    //codigo que repetimos


                  echo'<ul><div class="entry">';
                  echo'<figure> <img  src="'.$row['foto'] .'" alt="Perro"/>';
                  echo'<figcaption>'.$row['nombre'].'<br></figcaption></figure></div></ul>';

                  }

                  $result->close();
                  $conn->close();

          //Con esta funcion obtengo el post del hipervinculo que ejecuta la funcion
*/
          	?>









  </li>
  </div>
<!--Contenido-->
<!--footer-->
<footer class="footer">
<div class="Empresafooter">
  <h4>Una Mejor Vida</h4>
<img class="logo_perrito"src="images/logo.jpg" width="80" height="80"alt="">
</div>
<div class="Seccionesfooter">
  <h4>Secciones</h4>
  <ul>
   <li><a href="index.php"><i class="fa fa-paw" aria-hidden="true"></i>Inicio</a></li>
    <li><a href="galeria.php"><i class="fa fa-paw" aria-hidden="true"></i>Galeria</a></li>
    <li><a href="login.php"><i class="fa fa-paw" aria-hidden="true"></i>Inicia Sesión</a></li>
  </ul>
</div>
<div class="Misionfooter">
  <h4>Como somos</h4>
  <a href="mejorvida.php"><i class="fa fa-paw" aria-hidden="true"></i>
   Misión y Historia</a>
</div>
<div class="Redesfooter">
  <h4>Siguenos en:</h4>
  <ul>
    <li class="fbicon"><a href="https://www.facebook.com/unamejorvida.ac/"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
    <li class="twicon"><a href="https://twitter.com/unamejorvidatab?lang=es"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
    <li class="igicon"><a href="https://www.instagram.com/unamejorvidaac/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
  </ul>
</div>
</footer>
<!--footer-->
<!--Scripts-->


  <!--MenuToggle-->
  <script  src="js/menu.js"></script>
  <!--MenuToggle-->
  </body>
 </html>
