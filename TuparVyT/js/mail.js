$(document).ready(function() {
	
	$('#btnenviarmail').click(function(){

		if($("#asunto").val().length < 1) {  
			$.ambiance({message: "El asunto es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  		

		if($("#mensaje").val().length == 0)  {  
			$.ambiance({message: "El mensaje es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 

	});
});

