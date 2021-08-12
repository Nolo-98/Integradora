<?php
include("conexion_base_datos_mysql.php");

if(isset($_POST['registra']))
{
    if(strlen($_POST['name']) >= 1 && strlen($_POST['nameF']) >= 1 &&
strlen($_POST['nameM']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['direccion']) >= 1 &&
strlen($_POST['telefono']) >= 1 && strlen($_POST['email'])>= 1)
{
$Name = trim($_POST['name']);
$NameF = trim($_POST['nameF']);
$NameM = trim($_POST['nameM']);
$Edad = trim($_POST['edad']);
$Direccion = trim($_POST['direccion']);
$Telefono = trim($_POST['telefono']);
$Email = trim($_POST['email']);
$consulta="INSERT INTO alumnos(`Nombre`, `Ape_pat`, `Ape_mat`, `Edad`, `Direccion`, `Telefono`, `Email`) 
VALUES ('$Name','$NameF','$NameM','$Edad','$Direccion','$Telefono','$Email')";

$resultado = mysqli_query( $conex, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
mysqli_close( $conex );
?>
