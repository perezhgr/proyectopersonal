function getDetalleCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "detalle_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
			{
				$('#contenidomodal').html(data);
			}});
}