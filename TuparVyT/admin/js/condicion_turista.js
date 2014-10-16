$(document).ready(function() {
	
	$('#btncrearcondicion').click(function(){
		if($("#condicion").val().length == 0) {  
			$.ambiance({message: "La condicion de viaje es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});
});

$(document).ready(function() {
	
	$('#btneditarcondicion').click(function(){
		if($("#condicion").val().length == 0) {  
			$.ambiance({message: "La condicion de viaje es obligatoria.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}
	});
});