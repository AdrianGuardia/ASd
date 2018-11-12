<?php
session_start();
$asd=$_POST["c"];
$f=$_SESSION["idus"];


$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$st2=$db->query("SELECT  precio from promociones where idprom=$asd ");


$u=$st2->fetchAll();

$_SESSION["ac"]=$u[0]["precio"];
$asd2=$_SESSION["ac"];
$stet=$db->query("UPDATE clientes SET ptos=ptos+$asd2 where idcl=$f ");


header("Location:exito.php");
?>
