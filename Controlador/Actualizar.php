<?php
include "../Modelo/Conexion.php";
$result=false;
if(!empty($_POST)){
    $id=$_POST['id'];
    $newName=$_POST['name'];
    $newApellidos=$_POST['apellidos'];
    $newEmail=$_POST['email'];
    $newPassword=$_POST['password'];
    /* Actualizar Datos */
    $sql="UPDATE cliente SET name=:name, apellidos=:apellidos, email=:email, password=:password  WHERE id=:id";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'id'=>$id,
        'name'=>$newName,
        'apellidos'=>$newApellidos,
        'email'=>$newEmail,
        'password'=>$newPassword
    ]);
    $nameValue=$newName;
    $apellidosValue=$newApellidos;
    $emailValue=$newEmail;
    $passwordValue=$newPassword;
}else{
    $id=$_GET['id'];
    $sql="SELECT * FROM cliente WHERE id=:id";
    $query=$pdo->prepare($sql);
    $query->execute([
    'id'=>$id
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $nameValue=$row['name'];
    $apellidosValue=$row['apellidos'];
    $emailValue=$row['email'];
    $passwordValue=$row['password'];
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
                <form action="Actualizar.php" method="post">
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