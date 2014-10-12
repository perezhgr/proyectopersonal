$(document).ready(function() {
	
	$('#botoncrearciudad').click(function(){
		if($("#ciudad").val().length == 0) {  
			$.ambiance({message: "La ciudad es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#duracion").val().length < 1) {  
			$.ambiance({message: "La duracion del viaje es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length < 1) {  
			$.ambiance({message: "El precio del viaje es obligatorio.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});
});



$(document).ready(function() {
	
	$('#botoneditarciudad').click(function(){
		if($("#ciudad").val().length == 0) {  
			$.ambiance({message: "La ciudad es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#duracion").val().length < 1) {  
			$.ambiance({message: "La duracion del viaje es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length < 1) {  
			$.ambiance({message: "El precio del viaje es obligatorio.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});
});

