<?php 
session_start();
$db=new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM promociones where tipo = 'prom'");

$pizz= $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'partes/cabecera.php'?>
    <div id="conto5">
        
    <?php if (isset($_SESSION["correo"])) { ?>
        <div id="flx"> 
        <?php foreach($pizz as $p){?>
        <form action="carro.php" method="POST">
                <div id="promos">
                    <h1 id="asd2"> <i><?php echo $p["Nombre"] ?> </i></h1>
                    <img src="<?php echo $p["imag"] ?>" alt="" width="266" height="190">
                    <h3 id="asd2"><?php echo $p["Nombre"]?></h3>
                    <p id="asd2"><?php echo $p["Descrpicion"]?></p>
                    
                    <p id="asd2"> S/.<?php echo $p["precio"]?></p>
                    <input type="hidden" name="prec" value="<?php echo $p["idprom"] ?>">
                    <button type="submit" id="bt2">Ordenar</button>

                </div>
        </form  > 
        <?php }     ?>
        <?php }else {     ?>
            <h1 id="lg3">Inicie Sesion Primero</h1> 
            <?php }     ?>

        </div>
    </div>
    
</body>
</html>