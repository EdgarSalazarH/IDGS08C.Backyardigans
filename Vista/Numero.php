<?php
include "../Modelo/Conexion.php";
$result=false;
if (!empty($_POST)){
    $Mascota=$_POST['Mascota'];
    $Tipo=$_POST['Tipo'];
    $Raza=$_POST['Raza'];
    $Numero=$_POST['Numero'];
    
    $sql="INSERT INTO numero (Mascota,Tipo,Raza,Numero) VALUES (:Mascota,:Tipo,:Raza,:Numero)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'Mascota'=>$Mascota,
        'Tipo'=>$Tipo,
        'Raza'=>$Raza,
        'Numero'=>$Numero
    ]);
    header("location:../Index.php");
}
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
    <title>Registro</title>
</head>
<body>
    <!-- Menu XD -->
    <nav class="Menu">
        <label class="Logo">Dog Leash</label>
    </nav>
    <header>
        <div class="Banner">
            <div class="Login">
                <h2>Registro de Collar</h2><br>
                <form action="Numero.php" method="post">
                    <div class="Usuario">
                        <input type="text" name="Mascota" id="Mascota" required="">
                        <label>Nombre de tu Mascota</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="Tipo" id="Tipo" required="">
                        <label>Tipo de Mascota</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="Raza" id="Raza" required="">
                        <label>Raza de Mascota</label>
                    </div>
                    <div class="Usuario">
                        <input type="tel" maxlength="10" name="Numero" id="Numero" required="">
                        <label>Numero de Serie</label>
                    </div>
                    <div class="ButtonLogin">
                        <script>
                            function Alerta(){
                                alert(" ✅ Collar Activo ✅ ");
                            }
                        </script>
                        <input  class="ButtonAlta" type="submit" value="Confirmar" onclick="Alerta()">
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html> 