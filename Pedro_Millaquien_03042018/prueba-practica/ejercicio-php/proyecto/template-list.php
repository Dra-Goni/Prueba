<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Evaluación Practica Empresas</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	
</head>
<body >

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 >Lista de Empresas</h2>
			</div>
		</div>

		<div class="row border">
			<div class="col-lg-1">Nro</div>
			<div class="col-lg-2">Nombre</div>
			<div class="col-lg-3">Direccion</div>
			<div class="col-lg-2">WEB</div>
			<div class="col-lg-3">Contacto</div>
			<div class="col-lg-1"></div>
		</div>

			<?php $i = 1; while ($columna = mysqli_fetch_array( $result )) { ?>
				<div class="row border">
					<div class="col-lg-1"><?php echo $i; ?></div>
					<div class="col-lg-2"><?php echo $columna['_name']; ?></div>
					<div class="col-lg-3"><?php echo $columna['_direccion']; ?></div>
					<div class="col-lg-2"><?php echo $columna['_web']; ?></div>
					<div class="col-lg-3"><?php echo $columna['_email_contacto']; ?></div>
					<div class="col-lg-1">
						<form class="form-test" method="Get" action="query.php">
							<input type="hidden" name="show" value="edit">
							<input type="hidden"  name="id" value="<?php echo $columna['id'];  ?>">
							<button><i class="fas fa-pencil-alt" ></i></button>
						</form>
						&nbsp;
						<form class="form-test" method="Get">
							<input type="hidden" name="show" value="delete">
							<input type="hidden" name="id" value="<?php echo $columna['id'];  ?>">
							<button ><i class="fas fa-trash" ></i></button>
						</form>

					</div>
				</div>
			<?php $i++; } ?>

	</div>

	<div class="container top-x4">
		<?php if(isset($_GET['show']) && $_GET['show'] === 'edit') { ?>
			<h4>Tabla edición de Empresa</h4>
			<p>Se debe mostrar los datos de la empresa que se actualizará</p>
			<form method="POST" class="table-form border" action="query.php">
				<input type="hidden" name="action" value="edit">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
				<div class="row top-x2">
					<div class="col-lg-3">
						<label for="name">Nombre</label>
						<input type="" name="_name" id="name" value="<?php echo $_GET['name'] ?>">
					</div>
					<div class="col-lg-3">
						<label for="location">Dirección</label>
						<input type="" name="_direccion" id="location" value="<?php echo $_GET['direccion'] ?>">
					</div>
					<div class="col-lg-3">
						<label for="web">WEB</label>
						<input type="" name="_web" id="web" value="<?php echo $_GET['web'] ?>">
					</div>
					<div class="col-lg-3">
						<label for="contact">Contacto</label>
						<input type="" name="_email_contacto" id="contact" value="<?php echo $_GET['email'] ?>">
					</div>
				</div>

				<div class="row top-x4">
					<div class="col-lg-12 text-center">
						<button class="btn btn-success">Actualizar</button>
					</div>
				</div>

			</form>
		<?php } ?>


		<?php if(isset($_GET['show']) && $_GET['show'] === 'delete') { ?>
			<form action="query.php" method="Get"  class="table-form border">
				<h4>¿Estas seguro que quieres eliminar el registro?</h4>
				<input type="hidden" name="action" value="delete">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				<button class="btn btn-danger">SI</button>
			</form>

			<div class="row top-x2">
				<div class="col-lg-12 text-center">
				
					<a href="?"><span class="badge badge-success">Volver a la Lista</span></a>
				</div>
			</div>

		<?php } ?>
	</div>


</body>
</html>