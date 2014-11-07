$(document).ready(function() {
	
	//Errores de validacion (lado del cliente)

	$('#iniciar').click(function(){

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

	});


	//Errores de comparacion con BD (lado del servidor).

	$("#FormLogin").submit(function(){

		$.ajax({
			url: "index.php",
			type: "POST",
			dataType: 'JSON',
			data:$("#FormLogin").serialize(),
			success: function(data) {

				if(data.respuesta_ajax == false){
					$.ambiance({message: "Error al iniciar sesion.Verfique que mail / password sean correctos !",
						title: "Error !",
						timeout: 3,
						type: "error"});
					return false;  
				}
				else{
					$(location).attr('href','index.php');				
				}
			}
		})
		return false;
	});

});


