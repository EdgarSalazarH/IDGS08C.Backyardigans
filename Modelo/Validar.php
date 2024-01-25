<?php
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;

$conexion=mysqli_connect('localhost','root','','integradora');

$consulta="SELECT * FROM cliente where email='$email' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['email'] = $email;
    header("location:../Vista/Numero.php");
}else{
    ?>
    <?php
    include("../Vista/InicioSesion.php");
    ?>
    <h1>Error de Inicio de Sesion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);