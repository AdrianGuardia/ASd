<?php 
session_start();

$db=new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM opiniones INNER JOIN clientes ON clientes.idcl = opiniones.cliente ORDER BY idOp DESC");

$opiniones= $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Romana|Opiniones</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include("partes/cabecera.php")?>
    <div id="conto">
        <h1 id="lg3">Opiniones de nuestros Usuarios</h1>
        <?php if (isset($_SESSION["correo"])) { ?>
        <form action="procesarop.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_SESSION["idus"] ?>">
                    <button type="submit" id="bt">Da tu Opinion</button>
        <?php } ?>

        <?php foreach($opiniones as $p){?>
            <div id="promo">
            <h3><?php echo $p["Nombre"]?> <?php echo $p["Apellido"]?></h3>
            <p><?php echo $p["Cont"]?></p>
            </div>

        <?php } ?>
    </div>
</body>
</html>