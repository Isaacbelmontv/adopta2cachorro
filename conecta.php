<?php
  require_once 'credentials.php'; //necesitamos este archivo!
  $conn = new mysqli($hn, $un, $pw, $db); //creamos un objeto $conn
  /*
  if ($conn->connect_error) //hay errores?
 	mysql_fatal_error();//si los hay ejecuta esta funcion!
 	die($conn->connect_error); //si los hay terminemos este asunto :(
   function mysql_fatal_error() {//mensaje de error para el usuario
  	echo <<< _END
  	   <h3 style="color:red;">Lo sentimos pero no podemos procesar el archivo.</h3>
  	   <p>Por favor regresa a la pagina anterior.<br>Si experimentas
 mas errores por favor envia un correo a: <a href="mailto:admin@server.com">Soporte tecnico</a>. Gracias!</p>
_END; //nota importante, al final del heredoc no debe de haber espacios!
   }
   */
?>
