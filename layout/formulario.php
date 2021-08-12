<!DOCTYPE html>
<html lang="es">
<head>



</head>
<body>
    <form method="POST">
     <input type="text" name="name" placeholder="Nombre o Nombres">
     <input type="text" name="nameF" placeholder="Apellido Paterno">
     <input type="text" name="nameM" placeholder="Apellido Materno">
     <input type="old" name="edad" placeholder="Edad">
     <input type="text" name="direccion" placeholder="Direccion">
     <input type="text" name="telefono" placeholder="telefono">
     <input type="email" name="email" placeholder="correo">
     <input type="submit" name="registra">  
    </form>
    
            
<?php
include("registrar.php");
?>
</body>
</html>