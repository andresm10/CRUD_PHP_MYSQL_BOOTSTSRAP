<?php
	include 'toolbar.php';
?>
<form action="./controllers/controller.php?folder=<?= $_GET['folder']; ?>" method="POST">
  <div class="row">
    <div class="col text-center">
      <i class="material-icons" style="font-size: 80px;">add</i>
    </div>
  </div>
  <div class="form-group">
  	 <label for="name">Nombres</label>
    <input type="text" class="form-control" id="name" name="name" autofocus placeholder="Tus nombres" required>
  </div>
  <div class="form-group">
  	 <label for="last_name">Apellidos</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Tus apellidos" required>
  </div>
  <div class="form-group">
  	 <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Tu e-mail" required>
  </div>
  <div class="form-group text-center">
  	<input type="submit" name="create" value="Crear" class="btn btn-primary">
  </div>
  <div class="form-group text-center">
  	<?php
  		if(isset($_GET['success'])){
	?>
			<div class="alert alert-success">
				El usuario ha sido creado.
			</div>
	<?php
  		}else if(isset($_GET['error'])){
  	?>
			<div class="alert alert-danger">
				Ha ocurrido un error al crear el usario, por favor intente de nuevo.
			</div>
	<?php
  		}
  	?>
  </div>
</form>