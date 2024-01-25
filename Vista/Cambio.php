<?php
include "../Modelo/Conexion.php";
$queryResult=$pdo->query("SELECT * FROM cliente");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="../Css/Styles.css">
    <script type="text/javascript" src="../JavaScript/Functions.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../Img/Logo.png" type="image/x-icon"/>
    <title>Actualizar</title>
</head>
<body>
    <!-- Menu XD -->
    <nav class="Menu">
        <label class="Logo">Dog Leash</label>
    </nav>
    <header>
        <div class="Banner">
            <div class="Login">
                <h2>Actualizar</h2><br>
                <form action="../Controlador/Actualizar.php" method="post">
                    <div class="Usuario">
                        <input type="text" name="name" id="name" value="<?php echo $nameValue; ?>" required="">
                        <label>Nombre</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $apellidosValue; ?>" required="">
                        <label>Apellido</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="email" id="email" value="<?php echo $emailValue; ?>" required="">
                        <label>Email</label>
                    </div>
                    <div class="Usuario">
                        <input type="password" name="password" id="password" value="<?php echo $passwordValue; ?>" required="">
                        <label>Contraseña</label>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="ButtonLogin">
                    <script>
                        function Alerta(){
                            alert(" ✅ Actualizado Correctamente ✅ ");
                        }
                    </script>
                        <input  class="ButtonAlta" type="submit" value="Actualizar" onclick="Alerta()">
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html> 