<!-- <?php
// session_start();
// if(isset($_SESSION['usuario'])){
// header("location: php/bienvenido.php");
// }   /*al iniciar sesion desde login manda a esa direccion "bienvenido.php"*/
?> -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <!-- Estilos CSS --> 
    <link rel="stylesheet" href="./css/estilos_register.css">
        <!-- Fuentes -->
       
    <script src="https://kit.fontawesome.com/2a8c4fb58f.js" crossorigin="anonymous"></script>    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- ID Particles.js -->
    <div id="particles-js"></div>
    <header class="contenedor header">

        <div class="container">
            <form class="box-form" action="php/registrousuario.php" method="POST">
          
              <div class="box-title">
                <h2>Registrarse</h2>
              </div>
          
              <div class="box-inputs">
          
                <div class="inputs-email">
                  <input type="email" name="email" id="email" class="input" placeholder="Type your e-mail">
                  <label for="email" class="label-inputs">E-mail:</label>
                </div>

                <div class="inputs-usuario">
                  <input type="usuario" name="usuario" id="usuario" class="input" placeholder="Type your usuario">
                  <label for="usuario" class="label-inputs">Usuario:</label>
                </div>

                <div class="inputs-nombre">
                    <input type="nombre" name="nombre" id="nombre" class="input" placeholder="Type your nombre">
                    <label for="nombre" class="label-inputs">Nombre:</label>
                  </div>
                 
                  <div class="inputs-apellidos">
                    <input type="apellidos" name="apellidos" id="apellidos" class="input" placeholder="Type your apellidos">
                    <label for="apellidos" class="label-inputs">Apellidos:</label>
                  </div>
                  
                  <div class="inputs-profesion">
                    <input type="profesion" name="profesion" id="profesion" class="input" placeholder="Type your profesion">
                    <label for="profesion" class="label-inputs">Profesion:</label>
                  </div>
          
                <div class="inputs-password">
                  <input type="password" name="contrasena" id="contrasena" class="input" placeholder="Type your password">
                  <label for="password" class="label-inputs">Password:</label>
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
                <p>¿Ya tienes una cuenta? <a href="./login.php">Ingresa</a></p>
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
          </div>

    <!-- JS Particles.js -->
    <script src="js/particles.min.js"></script>
    <script src="js/particlesjs-config.json"></script>
    
    <!-- JS FontAwesome -->
</body>
</html>