<?php
//se establece una conexion a la base de datos
include 'conecta.php';
//si se han enviado datos
if (isset($_POST['datos_registrar_usuario']) and isset($_POST['datos_registrar_contraseña'])){
    $usuario=mysqli_real_escape_string($conexion,$_POST['datos_registrar_usuario']);
    $ciudad=mysqli_real_escape_string($conexion,$_POST['datos_registrar_ciudad']);/*NUEVO*/
    $contraseña=password_hash($_POST['datos_registrar_contraseña'],PASSWORD_DEFAULT);

$mascota=mysqli_real_escape_string($conexion,$_POST['datos_registrar_mascota']);/*NUEVO*/
$mascotaedad=mysqli_real_escape_string($conexion,$_POST['datos_registrar_mascotaedad']);/*NUEVO*/
$mascotadireccion=mysqli_real_escape_string($conexion,$_POST['datos_registrar_mascotadireccion']);/*NUEVO*/

/*foto*/
/*nosirve*/
$target = "base_de_datos/".basename($_FILES['imagen_item']['name']);
$image = $_FILES['imagen_item']['name'];
/*nosirve*/
    $ingresar=mysqli_query($conexion,'insert into nombre_tabla(columna_usuario,columna_password,columna_ciudad,columna_mascota,columna_mascotaedad,columna_mascotadireccion,image) values
 ("'.$usuario.'","'.$contraseña.'","'.$ciudad.'","'.$mascota.'","'.$mascotaedad.'","'.$mascotadireccion.'","'.$image.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

    //redirección
    header ('location: ./');
}//si no se enviaron datos
else{
    header ('location: ./');
}



	$result = mysqli_query($db, "SELECT * FROM nombre_tabla");
?>
