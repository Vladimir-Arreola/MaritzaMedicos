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
        $query = "SELECT * FROM pacientes";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">  
        <div class="table-header">
            <h1>Pacientes</h1>
            <a href="agregar_pacientes.php" class="bar-boton btn-submit">Agregar paciente</a>
        </div>  
        <table>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Provincia</th>
                    <th>Poblacion</th>
                    <th>Fdn</th>
                    <th>Cp</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row['codigo']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['apellidos']?></td>
                    <td><?php echo $row['telefono']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['provincia']?></td>
                    <td><?php echo $row['poblacion']?></td>
                    <td><?php echo $row['fdn']?></td>
                    <td><?php echo $row['cp']?></td>
                    <td><a href="editar_pacientes.php?id=<?php echo $row['codigo']?>">Editar</a></td>
                    <td><a href="eliminar_paciente.php?codigo=<?php echo $row['codigo'] ?>" onclick="return confirm('Estás seguro?')">Borrar</a></td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>