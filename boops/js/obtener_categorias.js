/*
function ObtenerCategorias(seccion){
	$.ajax({
		type: "POST",
		url: "obtenercategorias.php?id_seccion="+seccion,
		success: function(data)
			{
				document.getElementById('contenido').innerHTML=data;
			}});

}
*/


//function GetCategoria(pagina) {
//		$("#contenido").load(pagina);
//	}


function GetSubCategoria(categoria){
	$.ajax({
		type: "GET",
		url: "obtenercategorias.php?id_categoria_padre="+categoria,
		success: function(data)
			{
				document.getElementById('contenido').innerHTML=data;
			}});

}