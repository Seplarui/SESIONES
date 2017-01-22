<?php

require_once "Sesion.php";
require_once 'Usuario.php';

$sesion=new Sesion();
$usuario= new Usuario();
$usuario->login();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Comprobando el usuario</title>
        <meta charset="utf8">
    </head>
    
    <body>
        
        <h1>Acceso permitido</h1>
        Nombre: <?php echo $_SESSION["nombre"];?>
        Apellidos: <?php echo $_SESSION["apellido"];?>
        Perfil: <?php echo $_SESSION["perfil"];?>
        Teléfono: <?php echo $_SESSION["telefono"];?>
        <a href="logout.php">Salir</a>
    </body>
</html>
