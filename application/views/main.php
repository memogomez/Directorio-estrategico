<div id="tablaP">
	<h1>Nivel Federal</h1>
	<br>

	<div class="form-1-2">
		<label for="caja_busqueda">Cargo</label>
		<input type="text" name="caja_busqueda" id="filtrocargo" placeholder="">
		<label for="caja_busqueda">Nombre</label>
		<input type="text" name="caja_busqueda" id="filtronombre" placeholder="">
		<label for="caja_busqueda">Partido</label>
		<input type="text" name="caja_busqueda" id="filtropartido" placeholder="">
		<button class="button btnfiltrar">Buscar</button>
		<button class="button btnlimpiar">Limpiar</button>
		<button class="button nuevoContacto pull-right"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/usuarioBlanco.png"></span> Nuevo Contacto</button>
		<button class="button cerrarSesion pull-right"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/usuarioBlanco.png"></span> Cerrar Sesión</button>
	</div>


	<br>
	<br>
	<br>

	<table class=" tabla table table-bordered dt-responsive table-condensed" id="mostrar">
		<tr>
			<!--<th class="encabezado bg-primary">Id</th>-->
			<th class="encabezado bg-primary">Entidad</th>
			<th class="encabezado bg-primary">Imagen</th>
			<th class="encabezado bg-primary">Cargo</th>
			<th class="encabezado bg-primary">Nombre</th>
			<th class="encabezado bg-primary">Partido</th>
		<!--<th class="encabezado bg-primary">Experiencia Publica Anterior</th>
		<th class="encabezado bg-primary">Inicio de Mandato</th>
		<th class="encabezado bg-primary">Fin de Mandato</th>-->
		<th class="encabezado bg-primary">Acciones</th>
	</tr>
	<?php
	if($contactos){
		foreach($contactos as $contacto){
			?>	
			<tr>
				<!--<td><?=$contacto['id']?></td>-->
				<td><?=$contacto['entidad']?></td>
				<td>
					<img src="./uploads/<?=$contacto['imagen']?>" height="80" width="80">
				</td>
				<td><?=$contacto['cargo']?></td>
				<td><?=$contacto['nombre']?></td>
				<!--<td><?=$contacto['partido']?></td>-->
				<td>
					<img src="./uploads/<?=$contacto['imagenpartido']?>" height="80" width="80">
				</td>
				<!--<td><?=$contacto['experiencia']?></td>
				<td><?=$contacto['inicio']?></td>
				<td><?=$contacto['fin']?></td>-->
				<td class="text-center">
					
					<button class="btnaccion btn btn-primary btn-sm btnver" data-id="<?=$contacto['id']?>"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/lupaBlanca.png"></span> Ver</button>

					<button class="btnaccion btn btn-primary btn-sm btnedit" <?php echo ($tipoDeUsuario==1 ? "disabled":"");?> data-id="<?=$contacto['id']?>"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/lápizBlanco.png"></span> Editar</button>

					<button class="btn btn-danger btn-sm btnEliminar" <?php echo ($tipoDeUsuario==1 ? "disabled":"");?> data-id="<?=$contacto['id']?>"><span><img style="width:20px; height:20px;" class="logo" src="css/images/tacheBlanco.png"></span> Eliminar</button></td>
				</tr>
				<?php			
			}
		}
		?>
		
	</table>
	<script type="text/javascript">
		var contactos = <?php echo json_encode($contactos); ?>; 
		console.log(contactos);
	</script>
</div>