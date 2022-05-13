<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Médicos</title>
</head>
<body>

    <?php
        include "bar.php";
        require "conn.php";

        $codigo = $_GET["id"];

        $query = "SELECT * FROM medico WHERE codigo = '$codigo'";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">
        <h1>Médicos</h1>
        <form method="POST" action="actualizar_medico.php">
            <?php foreach($rows as $row){?>
                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $row["codigo"]?>">
                    </div>
                    
                    <div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $row["nombre"]?>">
                    </div>
                    <div>
                        <p>Apellidos</p>
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $row["apellidos"]?>">
                    </div>
                </div>
                
                <div class="dos-form">
                    <div>
                        <p>Telefono</p>
                        <input type="text" name="telefono" id="telefono" value="<?php echo $row["telefono"]?>">
                    </div>

                    <div>                        
                        <p>Especialidad</p>
                        <input type="text" name="especialidad" id="especialidad" value="<?php echo $row["especialidades"]?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="submit">
                <input type="submit" class="bar-boton btn-submit" value="Guardar">
            </div>
        </form>
    </div>
</body>
</html>