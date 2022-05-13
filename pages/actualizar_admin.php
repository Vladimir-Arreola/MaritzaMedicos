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
        $user = $_POST["nombre"];
        $pass = $_POST["pass"];

        $query = "UPDATE administrador SET user = '$user', contrasenia = '$pass' WHERE codigo = '$codigo'";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">
        <h1>Administradores</h1>
        <form method="POST" action="actualizar_admin.php">
                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $codigo?>" disabled>
                    </div>
                    
                    <div>
                        <p>Nombre de usuario</p>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $user?>" disabled>
                    </div>
                    <div>
                        <p>Contraseña</p>
                        <input type="text" name="pass" id="pass" value="<?php echo $pass?>" disabled>
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