<?php
$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');

if (isset($_SESSION["correo"])) {
    $asd=$_SESSION["idus"];
    $stet=$db->query("SELECT ptos from clientes where idcl=$asd");
    $prom=$stet->FetchAll();
}

?>
<div id="lg">
    <ul>
       <img src="https://image.flaticon.com/icons/png/512/9/9243.png" height=20 width=20> 
       <a href="contacto.php" id="lg2" style="text-decoration: none">442-4072</a>
       <?php if (isset($_SESSION["correo"])){ ?>
       <img src="https://static.thenounproject.com/png/6448-200.png" alt="" height=20 width=20>
       <a href="exit.php" id="lg2" style="text-decoration: none">Cerrar Session</a>
       <a href="promociones.php" id="lg2" style="text-decoration: none">Tienes <?php echo($prom[0]["ptos"])?> ptos</a>

       <?php }else{ ?>
       <img src="http://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png" height=20 widht=20>
       <a href="iniciar.php" id="lg2" style="text-decoration: none">Iniciar Sesion</a>
        <img src="https://cdn0.iconfinder.com/data/icons/cosmetic-store/25/Register-512.png" width=20 heigth=20>
       <a href="registraru.php" id="lg2" style="text-decoration: none">Registrarse</a>
        <?php }?>
    </ul>

</div>s

<div id="cont2">
    <img id="img" src="https://3.bp.blogspot.com/-rAxbci6-cM4/WE7ZppGVe4I/AAAAAAAA3fY/TkiySUlQJTgR7xkOXViJ1IjFRjOulFWnwCLcB/s1600/pizzeria-la-romana2.jpg" alt="" height=200 width=400>
    <h1 id="ha1">Prueba Nuestros productos de Alta Calidad</h1>
</div>    
<div id="clear"></div>
<div id="bg" >
        <div id="cont">
            <ul >
               
                <a href="index.php" id="asd2">Nosotros</a>
                <a href="contacto.php" id="asd2">Restaurantes</a>
            

                
            
                
                
                <a href="Menu.php" id="asd2">Pizzas</a>
                <a href="Pastas.php" id="asd2">Pastas</a>
                <a href="promociones.php" id="asd2">Promociones Online</a>
                

                <a href="opiniones.php" id="asd2">Opiniones</a>
                
                <?php if ( isset($_SESSION["correo"]) && $_SESSION["correo"]=="administrador@romana") { ?>
                    <a href="agregarprom.php" id="asd2">Agregar Promociones</a>
                <?php } ?>
            
            </ul>
</div> 
</div> 