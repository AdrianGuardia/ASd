<?php
$a=$_POST["nom"];
$b=$_POST["prec"];
$c=$_POST["text"];
$d=$_POST["imag"];
$e=$_POST["tipo"];


$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$db->query("INSERT INTO promociones(precio,Nombre,Descrpicion,imag,tipo) VALUES ('$b', '$a','$c','$d','$e')");

header('Location: index.php');