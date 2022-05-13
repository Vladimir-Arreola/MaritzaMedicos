<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Medicos</title>
</head>
<body>

    <?php
        include "bar.php";
        require "conn.php";
        $query = "SELECT * FROM medico";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">  
        <div class="table-header">
            <h1>Medicos</h1>
            <a href="agregar_medico.php" class="bar-boton btn-submit">Agregar medico</a>
        </div>  
        <table>
                <tr>
                    <th>Código</th>
                    <th>Telefono</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Especialidad</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row['codigo']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['apellidos']?></td>
                    <td><?php echo $row['telefono']?></td>
                    <td><?php echo $row['especialidades']?></td>
                    <td><a href="editar_medico.php?id=<?php echo $row['codigo']?>">Editar</a></td>
                    <td><a href="eliminar_medico.php?codigo=<?php echo $row['codigo'] ?>" onclick="return confirm('Estás seguro?')">Borrar</a></td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>