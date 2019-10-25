<form id="formVerContacto">
	
    <div class='form-group letramodal'>
		<label>Razón Social</label>
		<?=$contacto['razon_social']?>
	</div>

	<div class='form-group letramodal'>
		<label>Entidad:</label>
		<?=$contacto['entidad']?>
	</div>

	<div class='form-group letramodal'>
		<label>Municipio</label>
		<?=$contacto['municipio']?>
	</div>

	<div class='form-group letramodal'>
		<label>Domicilio</label>
		<?=$contacto['domicilio']?>
	</div>

	<div class='form-group letramodal'>
		<label>Telefono</label>
		<?=$contacto['telefono']?>
	</div>
	
	<div class='form-group letramodal'>
		<label>Correo</label>
		<?=$contacto['correo']?>
	</div>

	<div class='form-group letramodal'>
		<label>Giro</label>
		<?=$contacto['giro']?>
	</div>

	<input type="hidden" name="id" value="<?=$contacto['id']?>">

	<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
