<?php

    session_start();

    $usuario = trim($_POST['usuario']);
    $contrasenia = trim($_POST['contrasenia']);

    require "conn.php";

    $query = "SELECT * FROM administrador WHERE user='$usuario' AND contrasenia= '$contrasenia'";

    $result = $conn->query($query);
    $rows = $result->fetchAll();

    $resultados = (int)$rows;

    if($resultados>0){
        $_SESSION['yes'] = 'true';
        $conn = null;
        header("Location:menu.php");
    }else{
        $conn = null;
        header("Location:../index.php");
        exit;
    }

?>