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
});

function PreviewImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("img1").files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview").src = oFREvent.target.result;
	};
};

function PreviewImage2() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("img2").files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview2").src = oFREvent.target.result;
	};
};
function PreviewImage3() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("img3").files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview3").src = oFREvent.target.result;
	};
};


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

