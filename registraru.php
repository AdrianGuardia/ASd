<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Romana|Registrarse</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'partes/cabecera.php' ?>
<div id="contr">

<h2>Crea una cuenta con nosotros</h2>

<form action="procesar_usuario.php" method="post" >
    <div id="for">
        Correo: <input type="email" name="correo">
    </div>
    <div id="for">
        Contraseña: <input type="password" name="password1">
    </div>
    <div id="for">
        Nombres: <input type="text" name="nombres">
    </div>
    <div id="for">
        Apellidos: <input type="text" name="apellidos">
    </div>
    <div id="for">
        Nacimiento: <input type="date" name="fn">
    </div>
    <div id="for">
        Direccion: <input type="text" name="dir">
    </div>
    <div id="for">
        Direccion: <input type="text" name="tel">
    </div>


    <button type="submit">Crear cuenta</button>
</form>

    <h2>Con tu cuenta puedes:</h2>
    <div id="reg">
    <p>-Recibir ofertas especiales</p>
    <p>-Pedir Online</p>
    <p>-Dejarnos tu Opinion</p>
</div>
</div>
    
</body>
</html>