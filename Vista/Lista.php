<?php
include "../Modelo/Conexion.php";
$queryResult=$pdo->query("SELECT * FROM cliente");
?>

<script>
    function Alerta(){
        alert(" ✅ Cuenta Eliminada Correctamente ✅ ");
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
    <link rel="icon" href="../Img/Logo.png" type="image/x-icon"/>
    <title>Clientes</title>
</head>
<body>
    <!-- Menu XD -->
    <nav class="Menu">
        <label class="Logo">Dog Leash</label>
    </nav>
    <header>
        <div class="Banner"><br>
            <table class="table" border="1">
		<thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellidos</th>
            <th class="text-center">Email</th>
            <th class="text-center">Contraseña</th>
            <th class="text-center">Editar</th>
            <th class="text-center">Borrar</th>
            </tr>
			</thead>
            <tbody>
			<tr>
                
            <?php
                while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['apellidos'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td><a href="../Controlador/Actualizar.php?id='.$row['id'].'">Editar</a> </td>';
                    echo '<td><a onclick="Alerta()" href="../Controlador/Borrar.php?id='.$row['id'].'">Borrar</a> </td>';
                    echo '</tr>';
                }
                ?>
            </tr>
			</tbody>
        </table>
            </div>
    </header>
</body>
</html> 