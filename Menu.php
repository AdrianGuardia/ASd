<?php 
session_start();
$db=new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM promociones where tipo = 'pizza'");

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
        <div id="pizz">
            PIZZAS
            
                
        </div>
        <div id="flx"> 
        <?php foreach($pizz as $p){?>
        <form action="carro.php" method="POST">
                <div id="pizzdi">
                    <img src="<?php echo $p["imag"] ?>" alt="" height=200 width=200 style="float:left">
                    <h1> <i><?php echo $p["Nombre"] ?> </i></h1>
                    <p><?php echo $p["Descrpicion"] ?> <br> <?php echo $p["tam"] ?> <br> S/. <?php echo $p["precio"] ?> </p>
                    <input type="hidden" name="prec" value="<?php echo $p["idprom"] ?>">
                    <button type="submit" id="bto">Ordenar</button>

                </div>
        </form  > 
        <?php }     ?>  
        </div>
        
        <?php }else {     ?>
            <h1 id="lg3">Inicie Sesion Primero</h1> 
            <?php }     ?>
    </div>
    
</body>
</html>