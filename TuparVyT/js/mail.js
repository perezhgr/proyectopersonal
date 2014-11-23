$(document).ready(function() {
	//VALIDACIONES DE INPUTS EN EL FORMULARIO DE CONTACTO
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


$(document).ready(function() {
	//VERIFICA DE QUE SE ENVIO UN CORREO ELECTRONICO

	$("#FormMail").submit(function(){

		$.ajax({
			url: "controllers/controller_enviar_mail.php",
			type: "POST",
			dataType: 'JSON',
			data:$("#FormMail").serialize(),
			success: function(data) {

				if(data.respuesta_ajax == true){

					$.ambiance({message: "El mensaje ha sido enviado !",
						title: "Hecho!",
						timeout: 3,
						type: "success"});
					$(':input').val('');
					return false;  
					
				}
				else{
					$.ambiance({message: "Error al enviar mail",
						title: "Error !",
						timeout: 3,
						type: "error"});
					return false;  
					
				}
			}
		})
		return false;
	});
});
