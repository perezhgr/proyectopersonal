$(document).ready(function() {nombre
	
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

		if($("#mail").val().length < 1) {  
			$.ambiance({message: "El correo electrónico es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  

		var email =$("#mail").val();
		var filter = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

		if (!filter.test(email)) {
			$.ambiance({message: "El correo electrónico introducido no es correcto.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;
		}
		

		if($("#pass").val().length == 0)  {  
			$.ambiance({message: "La contraseña es obligatoria",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 

		if($("#pass").val().length < 5)  {  
			$.ambiance({message: "Contraseña insegura.<br>Debe contener mas de 5 caracteres.",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 


	});
});

