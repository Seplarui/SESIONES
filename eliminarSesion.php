<?php session_start(); //ACCEDEMOS A LA SESION

$_SESSION=array(); //Nos aseguramos de eliminar los datos de la sesión

session_regenerate_id(TRUE); //Forzamos a regenerar la cookie de la sesión
session_destroy();//Eliminamos la sesión

?>




<!DOCTYPE html>
<html>
    <meta charset="utf8">
    
    <h1>Eliminando la sesión</h1>
    <?php echo "Ya no existe la sesión. ";?>
    <a href="Crear_Sesion.php">Crear Sesión</a>
    <a href="crearSesionConDatos.php">Crear sesión con datos.</a>
    
    
</html>