<?php echo form_open_multipart('principalEstatal/tomarDecision');?>
	
<div class='form-group'>
		<label>Entidad</label>
		<select type="text" class="form-control" name="entidad" required="required">
			<?php 
			if(!$contacto['id'] > 0){
				echo "<option disabled selected>Selecciona una opción</option>";
			}
			?>
			<option <?php if($contacto['entidad'] == 'Aguascalientes'){echo("selected");}?> value="Aguascalientes">Aguascalientes</option>
			<option <?php if($contacto['entidad'] == 'Baja California'){echo("selected");}?> value="Baja California">Baja California</option>
			<option <?php if($contacto['entidad'] == 'Baja California Sur'){echo("selected");}?> value="Baja California Sur">Baja California Sur</option>
			<option <?php if($contacto['entidad'] == 'Campeche'){echo("selected");}?> value="Campeche">Campeche</option>
			<option <?php if($contacto['entidad'] == 'Chiapas'){echo("selected");}?> value="Chiapas">Chiapas</option>
			<option <?php if($contacto['entidad'] == 'Chihuahua'){echo("selected");}?> value="Chihuahua">Chihuahua</option>
			<option <?php if($contacto['entidad'] == 'Ciudad de México'){echo("selected");}?> value="Ciudad de México">Ciudad de México</option>
			<option <?php if($contacto['entidad'] == 'Coahuila'){echo("selected");}?> value="Coahuila">Coahuila</option>
			<option <?php if($contacto['entidad'] == 'Colima'){echo("selected");}?> value="Colima">Colima</option>
			<option <?php if($contacto['entidad'] == 'Durango'){echo("selected");}?> value="Durango">Durango</option>
			<option <?php if($contacto['entidad'] == 'Estado de México'){echo("selected");}?> value="Estado de México">Estado de México</option>
			<option <?php if($contacto['entidad'] == 'Guanajuato'){echo("selected");}?> value="Guanajuato">Guanajuato</option>
			<option <?php if($contacto['entidad'] == 'Guerrero'){echo("selected");}?> value="Guerrero">Guerrero</option>
			<option <?php if($contacto['entidad'] == 'Hidalgo'){echo("selected");}?> value="Hidalgo">Hidalgo</option>
			<option <?php if($contacto['entidad'] == 'Jalisco'){echo("selected");}?> value="Jalisco">Jalisco</option>
			<option <?php if($contacto['entidad'] == 'Michoacán'){echo("selected");}?> value="Michoacán">Michoacán</option>
			<option <?php if($contacto['entidad'] == 'Morelos'){echo("selected");}?> value="Morelos">Morelos</option>
			<option <?php if($contacto['entidad'] == 'Nayarit'){echo("selected");}?> value="Nayarit">Nayarit</option>
			<option <?php if($contacto['entidad'] == 'Nuevo León'){echo("selected");}?> value="Nuevo León">Nuevo León</option>
			<option <?php if($contacto['entidad'] == 'Oaxaca'){echo("selected");}?> value="Oaxaca">Oaxaca</option>
			<option <?php if($contacto['entidad'] == 'Puebla'){echo("selected");}?> value="Puebla">Puebla</option>
			<option <?php if($contacto['entidad'] == 'Querétaro'){echo("selected");}?> value="Querétaro">Querétaro</option>
			<option <?php if($contacto['entidad'] == 'Quintana Roo'){echo("selected");}?> value="Quintana Roo">Quintana Roo</option>
			<option <?php if($contacto['entidad'] == 'San Luis Potosí'){echo("selected");}?> value="San Luis Potosí">San Luis Potosí</option>
			<option <?php if($contacto['entidad'] == 'Sinaloa'){echo("selected");}?> value="Sinaloa">Sinaloa</option>
			<option <?php if($contacto['entidad'] == 'Sonora'){echo("selected");}?> value="Sonora">Sonora</option>
			<option <?php if($contacto['entidad'] == 'Tabasco'){echo("selected");}?> value="Tabasco">Tabasco</option>
			<option <?php if($contacto['entidad'] == 'Tamaulipas'){echo("selected");}?> value="Tamaulipas">Tamaulipas</option>
			<option <?php if($contacto['entidad'] == 'Tlaxcala'){echo("selected");}?> value="Tlaxcala">Tlaxcala</option>
			<option <?php if($contacto['entidad'] == 'Veracruz'){echo("selected");}?> value="Veracruz">Veracruz</option>
			<option <?php if($contacto['entidad'] == 'Yucatán'){echo("selected");}?> value="Yucatán">Yucatán</option>
			<option <?php if($contacto['entidad'] == 'Zacatecas'){echo("selected");}?> value="Zacatecas">Zacatecas</option>
		</select>
		<!--<input type="text" class="form-control" placeholder="Entidad" name="entidad" maxlength='50' required="required" value='<?=$contacto['entidad']?>'/>-->
	</div>

	<div class='form-group'>
		<label>Imagen del contacto</label>
		<input type="file"  name="userfile" id="userfile" accept="image/x-png,image/jpg, image/jpeg"/>
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
		<input type="file"  name="partidofile" id="partidofile" accept="image/x-png,image/jpg, image/jpeg"/>
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

	<button type="submitEstatal" class="btn btn-success pull-right"><?=$textbtn?></button>

	<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>

</form>