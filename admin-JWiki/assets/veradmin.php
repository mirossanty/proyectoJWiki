<?php
include('conexion/conexion.php');
session_start();
if(!isset($_SESSION['idusuario'])){
header("Location:../../login.php");
}
//mostrar informacion de usuario logueado
$iduser=$_SESSION['idusuario'];
$sql="SELECT usuario,nombreR FROM usuario WHERE idusuario='$iduser'";
$resultado=$conexion->query($sql);
$row=$resultado->fetch_assoc();//array asociativo

$sql="SELECT idrol,rol FROM rol";
$resultado=$conexion->query($sql);
$usuarios= "SELECT usuario.idusuario,usuario.contrasena,usuario.usuario,usuario.nombreR,usuario.apellidos,usuario.email,usuario.profesion, rol.rol
FROM usuario as usuario inner join rol as rol on usuario.idrol= rol.idrol;";
$resultadousuario = $conexion->query($usuarios);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../img/favicon_Jwiki.ico" type="image/x-icon">

    <title>JWiki</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="bienvenido.php" class="logo"><b>JWiki</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="cerrarsesion.php">Cerrar sesión</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php
                  echo utf8_decode($row['nombreR']);
                  ?></h5>
              	  	
                  <!-- <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li> -->
                  <?php
                  if ($_SESSION['idrol']==1) {
                
                  ?>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Usuarios</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="veradmin.php">Ver usuarios</a></li>
                          <li class="active"><a  href="agregaradmin.php">Agregar usuario</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-dashboard"></i>
                          <span>Contenido JWiki</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="ver-parrafo.php">Ver párrafos agregados</a></li>
                          <li><a  href="ver-subtema.php">Ver subtemas agregados</a></li>
                          <li><a  href="ver-subparrafo.php">Ver subparrafos agregados</a></li>
                          <li><a  href="ver-video.php">Ver vídeos agregados</a></li>
                          <li><a  href="ver-codigo.php">Ver códigos agregados</a></li>
                      </ul>
                  </li>
                  <?php } ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Perfil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="perfil.php">Ver mi perfil</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Contenido JWiki</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="contenidoJWiki/agregarParrafo.php">Agregar un párrafo</a></li>
                          <li><a  href="contenidoJWiki/agregar-subtema.php">Agregar un subtema</a></li>
                          <li><a  href="contenidoJWiki/agregar-subparrafo.php">Agregar un subparrafo</a></li>
                          <li><a  href="contenidoJWiki/agregar-video.php">Agregar un video</a></li>
                          <li><a  href="contenidoJWiki/agregar-codigo.php">Agregar código</a></li>
                        
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Place your content here.</p>
          		</div>
          	</div> -->
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Lista de usuarios registrados</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Apellidos</th>
                                  <th><i class="fa fa-bookmark"></i> Email</th>
                                  <th><i class=" fa fa-edit"></i> Profesión</th>
                                  <th><i class="fa fa-bookmark"></i> Usuario</th>
                                  <th><i class="fa fa-bookmark"></i> Rol</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              
                               <?php
                               while ($regUsuarios=$resultadousuario->fetch_array(MYSQLI_BOTH)) {
                                echo "<tr>
                                <td>".$regUsuarios['nombreR']."</td>
                                <td>".$regUsuarios['apellidos']."</td>
                                <td>".$regUsuarios['email']."</td>
                                <td>".$regUsuarios['profesion']."</td>
                                <td>".$regUsuarios['usuario']."</td>
                                <td>".$regUsuarios['rol']."</td>
                                <td><span class='label label-info label-mini'></span></td>
                                <td><a class='btn btn-primary' href='editaradmin.php?idusuario=".$regUsuarios['idusuario']."' role='button'>Editar✏️</a></td>
                                <td><a class='btn btn-danger' href='eliminaradmin.php?idusuario=".$regUsuarios['idusuario']."' role='button'>🗑️</a></td>
                                
                            </tr>";
                               }
                               ?> 
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
          2022 - JWiki- UTSV 
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
