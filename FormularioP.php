<?php
     $serverName = "localhost";
     $userName   = "root";
     $password   = "";
     $baseD      = "PERSONA";

     $conn = new mysqli($serverName, $userName, $password, $baseD);

    if($conn->connect_error){
         die ("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO `EstudianteIES` (`Nombre`, `Apellido`, `E-mail`) VALUES ('".$_POST ['Nombre']."', '".$_POST ['Apellido']."', '".$_POST ['E-mail']."');";
    $conn->query($sql);
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro</title>
        <link rel="stylesheet" type="texy/css" href="estilo.css">
    </head>
    <body>
        <div class="contenedor">
            <form action="FormularioP.php" method="POST">

                <div class="contenedor-inputs">

                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="mail" placeholder="E-mail">

                </div>

                <input type="submit" class="btn" name="registrarse" value="Registrarse">
            </form>
            <div class="tabla">
                <tabla>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>E-mail</th>
                    </tr>
                </tabla>
            </div>
        
        </div>
    </body>
</html>