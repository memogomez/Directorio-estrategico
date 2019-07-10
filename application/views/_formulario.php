<form id="<?=$idform?>">
	
	<div class='form-group'>
		<label>Entidad</label>
		<input type="text" class="form-control" placeholder="Entidad" name="entidad" maxlength='50' required="required" value='<?=$contacto['entidad']?>'/>
	</div>

	<div class='form-group'>
		<label>Imagen</label>
		<input type="file"  name="imagen" required="required" value='<?=$contacto['imagen']?>'/>
	</div>

	<div class='form-group'>
		<label>Cargo</label>
		<input type="text" class="form-control" placeholder="Cargo" name="cargo" maxlength='50' required="required" value='<?=$contacto['cargo']?>'/>
	</div>

	<div class='form-group'>
		<label>Nombre</label>
		<input type="text" class="form-control" placeholder="Nombre" name="nombre" maxlength='50' required="required" value='<?=$contacto['nombre']?>'/>
	</div>

	<div class='form-group'>
		<label>Partido</label>
		<input type="text" class="form-control" placeholder="Partido" name="partido" maxlength='50' required="required" value='<?=$contacto['partido']?>'/>
	</div>
	
	<div class='form-group'>
		<label>Experiencia</label>
		<input type="text" class="form-control" placeholder="Experiencia" name="experiencia" maxlength='50' required="required" value='<?=$contacto['experiencia']?>'/>
	</div>

	<div class='form-group'>
		<label>Inicio de Mandato</label>
		<input type="text" class="form-control" placeholder="Inicio" name="inicio" maxlength='50' required="required" value='<?=$contacto['inicio']?>'/>
	</div>

	<div class='form-group'>
		<label>Fin de Mandato</label>
		<input type="text" class="form-control" placeholder="Fin" name="fin" maxlength='50' required="required" value='<?=$contacto['fin']?>'/>
	</div>

	<input type="hidden" name="id" value="<?=$contacto['id']?>">

	<button type="submit" class="btn btn-success pull-right"><?=$textbtn?></button>

	<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>

</form>