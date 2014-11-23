/*----BORRAR UNA CIUDAD----*/
function BorrarCiudad(ciudad){
	swal({
		title: "Estas seguro?",
		text: "Tu registro no se podra recuperar!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si, borrar esto!",
		cancelButtonText: "No, cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},

	function(isConfirm){
		if (isConfirm) {
			
			$.ajax({
				type: "GET",
				url: "borrar_ciudad.php?id_ciudad="+ciudad,
				success: function(data)
				{
					$('#TabCiudad').html(data);					
					swal("Borrado!", "La ciudad se ha eliminado exitosamente !.", "success");
				}
			});
		}
		else {
			swal("Cancelado", "La ciudad esta a salvo :)", "error");
		}	

	});
}

/*----CREAR UNA CIUDAD----*/

$('#formciudad').submit( function(e) {
	$.ajax( {
		url: "AM_ciudad.php",
		type: "POST",
		data: new FormData( this ),
		processData: false,
		contentType: false

	} );
	$(":text").val('');
	swal("Hecho!", "La ciudad se creo exitosamente!", "success")
	e.preventDefault(); 

	setTimeout(function() {
		window.location = "admin.php";
	}, 1500);

	
} );


/*----EDITAR UNA CIUDAD----*/

$("#formeditarciudad").submit(function() 
{
	$.ajax({
		type: "POST",
		data:$("#formeditarciudad").serialize(), 
		success: function(data)
		{
			swal("Hecho!", "La ciudad se ha editado exitosamente!", "success")
			setTimeout(function() {
				window.location = "admin.php";
			}, 1500);
		}

	});
	return false;
});


/*---- BORRAR UN COMENTARIO (TESTIMONIO)----*/
function BorrarComentario(comentario){
	swal({
		title: "Estas seguro?",
		text: "Tu registro no se podra recuperar!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si, borrar esto!",
		cancelButtonText: "No, cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},

	function(isConfirm){
		if (isConfirm) {
			
			$.ajax({
				type: "GET",
				url: "borrar_comentario.php?id_comentario="+comentario,
				success: function(data)
				{
					$('#TabComentario').html(data);					
					swal("Borrado!", "El comentario se ha eliminado exitosamente !.", "success");
				}
			});
		}
		else {
			swal("Cancelado", "El comentario esta a salvo :)", "error");
		}	

	});
}



/*----BORRAR UNA CONDICION ----*/
function BorrarCondicion(condicion){
	swal({
		title: "Estas seguro?",
		text: "Tu registro no se podra recuperar!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si, borrar esto!",
		cancelButtonText: "No, cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},

	function(isConfirm){
		if (isConfirm) {
			
			$.ajax({
				type: "GET",
				url: "borrar_condicion.php?id_condicion="+condicion,
				success: function(data)
				{
					$('#TabCondicion').html(data);				
					swal("Borrado!", "La condicion se ha eliminado exitosamente !.", "success");
				}
			});
		}
		else {
			swal("Cancelado", "La condicion esta a salvo :)", "error");
		}	

	});
}


/*----CREAR UNA CONDICION----*/
$("#formcondicion").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "AM_condicion.php",
		data:$("#formcondicion").serialize(), 
		//data 
		//serialize().Encode a set of form elements as a string for submission.
		success: function(data)
		{
			$(":text").val('');	
			swal("Hecho!", "La condicion se ha creado exitosamente !", "success")
			setTimeout(function() {
				window.location = "admin.php";
			}, 1500);	
		}

	});
	return false;
});

/*----EDITAR UNA CONDICION----*/
$("#formeditarcondicion").submit(function() 
{
	$.ajax({
		type: "POST",
		data:$("#formeditarcondicion").serialize(), 
		success: function(data)
		{
			swal("Hecho!", "La condicion se ha editado exitosamente !", "success")
				setTimeout(function() {
					window.location = "admin.php";
				}, 1500);
		}

	});
	return false;
});



/*---- BORRAR UN USUARIO ----*/
function BorrarUsuario(usuario){
	swal({
		title: "Estas seguro?",
		text: "Tu registro no se podra recuperar!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si, borrar esto!",
		cancelButtonText: "No, cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},

	function(isConfirm){
		if (isConfirm) {
			
			$.ajax({
				type: "GET",
				url: "borrar_usuario.php?id_usuario="+usuario,
				success: function(data)
				{
					$('#TabUsuario').html(data);				
					swal("Borrado!", "El usuario se ha eliminado exitosamente !.", "success");
				}
			});
		}
		else {
			swal("Cancelado", "El usuario esta a salvo :)", "error");
		}	

	});
}


/*---- EDITAR UN USUARIO (PROMOVER) ----*/
function PromoverUsuario(usuario){
	swal({
		title: "Estas seguro?",
		text: "Tu registro no se podra recuperar!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si!",
		cancelButtonText: "No, cancelar!",
		closeOnConfirm: false,
		closeOnCancel: false
	},

	function(isConfirm){
		if (isConfirm) {
			
			$.ajax({
				type: "GET",
				url: "editar_usuario.php?id_usuario="+usuario,
				success: function(data)
				{
					$('#TabUsuario').html(data);				
					swal("Hecho!", "El usuario tiene permisos de administrador !.", "success");
				}
			});
		}
		else {
			swal("Cancelado", "Los permisos del usuario no se han modificado :)", "error");
		}	

	});
}

