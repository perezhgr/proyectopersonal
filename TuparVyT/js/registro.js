$(document).ready(function() {
	
	$('#registrarse').click(function(){

		if($("#nombre").val().length == 0 ) {  
			$.ambiance({message: "El nombre es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  

		if($("#nombre").val().length < 4 ) {  
			$.ambiance({message: "El nombre no es valido",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  

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

		if($("#password").val().length == 0)  {  
			$.ambiance({message: "La contraseña es obligatoria",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 

		if($("#password").val().length < 6)  {  
			$.ambiance({message: "Contraseña debil.Ingrese una nuevamente.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 


	});
});


