<div id="lg">
    <ul>

       <a href="contacto.php" id="lg2">Contacto</a>
       <?php if (isset($_SESSION["correo"])){ ?>
       <a href="exit.php">Cerrar Session</a>

       <?php }else{ ?>
       <a href="iniciar.php" id="lg2">Iniciar Sesion</a>
       <a href="registraru.php" id="lg2">Registrarse</a>
        <?php }?>
    </ul>

</div>s

<div id="cont2">
    <img id="img" src="https://3.bp.blogspot.com/-rAxbci6-cM4/WE7ZppGVe4I/AAAAAAAA3fY/TkiySUlQJTgR7xkOXViJ1IjFRjOulFWnwCLcB/s1600/pizzeria-la-romana2.jpg" alt="" height=200 width=400>
    <h1 id="ha1">Prueba Nuestros productos de Alta Calidad</h1>
</div>    
<div id="clear"></div>
<div id="bg" class="asd">
        <div id="cont">
            <ul >
               
                <a href="index.php" id="asd2">Nosotros</a>
            

                <a href="promociones.php" id="asd2">Promociones</a>
            
                <a href="" id="asd2">Carta</a>
            
                <a href="" id="asd2">Delivery</a>
                
                <a href="" id="asd2">Menu</a>
                <?php if (isset($_SESSION["correo"])) { ?>
                <a href="carro.php" id="asd2"></a>
                <?php } ?>

                <a href="opiniones.php" id="asd2">Opiniones</a>
                
                <?php if ($_SESSION["correo"]="administrador@romana"){ ?>
                    <a href="agregarprom.php" id="asd2">Agregar Promociones</a>
                <?php }?>
            
            </ul>
</div> 
</div> 