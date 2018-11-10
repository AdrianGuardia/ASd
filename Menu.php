<?php 
session_start();

$db=new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM pizzas");

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
        
        <div id="pizz">
            PIZZAS
            
                
        </div>
        <?php foreach($pizz as $p){?>
        <form action="POST">
                <div id="pizzdi">
                    <img src="<?php echo $p["img"] ?>" alt="" height=200 width=200 style="float:left">
                    <h1> <i><?php echo $p["nom"] ?> </i></h1>
                    <p><?php echo $p["des"] ?> <br> <?php echo $p["tam"] ?> <br> S/. <?php echo $p["precio"] ?> </p>
                    <input type="hidden" value="<?php echo $p["precio"] ?>">
                    <button type="submit" id="bto">Ordenar</button>

                </div>
        </form  > 
        <?php }     ?>  

    </div>
    
</body>
</html>