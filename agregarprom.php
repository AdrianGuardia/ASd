<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'partes/cabecera.php' ?>
    <div id="conto">
        <form action="prom_pro.php" method="post">
        <div id="asd2">
            Nombre de la Promocion: <input type="text" name="nom">
        </div>
        <div id="asd2">
            Precio de la Promocion: <input type="text" name="prec">
        </div>
        <div id="asd2">
            Imagen de la Promocion: <input type="text" name="imag">
        </div>
        <div id="asd2">
            Tipo de la Promocion: <input type="text" name="tipo">
        </div>
        <div id="asd2">
            Descripcion de la Promocion:
            <textarea name="text" id="" cols="30" rows="10"></textarea>
        </div>
            <button type="submit" id="bt">Agregar</button>
        </form>

    
    
    </div>
    
</body>
</html>