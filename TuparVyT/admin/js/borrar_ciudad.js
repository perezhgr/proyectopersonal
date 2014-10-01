function BorrarCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "borrar_ciudad.php?id_ciudad="+ciudad,
		success: function(data)
			{		
                alert("OK");
                $('#TabCiudad').html(data);
                $('#count').html(data);
                   
			}});

}

