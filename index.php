<?php 


   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio de Automatizacion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body style="background:url('wall_index.jpg') no-repeat; background-size: cover;">

</body>


<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-5 rounded"
      	      action="php/check-login.php" 
      	      method="post" 
      	      style="width: 500px; background-color: #FDFEFE">
      	      
      	      <h1 class="text-center p-4">Laboratorio de 
      	      Automatización</h1>
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
		          class="btn btn-success">INGRESAR</button>
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>