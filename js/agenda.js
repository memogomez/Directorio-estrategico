$( document ).ready(function(){
	document.getElementById("mostrar").hidden = true;
	$("body").on('click', '.nuevoContacto', function () {
		$.ajax({
			url: base_url + 'principal/formAddContacto',
			data: {},
			type: 'POST',
			success: function (html){
				$(".modal-header").html('<span class="text-rigth" style="font-size:17px">Nuevo Contacto</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="#FF0000"><i class="fa fa-times" aria-hidden="true"></i></font></span></button><br>');
				$(".modal-body").html(html);
				$(".modal-footer").html('');
				$("#Modal").modal("show");
			}
		});
	});

	$("body").on('submit', '#formNuevoContacto', function(){
		$("#Modal").modal("hide");
		$.ajax({
			url: base_url + 'principal/guardarContacto',
			data: $(this).serialize(),
			type: 'POST',
			success: function (resultado){
				alert("Tu contacto se ha registrado correctamente");
				location.reload();
			}
		});
		return false;
	});


	$("body").on('click', '.btnedit', function () {
		var idcontacto = $(this).data("id");
		$.ajax({
			url: base_url + 'principal/formEditContacto',
			data: {idcontacto:idcontacto},
			type: 'POST',
			success: function (html){
				$(".modal-header").html('<span class="text-rigth" style="font-size:17px">Editar Contacto</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="#FF0000"><i class="fa fa-times" aria-hidden="true"></i></font></span></button><br>');
				$(".modal-body").html(html);
				$(".modal-footer").html('');
				$("#Modal").modal("show");
			}
		});
	});

	$("body").on('submit', '#formEditContacto', function(){
		$("#Modal").modal("hide");
		$.ajax({
			url: base_url + 'principal/editarcontacto',
			data: $(this).serialize(),
			type: 'POST',
			success: function (resultado){
				location.reload();
			}
		});
		return false;
	});

	$("body").on('click', '.btnEliminar', function () {
		$('body').html('');
		var idcontacto = $(this).data("id");
		$.ajax({
			url: base_url + 'principal/eliminarcontacto',
			data: {idcontacto:idcontacto},
			type: 'POST',
			success: function (html){	
				location.reload();
			}
		});
		$(this).closest('tr').remove();
	});


	$("body").on('click', '.btnver', function () {
		var idcontacto = $(this).data("id");
		$.ajax({
			url: base_url + 'principal/formVerContacto',
			data: {idcontacto:idcontacto},
			type: 'POST',
			success: function (html){
				$(".modal-header").html('<span class="text-rigth" style="font-size:17px">Ver Contacto</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="#FF0000"><i class="fa fa-times" aria-hidden="true"></i></font></span></button><br>');
				$(".modal-body").html(html);
				$(".modal-footer").html('');
				$("#Modal").modal("show");
			}
		});
	});

	$("body").on('click', '.btnfiltrar', function () {
		var filtrocargo = $("#filtrocargo").val();
		var filtronombre = $("#filtronombre").val();
		var filtropartido = $("#filtropartido").val();
		

		if(filtrocargo!==""){
			contactos = contactos.filter(c=>c.cargo.toLowerCase().includes(filtrocargo.toLowerCase()));
		}
		if(filtronombre!==""){
			contactos = contactos.filter(c=>c.nombre.toLowerCase().includes(filtronombre.toLowerCase()));
		}
		if(filtropartido!==""){
			contactos = contactos.filter(c=>c.partido.toLowerCase().includes(filtropartido.toLowerCase()));
		}
		$.ajax({
			url: base_url + 'principal/obtenerBusqueda',
			data: {contactos:contactos},
			type: 'POST',
			success: function (html){	
				$('#tablaP').html(html);
			}
		});
		
	});

	$("body").on('click', '.btnlimpiar', function () {
		location.reload();
		
	});

	$("body").on('click', '.cerrarSesion', function () {
		document.cookie = 'tipoUsuario=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/';
		document.cookie = 'EstaLogeado=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/';
		window.location.href = base_url + 'inicio';
	});


});