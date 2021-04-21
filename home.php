<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio de Automatización</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>


<body style="background:url('siemens.jpg') no-repeat; background-size: cover;">

</body>

<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->
      		<div class="card" style="width: 150rem;">
			  <img src="img/admin-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-primary">SALIR</a>
			  </div>
			</div>
			<div class="p-3">
				<?php include 'php/members.php';
                 if (mysqli_num_rows($res) > 0) {?>
                  
                  <div class="card" style="width: 43rem;height: 500px; ">

				<h1 class="display-4 fs-1">    Miembros</h1>
				<table class="table" 
				       style="width: 42rem;">
				  <thead>
				    <tr>
				      <th scope="col">N°</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Correo institucional</th>
				      <th scope="col">Rol</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['name']?></td>
				      <td><?=$rows['username']?></td>
				      <td><?=$rows['role']?></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>

				<?php }?>
				</div>
			</div>


<!-- REGISTRO -->

<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 50vh">
      	<form class="border shadow p-5 rounded"
      	      action="php/check-login.php" 
      	      method="post" 
      	      style="width: 400px; background-color: #FDFEFE; height: 550px">
      	      
      	      <h1 class="text-center p-4">Registro de estudiantes</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">Correo institucional</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Contraseña</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Seleccionar: </label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">Estudiante</option>
			  <option value="admin">Administrador - Docente</option>
		  </select>
		 
		  <button type="submit" 
		          class="btn btn-success">REGISTRAR</button>
		</form>
      </div>
</body>

<!-- FIN REGISTRO -->


      	<?php }else { ?>



      		<!-- VISTA USUARIOS -->

      		<div class="card" style="width: 18rem;">
			  <img src="img/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-primary">SALIR</a>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>