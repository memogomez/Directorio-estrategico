<!--<form action="" method="post" enctype="multipart/form-data" id="<?=$idform?>">-->
<?php echo form_open_multipart('principal/tomarDecision');?>
	
	<div class='form-group'>
		<label>Entidad</label>
		<!--<select type="text" class="form-control" name="entidad" required="required" value='<?=$contacto['entidad']?>'>
			<option disabled selected>Selecciona una opción</option>
			<option value="Aguascalientes">Aguascalientes</option>
			<option value="Baja California">Baja California</option>
			<option value="Baja California Sur">Baja California Sur</option>
			<option value="Campeche">Campeche</option>
			<option value="Chiapas">Chiapas</option>
			<option value="Chihuahua">Chihuahua</option>
			<option value="Ciudad de México">Ciudad de México</option>
			<option value="Coahuila">Coahuila</option>
			<option value="Colima">Colima</option>
			<option value="Durango">Durango</option>
			<option value="Estado de México">Estado de México</option>
			<option value="Guanajuato">Guanajuato</option>
			<option value="Guerrero">Guerrero</option>
			<option value="Hidalgo">Hidalgo</option>
			<option value="Jalisco">Jalisco</option>
			<option value="Michoacán">Michoacán</option>
			<option value="Morelos">Morelos</option>
			<option value="Nayarit">Nayarit</option>
			<option value="Nuevo León">Nuevo León</option>
			<option value="Oaxaca">Oaxaca</option>
			<option value="Puebla">Puebla</option>
			<option value="Querétaro">Querétaro</option>
			<option value="Quintana Roo">Quintana Roo</option>
			<option value="San Luis Potosí">San Luis Potosí</option>
			<option value="Sinaloa">Sinaloa</option>
			<option value="Sonora">Sonora</option>
			<option value="Tabasco">Tabasco</option>
			<option value="Tamaulipas">Tamaulipas</option>
			<option value="Tlaxcala">Tlaxcala</option>
			<option value="Veracruz">Veracruz</option>
			<option value="Yucatán">Yucatán</option>
			<option value="Zacatecas">Zacatecas</option>
		</select>-->
		<input type="text" class="form-control" placeholder="Entidad" name="entidad" maxlength='50' required="required" value='<?=$contacto['entidad']?>'/>
	</div>

	<div class='form-group'>
		<label>Imagen del contacto</label>
		<input type="file"  name="userfile" id="userfile" required="required" accept="image/x-png,image/jpg, image/jpeg"/>
		<input type="hidden" name="imagen" value="<?=$contacto['imagen']?>">
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
		<label>Imagen del Partido</label>
		<input type="file"  name="partidofile" id="partidofile" required="required" accept="image/x-png,image/jpg, image/jpeg"/>
		<input type="hidden" name="imagenpartido" value="<?=$contacto['imagenpartido']?>">
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

	<div class='form-group'>
		<label>Reseña</label>
		<textarea rows="4" cols="50" type="text" class="form-control" placeholder="Resena" name="resena" maxlength='500' required="required"><?=$contacto['resena']?></textarea>
	</div>

	<input type="hidden" name="id" value="<?=$contacto['id']?>">

	<button type="submit" class="btn btn-success pull-right"><?=$textbtn?></button>

	<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>

</form>