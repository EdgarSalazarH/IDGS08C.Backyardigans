<?php
include "../Modelo/Conexion.php";
$result=false;
if (!empty($_POST)){
    $name=$_POST['name'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO cliente(name,apellidos,email,password) VALUES (:name,:apellidos,:email,:password)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'name'=>$name,
        'apellidos'=>$apellidos,
        'email'=>$email,
        'password'=>$password
    ]);
    header("location:../Vista/InicioSesion.php");
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
                <h2>Registro</h2><br>
                <form action="Registro.php" method="post">
                    <div class="Usuario">
                        <input type="text" name="name" id="name" required="">
                        <label>Nombre</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="apellidos" id="apellidos" required="">
                        <label>Apellido</label>
                    </div>
                    <div class="Usuario">
                        <input type="text" name="email" id="email" required="">
                        <label>Email</label>
                    </div>
                    <div class="Usuario">
                        <input type="password" name="password" id="password" required="">
                        <label>Contraseña</label>
                    </div>
                    <div class="ButtonLogin">
                        <script>
                            function Alerta(){
                                alert(" ✅ Registro Exitoso ✅ ");
                            }
                        </script>
                        <input  class="ButtonAlta" type="submit" value="Registrarse" onclick="Alerta()">
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html> 