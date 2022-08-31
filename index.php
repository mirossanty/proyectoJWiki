<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>JWiki</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/Estilos.css">
    </head>
    <body>
       <header class="hero">
        <div class="container">
            <nav class="nav">
                <a href="login.php" class="nav__items nav__items--cta">Registrarse</a>
                <a href="contacto.php" class="nav__items nav__items--cta">Contacto</a>
                <a href="colaboracion.php" class="nav__items nav__items--cta">Cómo colaborar</a>
            </nav>

            <section class="hero__container">
                <div class="hero__texts">
                <h1 class="hero__title">Bienvenido a JWiki</h1>
                <h1 class="hero__subtitle">Al servicio de la programación</h1>
                <a href="#" class="hero__cta">Contáctanos ahora</a>
            </div>
            </section>
        </div>
        <div class="hero__wave" style= "overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
       </header>

       <main>
           <section class="presentation container">
            <img src="img/logo.png" class="presentation__picture" alt="">
            <!-- <img src="img/Javalogo.png" class="presentation__picture" alt=""> -->
         <h2 class="subtitle">Jwiki es un sitio web dedicado al lenguaje Java</h2>
         <p class="presentation__copy"> Para comenzar a ver el todo el contenido da clic en el botón de abajo:</p>
        <a href="home.php" class="presentation__cta">Contenido</a>
        </section>
        <section class="about container">
            <div class="about__text">
                <h2 class="subtitle">Sobre Java</h2>
                <p class="about__paragraph">Cómo comenzó</p>
                <p class="about__paragraph">Java se creó como una herramienta de programación para ser usada en un proyecto de set-top-box en una pequeña operación denominada the Green Project en Sun Microsystems en 1991<br>Lo que se buscaba era la creación de funciones mediante este «idioma», que posteriormente pudieran ser aplicadas en otros entornos virtuales compatibles sin necesidad de crear desde cero la misma codificación.</p>
               
            </div>
            <figure class="about__img">
<img src="img/javalogo3.png" class="about__picture" alt="">
            </figure>
            <figure class="about__img about__img--left">
                <img src="img/javaprogram.jpg" class="about__picture" alt="">
                            </figure>

                            <div class="about__text">
                                <h2 class="subtitle">Principales usos de Java</h2>
                                <p class="about__paragraph">Productividad y utilidades</p>
                                <p class="about__paragraph">Java es muy utilizado en todo tipo de aplicaciones de productividad como procesadores de texto u hojas de cálculo. Incluso Google Maps en ocasiones, utiliza applet de Java que se ejecuta dentro del propio navegar del usuario reduciendo la carga del servidor.</p>
                            </div>
        </section>

        <section class="Imagenes">
            <h2 class="subtitle">Temas destacados</h2>
            <div class="imagenes__grid">

                <article class="img__item">
                    <img src="img/imagen6.jpg" class="imagenes__img" alt="">
                    <div class="img__hover">
                        <h2 class="imagenes__title">Imagen</h2>
                        <i class="fa fa-file-alt imagenes__icon"></i>
                    </div>
                </article>

                <article class="img__item">
                    <img src="img/imagen4.jpg" class="imagenes__img" alt="">
                    <div class="img__hover">
                        <h2 class="imagenes__title">Imagen</h2>
                        <i class="fa fa-file-alt imagenes__icon"></i>
                    </div>
                </article>
                
                <article class="img__item">
                    <img src="img/imagen3.jpg" class="imagenes__img" alt="">
                    <div class="img__hover">
                        <h2 class="imagenes__title">Imagen</h2>
                        <i class="fa fa-file-alt imagenes__icon"></i>
                    </div>
                </article>
                
                <article class="img__item">
                    <img src="img/imagen1.jpg" class="imagenes__img" alt="">
                    <div class="img__hover">
                        <h2 class="imagenes__title">Imagen</h2>
                        <i class="fa fa-file-alt imagenes__icon"></i>
                    </div>
                </article>

                <article class="img__item">
                    <img src="img/imagen5.jpg" class="imagenes__img" alt="">
                    <div class="img__hover">
                        <h2 class="imagenes__title">Imagen</h2>
                        <i class="fa fa-file-alt imagenes__icon"></i>
                    </div>
                </article>

            </div>
        </section>

        <section class="consejos container">
            <h2 class="subtitle">Sobre nosotros</h2>

            <div class="testimony__grid">
                <article class="testimony__item">
                    <div class="testimony__consejos">
                        <img src="img/logo2.jpeg" class="testimny__img" alt="">
                        <div class="testimony__texts">
                            <h3 class="testimony__name">Misión</h3>
                            <p class="consejos__verification">Nuestra misión es: </p>
                        </div>
                    </div>
                    <p class="testimonu__review">Ayudar a estudiantes y desarrolladores de Java en cuanto a documentación y codificación.</p>
                </article>
            <article class="testimony__item">
                <div class="testimony__consejos">
                    <img src="img/logoTic.jpg" class="testimny__img" alt="">
                    <div class="testimony__texts">
                        <h3 class="testimony__name">Visión</h3>
                        <p class="consejos__verification">Nuestra visión es: </p>
                    </div>
                </div>
                <p class="testimonu__review">Formar una comunidad de desarrolladores de Java de manera colaborativa para trascender en el mundo de la programación.</p>
            </article>
        </div>
        </div>
        </section>

        </section>
       </main>
       <footer class="footer">
           <div class="container footer__grid">
               <nav class="nav nav--footer">
                <a class="nav__items nav__items--footer" href="">Inicio</a>
                <!-- <a class="nav__items nav__items--footer" href="">Contacto</a>
                <a class="nav__items nav__items--footer" href="">Tabla de infectados</a> -->
                <a class="nav__items nav__items--footer" href="">Registrarse</a>
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

                    <!-- <span class="footer__container-icons">
                      <a class="fab fa-whatsapp footer__icons"  href="#"></a>     
                    </span> -->

                   </div>
               </section>
        
           </div>

        </footer>
        <script src="https://kit.fontawesome.com/2a8c4fb58f.js" crossorigin="anonymous"></script>
    </body>

</html>