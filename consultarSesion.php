<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <title>Consultando la sesión</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <h1>Consultando los datos de la sesión</h1>
        Nombre: <?php echo $_SESSION["nombre"];?>
        Profesión <?php echo $_SESSION["profesion"];?>
        
        <a href="eliminarSesion.php">Eliminar sesión</a>
        
    </body>
</html>