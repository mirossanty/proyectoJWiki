<?php
//print_r($_POST);
/*if(!isset($_POST['oculto'])){
    header('Location: bienvenido.php');
}*/

include 'conexion_be.php';

$idusuario = $_POST['idusuario'];
$email = $_POST['txtemail'];
$usuario = $_POST['txtusuario'];
$nombre = $_POST['txtnombre'];
$apellidos = $_POST['txtapellidos'];
$profesion = $_POST['txtprofesion'];
$contrasena = $_POST['txtcontrasena'];

$sentencia =  $bd->prepare("UPDATE usuario SET email = ?, usuario = ?, nombreR = ?, apellidos = ?, profesion = ?,contrasena= ? WHERE idusuario= ?;");
$resultado = $sentencia->execute([$email,$usuario,$nombre,$apellidos,$profesion,$contrasena,$idusuario]);

if ($resultado === TRUE) {
    header ('Location: bienvenido.php');
}else{
    echo "Error";
}
    

?>