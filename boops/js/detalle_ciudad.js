function DetalleCiudad(ciudad,categoria){
	$.ajax({
		type: "GET",
		url: "detalle_ciudad.php?id_ciudad="+ciudad &"detalle_ciudad.php?id_categoria_padre="+categoria,
		success: function(data)
			{
				document.getElementById('detalle').innerHTML=data;
			}});
}