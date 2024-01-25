<script>
    function Alerta(){
        alert(" ⛔ Ha Eliminado su Cuenta ⛔ ");
    }
</script>
<script>
    function Alerta1(){
        alert(" ✅ Cerrando Sesion Correctamente ✅ ");
    }
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="../Css/Styles.css">
    <script type="text/javascript" src="../JavaScript/Functions.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="Img/Logo.png" type="image/x-icon"/>
    <title>Cuenta</title>
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
            <li><a href="../Index.php" class="ButtonMenu">Inicio</a></li>
            <li><a href="../Tienda.php" class="ButtonMenu">Tienda</a></li>
            <li><a href="../Rastreo.php" class="ButtonMenu">Ubicacion</a></li>
            <li><a href="Cuenta.php" class="ButtonMenu">Mi Cuenta</a></li>
        </ul>
    </nav>
    <header>
        <div class="Banner">
            <div class="Logins">
                <h2>Mi Cuenta</h2>
                <form>
                    <div class="ButtonModo">
                        <a id="Enviar" href="../Controlador/Cambio.php">Actualizar Cuenta</a>
                    </div>
                    <div class="ButtonModo">
                        <a id="Enviar" onclick="Alerta()" href="../Controlador/Eliminar.php">Eliminar Cuenta</a>
                    </div>
                    <div class="ButtonModo">
                        <a id="Enviar" onclick="Alerta1()" href="../Controlador/Salir.php">Cerrar Sesion</a>
                    </div>
                    <div class="ButtonModo">
                        <a id="Enviar" href="../Index.php">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html> 