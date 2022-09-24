<?php
/*session_start();
if(!isset($_SESSION['nombre'])){
    header('Location: ../login.php');
}elseif(isset($_SESSION['nombre'])){


    // print_r($usuario); imprime todos los valores de una variable
}else{
    echo "Error en el sistema";
} */
include 'php/conexion_be.php';
$sentencia =$bd->query("SELECT * FROM nivel;");
$niveles = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon_Jwiki.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos-home.css">
    <title>Contenido</title>
</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Contenido</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Indice de contenidos</p>
    <?php
        foreach ($niveles as $dato){
    ?>
                <li>
                    <a href="#<?php echo "nivel".$dato -> idnivel ?>" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $dato -> nivel ?></a>
                    <ul class="collapse list-unstyled" id="<?php echo "nivel".$dato -> idnivel ?>">
                    <?php
                        $idnivel = $dato -> idnivel;
                        /*echo "<li>".$idnivel."</li>";
                        exit();*/
                        $consulta =$bd->query("SELECT * FROM tema WHERE idnivel = $idnivel ORDER BY no_tema;");
                        $temas = $consulta->fetchAll(PDO::FETCH_OBJ);
                        foreach ($temas as $dato_tema){
                    ?>
                        <li>
                            <a href="home.php?idtema=<?php echo $dato_tema -> idtema ?>"><?php echo $dato_tema -> tema ?></a>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </li>
    <?php
     }
    ?>

            </ul>

            <ul class="list-unstyled CTAs">
                <span>
                    <center><h6 class="text-white">¿Quieres colaborar?</h6></center>
                </span>
                <br>
                <li>
                    <a href="login.php" class="download">Iniciar sesi&oacute;n</a>
                </li>
                <li>
                    <a href="colaboracion.php" class="article">Cómo Colaborar</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
                        <!-- <i class="fas fa-align-left"></i>
                        <span class="text-white span-in" id="boton">Indice</span> -->
                    </button>
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="justify-content-end" id="navbarSupportedContent">
                        <span>
                          <a href="index.php">
                          <img src="img/jwiki.png" alt="logo" class="img-logo img-fluid">
                          </a>
                        </span>
                    </div>
                </div>
            </nav>
            
            <?php
                if(isset($_GET['idtema'])){
                    $idtema= $_GET['idtema'];
                    $sentencia_tema = $bd->prepare("SELECT * FROM tema WHERE idtema=?;");
                    $sentencia_tema->execute([$idtema]);
                    $tema = $sentencia_tema->fetch(PDO::FETCH_OBJ);
                
                    $sentencia = $bd->prepare("SELECT * FROM parrafo inner join tema on parrafo.idtema = tema.idtema WHERE parrafo.idtema=? ORDER BY no_parrafo;");
                    $sentencia->execute([$idtema]);
                    $parrafos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                
                    $sentencia_codigo = $bd->prepare("SELECT * FROM codigo WHERE idtema=?;");
                    $sentencia_codigo->execute([$idtema]);
                    $codigos = $sentencia_codigo->fetchAll(PDO::FETCH_OBJ);
                
                    $sentencia_referencia = $bd->prepare("SELECT * FROM referencia WHERE idtema=? order by referencia asc;");
                    $sentencia_referencia->execute([$idtema]);
                    $referencias = $sentencia_referencia->fetchAll(PDO::FETCH_OBJ);
                
                    $sentencia_video = $bd->prepare("SELECT * FROM video WHERE idtema=?;");
                    $sentencia_video->execute([$idtema]);
                    $videos = $sentencia_video->fetchAll(PDO::FETCH_OBJ); 
                
                   $sentencia_subtema = $bd->prepare("SELECT * FROM subtema WHERE idtema=? order by no_subtema;");
                    $sentencia_subtema->execute([$idtema]);
                    $subtemas = $sentencia_subtema->fetchAll(PDO::FETCH_OBJ); 
                
                    /*$sentencia_ps = $bd->prepare("SELECT * FROM subparrafo WHERE idsubtema=? order by no_subparrafo;");
                    $sentencia_ps->execute([$idtema]);
                    $subparrafos = $sentencia_ps->fetchAll(PDO::FETCH_OBJ);*/
                
            ?>

            <h2><?php echo $tema->tema; ?></h2>
            <hr>
         <?php
           foreach ($parrafos as $dato){
         ?>
         <p><?php echo $dato->parrafo; ?></p>
        <?php
         }
         ?>
        <?php
            foreach($subtemas as $dato){
            $idsubtema = $dato->idsubtema;
        ?>
        <h5><?php echo $dato->subtema; ?></h5>
        <?php
            $sentencia_ps = $bd->prepare("SELECT * FROM subparrafo WHERE idsubtema=$idsubtema order by no_subparrafo;");
            $sentencia_ps->execute();
            $subparrafos = $sentencia_ps->fetchAll(PDO::FETCH_OBJ);
            foreach($subparrafos as $dato2){
        ?>
         <p><?php echo $dato2->subparrafo; ?></p>
        <?php
         }
        ?>
        <?php
         }
        ?>
        
        <h2>Ejemplos pr&aacute;cticos</h2>
        <hr>
            <div class="container-fluid justify-content-center">
                <?php
                    foreach ($codigos as $dato){
                ?>
        
                <div class="card text-center border-dark card-code">
                  <div class="card-header bg-tittle text-white border-dark">
                    <h5><?php echo $dato->titulo; ?></h5>
                  </div>

                  <div class="card-body">
                    <img src="<?php echo 'img/codigos/'.$dato->ruta_imagen; ?>"  class="img-fluid" />
                    <p class="card-text text-left"><?php echo $dato->explicacion; ?></p>
                  </div>

                  <div class="card-footer text-muted bg-tittle border-dark">
                        <!-- esto solo lo vera el colaborador -->
                        <a href="#" class="btn btn-primary">Modificar</a>
                  </div> 
                </div>
                <br>
                <?php
                 }
                ?>
            </div>

            <br>
            <div class="container-fluid">
                <h2>V&iacute;deo explicativo</h2>
                <hr>
            <?php
                    foreach($videos as $dato){
            ?>
            <center>
            <div class="col-sm-8">
                <div class="card border-dark">
                    <div class="card-header text-center bg-video border-dark text-white" style="background-color: #dc143c;">
                    <h5><?php echo $dato->titulo ?></h5>
                    </div>
                    <div class="card-body border-dark">
                        <center>
                        <iframe width="560" height="315" src="<?php echo $dato->ruta_video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </center>
                    </div>
                </div>
            </div>
            </center>
            <?php
              }
            ?>
            </div>
            <br>

            <div class="referencias">
                <h3>Referencias</h3>
                <hr>
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                        <?php
                            foreach ($referencias as $dato){
                                echo "<ul>";
                                    echo "<li>".$dato->referencia."</li>";
                                echo "</ul>";
                            }
                        ?>
                            <!-- <div class="lista">
                             <ol>
                                    <li>
                                        <?php //echo $dato->referencia ?>
                                    </li>
                             </ol>
                            </div> -->
                          
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }else{
                ?>
            <!-- <h1>Informaci&oacute;n para mostrar</h1>  -->
            <h1>Bienvenido al contenido de JWiki</h1>
            <p> En esta sección encontraras todos los temas referentes a Java y podras consultarlos siempre que quieras y necesites.<br>
              En cada nivel de se encuentra un tema que puede ser de tu interés, a la vez se muestran videos y fragmentos de ejemplo de código asi como ejemplos prácticos. Finalmente para poder ser mas de ayuda para tus trabajos académicos si eres un maestro o estudiante, al final adjuntamos las fuentes consultadas de la información de nuestro contenido.
              <br>
             <h7> Y recuerda que si puedes imaginarlo puedes programarlo...</h7>
            </p>
            <center> <img src="img/giftBienvenida.gif" alt="" class="img-fluid center"></center>
            <br>
           
            <?php 
            }
        ?>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script-home.js"></script>
</body>
</html>