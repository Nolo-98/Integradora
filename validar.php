<?php
include("conexion_base_datos_mysql.php");
$usuario = $_POST['usuario'];
$clave = $_POST['clave']; 
$user="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$admin="SELECT * FROM administrador WHERE usuario='$usuario' and clave='$clave'";
$resultad=mysqli_query($conex , $user) ;
$alumnos=mysqli_num_rows($resultad);
$resultad1=mysqli_query($conex , $admin) ;
$admins=mysqli_num_rows($resultad1);
if($alumnos>0)
{
    session_start();
    $_SESSION['usuario']="$usuario";
    header("location:inicio.html");
    exit();

}
else
{
    if($admins>0)
    { 
    session_start();
    $_SESSION['administrador']="$usuario";
    header("location:admin.php");
    exit();
 }
    else{
        header("location:login.php");  
    }
    header("location:login.php");
}

?>