function getComentarioCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "comentario_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
			{
				$('#comentario').html(data);
			}});

}

