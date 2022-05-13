<?php

require_once "conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Menu de administrador</title>
</head>
<body>
    <nav class="bar">
        <a href="listado_pacientes.php" class="bar-boton boton-normal">Pacientes</a>
        <a href="listado_medicos.php" class="bar-boton boton-normal">Medicos</a>
        <a href="" class="bar-boton boton-normal">Citas</a>
        <a href="listado_admin.php" class="bar-boton boton-normal">Administradores</a>
        <a href="../index.php" class="bar-boton boton-salir">Salir</a>
    </nav>
</body>
</html>