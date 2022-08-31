<?php
session_start();
if(!isset($_SESSION['nombre'])){
    header('Location: ../login.php');
}elseif(isset($_SESSION['nombre'])){
    include 'conexion_be.php';
    $sentencia =$bd->query("SELECT * FROM usuario;");
    $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // print_r($usuario); imprime todos los valores de una variable
}else{
    echo "Error en el sistema";
}               
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista colaboradores</title>
<link rel="stylesheet" href="../css/estilos-crud.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="../img/favicon_Jwiki.ico" type="image/x-icon">
<script src="../js/crud.js"></script>

<body>
	<center>
        <h1>Colaborador</h1>
	<div class="header">
		<img src="../img/jwiki.png" alt="logo" class="logo">
	</div>
	</center>
    <center>
		<br>
    <h1 style="color: #764ba3; font-weight: bold;">Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
	<a href="cerrar_sesion.php" class="btn btn-salir">Cerrar Sesión</a>
        <!-- <h3>Lista de colaboradores</h3>
        <table>
            <tr>
            <td>idusuario</td>
                <td>Email</td>
                <td>Usuario</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Profesion</td>
                <td>Password</td>
                <td>Editar</td>
                <td>Eliminar</td>
            
            </tr>
  <?php
  
  foreach ($usuario as $dato){
      ?>
 <tr>
 <td> <?php echo $dato->idusuario; ?></td>   
 <td> <?php echo $dato->email; ?></td>
 <td> <?php echo $dato->usuario; ?></td>
 <td> <?php echo $dato->nombreR; ?></td>
 <td> <?php echo $dato->apellidos; ?></td>
 <td> <?php echo $dato->profesion; ?></td>
 <td> <?php echo $dato->contrasena; ?></td>
 <td><a href="editar.php?idusuario=<?php echo $dato->idusuario; ?>">Editar</a></td>
<td><a href="eliminar.php?idusuario=<?php echo $dato->idusuario; ?>">Eliminar</a></td>

 </tr>
    <?php
  }
  
  ?>
        </table> -->
<!-- <body> -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Lista <b>Colaboradores</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-agregar" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-delete" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<!-- <span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span> -->
                        
						</th>
                        <th>id</th>
                        <th>Email</th>
						<th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Profesión</th>
                        <!-- <th>Password</th> -->
                        <th>Acciones</th>
                    </tr>
                   
                </thead>
                <tbody>
                <?php
  
  foreach ($usuario as $dato){
      ?>
                    <tr>
						<td>
							<!-- <span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span> -->
                           
						</td>
                        <td><?php echo $dato->idusuario; ?></td>
                        <td><?php echo $dato->email; ?></td>
						<td><?php echo $dato->usuario; ?></td>
                        <td><?php echo $dato->nombreR; ?></td>
                        <td><?php echo $dato->apellidos; ?></td>
                        <td><?php echo $dato->profesion; ?></td>
                        <!-- <td><?php //echo $dato->contrasena; ?></td> -->
                        <td>
						<a href="editar.php?idusuario=<?php echo $dato->idusuario; ?>"class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <!-- <a href="eliminar.php?idusuario=<?php //echo $dato->idusuario; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                             -->
                        </td>
                      
                    </tr>
                    <?php
            }
  
  ?>
                    <!-- AQUI TERMINA -->
					
                   
                </tbody>
            </table>
        </div>
    </div>
	<!-- Insert Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="insertar.php">
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" name="usuario"class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<textarea class="form-control" name="nombre" required></textarea>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apellidos" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Profesión</label>
							<input type="text" name="profesion" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="contrasena" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Rol</label>
							<input type="number" name="rol"class="form-control" required>
						</div>	
					</div>
					<div class="modal-footer">
					<input type="hidden" name="oculto" value="1">
					<input type="reset" name="">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="editarProceso.php">
					<div class="modal-header">						
						<h4 class="modal-title">Editar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="txtemail" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" name="txtusuario" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="txtnombre" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="txtapellidos" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Profesión</label>
							<input type="text" name="txtprofesion" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="text" name="txtcontrasena" class="form-control" required>
						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</center>
</body>
</html>