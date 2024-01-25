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
    <script type="text/javascript" src="../JavaScript/Map.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />
    <title>Rastreo</title>
</head>
<body>
    <!-- Menu XD -->
    <nav class="Menu">
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
    <header><br>
        <div class="Banner">
                <div id="myMap" style="height: 100%" style="width: 80%"></div>
                <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
                integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
                crossorigin=""></script>
                <script src="JavaScript/map.js"></script>
        </div>
    </header>
    <section class="Nosotros">
            <h1 class="Titulo">¿Necesitas Ayuda?</h1>
            <h1 class="Linea"></h1>
            <p class="Contenido">
                No encuentras a tu mascota, tienes problemas para que te mandemos la informacion de la ubicacion de tu mascota o tienes otro problema en el que podemos ayudar, contacta a soporte.
            </p>
    </section>
    <footer class="Redes">
            <h3>Siguenos en Nuestras Redes Sociales</h3><br>
            <div class="Linea"></div>
            <i class='bx bxl-facebook-circle bx-sm bx-flashing-hover Espacio'  style='color:#ffffff'></i>
            <i class='bx bxl-instagram bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-linkedin bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-youtube bx-sm bx-flashing-hover Espacio'  style='color:#ffffff'></i>
            <i class='bx bxl-twitter bx-sm bx-flashing-hover Espacio' style='color:#ffffff'></i>
            <i class='bx bxl-tiktok bx-sm bx-flashing-hover Espacio'  style='color:#ffffff'></i>
        </footer>
</body>
</html> 