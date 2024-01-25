<?php
$administrador=$_POST['administrador'];
$password=$_POST['password'];
session_start();
$_SESSION['administrador']=$administrador;

$conexion=mysqli_connect('localhost','root','','integradora');

$consulta="SELECT * FROM admin where administrador='$administrador' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../Vista/Lista.php");
}else{
    ?>
    <?php
    include("../Vista/InicioAdmin.php");
    ?>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);