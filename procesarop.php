<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opiniones</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include("partes/cabecera.php") ?>
    
    <div id="contr">
    <h1 id="lg3">Agregar Opinion</h1>
    <form action="procproc.php" method="post">
        <div>Ingresa aqui tu opinion</div>
        <textarea name="texto" id="" cols="30" rows="10"></textarea>
        
        <button type="submit">Enviar</button>
        
    
    </form>


    </div>
    
</body>
</html>