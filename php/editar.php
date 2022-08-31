<?php
session_start();
if(!isset($_GET['idusuario'])){
    exit();
    header('Location: bienvenido.php');
}


if(!isset($_SESSION['nombre'])){
    header('Location: ../login.php');
}elseif(isset($_SESSION['nombre'])){
    include 'conexion_be.php';

    $idusuario= $_GET['idusuario'];
    $sentencia = $bd->prepare("SELECT * FROM usuario WHERE idusuario = ?;");
    $sentencia->execute([$idusuario]);
    $persona= $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
}else{
    echo "Error en el sistema";
}        
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
<center>
    <h3>Editar alumno:</h3>
    <form method="POST" action="editarProceso.php">
        <table>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="txtemail" value="<?php echo $persona->email; ?>"></td>
            </tr>
            <tr>
                <td>Usuario: </td>
                <td><input type="text" name="txtusuario" value="<?php echo $persona->usuario; ?>"></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="txtnombre" value="<?php echo $persona->nombreR; ?>"></td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td><input type="text" name="txtapellidos" value="<?php echo $persona->apellidos; ?>"></td>
            </tr>
            <tr>
                <td>Profesion: </td>
                <td><input type="text" name="txtprofesion" value="<?php echo $persona->profesion; ?>"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="text" name="txtcontrasena" value="<?php echo $persona->contrasena; ?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="oculto">
                <input type="hidden" name="idusuario" value="<?php echo $persona->idusuario; ?>"> 
                <td colspan="2"><input type="submit" value="EDITAR"></td>
            </tr>



        </table>
    </form>
</center> 
</body>
</html>