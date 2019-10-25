<div id="tablaP">
	<h1>Empresas Sector Privado</h1>
	<br>

	<div class="form-1-2">
		<label for="caja_busqueda">Razón Social</label>
		<input type="text" name="caja_busqueda" id="filtrorazon" placeholder="">
		<label for="caja_busqueda">Estado</label>
		<input type="text" name="caja_busqueda" id="filtroestado" placeholder="">
		<label for="caja_busqueda">Giro</label>
		<input type="text" name="caja_busqueda" id="filtrogiro" placeholder="">
		<button class="button btnfiltrarEmpresas">Buscar</button>
		<button class="button btnlimpiar">Limpiar</button>
		<button class="button nuevoContactoEmpresas pull-right"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/usuarioBlanco.png"></span> Nuevo Contacto</button>
		<button class="button cerrarSesion pull-right"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/usuarioBlanco.png"></span> Cerrar Sesión</button>
	</div>


	<br>
	<br>
	<br>

	<table class=" tabla table table-bordered dt-responsive table-condensed" id="mostrar">
		<tr>
			<!--<th class="encabezado bg-primary">Id</th>-->
			<th class="encabezado bg-primary">Razón Social</th>
			<th class="encabezado bg-primary">Estado</th>
			<th class="encabezado bg-primary">Municipio</th>
			<th class="encabezado bg-primary">Giro</th>
		<!--<th class="encabezado bg-primary">Experiencia Publica Anterior</th>
		<th class="encabezado bg-primary">Inicio de Mandato</th>
		<th class="encabezado bg-primary">Fin de Mandato</th>-->
		<th class="encabezado bg-primary">Acciones</th>
	</tr>
	<?php
	if($contactosprivados){
		foreach($contactosprivados as $contacto){
			?>	
			<tr>
				<!--<td><?=$contacto['id']?></td>-->
				<td><?=$contacto['razon_social']?></td>				
				<td><?=$contacto['entidad']?></td>
				<td><?=$contacto['municipio']?></td>				
				<td><?=$contacto['giro']?></td>
				<td class="text-center">
					
					<button class="btnaccion btn btn-primary btn-sm btnverEmpresas" data-id="<?=$contacto['id']?>"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/lupaBlanca.png"></span> Ver</button>

					<button class="btnaccion btn btn-primary btn-sm btneditEmpresas" <?php echo ($tipoDeUsuario==1 ? "disabled":"");?> data-id="<?=$contacto['id']?>"><span> <img style="width:20px; height:20px;" class="logo" src="css/images/lápizBlanco.png"></span> Editar</button>

					<button class="btn btn-danger btn-sm btnEliminarEmpresas" <?php echo ($tipoDeUsuario==1 ? "disabled":"");?> data-id="<?=$contacto['id']?>"><span><img style="width:20px; height:20px;" class="logo" src="css/images/tacheBlanco.png"></span> Eliminar</button></td>
				</tr>
				<?php			
			}
		}
		?>
		
	</table>
	<script type="text/javascript">
		var contactosprivados = <?php echo json_encode($contactosprivados); ?>; 
		console.log(contactosprivados);
	</script>
</div>