<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Pacientes</title>
</head>
<body>

    <?php
        include "bar.php";
        require "conn.php";
        $code = $_GET["id"];
        $query = "SELECT * FROM pacientes WHERE codigo = '$code' ";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">    
        <h1>Pacientes</h1>
        <form method="POST" action="actualizar_pacientes.php">
            <?php foreach($rows as $row){?>

                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']?>">
                    </div>
                    
                    <div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']?>">
                    </div>
                    <div>
                        <p>Apellidos</p>
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $row['apellidos']?>">
                    </div>
                </div>
                
                <div class="dos-form">
                    <div>
                        <p>Telefono</p>
                        <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']?>">
                    </div>

                    <div>                        
                        <p>Direccion</p>
                        <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']?>">
                    </div>

                </div>

                <div class="dos-form">
                    <div>
                        <p>Provincia</p>
                        <input type="text" name="provincia" id="provincia" value="<?php echo $row['provincia']?>">
                    </div>
                    <div>
                        <p>Poblacion</p>
                        <input type="text" name="poblacion" id="poblacion" value="<?php echo $row['poblacion']?>">
                    </div>
                </div>
               
                <div class="dos-form">
                    <div>
                        <p>Federacion</p>
                        <input type="text" name="federacion" id="federacion" value="<?php echo $row['fdn']?>">
                    </div>

                    <div>
                        <p>Cp</p>
                        <input type="text" name="cp" id="cp" value="<?php echo $row['cp']?>">
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