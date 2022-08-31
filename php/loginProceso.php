<?php
session_start();
include_once 'conexion_be.php';
$email= $_POST['email'];
$contrasena= $_POST['contrasena'];
$opciones=array(
  'cost'=> 10
);
$contrasena_encriptada=password_hash($contrasena,PASSWORD_DEFAULT,$opciones);
// echo $contrasena_encriptada.' '.$email;
// exit();
$sentencia = $bd -> prepare('SELECT * FROM usuario WHERE email =?');
//$sentencia -> bindParam(':email',$email);
//$sentencia -> bindParam(':contrasena',$contrasena_encriptada);
$sentencia->execute([$email]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);
// print_r($datos);
// exit();
if($datos===FALSE){
    header('Location:../login.php');
}elseif($sentencia->rowCount()==1){
  $contrasena_bd = $datos->contrasena;
  // echo $contrasena_bd;
  // exit();
  if(password_verify($contrasena,$contrasena_bd)){
    $_SESSION['nombre'] = $datos->email;
    // echo 'Sesion iniciada';
    // exit();
    $rol = $datos->idrol;
    if($rol==1){
      header('Location:bienvenido.php');
    }else if($rol==2){
      header('Location:bienvenido_colaborador.php');
    }
    
  }else{
    //echo "<script>alert('Verifique sus datos');</script>";
    header('Location:../login.php');
  }
  //header ('Location: bienvenido.php');
}

//integrar roles de usuario

?>