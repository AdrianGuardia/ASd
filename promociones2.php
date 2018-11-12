<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM promociones where tipo = 'prom'");
$prom=$stmt->FetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Romana|Promociones</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'partes/cabecera.php' ?>
    
    
    <div id="conto2x">
    <?php echo $prom[0]["idprom"] ?>
        

    
    </div>
    



   
</body>
</html>