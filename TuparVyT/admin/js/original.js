
function BorrarCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "borrar_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
		{	
			$('#TabCiudad').html(data);				
			$.ambiance({message: "La ciudad se ha borrado exitosamente!",
				title: "Hecho!",
				timeout: 1,
				type: "success"});
			
		}});
}

function ActualizarContadorCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "actualizar_contadores.php?id_ciudad="+ciudad,
		success: function(data)
		{		
			$('#count').html(data);
		}});

}





