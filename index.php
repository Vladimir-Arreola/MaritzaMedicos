<?php require "pages/conn.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Clinica</title>
</head>
<body>
    <div class="login-bg">

    <?php  
    session_start();
    
    $_SESSION['yes'] = '';
    session_unset();

    session_destroy();
   ?>
        <div class="contenedor-login">
            <h2>Inicio de Sesión</h2>
            <div class="campos-login">
                <div class="inputs-login">
                    <form action="pages/valid_login.php" method="post">
                        <input type="text" name="usuario" id="user" placeholder="usuario" class="input-login">
                        <input type="password" name="contrasenia" id="password" placeholder="contrasenia" class="input-login">
                </div> 
                        <input type="submit" value="Ingresar" class="boton-login" onclick="return validarLogin()">
                    </form>
            </div>
        </div>
    </div>
    <script src="js/validar_login.js"></script>
</body>
</html>