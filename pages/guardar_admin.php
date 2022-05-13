<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Administradores</title>
</head>
<body>

    <?php
        include "bar.php";
        require "conn.php";

        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $pass = $_POST["pass"];

        $sql_disponibilidad = "SELECT * FROM administrador WHERE codigo =" .$codigo;
        $result = $conn->query($sql_disponibilidad);
        $rows = $result->fetchAll();

        if(empty($rows)){
            echo "<h2 style=color:green align='center'>Se guardó correctamente en la BD</h2>";
            $sql_add = "INSERT INTO administrador (codigo, user, contrasenia) VALUES ('$codigo', '$nombre', '$pass')";
            $conn->query($sql_add);
        }else{
            echo "<h2 style=color:red align='center'>No se guardó nada, ese id YA EXISTE en la BD</h2>";
        }
    ?>

    <div class="tablas">
        <h1>Administradores</h1>
        <form method="POST">
          
                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $codigo?>" disabled>
                    </div>
                    
                    <div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" disabled>
                    </div>
                    <div>
                        <p>Contraseña</p>
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $pass?>" disabled>
                    </div>
                </div>
            </div>
            <div class="submit">
                <a href="listado_admin.php" class="bar-boton boton-salir-mini">Volver al listado</a>
            </div>
        </form>
    </div>
</body>
</html>