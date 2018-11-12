<?php
session_start();
$_SESSION["prod"]=$_POST["prec"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    
    <div id="conto2">
        
    <h1 id="lg3">Confirme Sus Datos</h1>
    <div id="carros"> 
    <h2 id="f2">Direccion</h2>
    <h3 id="f1"> <?php echo($_SESSION["dir"]) ?> </h3>
    <h2 id="f2">Telefono:</h2>
    <h3 id="f1"> <?php echo($_SESSION["tel"]) ?> </h3>
    <form action="cambiardat.php" method="POST">
        <input type="hidden" name="id" value=" <?php echo($_SESSION["idus"]) ?> ">
        <button type="submit" id="bt2x" style="float:left;">Cambiar Datos</button>
        </form>
        
    <form action="procesarpedido.php" method="POST">
            <input type="hidden" name="c" value="<?php echo($_SESSION["prod"]) ?>">
            <button type="submit" id="bt2x">Confirmar</button>
        </form>
    </div>
    </div>

    
</body>
</html>