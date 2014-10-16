$("#formcrearcomentario").submit(function() 
{
	$.ajax({
		url: "GrabarComentario.php",
		type: "POST",
		data:$("#formcrearcomentario").serialize(), 
		success: function(data)
		{
			$('#comentario').html(data);
			$.ambiance({message: "Tu comentario se grabo correctamente!",
				title: "Hecho!",
				timeout: 2,
				type: "success"});	
		}

	});
	return false;
});

