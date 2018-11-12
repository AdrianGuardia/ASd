<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProcesoExitoso</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php   include("partes/cabecera.php")  ?>
<div id="conto2">
    <h2 id="lg3">Proceso Exitoso <br> Usted ha acumulado  <?php echo($_SESSION["ac"])?> puntos</h1>
    
</body>
</html>