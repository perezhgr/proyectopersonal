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
		
		if (isNaN($('#precio').val())) {
			$.ambiance({message: "El precio debe ser numerico.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length == 0) {  
			$.ambiance({message: "El precio es obligatorio.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length < 4) {  
			$.ambiance({message: "El precio es barato para la ciudad !",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});

	$('#img1').click(function(){

		if (($("#img1").val().length > 0)){
			$('#btn1').addClass('btn btn-primary btn-file');
		}
		/*else if ($("#img1").val().length == 0){
			alert('no tiene imagen');
		}*/
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

		if (isNaN($('#precio').val())) {
			$.ambiance({message: "El precio debe ser numerico.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length == 0) {  
			$.ambiance({message: "El precio es obligatorio.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}

		if($("#precio").val().length < 4) {  
			$.ambiance({message: "El precio es barato para la ciudad !",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});
});

