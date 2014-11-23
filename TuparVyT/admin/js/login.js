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


		//ERRORES DE COMPARACION CON BD (LADO DEL SERVIDOR).

		$("#formlogin").submit(function(){

			$.ajax({
				url: "login.php",
				type: "POST",
				dataType: 'JSON',
				data:$("#formlogin").serialize(),
				success: function(data) {

					if(data.error_usuario == false){
						$.ambiance({message: "Error: Usuario inexistente.",
							title: "Error !",
							timeout: 3,
							type: "error"});
						return false;  
					}

					else if(data.error_admin == false){
						$.ambiance({message: "Error : Usuario sin permisos de administrador.",
							title: "Error !",
							timeout: 3,
							type: "error"});
						return false;  
					}	
					else if(data.error_pass == false){
						$.ambiance({message: "Error : Contraseña invalida.",
							title: "Error !",
							timeout: 3,
							type: "error"});
						return false;  
					}
					else if (data.respuesta_ajax = true){
						$(location).attr('href','admin.php');				
					}				
				}
			})
			return false;
		});


	});

