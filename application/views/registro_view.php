<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Directorio Estratégico</title>
	<link type="image/x-icon" href="<?php echo base_url(); ?>css/images/logotipo.png" rel="icon"/>
	<style type="text/css">
	body{
		background-color:#80B927;
	}
	h1, h2, .econ{
		color: #FFFFFF;
		font-family: "Economica", serif;

	}
	.login-form {
		width: 340px;
		margin: 200px auto;
	}

	.login-form h2 {
		margin: 0 0 15px;
	}
	.form-control, .btn {
		min-height: 38px;
		border-radius: 2px;
	}
	.btn {        
		font-size: 15px;
		font-weight: bold;
	}
	.etiqueta{
		color: #12374C;
		font-family: "Lato", Sans-Serif;
	}
	input {
		border-radius: 1rem;
	}
</style>
</head>
<body>
	<div class="login-form">
		<h1>Registrar Usuario</h1>
		<?php if(isset($mensaje)):?>
			<h2><?= $mensaje;?></h2>
		<?php endif;?>

		<form name="form_reg" action="<?= base_url().'usuarios/registro_very'?>" method="POST">
			
			<div class="etiqueta">
				<label for="usuario">Usuario</label>
			</div>
			<div>
				<input type="text" name="user" value="<?= @set_value('user')?>"/><br>
			</div>
			<div class="etiqueta">
				<label for="Contraseña">Contraseña</label>
			</div>
			<div>
				<input type="password" name="pass" value="<?= @set_value('pass')?>"/><br>
			</div>
			<div class="etiqueta">
				<label for="Contraseña">Confirmar Contraseña</label>
			</div>
			<div>
				<input type="password" name="pass2" value="<?= @set_value('pass2')?>"/><br>
			</div>
			<div class="etiqueta">
				<label for="Correo">Correo</label>
			</div>
			<div>
				<input type="text" name="correo" value="<?= @set_value('correo')?>"/><br>
			</div>
			<br>
			<div class="econ">
				<input type="submit" value="Registrar" name="submit_reg">
				<a href="<?= base_url().'usuarios/'?>" title="Iniciar Sesión">Iniciar Sesión</a>
			</div>
		</div>
	</form>
	<hr />
	<?= validation_errors();?>

</body>
</html>