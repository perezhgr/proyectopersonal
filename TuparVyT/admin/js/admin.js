
/*----Borrar una ciudad----*/
function BorrarCiudad(ciudad){
	var x;
    if (confirm("Esta seguro que desea borrar la ciudad ?") == true) {
   
	$.ajax({
		type: "GET",
		url: "borrar_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
		{	
			$('#TabCiudad').html(data);
			$.ambiance({message: "La ciudad se ha eliminado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			
		}});
	}
}

/*----Crear una ciudad----*/

$('#formciudad').submit( function() {
    $.ajax( {
      url: "AM_ciudad.php",
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false
      
    } );
    $(":text").val('');
    $.ambiance({message: "La ciudad se ha creado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});						
    e.preventDefault();
  } );



/*----Editar una ciudad----*/

$("#formeditarciudad").submit(function() 
{
	$.ajax({
		type: "POST",
		data:$("#formeditarciudad").serialize(), 
		success: function(data)
		{
			$.ambiance({message: "La ciudad se ha editado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});	
		}

	});
	return false;
});


/*----Borrar un comentario (testimonio)----*/
function BorrarComentario(comentario){
	$.ajax({
		type: "GET",
		url: "borrar_comentario.php?id_comentario="+comentario,
		success: function(data)
		{	
			$('#TabComentario').html(data);
			$.ambiance({message: "El comentario se ha eliminado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			
		}});
}



/*----Borrar una condicion----*/
function BorrarCondicion(condicion){
	$.ajax({
		type: "GET",
		url: "borrar_condicion.php?id_condicion="+condicion,
		success: function(data)
		{	
			$('#TabCondicion').html(data);
			$.ambiance({message: "La condicion se ha eliminado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			
		}});
}



/*----Crear una condicion----*/
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
			$.ambiance({message: "La condicion se ha creado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			$(":text").val('');			
			
		}

	});
	return false;
});

/*----Editar una condicion----*/
$("#formeditarcondicion").submit(function() 
{
	$.ajax({
		type: "POST",
		data:$("#formeditarcondicion").serialize(), 
		success: function(data)
		{
			$.ambiance({message: "La condicion se ha editado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});	
		}

	});
	return false;
});



/*----Borrar un usuario ----*/
function BorrarUsuario(usuario){
	$.ajax({
		type: "GET",
		url: "borrar_usuario.php?id_usuario="+usuario,
		success: function(data)
		{	
			$('#TabUsuario').html(data);
			$.ambiance({message: "El usuario se ha eliminado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			
		}});
}

/*----Editar un usuario (Promover) ----*/
function PromoverUsuario(usuario){
	$.ajax({
		type: "GET",
		url: "editar_usuario.php?id_usuario="+usuario,
		success: function(data)
		{	
			$('#TabUsuario').html(data);
			$.ambiance({message: "El usuario tiene permisos de administrador !",
				title: "Hecho!",
				timeout: 3,
				type: "error"});
			
		}});
}

