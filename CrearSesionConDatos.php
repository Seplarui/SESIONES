<?php session_start();?>

<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="utf8">
        
    </head>
    
    <body>
        
        <h1>Creando una sesión con datos </h1>
        <?php $_SESSION["nombre"]="Guillermo González";
        $_SESSION["profesion"]="Astronauta";
        ?>
        Datos de sesión creados.
        <br>
        <a href="consultarSesion.php">Consultar los datos de sesión</a>
        
    </body>
</html>