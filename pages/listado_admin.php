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
        $query = "SELECT * FROM administrador";
        $result = $conn->query($query);
        $rows = $result->fetchAll();
    ?>

    <div class="tablas">  
        <div class="table-header">
            <h1>Administradores</h1>
            <a href="agregar_admin.php" class="bar-boton btn-submit">Agregar administrador</a>
        </div>  
        <table>
                <tr>
                    <th>Código</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row['codigo']?></td>
                    <td><?php echo $row['user']?></td>
                    <td><?php echo $row['contrasenia']?></td>
                    <td><a href="editar_admin.php?id=<?php echo $row['codigo']?>">Editar</a></td>
                    <td><a href="eliminar_admin.php?codigo=<?php echo $row['codigo'] ?>" onclick="return confirm('Estás seguro?')">Borrar</a></td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>