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
		<h1>Inicio de Sesión</h1>
		<?php if(isset($mensaje)):?>
			<h2><?= $mensaje;?></h2>
		<?php endif;?>
		<form name="form_iniciar" action="<?= base_url().'usuarios/very_sesion'?>" method="POST">

			<div class="etiqueta">
				<label for="Usuario">Usuario</label>
			</div>
			<div class="form-rounded">
				<input type="text" name="user" value="<?= @set_value('user')?>" /><br>
			</div>
			<div class="etiqueta">
				<label for="contraseña" value="<?= @set_value('pass')?>">Contraseña</label>
			</div>
			<div class="form-rounded">
				<input type="password" name="pass"/><br>
			</div>
			<br>
			<div class="econ">
				<input type="submit" value="Entrar" name="submit">
				<a href="<?= base_url().'usuarios/registro'?>" title="Deseo Registrarme">Registrar</a>
			</div>
		</div>
	</form>
</body>
</html>