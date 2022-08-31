<?php
if(!isset($_GET['idusuario'])){
    exit();
 }
$codigo = $_GET['idusuario'];
include 'conexion_be.php';

$sentencia = $bd->prepare("DELETE FROM usuario WHERE idusuario = ?;");
$resultado = $sentencia->execute([$codigo]);
      
if ($resultado === TRUE) {
    header('Location: bienvenido.php');
}else{
echo "Error";
}
    

?>