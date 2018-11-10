<?php
session_start()
?>  
<?php
$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stet=$db->query("SELECT * from promociones");
$prom=$stet->FetchAll();
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
    
    
    <div id="conto">
    <?php if (isset($_SESSION["correo"])) { ?>
        
    <?php foreach($prom as $p){?>
            <div id="promos">
                <h1 id="asd2">Promocion <?php echo $p["idprom"] ?></h1>
                <img src="<?php echo $p["imag"]?>" width="266" height="190">
                <h3 id="asd2"><?php echo $p["Nombre"]?></h3>
                <p id="asd2"><?php echo $p["Descrpicion"]?></p>
                <p id="asd2"> S/.<?php echo $p["precio"]?></p>
                <form action="carro.php" method="post">
                <input type="hidden" name="prec" value="<?php echo $p["idprom"]?>">
                <button type="submit" id="bt2">Añadir</button>
                </form>

            </div>

        <?php } ?>
    <?php } else {?>
        <h1 id="lg3">Inicie Sesion para ver las Promociones</h1>
    <?php } ?>
    </div>
    



   
</body>
</html>