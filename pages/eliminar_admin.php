<?php
    require "conn.php";
    $codigo = $_GET["codigo"];
    $sql_delete = "DELETE FROM administrador WHERE codigo= '$codigo'";
    $conn->query($sql_delete);
    header("Location:listado_admin.php");
?>