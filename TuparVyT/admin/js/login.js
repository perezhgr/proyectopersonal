$(document).ready(function() {
	
	$('#signin').click(function(){
		if($("#email").val().length < 1) {  
			$.ambiance({message: "El correo electrónico es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  

		var email =$("#email").val();
		var filter = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
				   
		if (!filter.test(email)) {
			$.ambiance({message: "El correo electrónico introducido no es correcto.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;
		}
		

		if($("#pass").val().length < 1) {  
			$.ambiance({message: "La contraseña es obligatoria",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 
	});
});

