<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Session</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'partes/cabecera.php'?>
    <h2>Iniciar Sesion</h2>
    
    <div id="contr">
    <?php if (isset($_GET["error"])) { ?>
    <p style="color: red">Datos inválidos</p>
    <?php } ?>
    
    <form action="iniciar_procesar.php" method="post">
        <div>
            Correo: <input type="email" name="correo">
        </div>
        <div>
            Contraseña: <input type="password" name="password">
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
    </div>

    
    
    
    
    
    </form>
    
</body>
</html>