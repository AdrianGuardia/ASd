<?php
$correo =$_POST["correo"];
$password=$_POST["password"];

$a=sha1($password);

$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM clientes WHERE Correo = '$correo' AND password = '$a'");
$usuarios = $stmt->fetchAll();


$validacion= false;
if (count($usuarios)==1){
    $validacion=true;
    session_start();
    $_SESSION["idus"]=$usuarios[0]["idcl"];
    $_SESSION["correo"]=$correo;
    if ($correo=="administrador@romana") {
        $_SESSION["tipo"]=1;
    }
    else{
        $_SESSION["tipo"]=2;
    } 


}
if ($validacion) {
    header('Location: index.php');

} 
else{
    header('Location: iniciar.php?error=1');
}


