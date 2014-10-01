function BorrarCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "borrar_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
		{	
			$('#TabCiudad').html(data);	
			$("#alerta").addClass("alert alert-success");
			$('#mensaje').html(" <strong>Hecho !</strong> La ciudad se ha borrado exitosamente");			
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





