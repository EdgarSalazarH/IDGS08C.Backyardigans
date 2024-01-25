<?php
include "../Modelo/Conexion.php";
$id=$_GET['id'];

$sql="DELETE FROM cliente WHERE id=:id";
$query=$pdo->prepare($sql);
$query->execute([
    'id'=>$id
]);

header("location:../Vista/Lista.php");
?>