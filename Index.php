<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="Css/Styles.css">
    <script type="text/javascript" src="JavaScript/Functions.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="Img/Logo.png" type="image/x-icon"/>
    <title>Index</title>
</head>
<body>
    <!-- Menu XD -->
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
    <section class="Banners">
        <div>
            <h2>Dog Leash</h2>
            <h3>Bienvenido a Dog Leash, donde tu como nostros queremos a nuestras mascotas y nos preocupamos por su bienestar y cuidado.</h3>
        </div>
        <img src="Img/Logito.jpg"/>
    </section><br>
    <section>
        <h2 class="Titulo">¿Que ofrecemos?</h2>
        <h1 class="Linea"></h1>
        <p class="Contenido">Le ofrecemos un collar para mascotas que no solo busca ser bonito economico y egornomico para tu mascota, si no que tambien 
            cuenta con un sistema de posicionamiento en tiempo real de donde este ubicado su mascota respectivamente
            todo esto desde la comodidad de nuestra aplicacio o de nuestra pagina web.</p>
    </section>
    <section>
        <h2 class="Titulo">¿Que nos hace diferentes?</h2>
        <h1 class="Linea"></h1>
        <p class="Contenido">Somos una empresa que busca llegar a entrar al mercado nacional y a su vez en el mercado 
            internacional, ademas buscamos tener una buena conexion con nuestros clientes ya que nuestro producto 
            es facil y practica de usar.</p>
    </section><br>
    <header>
        <div class="Banner">
            <div class="Texto_Banner">
                <h1>Equipo de Desarrollo</h1><br>
                <P>
                    Somos un pequeño equipo de desarrolladores que busca desarrollar un producto, con su respectiva pagina web
                    y aplicacion movil, ademas de ser un trabajo para integradora, con el que buscamos demostrar lo 
                    que hemos aprendido a lo largo de toda la carrera.
                </P><br>
            </div>
        </div>
    </header>
    <main>
        <section class="Nosotros">
            <h1 class="Titulo">¿Quienes Somos?</h1>
            <h1 class="Linea"></h1>
            <p class="Contenido">
                Somos una pequeña empresa que busca sobre salir y para asi ganar mas estatus dentro del mercado
                nacional e internacional, ofreciendo productos de buena calidad y a un precio accesible para todo 
                el publico.
            </p>
        </section>
        <section class="Nosotros">
            <h1 class="Titulo">¿Que Buscamos?</h1>
            <h1 class="Linea"></h1>
            <p class="Contenido">
                Ser una empresa competente con buenas decisiones para el crecimiento de la misma de tal forma que nos
                ganemos la confianza de nuestros clientes y asi tambien ofrecer un buen producto con un buen soporte
                para el usuario que este disfrutando de nuestro producto tenga una buena impresion de la empresa.
            </p>
        </section>
        <footer class="Redes">
            <h3>Siguenos en Nuestras Redes Sociales</h3><br>
            <div class="Linea"></div>
            <i class='bx bxl-facebook-circle bx-sm bx-flashing-hover Espacio' onclick="window.location.href='https://youtu.be/Qpk4bJOls0g'" style='color:#ffffff'></i>
            <i class='bx bxl-instagram bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-linkedin bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-youtube bx-sm bx-flashing-hover Espacio'  style='color:#ffffff'></i>
            <i class='bx bxl-twitter bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-tiktok bx-sm bx-flashing-hover Espacio'  style='color:#ffffff'></i>
        </footer>
    </main>
</body>
</html> 