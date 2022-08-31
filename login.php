<?php
/*session_start();
if(isset($_SESSION['nombre'])){
  header('location:php/bienvenido.php');
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon_Jwiki.ico" type="image/x-icon">
    <title>Acceso</title>
    <!-- Estilos CSS --> 
    <link rel="stylesheet" href="css/estilos-login.css">
        <!-- Fuentes -->
       
    <script src="https://kit.fontawesome.com/2a8c4fb58f.js" crossorigin="anonymous"></script>    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- ID Particles.js -->
    <div id="particles-js"></div>
    <header class="contenedor header">

        <div class="container">
            <form class="box-form" action="php/loginProceso.php" method="POST">
          
              <div class="box-title">
                <h2>Iniciar Sesi&oacute;n</h2>
              </div>
          
              <div class="box-inputs">
          
                <div class="inputs-email">
                  <input type="email" name="email" id="email" class="input" placeholder="Type your e-mail">
                  <label for="email" class="label-inputs">E-mail:</label>
                </div>
          
                <div class="inputs-password">
                  <input type="password" name="contrasena" id="contrasena" class="input" placeholder="Type your password">
                  <label for="password" class="label-inputs">Contraseña:</label>
                </div>
          
                <div class="inputs-remember">
                  <input type="checkbox" name="remember" id="remember" checked>
                  <label for="remember">Recuerdame</label>
                </div>
          
                <div class="box-btn-login">
                  <button class="btn-login" type="submit" value="enter">Entrar</button>
                </div>
              </div>
          
              <div class="box-register">
                <p>¿Olvidaste tu contraseña? <a href="#">Da click aqui</a></p>
                <p>¿Aun no tienes una cuenta? <a href="register.php">Crea una</a></p>
                <center><p><a href="index.php">Regresar al Inicio</a></p></center>
              </div>
          
              <div class="break-line">
                <p>O</p>
              </div>
          
              <div class="box-midias">
                <div class="midia">
                  <a href="#" class="link-midias">
                    <i class="fa fa-facebook"></i>
                  </a>
                </div>
          
                <div class="midia">
                  <a href="#" class="link-midias">
                    <i class="fa fa-google"></i>
                  </a>
                </div>
          
                <div class="midia">
                  <a href="#" class="link-midias">
                    <i class="fa fa-twitter-square"></i>
                  </a>
                </div>         
              </div>
          
            </form>
            <div class="hero">
              <p>Bienvenido a</p>
              <h1>Jwiki<h1>
            </div>
          </div>

    <!-- JS Particles.js -->
    <script src="js/particles.min.js"></script>
    <script src="js/particlesjs-config.json"></script>
    
    <!-- JS FontAwesome -->
</body>
</html>