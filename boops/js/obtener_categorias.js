function GetSubCategoria(categoria){
	$.ajax({
		type: "GET",
		url: "obtenercategorias.php?id_categoria_padre="+categoria,
		success: function(data)
			{
				document.getElementById('contenido').innerHTML=data;
			}});

}