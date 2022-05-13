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
    ?>

    <div class="tablas">
        <h1>Pacientes</h1>
        <form method="POST" action="guardar_pacientes.php">
          
                <div class="tres-form">
                    <div>
                        <p>Código</p>
                        <input type="text" name="codigo" id="codigo">
                    </div>
                    
                    <div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div>
                        <p>Apellidos</p>
                        <input type="text" name="apellidos" id="apellidos">
                    </div>
                </div>
                
                <div class="dos-form">
                    <div>
                        <p>Telefono</p>
                        <input type="text" name="telefono" id="telefono">
                    </div>

                    <div>                        
                        <p>Direccion</p>
                        <input type="text" name="direccion" id="direccion">
                    </div>

                </div>

                <div class="dos-form">
                    <div>
                        <p>Provincia</p>
                        <input type="text" name="provincia" id="provincia">
                    </div>
                    <div>
                        <p>Poblacion</p>
                        <input type="text" name="poblacion" id="poblacion">
                    </div>
                </div>
               
                <div class="dos-form">
                    <div>
                        <p>Federacion</p>
                        <input type="text" name="federacion" id="federacion">
                    </div>

                    <div>
                        <p>Cp</p>
                        <input type="text" name="cp" id="cp">
                    </div>
                </div>
            <div class="submit">
                <input type="submit" class="bar-boton btn-submit" value="Guardar">
            </div>
        </form>
    </div>
</body>
</html>