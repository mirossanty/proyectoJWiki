<?php
 if(!isset($_POST['oculto'])){
    exit();
 }

 include 'conexion_be.php';
 $email=$_POST['email'];
 $usuario=$_POST['usuario'];
 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $profesion=$_POST['profesion'];
 $contrasena=$_POST['contrasena'];
 $rol=$_POST['rol'];
 $opciones=array(
   'cost'=> 10
);
 $contrasena_encriptada=password_hash($contrasena,PASSWORD_DEFAULT,$opciones);
//  echo $contrasena_encriptada;
//  exit();

 $sentencia= $bd->prepare("INSERT INTO usuario(usuario,contrasena,idrol,nombreR,apellidos,email,profesion) VALUES (?,?,?,?,?,?,?);"); 
 $resultado = $sentencia->execute([$usuario,$contrasena_encriptada,$rol,$nombre,$apellidos,$email,$profesion]);
 
 if($resultado=== TRUE){
   //  echo '
   //  <script>
   //  alert("Ingresado Exitosamente");
   //  window.location = "bienvenido.php";
   //  </script>
   //  ';
     header('Location: bienvenido.php');
 }else{
    echo '
    <script>
    alert("Ha ocurrido un error");
    window.location = "bienvenido.php";
    </script>
    ';
 }


?>