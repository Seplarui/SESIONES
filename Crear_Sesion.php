<?php session_start()?>

<!DOCTYPE html>
<html>
    <head>
        <title>Creando una sesión</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Creando una sesión</h1>
        <?php echo "El identificador de la sesión es: ".session_id();?>
        
        <a href="eliminarSesion.php">Destruir sesión</a>
    </body>
</html>