<?php

if (empty($_COOKIE["Veces"]))
{
    setcookie("Veces",1,  time()+(3600*24*7));
} else {
    setcookie("Veces",$_COOKIE["Veces"]+1,time()+(3600*24*7));
    $Fecha_anterior=$_COOKIE["Momento"]["Fecha"];
    $Hora_anterior=$_COOKIE["Momento"]["Hora"];
}
$fecha=getdate(time());
$dia=$fecha["mday"]."/".$fecha["mon"]."/".$fecha["year"];
$hora=$fecha["hours"].":".$fecha["minutes"].":".$fecha["seconds"];
setcookie("Momento[Fecha]",$dia,time()+(3600*24*7));
setcookie("Momento[Hora]",$hora,time()+(3600*24*7));
?>


<html>
    <head>
        <title>Cookies.php</title>
        <meta charset="utf8">
    </head>
    <body>
        
        <?php
        
        if(isset($Fecha_anterior)) {
            echo "Usted visitó esta página por última vez el <b>$Fecha_anterior</b> a las"
                    . "<b>$Hora_anterior</b>";
            echo "<br>Ha visitado esta página un total de: "."<b>".$_COOKIE["Veces"]."</b> veces.";
            
        } else {
            echo "Bienvenido a nuestra página web.";
        }
        ?>
    </body>
</html>