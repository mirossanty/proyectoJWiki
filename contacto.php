<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/favicon_Jwiki.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>JWiki | Contacto</title>
    <style>
        .bg-jwiki{
            background-color: var(--color-primary);
        }
        .divisor{
            background-color: #764ba3;
        }
        .bg-span{
            background-color: #6981ec;
        }
        .btn-enviar{
            background-color: #764ba3;
            width: 70%;
            height: 45px;
            justify-content: center;
            margin-left: 15%;
            border-radius: 25px;
        }
        #contacto{
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-jwiki">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <b>Contacto</b>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.php">
                <img src="img/jwiki.png" alt="" width="100" height="50" class="d-inline-block align-text-top">
            </a>
        </li>
    </ul>
  </div>
</nav>
    <div class="container-fluid">
        <center>
            <img src="img/jwiki.png" alt="" width="200" height="100" class="d-inline-block align-text-top">
            <br>
            <h2>¡Gracias por visitar JWiki!</h2>
            <p>
            Agradecemos que quiera ponerse en contacto con nosotros, si tiene alguna duda acerca de las colaboraciones o not&oacute; algo que debe cambiarse, por favor utilice el siguiente formulario para enviar un mensaje
            </p>
            <hr class="divisor">
        </center>
        <div class="row m-0 justify-content-center">
        <div class="col-6">
                <h4><center>Env&iacute;a un mensaje</center></h4>
                <br>
                <form action="" method="">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-span" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" id="nombre">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-span" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="email@example.com" name="email" id="email">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text bg-span" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="numero de teléfono" name="telefono" id="telefonp">
                </div>

                <div class="input-group">
                    <span class="input-group-text bg-span">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                        </svg>
                    </span>
                    <textarea class="form-control" placeholder="Escribe tu mensaje aquí" id="mensaje" name="mensaje"></textarea>
                </div>
                <br>
                    <div class="input-group">
                        <button type="submit" class="btn btn-enviar text-white">Env&iacute;ar</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <p>
                <b>¿Quiere saber mas acerca de JWiki?</b> Contactenos por medio del formulario
                </p>
                <p>
                    Estamos contetos de uq ese halla interesado en nuestro contenido. Nuestro objetivo es brindar informaci&oacute;n de calidad a estudiantes y desarrolladores del lenguaje de programaci&oacute;n JAVA, trabajando en conjunto con nuestros colaboradores.
                </p>
                <img src="img/programador.jpg" alt="" class="img-fluid" id="contacto" />
            </div>
        </div>
    </div>
    <br>
    <footer class="footer">
           <div class="container footer__grid">
               <nav class="nav nav--footer">
                <a class="nav__items nav__items--footer" href="index.php">Inicio</a>
                <!-- <a class="nav__items nav__items--footer" href="">Contacto</a>
                <a class="nav__items nav__items--footer" href="">Tabla de infectados</a> -->
                <a class="nav__items nav__items--footer" href="register.php">Registrarse</a>
               </nav>

               <section class="footer__contact">
                   <h3 class="footer__title">Contactanos</h3>
                   <div class="footer__icons">

                       <span class="footer__container-icons">
                        <a class="fab fa-facebook footer__icons" href="#"></a>
                       </span>
                       <span class="footer__container-icons">
                        <a class="fab fa-twitter-square footer__icons"  href="#"></a>
                    </span>

                    <span class="footer__container-icons">
                      <a class="fab fa-whatsapp footer__icons"  href="#"></a>     
                    </span>

                   </div>
               </section>
        
           </div>

    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2a8c4fb58f.js" crossorigin="anonymous"></script>
</body>
</html>