/*----Crear una ciudad----
$("#formciudad").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "AM_ciudad.php",
		data:$("#formciudad").serialize(), 
		//data 
		//serialize().Encode a set of form elements as a string for submission.
		success: function(data)
		{
			$.ambiance({message: "La ciudad se ha insertado exitosamente!",
				title: "Hecho!",
				timeout: 1,
				type: "success"});
			$(":text").val('');			
			
		}

	});
	return false;
});

*/

/*----Editar una ciudad----

$("#formeditarciudad").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "AM_ciudad.php?id_ciudad="+3,
		data:$("#formeditarciudad").serialize(), 
		//data 
		//serialize().Encode a set of form elements as a string for submission.
		success: function(data)
		{
			$.ambiance({message: "La ciudad se ha editado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			$(":text").val('');			
			
		}

	});
	return false;
});
*/

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
			$.ambiance({message: "La condicion se ha insertado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			$(":text").val('');			
			
		}

	});
	return false;
});

/*----Editar una condicion----
$("#formeditarcondicion").submit('click',function EditarCondicion(condicion) 
{
	$.ajax({
		type: "GET",
		url: "AM_condicion.php?id_condicion="+condicion,
		data:$("#formeditarcondicion").serialize(), 
		//data 
		//serialize().Encode a set of form elements as a string for submission.
		success: function(data)
		{
			$.ambiance({message: "La condicion se ha editado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			//$(":text").val('');			
			
		}

	});
	return false;
});
*/

function EditarCondicion(condicion){
	$.ajax({
		type: "POST",
		url: "AM_condicion.php?id_condicion="+condicion,
		success: function(data)
		{		
			$.ambiance({message: "La condicion se ha editado exitosamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
		}});

}
