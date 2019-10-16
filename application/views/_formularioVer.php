<form id="formVerContacto">
	
	<div class='form-group letramodal'>
		<label>Entidad:</label>
		<?=$contacto['entidad']?>
	</div>

	<div class='form-group letramodal'>
		<img src="./uploads/<?=$contacto['imagen']?>" height="100" width="100">
	</div>

	<div class='form-group letramodal'>
		<label>Cargo</label>
		<?=$contacto['cargo']?>
	</div>

	<div class='form-group letramodal'>
		<label>Nombre</label>
		<?=$contacto['nombre']?>
	</div>

	<div class='form-group letramodal'>
		<label>Partido</label>
		<?=$contacto['partido']?>
	</div>
	
	<div class='form-group letramodal'>
		<label>Experiencia</label>
		<?=$contacto['experiencia']?>
	</div>

	<div class='form-group letramodal'>
		<label>Inicio de Mandato</label>
		<?=$contacto['inicio']?>
	</div>

	<div class='form-group letramodal'>
		<label>Fin de Mandato</label>
		<?=$contacto['fin']?>
	</div>

	<div class='form-group letramodal'>
		<label>Reseña</label>
		<?=$contacto['resena']?>
	</div>

	<input type="hidden" name="id" value="<?=$contacto['id']?>">

	<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>

</form>