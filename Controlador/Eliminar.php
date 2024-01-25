<?php
include "../Modelo/Conexion.php";
session_start();
$_SESSION['email']=$email;
$email=$_GET['email'];

$sql="DELETE FROM cliente WHERE email=:email";
$query=$pdo->prepare($sql);
$query->execute([
    'email'=>$email
]);

header("location:../Vista/InicioSesion.php");
?>