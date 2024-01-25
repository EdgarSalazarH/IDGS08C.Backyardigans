<script>
    function Alerta(){
        alert(" 🛒 Compra Realiza  🛒 ");
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="Css/Estilos.css">
    <title>Tienda</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="JavaScript/funciones.js"></script>
    <link rel="icon" href="Img/Logo.png" type="image/x-icon"/>
</head>
<body>
    <!--MENU-->
    <nav class="Menu" id="nav">
        <div class="Hamburgesa" onclick="mostrar()">
            <span></span><span></span><span></span>
        </div>
        <label class="Logo">Dog Leash</label>
        <ul id="Menu-Desplegable">
            <li><span class="Cerrar" onclick="ocultar()">✖</span></li>
            <li><a href="Index.php" class="ButtonMenu">Inicio</a></li>
            <li><a href="Tienda.php" class="ButtonMenu">Tienda</a></li>
            <li><a href="Rastreo.php" class="ButtonMenu">Ubicacion</a></li>
            <li><a href="Vista/Cuenta.php" class="ButtonMenu">Mi Cuenta</a></li>
        </ul>
    </nav>
    <!--BANNER3-->
    <header>
        <div class="banner3">
            <div class="texto_banner3">
                <h1>Productos</h1>
                <p>
                    Aquí tenemos varios y distintivos tipos de nuestros productos para que encajen a la medida de tu mascota con el fin de mantener su seguridad en constante cuidado. Aportamos una variedad limitada pro el momento pero con unos estilos peludos que haran que tu mascota luzca cool
                </p>
            </div>
        </div>
    </header>
<main>
    <div class="productos"><!--serivcio-->
        
        <div class="contenido"><!--contenido-->
        <div class="imagen"><h2 class="collares">Collar simple</h2><br><br>
            <img src="Img/simple.png">
            <p>Este collar es esencial si tu mascota es de un tamaño común, ni muy chico ni muy grande</p>
            <br>
            <p1>Precio: 579$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>    
        
        <div class="imagen"><h2 class="collares">Collar grande</h2><br><br>
            <img src="Img/grande.png">
            <p>Este es para razas de gran tamaño, que necesitan un ajuste mas firme y que no sofoque a la mascota</p>
            <br>
            <p1>Precio: 650$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>
        
        <div class="imagen"><h2 class="collares">Collar ajustable</h2><br><br>
            <img src="Img/ajustable.png">
            <p>Collar capas de ajustarse a un tamaño medio mayor y medio chico, como para un perro grande y/o un loro pequeño</p>
            <br>
            <p1> Precio: 469$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>
        
        <div class="imagen"><h2 class="collares">Collar chico</h2><br><br>
            <img src="Img/chico.png">
            <p>Este es un collar mas pequeño que el resto pero igual de confiable, se puede colocar incluco como pechera</p>
            <br>
            <p1>Precio: 360$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>
        
        <div class="imagen"><h2 class="collares">Collar personalizable</h2><br><br>
            <img src="Img/personalizable.png">
            <p>Este collar es de cualquier variedad ya antes mencionada, pero con una personalización independiente por el comprador-cliente, el costo varia el según el diseño y los modelos</p>
            <br>
            <p1>OFERTA: 2x1 por solo 560$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>

        <div class="imagen"><h2 class="collares">Collar vaquero</h2><br><br>
            <img src="Img/vaquero.png">
            <p>Los collares vaquero son un estilo facherito para tu mascota, no aporta nada extra mas que el diseño del collar, vienen en paquetes pero se pueden comprar por separado</p>
            <br>
            <p1>OFERTA: 4x2 por solo 560$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>

        <div class="imagen"><h2 class="collares">Collar con picos</h2><br><br>
            <img src="Img/picudos.jpg">
            <p>Un estilo rudo para tu mascota que dará miedo aun dormido, no proporciona nada extra todo puro diseño, se pueden comprar por paquetes</p>
            <br>
            <p1>OFERTA: 4x2 por 600$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>

        <div class="imagen"><h2 class="collares">Collar minimalista</h2><br><br>
            <img src="Img/manimalista.png">
            <p>Este collar es uno con los diseños y modelos mas minimalista que tenemos con un bonito adorno de hueso, son una edición especial</p>
            <br>
            <p1>OFERTA: 6x3 por 579$</p1>
            <div class="boton3" onclick="Alerta()">Comprar</div>
        </div>
        </div>
    </div>
    </section>
    <footer class="redes">
        <h3>Siguenos en Nuestras Redes Sociales</h3>
        <div class="Linea"></div>
        <i class="bx bxl-facebook-circle bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
        <i class="bx bxl-instagram-alt bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
        <i class="bx bxl-linkedin bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
        <i class="bx bxl-youtube bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
        <i class="bx bxl-twitter bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
        <i class="bx bxl-tiktok bx-sm bx-spin-hover espacio" style="color: #ffffff" ></i>
    </footer>
</main>
</body>
</html>