<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agendar cita</title>
</head>

<body>

    <?php
        include "bar.php";
        require "conn.php";
    ?>

    <div class="tablas">
        <h1>Cita</h1>
        <form method="POST" action="guardar_admin.php">

            <div class="dos-form">
                <div>
                    <p>Código</p>
                    <input type="text" name="codigo" id="codigo">
                </div>

                <div>
                    <p>Fecha</p>
                    <input type="date" name="nombre" id="nombre">
                </div>
            </div>
            <div class="dos-form">
                <div>
                    <p>Hora</p>
                    <input type="time" name="pass" id="pass">
                </div>
                <div>
                    <p>Doctor</p>
                    <select name="doctor" id="doctor">
                        <option value="0">Selecciona un doctor...</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="submit">
        <input type="submit" class="bar-boton btn-submit" value="Guardar">
    </div>
    </form>
    </div>
</body>

</html>