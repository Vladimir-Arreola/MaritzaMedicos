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

        $codigo = $_GET["id"];

        $query = "SELECT * FROM administrador WHERE codigo = '$codigo'";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">
        <h1>Administradores</h1>
        <form method="POST" action="actualizar_admin.php">
        <?php foreach($rows as $row){?>
                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $row["codigo"]?>">
                    </div>
                    
                    <div>
                        <p>Nombre de usuario</p>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $row["user"]?>">
                    </div>
                    <div>
                        <p>Contraseña</p>
                        <input type="text" name="pass" id="pass" value="<?php echo $row["contrasenia"]?>">
                    </div>
                </div>
            </div>
        <?php } ?>
            <div class="submit">
                <input type="submit" class="bar-boton btn-submit" value="Guardar">
            </div>
        </form>
    </div>
</body>
</html>